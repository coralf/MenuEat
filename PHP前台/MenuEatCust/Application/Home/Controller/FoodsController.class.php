<?php

namespace Home\Controller;

use Think\Controller;

class FoodsController extends Controller
{

    public function detail($id)
    {
        //查询相应的数据表
        $mFood = M("foods");
        $dataFood = $mFood->where(['F_ID' => $id])->find();
        //查询月销量
        $mSH = M("foods_sale_history");
        $currentTime = time();
        $beforeTime = $currentTime - 30 * 24 * 60 * 60;
        $fDate = date("Y-m-d H:i:s", $beforeTime);
        $map['F_ID'] = array(array('eq', $id));
        $map['FSH_SALE_TIME'] = array(array('gt', $fDate));
        $dataMonthCount = $mSH->where($map)->count("*");
        $this->assign("dataF", $dataFood);
        $this->assign("dataMonthCount", $dataMonthCount);


        //积分
        $mAn = M("accumulate_num");
        $dataAn = $mAn->where(['F_ID' => $id])->find();
        $this->assign("dataAn", $dataAn);

        //评价
        $mCds = M("foods_cust_des");
        $dataCustFoodDes = $mCds->where(['F_ID' => $id])->limit(3)->select();
        $this->assign("dataCustFoodDes", $dataCustFoodDes);
        //存入累计评价量
        $allDesCount = 0;
        $allDesCount = count($mCds);

        $this->assign("allDesCount", $allDesCount);
        $this->display("/detailsp");


        //var_dump($dataFood);
    }


    public function toStore($id)
    {

        //商店
        $mFoodStore = M('food_store');
        $dataFoodStore = $mFoodStore->where(['FS_ID' => $id])->find();


        //收藏记录
        $mCollect = M('customer_collect');
        $dataCollectCount = $mCollect->where(['FS_ID' => $id])->count();
        //菜品
        $fsId = $dataFoodStore['fs_id'];
        $mFoods = M('foods');
        $dataFoods = $mFoods->where(['FS_ID' => $fsId])->limit(4)->select();
        $this->assign('score', 5);
        $this->assign('dataCollectCount', $dataCollectCount);
        $this->assign('dataFoods', $dataFoods);
        $this->assign('dataFoodStore', $dataFoodStore);
        $this->display('/shop');


    }


    /**
     *
     * 添加收藏
     */
    public function addCollect($id)
    {
        $ccId = uniqid();
        $user = session('user');
        $cId = $user['c_id'];
        //查询商店记录
        $mFoodStore = M('food_store');
        $dataFoodStore = $mFoodStore->where(['FS_ID' => $id])->find();
        if ($dataFoodStore != null) {
            $mCustCollect = M('customer_collect');
            $mCustCollect->add(['CC_ID' => $ccId, 'C_ID' => $cId, 'FS_ID' => $id, 'CC_FS_NAME', $dataFoodStore['FS_NAME'], 'CC_FS_IMG', $dataFoodStore['FS_PIC']]);
        }
        $this->toStore($id);
    }
}