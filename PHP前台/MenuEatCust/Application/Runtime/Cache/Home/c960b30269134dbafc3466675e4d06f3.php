<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>DeathGhost-我的购物车</title>
    <link href="/MenuEatCust/Public/style/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/MenuEatCust/Public/js/public.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jqpublic.js"></script>
    <!-- <script type="text/javascript" src="/MenuEatCust/Public/js/cart.js"></script>-->

</head>
<body>
<header>
    <section class="Topmenubg">
        <div class="Topnav">
            <div class="LeftNav">
                <a href="register.html">注册</a>/<a href="login.html">登录</a><a href="#">QQ客服</a><a href="#">微信客服</a><a
                    href="#">手机客户端</a>
            </div>
            <div class="RightNav">
                <a href="user_center.html">用户中心</a> <a href="user_orderlist.html" target="_blank" title="我的订单">我的订单</a>
                <a href="cart.html">购物车（0）</a> <a href="user_favorites.html" target="_blank" title="我的收藏">我的收藏</a> <a
                    href="#">商家入驻</a>
            </div>
        </div>
    </section>
    <div class="Logo_search">
        <div class="Logo">
            <img src="images/logo.jpg" title="DeathGhost" alt="模板">
            <i></i>
            <span>西安市 [ <a href="#">莲湖区</a> ]</span>
        </div>
        <div class="Search">
            <form method="get" id="main_a_serach" onsubmit="return check_search(this)">
                <div class="Search_nav" id="selectsearch">
                    <a href="javascript:;" onClick="selectsearch(this,'restaurant_name')" class="choose">餐厅</a>
                    <a href="javascript:;" onClick="selectsearch(this,'food_name')">食物名</a>
                </div>
                <div class="Search_area">
                    <input type="search" id="fkeyword" name="keyword" placeholder="请输入您所需查找的餐厅名称或食物名称..."
                           class="searchbox"/>
                    <input type="submit" class="searchbutton" value="搜 索"/>
                </div>
            </form>
            <p class="hotkeywords"><a href="#" title="酸辣土豆丝">酸辣土豆丝</a><a href="#" title="这里是产品名称">螃蟹炒年糕</a><a href="#"
                                                                                                              title="这里是产品名称">牛奶炖蛋</a><a
                    href="#" title="这里是产品名称">芝麻酱凉面</a><a href="#" title="这里是产品名称">滑蛋虾仁</a><a href="#" title="这里是产品名称">蒜汁茄子</a>
            </p>
        </div>
    </div>
    <nav class="menu_bg">
        <ul class="menu">
            <li><a href="index.html">首页</a></li>
            <li><a href="list.html">订餐</a></li>
            <li><a href="category.html">积分商城</a></li>
            <li><a href="article_read.html">关于我们</a></li>
        </ul>
    </nav>
