<?php

namespace App\Controllers;

use App\Models\Post;
use App\SessionGuard as Guard;
use App\Models\Review;

class BlogDetailController extends Controller
{

    public function index($postId)
    {
        $post = Post::find($postId);
        if (!$post) {
            $this->sendNotFound();
        }
        $form_values = $this->getSavedFormValues();
        $data = [
            'errors' => session_get_once('errors'),
            'post' => (!empty($form_values)) ?
                array_merge($form_values, ['id' => $post->id]) :
                $post->toArray(),
            'reviews' => $post->reviews
        ];
        // die(print_r($post, true));
        $this->sendPage('blog-detail', $data);
    }
    protected function filterReviewData(array $data)
    {
        return [
            'id_khachhang' => $data['user_id'],
            'id_baiviet' => $data['post_id'],
            'danhgia' => $data['danhgia'] ?? '',
        ];
    }
    public function store()
    {

        $data = $this->filterReviewData($_POST);
        $id = $data['id_baiviet'];
        $model_errors = Review::validate($data);

        if (empty($model_errors)) {
            $review = new Review();
            $review->fill($data);
            $review->user()->associate(Guard::user());
            $review->save();

            redirect('/blog-detail/' . $id);
        }
        // Lưu các giá trị của form vào $_SESSION['form']
        $this->saveFormValues($_POST);
        // Lưu các thông báo lỗi vào $_SESSION['errors']
        redirect('/blog-detail/' . $id, ['errors' => $model_errors]);
    }
}
