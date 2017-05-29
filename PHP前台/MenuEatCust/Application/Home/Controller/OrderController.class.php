<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2017/5/17
 * Time: 9:29
 */

namespace Home\Controller;


use Think\Controller;

class OrderController extends Controller
{

    public function userOrder()
    {
        $user = session('user');
        $cId = $user['c_id'];
        $mOrderForm = M('order_form');
        $dataOrderForm = $mOrderForm->where(['C_ID' => $cId])->limit(10)->select();
        $this->assign('dataOrderForm', $dataOrderForm);
        $this->display('/user_orderlist');
    }


}