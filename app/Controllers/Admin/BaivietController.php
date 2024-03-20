<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Post;
use App\SessionGuardAdmin as Guard;

class BaivietController extends Controller
{

    public function __construct()
    {
        if (!Guard::isAdminLoggedIn()) {
            redirect('/signin');
        }

        parent::__construct();
    }

    public function index()
    {
        $this->sendPage('admin/baiviet/index', [
            'posts' => Guard::admin()->posts
        ]);
    }
    public function create()
    {
        $this->sendPage('admin/baiviet/create', [
            'errors' => session_get_once('errors'),
            'old' => $this->getSavedFormValues(),
            'tenbv' => isset($_SESSION['form']['tenbv']) ? $_SESSION['form']['tenbv'] : '',
            'noidungbv' => isset($_SESSION['form']['noidungbv']) ? $_SESSION['form']['noidungbv'] : '',
            'hinhanhbv' => isset($_SESSION['form']['hinhanhbv']) ? $_SESSION['form']['hinhanhbv'] : null
        ]);
    }

    public function store()
    {
        // $file = $_FILES['hinhanhbv'];
        define("IMAGE_DIR", "C:/xampp/htdocs/project/public/images/baiviet/");
        $data = $this->filterPostData($_POST, $_FILES);
        $model_errors = Post::validate($data);
        if (empty($model_errors)) {
            $image_name = $data['hinhanhbv'];
            $image_path = IMAGE_DIR . $image_name;
            move_uploaded_file($_FILES['hinhanhbv']['tmp_name'], $image_path);
            $post = new Post();
            $post->fill($data);
            $post->user()->associate(Guard::admin());
            $post->save();
            redirect('/baiviet');
        }
        // Lưu các giá trị của form vào $_SESSION['form']
        $this->saveFormValues($_POST);
        // Lưu các thông báo lỗi vào $_SESSION['errors']
        redirect('/baiviet/add', ['errors' => $model_errors]);
    }
    protected function filterPostData(array $data, array $files)
    {
        return [
            'tenbv' => $data['tenbv'] ?? '',
            'noidungbv' => $data['noidungbv'] ?? '',
            'hinhanhbv' => basename($files['hinhanhbv']['name']) ?? '',
        ];
    }

    public function edit($postsId)
    {
        $posts = Guard::admin()->posts->find($postsId);
        if (!$posts) {
            $this->sendNotFound();
        }
        $form_values = $this->getSavedFormValues();
        $data = [
            'errors' => session_get_once('errors'),
            'post' => (!empty($form_values)) ?
                array_merge($form_values, ['id' => $posts->id]) :
                $posts->toArray()

        ];
        $this->sendPage('admin/baiviet/edit', $data);
    }
    public function update($postsId)
    {
        define("IMAGE_DIR", "C:/xampp/htdocs/project/public/images/baiviet/");
        $posts = Guard::admin()->posts->find($postsId);
        if (!$posts) {
            $this->sendNotFound();
        }
        $data = $this->filterPostData($_POST, $_FILES);
        $model_errors = Post::validate($data);
        if (empty($model_errors)) {
            $image_name = $data['hinhanhbv'];
            $image_path = IMAGE_DIR . $image_name;
            move_uploaded_file($_FILES['hinhanhbv']['tmp_name'], $image_path);
            $posts->fill($data);
            $posts->save();
            redirect('/baiviet');
        }
        $this->saveFormValues($_POST);
        redirect('/baiviet/edit/' . $postsId, [
            'errors' => $model_errors
        ]);
    }
    public function destroy($postsId)
    {
        $posts = Guard::admin()->posts->find($postsId);
        if (!$posts) {
            $this->sendNotFound();
        }
        $posts->delete();
        redirect('/baiviet');
    }
}

