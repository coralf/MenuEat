<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>DeathGhost-用户中心</title>
    <link href="/MenuEatCust/Public/style/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/MenuEatCust/Public/js/public.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jqpublic.js"></script>
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
<section class="Psection MT20">
    <nav class="U-nav Font14 FontW">
        <ul>
            <li><i></i><a href="/MenuEatCust/home/Customer/userCenter">用户中心首页</a></li>
            <li><i></i><a href="/MenuEatCust/home/Order/userOrder">我的订单</a></li>
            <li><i></i><a href="/MenuEatCust/home/Customer/UserLoal">收货地址</a></li>
            <li><i></i><a href="/MenuEatCust/home/Customer/userMessage">我的评论</a></li>
            <li><i></i><a href="/MenuEatCust/home/Customer/userCoupon">我的优惠券</a></li>
            <li><i></i><a href="/MenuEatCust/home/Customer/userFavorites">我的收藏</a></li>
            <li><i></i><a href="/MenuEatCust/home/Customer/userAccount">账户管理</a></li>
            <li><i></i><a href="/MenuEatCust/home/Customer/userExit">安全退出</a></li>
        </ul>
    </nav>
    <article class="U-article Overflow">
        <!--user order list-->
        <section>
            <table class="Myorder">
                <th class="Font14 FontW">订单编号</th>
                <th class="Font14 FontW">下单时间</th>
                <th class="Font14 FontW">收件人</th>
                <th class="Font14 FontW">订单总金额</th>
                <th class="Font14 FontW">订单状态</th>
                <th class="Font14 FontW">操作</th>


                <?php if(is_array($dataOrderForm)): $i = 0; $__LIST__ = $dataOrderForm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr>
                        <td class="FontW"><a href="user_order.html"><?php echo ($i["of_serial_number"]); ?></a></td>
                        <td><?php echo ($i["of_create_time"]); ?></td>
                        <td><?php echo ($i["c_name"]); ?></td>
                        <td><?php echo ($i["of_money"]); ?></td>
                        <td>
                            <?php switch($i["of_state"]): case "0": ?>待付款<?php break;?>
                                <?php case "1": ?>待发货<?php break;?>
                                <?php case "2": ?>待收货<?php break;?>
                                <?php case "3": ?>待评价<?php break;?>
                                <?php default: ?>
                                待付款<?php endswitch;?>
                        </td>
                        <td><a href="#">取消订单</a> | <a href="#">付款</a></td>
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
        </section>
    </article>
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
</body>
</html>