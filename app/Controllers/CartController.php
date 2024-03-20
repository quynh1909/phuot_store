<?php

namespace App\Controllers;
use App\Models\User;
use App\SessionGuard as Guard;
use App\Models\Order;

class CartController extends Controller
{
    public function index($userId)
    {
        // die(print_r($orderId, true));
        $user = User::find($userId);
        if (!$user) {
            $this->sendNotFound();
        }
        $form_values = $this->getSavedFormValues();
        $orders = $user->orders;
        $cartItems = [
            'errors' => session_get_once('errors'),
            'orders' => (!empty($form_values)) ?
                array_merge($form_values, ['id' => $orders->id]) :
                $orders->toArray(),

            
        ];
        // die(print_r($cartItems, true));
        $this->sendPage('cart', $cartItems);
    }

    protected function filterCartData(array $data)
    {
        // die(print_r($data, true));
        return [
            'id_sanpham' => $data['id_sanpham'],
            'soluong' => $data['soluong'] ?? '',
            'tongtien' => $data['tongtien'] ?? '',
            'id_khachhang' => $data['id_khachhang'] ?? '',
        ];
    }
    public function thanhToan()
    {
        $data = $this->filterCartData($_POST);
        $order = new Order();
        $order->fill($data);
        $order->user()->associate(Guard::user());
        $order->save();

        // Lưu thông báo thành công vào session
        $_SESSION['success_message'] = 'Đã thanh toán thành công!';

        // Chuyển hướng về trang cart để hiển thị thông tin đơn hàng
        redirect('/cart/' . $order->id_khachhang);
    }

}
