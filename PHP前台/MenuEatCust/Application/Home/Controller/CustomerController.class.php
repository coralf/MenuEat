<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2017/5/15
 * Time: 9:09
 */

namespace Home\Controller;


use Think\Controller;
use Think\Exception;
use Think\Verify;

class CustomerController extends Controller
{


    public function toRegister()
    {
        $this->display("/register");
    }

    public function toLogin()
    {
        $this->display("/login");
    }


    public function register()
    {
        $code = I("post.code");
        $verify = new Verify();
        if (!$verify->check($code)) {
            echo "验证码错误";
            return;
        }

        //向用户表中插入数据
        $cUUID = uniqid();
        $data['C_ID'] = $cUUID;
        $data['C_USERNAME'] = I("post.username");
        $data['C_PASSWORD'] = I("post.password");
        $data['C_EMAIL'] = I("post.email");
        $data['C_PHONE'] = I("post.telephone");
        $mCustomer = M("customer");
        $mCustomer->add($data);

        //向用户详细信息表中插入数据
        $mCDetail = M('customer_detail');
        $mCDetail->add(['CD_ID' => uniqid(), 'C_ID' => $cUUID]);
        echo 'ok';
    }

    public function captcha()
    {
        $verify = new Verify(['useNoise' => false, 'useCurve ' => false]);
        $verify->entry();
    }


    public function registerSuccess()
    {
        $this->assign('msg', '注册成功&nbsp;&nbsp;&nbsp;<a href="/MenuEatCust/home/customer/toLogin">点我去登录</a>');
        $this->display('/respond');
    }


    public function login()
    {
        $code = I('post.code');

        if ($code == null || $code == '') {
            echo '验证码错误';
            return;
        }

        $verify = new Verify();
        if (!$verify->check($code)) {
            echo '验证码错误';
            return;
        }
        $username = I('post.username');
        $password = I('post.password');
        try {
            //验证账号密码
            $mCustomer = M('customer');
            $user = $mCustomer->where(['C_USERNAME' => $username, 'C_PASSWORD' => $password])->find();
            if ($user == null) {
                echo "用户名或密码错误";
                return;
            } else {
                session('user', $user);
                echo "ok";
            }
        } catch (Exception $e) {
            echo "用户名或密码错误";
        }
    }

    //用户中心
    public function userCenter()
    {
        $user = session('user');
        if ($user == null) {
            $this->redirect("/");
        } else {
            //积分
            $cId = $user['c_id'];
            $mUserDetail = M("customer_detail");
            $dataUserDetail = $mUserDetail->where(['C_ID' => $cId])->find();
            $this->assign('dataUserDetail', $dataUserDetail);

            //用户优惠劵
            $mCfC = M('cust_free_card');
            $cfcCount = $mCfC->where(['C_ID' => $cId])->count();
            $this->assign('cfcCount', $cfcCount);


            //订单状态
            //0:表示待付款
            $waitPay = 0;
            //1:表示待发货
            $waitSend = 0;
            //2:表示待收货
            $waitRecevie = 0;
            //3:表示待评价
            $waitDes = 0;


            $mOrderForm = M('order_form');
            $waitPay = $mOrderForm->where(['C_ID' => $cId, 'OF_STATE' => 0])->count();
            $this->assign('waitPay', $waitPay);

            $waitSend = $mOrderForm->where(['C_ID' => $cId, 'OF_STATE' => 1])->count();
            $this->assign('waitSend', $waitSend);

            $waitRecevie = $mOrderForm->where(['C_ID' => $cId, 'OF_STATE' => 2])->count();
            $this->assign('waitRecevie', $waitRecevie);

            $waitDes = $mOrderForm->where(['C_ID' => $cId, 'OF_STATE' => 3])->count();
            $this->assign('waitDes', $waitDes);


            //用户信息
            $mCustomer= M('customer');
            $dataCustomer= $mCustomer->where(['C_ID'=>$cId])->find();
            $this->assign('dataCustomer',$dataCustomer);
            $this->display('/user_center');
        }


    }


    //收货地址管理
    public function UserLoal()
    {
        $user = session('user');
        $cId = $user['c_id'];
        //根据收货地址查询用户收货地址
        $mCustomerLocal = M('customer_local');
        $dataCustomerLocal = $mCustomerLocal->where(['C_ID' => $cId])->select();
        $this->assign('dataCustomerLocal', $dataCustomerLocal);
        $this->display('/user_address');
    }


    //我的评论
    public function userMessage()
    {
        $user = session('user');
        $cId = $user['c_id'];
        $mFcd = M('foods_cust_des');
        $dataFcd = $mFcd->where(['C_ID' => $cId])->limit(5)->select();
        $this->assign('dataFcd', $dataFcd);
        $this->display('/user_message');
    }


    //我的优惠卷
    public function userCoupon()
    {
        $user = session('user');
        $cId = $user['c_id'];
        $mCfc = M('cust_free_card');
        $dataCfc = $mCfc->where(['C_ID' => $cId])->select();
        $this->assign('dataCfc', $dataCfc);
        $this->display('/user_coupon');
    }


    //我的收藏
    public function userFavorites()
    {
        $user = session('user');
        $cId = $user['c_id'];
        $mCcollect = M('customer_collect');
        $dataCollect = $mCcollect->where(['C_ID' => $cId])->select();
        $this->assign('dataCollect', $dataCollect);
        $this->display('/user_favorites');
    }


    //账户管理
    public function userAccount()
    {
        $user = session('user');
        $cId = $user['c_id'];
        $mCustomer = M('customer');
        $dataCustomer = $mCustomer->where(['C_ID' => $cId])->find();
        $this->assign('dataCustomer', $dataCustomer);
        $this->display('/user_account');
    }


    //安全退出
    public function userExit()
    {
        $user = session('user');
        if ($user != null) {
            session('user', null);
        }
        $this->redirect('/');
    }


    public function updateCust()
    {

        $upload = new \Think\Upload();
        $upload->maxSize = 31457280;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = './Public/';
        $upload->savePath = 'upload/';
        $upload->saveName = time() . '_' . mt_rand();
        $upload->autoSub = false;
        $info = $upload->upload();
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
            $this->redirect('/home/customer/userAccount');
            return;
        } else {
            $user = session('user');
            $cId = $user['c_id'];
            $data['C_PIC'] = $info['icon']['savename'];
            $data['C_NIKENAME'] = I("post.c_nikename");
            $data['C_EMAIL'] = I("post.c_email");
            $data['C_PHONE'] = I("post.c_phone");
            $mCustomer = M('customer');
            $mCustomer->where(['C_ID' => $cId])->save($data);
            $this->redirect('/home/customer/userCenter');
        }
    }

}