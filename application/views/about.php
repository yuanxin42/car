<!DOCTYPE HTML>
<html>

<head>
	<title>About</title>
	<base href="<?php echo site_url(); ?>"/>
	<link href="http://localhost/car/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="header-bg">
		<div class="wrap">
					<div id='showgouwu' class = 'gouwu'>
			<div id='toclose' class = 'close'>×</div>
			<ul class='gouwumessage'>
				<?php 
					for ($x=0; $x<count($_SESSION['shoping']); $x++) {
				?>
				<li>
					<h1><?php echo $x+1?></h1>
					<img src=<?php echo $_SESSION['shoping'][$x]->img?>  alt="">
					<div class='tit_box'>
						 <p class='tit_box_tit1'>车辆介绍:<?php echo $_SESSION['shoping'][$x]->title?></p>
						<p class='tit_box_tit2'>车辆介绍:<?php echo $_SESSION['shoping'][$x]->information?></p> 
					</div>	
					<h3>价格：￥<?php echo $_SESSION['shoping'][$x]->price?></h3>
					<h3>卖家：<?php echo $_SESSION['shoping'][$x]->user_name?></h3>
					<h1><a class='fontred' href="">删除</a></h1>
				</li>
				<?php 
					}
				?>
			</ul>
			<p class="holder">
				<a href="http://localhost/car/index.php/Car_index/delect_shoping" class="animBtn themeA">清空购物车</a>
				<a href="#" class="animBtn themeB">支付</a>
			</p>
		</div>
			<div class="h-bg">
				<div class="total">
					<div class="header">
						<div class="box_header_user_menu">
							<ul class="user_menu">
								<li class="act first">
									<a href="">
										<div class="button-t"><span>我要买车
										</span></div>
									</a>
								</li>
								<li class="">
									<a href="">
										<div class="button-t"><span><a href="http://localhost/car/index.php/Car_index/maiche">我要卖车</a></span></div>
									</a>
								</li>
								<?php if(!$_SESSION['user']){?>
								<li class="last">
									<a href="">
										<div class="button-t"><a href="http://localhost/car/index.php/Car_index/register">注册</a></div>
									</a>
								</li>
								<li class="last">
									<a href="">
										<div class="button-t"><a href="http://localhost/car/index.php/Car_index/login">登录</a></div>
									</a>
								</li>
								<?php }else{?>
								<li class="last">
									<a href="">
										<div class="button-t"><a href="#">用户名：<?php echo $_SESSION['user']['user']?></a></div>
									</a>
								</li>
								<li class="last">
									<a href="">
										<div class="button-t"><a href="http://localhost/car/index.php/Car_index/nouser">退出登陆</a></div>
									</a>
								</li>
								<?php }?>
							</ul>
						</div>
						<div class="header-right">
							<p class="follow_icon">二手车交易系统的设计与实现</p>
						</div>
						<div class="clear"></div>
						<div class="header-bot">
							<div class="logo">
								<a href="index.html"><img src="http://localhost/car/assets/images/logo.png" alt=""/></a>
							</div>
							<div class="search">
								<form action="http://localhost/car/index.php/Car_index/seach" methods='get'>
									<input type="text" name ='sou' class="textbox" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
									<input type="submit" class="gray-button" value='搜索车辆'>
									<!-- <button class="gray-button"><span>搜索车辆</span></button> -->
								</form>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="menu">
						<div class="top-nav">
							<ul>
								<li><a href=<?php site_url('Car_index/index')?>>首页</a></li>
								<li class="active"><a href=<?php echo site_url('Car_about/index')?>>关于我们</a></li>
								<li><a href=<?php echo site_url('Car_specials/index')?>>全部车辆</a></li>
								<li><a href=<?php echo site_url('Car_new/index')?>>超值特价车</a></li>
								<li><a href=<?php echo site_url('Car_contact/index')?>>联系我们</a></li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="banner-top">
						<div class="header-bottom">
							<div class="header_bottom_right_images">
								<div class="about_wrapper">
									<h1>网站搭建的历史背景</h1>
								</div>
								<div class="about-group">
									<div class="about-top">
										<div class="grid images_3_of_1">
											<img src="http://localhost/car/assets/images/pic7.jpg" alt="" />
										</div>
										<div class="grid span_2_of_3">
											<h3>欢迎来到原同学的二手车交易系统</h3>
											<p>欢迎来到原同学的二手车交易系统</p>
											<p>欢迎来到原同学的二手车交易系统</p>
										</div>
										<div class="clear"></div>
									</div>
									<p class="about-para">欢迎来到原同学的二手车交易系统</p>
									<div class="clear"></div>
									<div class="team">
										<h2>我们系统的背景</h2>
										<p>欢迎来到原同学的二手车交易系统</p>
										<div class="section group">
											<div class="grid_1_of_3 images_1_of_3">
												<img src="http://localhost/car/assets/images/bacmy123.jpg" alt="" />
												<h3>阿西吧</h3>
												<p>毕业设计不好写啊.</p>
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="about-bottom">
										<div class="grid span_2_of_a">
											<h4>辉煌的历史:</h4>
											<ul class="list-2">
												<li><span><a href="#">2017年10月 -- 2017年12月</a>&nbsp;&nbsp;&nbsp;查阅资料、撰写开题报告，提交报告。</span></li>
												<li><span><a href="#">2017年11月 -- 2018年01月</a>&nbsp;&nbsp;&nbsp; 进行系统的总体设计。</span></li>
												<li><span><a href="#">2018年03月 -- 2018年04月</a>&nbsp;&nbsp;&nbsp; 进行系统的编码与实现，并撰写中期检查报告。</span></li>
											</ul>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="header-para">
								<div class="categories">
									<div class="box">
										<div class="box-heading">
											<h1><a href="#">温馨提示：&nbsp;</a></h1>
										</div>
										<div class="box-content">
											现在你的购物车中有&nbsp;<strong id='gouwutit'><?php echo count($_SESSION['data'])?> 辆车</strong>
										</div>
									</div>
																		<div class="list-categories">
										<div class="first-list">
											<div class="div_2"><a href="http://localhost/car/index.php/Car_specials/index/#allcar">全部车辆</a></div>
											<div class="div_img">
												<img src="http://localhost/car/assets/images/car4.jpg" alt="Cars" title="Cars" width="60" height="39">
											</div>
											<div class="clear"></div>
										</div>
										<div class="first-list">
											<div class="div_2"><a href="http://localhost/car/index.php/#rob_car">抢手好车推荐(car)</a></div>
											<div class="div_img">
												<img src="http://localhost/car/assets/images/car1.jpg" alt="Cars" title="Cars" width="60" height="39">
											</div>
											<div class="clear"></div>
										</div>
										<div class="first-list">
											<div class="div_2"><a href="http://localhost/car/index.php/#hot_car">热门推荐(car)</a></div>
											<div class="div_img">
												<img src="http://localhost/car/assets/images/car2.jpg" alt="Cars" title="Cars" width="60" height="39">
											</div>
											<div class="clear"></div>
										</div>
										<div class="first-list">
											<div class="div_2"><a href="http://localhost/car/index.php/Car_new/index/#ninecar">九成新二手车</a></div>
											<div class="div_img">
												<img src="http://localhost/car/assets/images/car3.jpg" alt="Cars" title="Cars" width="60" height="39">
											</div>
											<div class="clear"></div>
										</div>
										<div class="first-list">
											<div class="div_2"><a href="http://localhost/car/index.php/Car_new/index/#eightcar">八成新二手车</a></div>
											<div class="div_img">
												<img src="http://localhost/car/assets/images/car4.jpg" alt="Cars" title="Cars" width="60" height="39">
											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div>
										<a href="http://localhost/car/index.php/Car_index/admin"  title="管理员点我！！">
											<img src="http://localhost/car/assets/images/aaaaaaauser.jpg" alt="">
										</a>
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<div class="footer-bottom">
								<div class="copy">
									<p>欢迎来到二手车交易系统 <a href="#" target="_blank" title="模板之家">欢迎来到二手车交易系统</a> - Collect from <a href="#" title="网页模板" target="_blank">欢迎来到二手车交易系统</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script>
		var gouwutit = document.getElementById('gouwutit')
		var showgouwu = document.getElementById('showgouwu')
		var toclose =  document.getElementById('toclose')
		gouwutit.onclick = function(){
			showgouwu.style.display = 'block';
		}
		toclose.onclick = function(){
			showgouwu.style.display = 'none';
		}
	</script>
</body>

</html>