</header>
<!--Start content-->
<form action="#">
    <div class="gwc" style=" margin:auto;">
        <table cellpadding="0" cellspacing="0" class="gwc_tb1">
            <tr>
                <td class="tb1_td1"><input id="checkbox1" type="hidden" class="allselect"/></td>
                <td class="tb1_td1" id="tb_state">全选</td>
                <td class="tb1_td3">商品</td>
                <td class="tb1_td4">原价</td>
                <td class="tb1_td5">数量</td>
                <td class="tb1_td6">小计</td>
                <td class="tb1_td7">操作</td>
            </tr>
        </table>

        <?php if(is_array($shopCar)): foreach($shopCar as $key=>$vo): ?><table cellpadding="0" cellspacing="0" class="gwc_tb2" id="table1">
                <tr>
                    <td colspan="7" class="shopname Font14 FontW">店铺：<?php echo ($vo["food"]["fs_name"]); ?></td>
                </tr>
                <tr>
                    <td class="tb2_td1"><input type="checkbox" value="<?php echo ($vo["food"]["f_id"]); ?>" name="newslist" id="newslist-1"
                                               class="newsList"/></td>
                    <td class="tb2_td2"><a href="detailsp.html" target="_blank"><img
                            src="/MenuEatCust/Public/upload/<?php echo ($vo["food"]["f_pic"]); ?>"/></a></td>
                    <td class="tb2_td3"><a href="detailsp.html" target="_blank"><?php echo ($vo["food"]["f_name"]); ?></a></td>
                    <td class="tb1_td4"><s id="price<?php echo ($vo["food"]["f_id"]); ?>"><?php echo ($vo["food"]["f_price"]); ?></s></td>
                    <td class="tb1_td5"><input id="min1" name="" style="width:30px; height:30px;border:1px solid #ccc;"
                                               type="button" value="-"/>
                        <input name="" type="text" value="<?php echo ($vo["number"]); ?>" id="num<?php echo ($vo["food"]["f_id"]); ?>"
                               style=" width:40px;height:28px; text-align:center; border:1px solid #ccc;" class="num"/>
                        <input id="add1" name="" style="width:30px; height:30px;border:1px solid #ccc;" type="button"
                               value="+"/>
                    </td>
                    <td class="tb1_td6"><label id="tuto<?php echo ($vo["food"]["f_id"]); ?>" class="tot"
                                               style="color:#ff5500;font-size:14px; font-weight:bold;"></label></td>
                    <td class="tb1_td7"><a href="#" id="delcart1">删除</a></td>
                </tr>
            </table>
            <script>
                $(function () {
                        var tuto = $("#tuto" + "<?php echo ($vo["food"]["f_id"]); ?>");
                        var price = $("#price" + "<?php echo ($vo["food"]["f_id"]); ?>").html();
                        var num = $("#num" + "<?php echo ($vo["food"]["f_id"]); ?>").val();
                        tuto.html(price * num);
                    }
                );
            </script><?php endforeach; endif; ?>


        <table cellpadding="0" cellspacing="0" class="gwc_tb3">
            <tr>
                <td class="tb1_td1"><input id="checkAll" class="allselect" type="checkbox"/></td>
                <td class="tb1_td1" id="tb1_td1">全选</td>
                <td class="tb3_td1"><input id="invert" type="hidden"/>
                    <input id="cancel" type="hidden"/>
                </td>
                <td class="tb3_td2 GoBack_Buy Font14"><a href="/MenuEatCust" target="_blank">继续购物</a></td>
                <td class="tb3_td2">已选商品
                    <label id="shuliang" style="color:#ff5500;font-size:14px; font-weight:bold;">0</label>
                    件
                </td>
                <td class="tb3_td3">合计(不含运费):<span>￥</span><span style=" color:#ff5500;">
        <label id="zong1" style="color:#ff5500;font-size:14px; font-weight:bold;">0.00</label>
        </span></td>
                <td class="tb3_td4"><a href="javaScript:void(0);"
                                       class="jz2" id="jz2">结算</a></td>
            </tr>
            <script>
                $(function () {
                    //全选
                    $("#checkAll").click(function () {
                        var newsList = $(".newsList");
                        if (!newsList.attr('checked')) {
                            newsList.attr('checked', true);
                            $("#tb1_td1").html("取消");
                            $("#tb_state").html("取消");
                            measurePrice();
                        } else {
                            newsList.attr('checked', false);
                            $("#tb1_td1").html("全选");
                            $("#tb_state").html("全选");
                            var zong1 = $("#zong1");
                            zong1.html("0.00");
                        }
                        var cbstate = $("#checkAll").attr('checked');
                        var ckstate = $("#checkbox1").attr('checked');
                        if (!ckstate && cbstate) {
                            $("#checkbox1").attr('checked', cbstate);
                        }
                    });


                    //结算
                    $("#jz2").click(function () {
                        var newsL = $(".newsList");
                        var num = $(".num");
                        var data = null;
                        var k = 0;

                        for (var i = 0; i < newsL.length; i++) {
                            if (newsL.get(i).checked) {
                                var item = $(newsL.get(i));
                                var nums = $(num.get(i)).val();
                                var id = item.val();
                                data[k] = id + "," + nums;
                                k++;
                            }
                        }
                        alert(data);
                    });

                });
                function measurePrice() {

                    var tot = $(".tot");
                    var allPrice = 0.00;
                    for (var i = 0; i < tot.length; i++) {
                        var totPrice = $(tot.get(i)).html();
                        totPrice = parseFloat(totPrice);
                        allPrice += totPrice;
                    }
                    var zong1 = $("#zong1");
                    zong1.html(allPrice);
                }
            </script>


        </table>
    </div>
</form>
<!--End content-->
<div class="F-link">
    <span>友情链接：</span>
    <a href="http://www.deathghost.cn" target="_blank" title="DeathGhost">DeathGhost</a>
    <a href="http://www.17sucai.com/pins/15966.html" target="_blank" title="免费后台管理模板">绿色清爽版通用型后台管理模板免费下载</a>
    <a href="http://www.17sucai.com/pins/17567.html" target="_blank" title="果蔬菜类模板源码">HTML5果蔬菜类模板源码</a>
    <a href="http://www.17sucai.com/pins/14931.html" target="_blank" title="黑色的cms商城网站后台管理模板">黑色的cms商城网站后台管理模板</a>
</div>
<footer>
    <section class="Otherlink">
        <aside>
            <div class="ewm-left">
                <p>手机扫描二维码：</p>
                <img src="images/Android_ico_d.gif">
                <img src="images/iphone_ico_d.gif">
            </div>
            <div class="tips">
                <p>客服热线</p>
                <p><i>1830927**73</i></p>
                <p>配送时间</p>
                <p>
                    <time>09：00</time>
                    ~
                    <time>22:00</time>
                </p>
                <p>网站公告</p>
            </div>
        </aside>
        <section>
            <div>
                <span><i class="i1"></i>配送支付</span>
                <ul>
                    <li><a href="article_read.html" target="_blank" title="标题">支付方式</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">配送方式</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">配送效率</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">服务费用</a></li>
                </ul>
            </div>
            <div>
                <span><i class="i2"></i>关于我们</span>
                <ul>
                    <li><a href="article_read.html" target="_blank" title="标题">招贤纳士</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">网站介绍</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">配送效率</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">商家加盟</a></li>
                </ul>
            </div>
            <div>
                <span><i class="i3"></i>帮助中心</span>
                <ul>
                    <li><a href="article_read.html" target="_blank" title="标题">服务内容</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">服务介绍</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">常见问题</a></li>
                    <li><a href="article_read.html" target="_blank" title="标题">网站地图</a></li>
                </ul>
            </div>
        </section>
    </section>
    <div class="copyright">© 版权所有 2016 DeathGhost 技术支持：<a href="http://www.deathghost.cn"
                                                          title="DeathGhost">DeathGhost</a></div>
</footer>
</body>
</html>