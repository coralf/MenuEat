<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>店铺</title>
    <link href="/MenuEatCust/Public/style/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/MenuEatCust/Public/js/public.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jqpublic.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/cart.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jquery.easyui.min.js"></script>


</head>
<body>
<header>
    <section class="Topmenubg">
        <div class="Topnav">
            <div class="LeftNav">
                <a href="/MenuEatCust/home/Customer/toRegister">注册</a>/
                <?php if(empty($_SESSION['user'])): ?><a href="/MenuEatCust/home/Customer/toLogin">登录</a><?php endif; ?>
                <?php if(!empty($_SESSION['user'])): ?><span>已登录</span><?php endif; ?>
                <a href="#">QQ客服</a><a href="#">微信客服</a><a
                    href="#">手机客户端</a>
            </div>
            <div class="RightNav">
                <?php if(!empty($_SESSION['user'])): ?><a href="/MenuEatCust/home/Customer/userCenter">用户中心</a>
                    <a href="/MenuEatCust/home/Customer/orderlist" target="_blank" title="我的订单">我的订单</a><?php endif; ?>
                <a href="../Application/Home/View/cart.html">购物车</a>
                <?php if(!empty($_SESSION['user'])): ?><a href="../Application/Home/View/user_favorites.html" target="_blank" title="我的收藏">我的收藏</a><?php endif; ?>
                <a href="#">商家入驻</a>
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
            <li><a href="../Application/Home/View/index.html">首页</a></li>
            <li><a href="../Application/Home/View/list.html">订餐</a></li>
            <li><a href="../Application/Home/View/category.html">积分商城</a></li>
            <li><a href="../Application/Home/View/article_read.html">关于我们</a></li>
        </ul>
    </nav>
</header>
<!--Start content-->
<section class="Shop-index">
    <article>
        <div class="shopinfor">
            <div class="title">
                <img src="/MenuEatCust/Public/upload/<?php echo ($dataFoodStore["fs_pic"]); ?>" class="shop-ico">
                <span><?php echo ($dataFoodStore["fs_name"]); ?></span>
                <span>
        <?php $__FOR_START_32593__=0;$__FOR_END_32593__=$dataFoodStore["fs_score"];for($i=$__FOR_START_32593__;$i < $__FOR_END_32593__;$i+=1){ ?><img src="/MenuEatCust/Public/images/star-on.png"><?php } ?>
        <?php $__FOR_START_5046__=0;$__FOR_END_5046__=$score-$dataFoodStore['fs_score'];for($i=$__FOR_START_5046__;$i < $__FOR_END_5046__;$i+=1){ ?><img src="/MenuEatCust/Public/images/star-off.png"><?php } ?>
    </span>
                <span><?php echo ($dataFoodStore["fs_score"]); ?></span>
            </div>
            <div class="imginfor">
                <div class="shopimg">
                    <img src="/MenuEatCust/Public/upload/<?php echo ($dataFoodStore["fs_pic"]); ?>" id="showimg">
                    <ul class="smallpic">
                        <li><img src="/MenuEatCust/Public/upload/<?php echo ($dataFoodStore["fs_pic"]); ?>" onmouseover="show(this)"
                                 onmouseout="hide()"></li>
                    </ul>
                </div>
                <div class="shoptext">
                    <p><span>地址：</span><?php echo ($dataFoodStore["fs_local"]); ?></p>
                    <p><span>电话：</span><?php echo ($dataFoodStore["fs_tel"]); ?></p>
                    <!--<p><span>特色菜品：</span>毛肚、牛丸、滑虾、羊肉、香辣虾...</p>-->
                    <p><span>优惠活动：</span><?php echo ($dataFoodStore["fs_des"]); ?></p>
                    <!--  <p><span>停车位：</span>4个停车位（免费）</p>-->
                    <p><span>营业时间：</span><?php echo ($dataFoodStore["fs_service_time"]); ?></p>
                    <!--   <p><span>WIFI：</span>免费WIFI</p>-->
                    <!--  <p><span>价格：</span>50元</p>-->
                    <div class="Button">
                        <a href="#ydwm"><span class="DCbutton">查看菜谱点菜</span></a>
                    </div>
                    <div class="otherinfor">
                        <a href="#" class="icoa"><img src="/MenuEatCust/Public/images/collect.png">收藏店铺（<?php echo ($dataCollectCount); ?>）</a>
                        <div class="bshare-custom"><a title="分享"
                                                      class="bshare-more bshare-more-icon more-style-addthis">分享</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shopcontent">
                <div class="title2 cf">
                    <ul class="title-list fr cf ">
                        <li class="on">菜谱</li>
                        <li>商家详情</li>
                        <p><b></b></p>
                    </ul>
                </div>
                <div class="menutab-wrap">
                    <a name="ydwm">
                        <!--case1-->
                        <div class="menutab show">
                            <ul class="products">
                                <?php if(is_array($dataFoods)): $i = 0; $__LIST__ = $dataFoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><li>
                                        <a href="/MenuEatCust/home/Foods/detail/id/<?php echo ($i["f_id"]); ?>" target="_blank"
                                           title="<?php echo ($i["f_name"]); ?>">
                                            <img src="/MenuEatCust/Public/upload/<?php echo ($i["f_pic"]); ?>" class="foodsimgsize">
                                        </a>
                                        <a href="/MenuEatCust/home/Foods/detail/id/<?php echo ($i["f_id"]); ?>" class="item">
                                            <div>
                                                <p><?php echo ($i["f_name"]); ?></p>
                                                <p class="AButton">￥<?php echo ($i["f_price"]); ?></p>
                                            </div>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <div class="TurnPage">
                                <a href="#">
                                    <span class="Prev"><i></i>首页</span>
                                </a>
                                <a href="#"><span class="PNumber">1</span></a>
                                <a href="#"><span class="PNumber">2</span></a>
                                <a href="#">
                                    <span class="Next">最后一页<i></i></span>
                                </a>
                            </div>
                        </div>
                    </a>
                    <!--case4-->
                    <div class="menutab">
                        <div class="shopdetails">
                            <div class="shopmaparea">
                                <img src="/MenuEatCust/Public/upload/testimg.jpg"><!--此处占位图调用动态地图后将其删除即可-->
                            </div>
                            <div class="shopdetailsT">
                                <p><span>店铺：<?php echo ($dataFoodStore["fs_name"]); ?></span></p>
                                <p><span>地址：</span><?php echo ($dataFoodStore["fs_local"]); ?></p>
                                <p><span>电话：</span><?php echo ($dataFoodStore["fs_tel"]); ?></p>
                                <p><span>乘车路线：</span><?php echo ($dataFoodStore["fs_way"]); ?></p>
                                <p><span>店铺介绍：</span><?php echo ($dataFoodStore["fs_history"]); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <aside>
        <div class="Nearshop">
            <span class="Nstitle">附近其他店铺</span>
            <ul>
                <li>
                    <img src="/MenuEatCust/Public/upload/cc.jpg">
                    <p>
                        <span class="shopname" title="动态调用完整标题"><a href="detailsp.html" target="_blank"
                                                                   title="肯德基">肯德基</a></span>
                        <span class="Discolor">距离：1.2KM</span>
                        <span title="完整地址title">地址：西安市雁塔区2000号...</span>
                    </p>
                </li>
            </ul>
        </div>
        <div class="History">
            <span class="Htitle">浏览历史</span>
            <ul>
                <li>
                    <a href="detailsp.html" target="_blank" title="清真川菜馆"><img src="/MenuEatCust/Public/upload/cc.jpg"></a>
                    <p>
                        <span class="shopname" title="动态调用完整标题"><a href="detailsp.html" target="_blank" title="正宗陕北小吃城">正宗陕北小吃城</a></span>
                        <span>西安市莲湖区土门十西安市莲湖区土门十字西安市莲湖区土门十字.</span>
                    </p>
                </li>
                <span>[ <a href="#">清空历史记录</a> ]</span>
            </ul>
        </div>
    </aside>
