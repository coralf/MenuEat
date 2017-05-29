<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //bannner数据
        $mFoods=M("foods");
        $dataBanner= $mFoods->where(['F_STATE'=>'1','F_BANNER'=>'1'])->limit(3)->select();
        $this->assign("dataBanner",$dataBanner);

        //服务区域
        $mArea=M("area");
        $dataArea=$mArea->limit(13)->select();
        $this->assign("dataArea",$dataArea);

        //推荐菜品
        $dataFoodsRecommed= $mRecommd = $mFoods->where(['F_STATE'=>'1','F_RECOMMED'=>'1'])->limit(3)->select();
        $this->assign("dataFoodsRecommed",$dataFoodsRecommed);

        //推荐店家
        $mFoodsStore= M("food_store");
        $dateFoodsStore= $mFoodsStore->where(['FS_INDEX'=>'1'])->limit(5)->select();
        $this->assign("dateFoodsStore",$dateFoodsStore);

        //最新好评推送
        $mFUDes= M("foods_cust_des");
        $dataFUDes= $mFUDes->where(['F_U_NICE'=>'1'])->limit(2)->select();
        $this->assign("dataFUDes",$dataFUDes);
        $this->display("/index");
    }
}