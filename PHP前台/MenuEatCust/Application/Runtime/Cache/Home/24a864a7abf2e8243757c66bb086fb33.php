<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>酸辣土豆丝 - DeathGhost</title>
    <link href="/MenuEatCust/Public/style/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/MenuEatCust/Public/js/public.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jqpublic.js"></script>
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
    </script>
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
<section class="slp">
    <section class="food-hd">
        <div class="foodpic">
            <img src="/MenuEatCust/Public/upload/<?php echo ($dataF["f_pic"]); ?>" id="showimg">
            <ul class="smallpic">
                <li><img src="/MenuEatCust/Public/upload/<?php echo ($dataF["f_pic"]); ?>" onmouseover="show(this)" onmouseout="hide()"></li>
            </ul>
        </div>
        <div class="foodtext">
            <div class="foodname_a">
                <h1><?php echo ($dataF["f_name"]); ?></h1>
                <p><?php echo ($dataF["f_location"]); ?></p>
            </div>
            <div class="price_a">
                <?php if(!empty($dataF["f_discount_price"])): ?><p class="price01">促销：￥<span><?php echo ($dataF["f_discount_price"]); ?></span></p><?php endif; ?>
                <p class="price02">价格：￥<s><?php echo ($dataF["f_price"]); ?></s></p>
            </div>
            <div class="Freight">
                <span>配送费用：</span>
                <span><i>未央区</i>至<i>莲湖区</i></span>
                <span>10.00</span>
            </div>
            <ul class="Tran_infor">
                <li>
                    <p class="Numerical"><?php echo ($dataMonthCount); ?></p>
                    <p>月销量</p>
                </li>
                <li class="line">
                    <p class="Numerical"><?php echo ($allDesCount); ?></p>
                    <p>累计评价</p>
                </li>
                <li>
                    <p class="Numerical"><?php echo ($dataAn["an_num"]); ?></p>
                    <p>送幸福积分</p>
                </li>
            </ul>
            <form action="/MenuEatCust/index.php/home/ShopCar/addShopCar" method="post">
                <div class="BuyNo">
                    <span>我要买：<input type="number" name="number" required autofocus min="1" value="1"/>份</span>
                    <span>库存：3258</span>
                    <div class="Buybutton">
                        <input name="" type="submit" value="加入购物车" class="BuyB">
                        <input type="hidden" value="<?php echo ($dataF["f_id"]); ?>" name="id">
                        <a href="/MenuEatCust/index.php"><span class="Backhome">进入店铺首页</span></a>
                    </div>
                </div>
            </form>
        </div>
        <div class="viewhistory">
            <span class="VHtitle">看了又看</span>
            <ul class="Fsulist">
                <li>
                    <a href="detailsp.html" target="_blank" title="酱爆茄子"><img src="/MenuEatCust/Public/upload/03.jpg"></a>
                    <p>酱爆茄子</p>
                    <p>￥12.80</p>
                </li>
                <li>
                    <a href="detailsp.html" target="_blank" title="酱爆茄子"><img src="/MenuEatCust/Public/upload/02.jpg"></a>
                    <p>酱爆茄子</p>
                    <p>￥12.80</p>
                </li>
            </ul>
        </div>
    </section>
    <!--bottom content-->
    <section class="Bcontent">
        <article>
            <div class="shopcontent">
                <div class="title2 cf">
                    <ul class="title-list fr cf ">
                        <li class="on">详细说明</li>
                        <li>评价详情（3）</li>
                        <li>成交记录</li>
                        <p><b></b></p>
                    </ul>
                </div>
                <div class="menutab-wrap">
                    <!--case1-->
                    <div class="menutab show">
                        <div class="cont_padding">
                            <img src="/MenuEatCust/Public/upload/<?php echo ($dataF["f_pic"]); ?>" width="300px" height="200px">
                            <p style="font-size: medium"><?php echo ($dataF["f_des"]); ?></p>
                        </div>
                    </div>
                    <!--case2-->
                    <div class="menutab">
                        <div class="cont_padding">
                            <table class="Dcomment">
                                <th width="80%">评价内容</th>
                                <th width="20%" style="text-align:right">顾客</th>
                                <?php if(is_array($dataCustFoodDes)): $i = 0; $__LIST__ = $dataCustFoodDes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr>
                                        <td>
                                            <?php echo ($i["f_u_des"]); ?>
                                            <time><?php echo ($i["f_u_time"]); ?></time>
                                        </td>
                                        <td align="right"><?php echo ($i["c_nike_name"]); ?></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </table>
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
                    </div>
                    <!--case4-->
                    <div class="menutab">
                        <div class="cont_padding">

                            <table width="888">
                                <th width="35%">买家</th>
                                <th width="20%">价格</th>
                                <th width="15%">数量</th>
                                <th width="30%">成交时间</th>
                                <tr height="40">
                                    <td>d***t</td>
                                    <td>￥59</td>
                                    <td>1</td>
                                    <td>2014-9-18 11:13:07</td>
                                </tr>
                            </table>

                        </div>
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
                </div>
            </div>
        </article>
        <!--ad&other infor-->
        <aside>
            <!--广告位或推荐位-->
            <a href="#" title="广告位占位图片" target="_blank"><img src="/MenuEatCust/Public/upload/2014912.jpg"></a>
        </aside>
    </section>
</section>
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