</section>
<!--End content-->
<div class="F-link">
    <span>友情链接：</span>
</div>
<footer>
    <section class="Otherlink">
        <aside>
            <div class="ewm-left">
                <p>手机扫描二维码：</p>
                <img src="/MenuEatCust/Public/images/Android_ico_d.gif">
                <img src="/MenuEatCust/Public/images/iphone_ico_d.gif">
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

<script>
    $(function () {
        $('.title-list li').click(function () {
            var liindex = $('.title-list li').index(this);
            $(this).addClass('on').siblings().removeClass('on');
            $('.menutab-wrap div.menutab').eq(liindex).fadeIn(150).siblings('div.menutab').hide();
            var liWidth = $('.title-list li').width();
            $('.shopcontent .title-list p').stop(false, true).animate({'left': liindex * liWidth + 'px'}, 300);
        });

        $('.menutab-wrap .menutab li').hover(function () {
            $(this).css("border-color", "#ff6600");
            $(this).find('p > a').css('color', '#ff6600');
        }, function () {
            $(this).css("border-color", "#fafafa");
            $(this).find('p > a').css('color', '#666666');
        });
    });
    var mt = 0;
    window.onload = function () {
        var Topcart = document.getElementById("Topcart");
        var mt = Topcart.offsetTop;
        window.onscroll = function () {
            var t = document.documentElement.scrollTop || document.body.scrollTop;
            if (t > mt) {
                Topcart.style.position = "fixed";
                Topcart.style.margin = "";
                Topcart.style.top = "200px";
                Topcart.style.right = "191px";
                Topcart.style.boxShadow = "0px 0px 20px 5px #cccccc";
                Topcart.style.top = "0";
                Topcart.style.border = "1px #636363 solid";
            }
            else {
                Topcart.style.position = "static";
                Topcart.style.boxShadow = "none";
                Topcart.style.border = "";
            }
        }
    }
</script>
</body>
</html>