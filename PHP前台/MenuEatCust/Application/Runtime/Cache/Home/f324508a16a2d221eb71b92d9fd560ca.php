<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>DeathGhost</title>
    <link href="/MenuEatCust/Public/style/style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/MenuEatCust/Public/js/public.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/MenuEatCust/Public/js/jqpublic.js"></script>
    <script>
    </script>
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
<section class="Cfn">
    <aside class="C-left">
        <div class="S-time">服务时间：周一~周六
            <time>09:00</time>
            -
            <time>23:00</time>
        </div>
        <div class="C-time">
            <img src="/MenuEatCust/Public/upload/dc.jpg"/>
        </div>
        <a href="list.html" target="_blank"><img src="/MenuEatCust/Public/images/by_button.png"></a>
        <a href="list.html" target="_blank"><img src="/MenuEatCust/Public/images/dc_button.png"></a>
    </aside>
    <div class="F-middle">
        <ul class="rslides f426x240">
            <?php if(is_array($dataBanner)): $i = 0; $__LIST__ = $dataBanner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><li><a href="javascript:"><img src="/MenuEatCust/Public/upload/<?php echo ($i["f_pic"]); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <aside class="N-right">
        <div class="N-title">公司新闻 <i>COMPANY NEWS</i></div>
        <ul class="Newslist">
            <li><i></i><a href="article_read.html" target="_blank" title="这里调用新闻标题...">欢迎访问DeathGhost博客站...</a></li>
            <li><i></i><a href="article_read.html" target="_blank" title="这里调用新闻标题...">H5WEB前端开发 移动WEB模板设计...</a></li>
        </ul>
        <ul class="Orderlist" id="UpRoll">
            <li>
                <p>订单编号：2014090912973</p>
                <p>收件人：王先生</p>
                <p>订单状态：<i class="State01">已发货</i></p>
            </li>
            <li>
                <p>订单编号：2014090912978</p>
                <p>收件人：张小姐</p>
                <p>订单状态：<i class="State02">已签收</i><i class="State03">已点评</i></p>
            </li>
            <li>
                <p>订单编号：2014090912988</p>
                <p>收件人：龚先生</p>
                <p>订单状态：<i class="State02">已签收</i><i class="State03">已点评</i></p>
            </li>
        </ul>
        <script>
            var UpRoll = document.getElementById('UpRoll');
            var lis = UpRoll.getElementsByTagName('li');
            var ml = 0;
            var timer1 = setInterval(function () {
                var liHeight = lis[0].offsetHeight;
                var timer2 = setInterval(function () {
                    UpRoll.scrollTop = (++ml);
                    if (ml == 1) {
                        clearInterval(timer2);
                        UpRoll.scrollTop = 0;
                        ml = 0;
                        lis[0].parentNode.appendChild(lis[0]);
                    }
                }, 10);
            }, 5000);
        </script>
    </aside>
</section>
<section class="Sfainfor">
    <article class="Sflist">
        <div id="Indexouter">
            <ul id="Indextab">
                <li class="current">点菜</li>
                <li>餐馆</li>
                <p class="class_B">
                    <a href="#">中餐</a>
                    <a href="#">西餐</a>
                    <a href="#">甜点</a>
                    <a href="#">日韩料理</a>
                    <span><a href="#" target="_blank">more ></a></span>
                </p>
            </ul>
            <div id="Indexcontent">
                <ul style="display:block;">
                    <li>
                        <p class="seekarea">
                            <?php if(is_array($dataArea)): $i = 0; $__LIST__ = $dataArea;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($i["ar_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </p>
                        <div class="SCcontent">
                            <?php if(is_array($dataFoodsRecommed)): $i = 0; $__LIST__ = $dataFoodsRecommed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><a href="/MenuEatCust/home/Foods/detail/id/<?php echo ($i["f_id"]); ?>" target="_blank" title="菜品名称">
                                    <figure>
                                        <img src="/MenuEatCust/Public/upload/<?php echo ($i["f_pic"]); ?>">
                                        <figcaption>
                                            <span class="title"><?php echo ($i["f_name"]); ?></span>
                                            <span class="price"><i>￥</i><?php echo ($i["f_price"]); ?></span>
                                        </figcaption>
                                    </figure>
                                </a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <div class="bestshop">
                            <?php if(is_array($dateFoodsStore)): $i = 0; $__LIST__ = $dateFoodsStore;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><a href="/MenuEatCust/home/foods/toStore/id/<?php echo ($i["fs_id"]); ?>"  title="店铺名称">
                                    <figure>
                                        <img src="/MenuEatCust/Public/upload/<?php echo ($i["fs_pic"]); ?>">
                                    </figure>
                                </a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </article>
    <aside class="A-infor">
        <img src="/MenuEatCust/Public/upload/2014911.jpg">
        <div class="usercomment">
            <span>用户菜品点评</span>
            <ul>
                <?php if(is_array($dataFUDes)): $i = 0; $__LIST__ = $dataFUDes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><li>
                        <img src="/MenuEatCust/Public/upload/<?php echo ($i["f_pic"]); ?>">
                        用户“<?php echo ($i["c_nike"]); ?>” 对 [<?php echo ($i["fs_name"]); ?>] “<?php echo ($i["f_name"]); ?>”评说：<?php echo ($i["f_u_des"]); ?>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
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
</body>
</html>