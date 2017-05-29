<?php

namespace Home\Controller;

use Think\Controller;

class ShopCarController extends Controller
{
    public function addShopCar()
    {
        //foods表的id
        $id = I("post.id");
        //数量
        $number = I("post.number");

        //查数据库
        $mFoods = M("foods");
        $dataFoods = $mFoods->where(['F_ID' => $id])->find();


        //小计
        $price = $dataFoods['F_PRICE'];


        //session
        $shopCar = session('shopCar');
        if ($shopCar == null || count($shopCar) <= 0) {
            $shopCar = array();
            $shopCar[$id] = array('food' => $dataFoods, 'number' => $number);
        } else {
            $food = $shopCar[$id];
            if ($food == null) {
                $shopCar[$id] = array('food' => $dataFoods, 'number' => $number);
            } else {
                $shopCar[$id]['number'] += $number;
            }
        }

        session('shopCar', $shopCar);
        $this->assign('shopCar', session('shopCar'));
        $this->display("/cart");
    }



}


