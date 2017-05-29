<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2017/5/17
 * Time: 11:19
 */

namespace Home\Controller;


use Think\Controller;

class CustLocalController extends Controller
{


    /*
     * 修改用户地址
     * */
    public function updateUserLocal()
    {
        $user = session('user');
        $cId = $user['c_id'];
        $data['UL_PRIVENCE'] = I('post.ul_privence');
        $data['UL_CITY'] = I('post.ul_city');
        $data['UL_AREA'] = I('post.ul_area');
        $data['UL_NAME'] = I('post.ul_name');
        $data['UL_STREE_LOCAL'] = I('post.ul_stree_local');
        $data['UL_POST_NUM'] = I('post.ul_post_num');
        $data['UL_PHONE'] = I('post.ul_phone');
        $mCustomerLocal = M('customer_local');
        $mCustomerLocal->where(['C_ID' => $cId])->save($data);
        $this->redirect('/home/Customer/UserLoal');
    }


    //删除用户地址
    public function deleteUserLocal($id)
    {
        $mCustomerLocal = M('customer_local');
        $mCustomerLocal->delete($id);
        $this->redirect('/home/Customer/userCenter');
    }


    public function addUserLocal()
    {
        $user = session('user');
        $data['UL_ID']=uniqid();
        $data['C_ID'] = $user['c_id'];
        $data['UL_PRIVENCE'] = I('post.ul_privence');
        $data['UL_CITY'] = I('post.ul_city');
        $data['UL_AREA'] = I('post.ul_area');
        $data['UL_NAME'] = I('post.ul_name');
        $data['UL_STREE_LOCAL'] = I('post.ul_stree_local');
        $data['UL_POST_NUM'] = I('post.ul_post_num');
        $data['UL_PHONE'] = I('post.ul_phone');


        $mCustomerLocal = M('customer_local');
        $mCustomerLocal->add($data);
        $this->redirect('/home/Customer/UserLoal');
    }

}