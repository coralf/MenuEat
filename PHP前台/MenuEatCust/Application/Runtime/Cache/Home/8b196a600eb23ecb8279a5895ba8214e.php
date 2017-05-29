<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>用户中心</title>
    <link href="/MenuEatCust/Public/style/style.css" rel="stylesheet" type="text/css"/>
    <!--<script type="text/javascript" src="/MenuEatCust/Public/js/public.js"></script>
    -->
    <script type="text/javascript" src="/MenuEatCust/Public/js/jquery01.js"></script>
    <!--    <script type="text/javascript" src="/MenuEatCust/Public/js/jqpublic.js"></script>-->
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
        <!--user Account-->
        <section class="AccManage Overflow">
            <span class="AMTitle Block Font14 FontW Lineheight35">账户管理</span>
            <p>登陆邮箱：<?php echo ($dataCustomer["c_email"]); ?>( <a href="#" target="_blank">更换手机号码</a> )</p>
            <p>手机号码：<?php echo ($dataCustomer["c_phone"]); ?> ( <a href="#" target="_blank">更换手机号码</a> ) ( <a href="#" target="_blank">解绑手机</a>
                )</p>
            <!--  <p>上次登陆：2014年09月22日 11:40:36( *如非本人登陆，请立即<a href="#" target="_blank">修改您的密码</a>！ )</p>-->
            <form action="/MenuEatCust/home/customer/updateCust" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td width="30%" align="right">*修改头像：</td>
                        <td>
                            <input size="100" type="file" id="upload" name="icon" style="display: none"/>
                            <img src="/MenuEatCust/Public/upload/default_photo.jpg" id="pic" width="150" height="130"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" align="right">*昵称：</td>
                        <td><input type="text" name="c_nikename" value="<?php echo ($dataCustomer["c_nikename"]); ?>"></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right">*邮箱：</td>
                        <td><input type="email" name="c_email" value="<?php echo ($dataCustomer["c_email"]); ?>"></td>
                    </tr>
                    <tr>
                        <td width="30%" align="right">*手机：</td>
                        <td><input type="tel" name="c_phone" value="<?php echo ($dataCustomer["c_phone"]); ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input name="" type="submit" value="保 存"></td>
                    </tr>
                </table>
            </form>
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
<script>
    $(function () {
        $("#pic").click(function () {
            $("#upload").click(); //隐藏了input:file样式后，点击头像就可以本地上传
            $("#upload").on("change", function () {
                var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
                if (objUrl) {
                    $("#pic").attr("src", objUrl); //将图片路径存入src中，显示出图片
                }
            });
        });
    });

    //建立一個可存取到該file的url
    function getObjectURL(file) {
        var url = null;
        if (window.createObjectURL != undefined) { // basic
            url = window.createObjectURL(file);
        } else if (window.URL != undefined) { // mozilla(firefox)
            url = window.URL.createObjectURL(file);
        } else if (window.webkitURL != undefined) { // webkit or chrome
            url = window.webkitURL.createObjectURL(file);
        }
        return url;
    }

</script>
</body>
</html>