<!DOCTYPE HTML>
<html>

<head>
	<title>Single</title>
	<base href="<?php echo site_url(); ?>"/>
	<link href="http://localhost/car/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="header-bg">
		<div class="wrap">
			<div class="h-bg">
				<div class="total">
					<div class="header">
						<div class="box_header_user_menu">
							<ul class="user_menu">
								<li class="act first">
									<a href="">
										<div class="button-t"><span>我要买车</span></div>
									</a>
								</li>
								<li class="">
									<a href="">
										<div class="button-t"><span><a href="http://localhost/car/index.php/Car_index/maiche">我要卖车</a></span></div>
									</a>
								</li>
								<li class="last">
									<a href="">
										<div class="button-t"><a href="http://localhost/car/index.php/Car_index/login">注册</a></div>
									</a>
								</li>
								<li class="last">
									<a href="">
										<div class="button-t"><a href="http://localhost/car/index.php/Car_index/login">登录</a></div>
									</a>
								</li>
							</ul>
						</div>
						<div class="header-right">
							<!-- <ul class="follow_icon">
								<li><a href="#"><img src="http://localhost/car/assets/images/icon.png" alt=""/></a></li>
								<li><a href="#"><img src="http://localhost/car/assets/images/icon1.png" alt=""/></a></li>
								<li><a href="#"><img src="http://localhost/car/assets/images/icon2.png" alt=""/></a></li>
								<li><a href="#"><img src="http://localhost/car/assets/images/icon3.png" alt=""/></a></li>
							</ul> -->
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
								<li><a href="index.html">首页</a></li>
								<li><a href="about.html">关于我们</a></li>
								<li><a href="specials.html">全部车辆</a></li>
								<li><a href="new.html">超值特价车</a></li>
								<li><a href="contact.html">联系我们</a></li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="banner-top">
						<div class="header-bottom">
							<div class="header_bottom_right_images">
								<div class="about_wrapper">
									<h1>车辆详情</h1>
								</div>

								<div class="about-group">
									<div class="about-top">
										<div class="grid images_3_of_1">
											<img src="http://localhost/car/assets/images/pic7.jpg" alt="" />
										</div>
										<div class="grid span_2_of_3">
											<h3>二手车交易系统是最好的系统</h3>
											<p>展示车辆信息的.</p>
											<p>展示车辆信息的.</p>
										</div>
										<div class="clear"></div>

									</div>
									<p class="about-para">展示车辆信息和背景的（介绍这款车）.</p>
									<div class="clear"></div>
									<div class="links">
										<ul>
											<li><a href="#"><img src="http://localhost/car/assets/images/blog-icon1.png" title="date"><span>june 14, 2013</span></a></li>
											<li><a href="#"><img src="http://localhost/car/assets/images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
											<li><a href="#"><img src="http://localhost/car/assets/images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
											<li><a href="#"><img src="http://localhost/car/assets/images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
											<li><a href="#"><img src="http://localhost/car/assets/images/blog-icon5.png" title="permalink"><span>permalink</span></a></li>
										</ul>
									</div>
									<div class="team">
										<h2>Related Posts</h2>
										<div class="section group">
											<div class="grid_1_of_3 images_1_of_3">
												<img src="http://localhost/car/assets/images/pic18.jpg" alt="" />
												<h4><a href="#">Jacalyn Markel</a></h4>
											</div>
											<div class="grid_1_of_3 images_1_of_3">
												<img src="http://localhost/car/assets/images/pic19.jpg" alt="" />
												<h4><a href="#">Steven Burge</a></h4>
											</div>
											<div class="grid_1_of_3 images_1_of_3">
												<img src="http://localhost/car/assets/images/pic20.jpg" alt="" />
												<h4><a href="#">Jon Mackenzie</a></h4>
											</div>
											<div class="clear"></div>
										</div>
										<div class="leave-comment"><a href="#" name="comment">联系方式</a></div>
										<div class="comments-area">
											<form>
												<p>
													<label>Name</label>
													<span>*</span>
													<input type="text" value="">
												</p>
												<p>
													<label>Email</label>
													<span>*</span>
													<input type="text" value="">
												</p>
												<p>
													<label>Website</label>
													<input type="text" value="">
												</p>
												<p>
													<label>Subject</label>
													<span>*</span>
													<textarea></textarea>
												</p>
												<p>
													<input type="submit" value="Post">
												</p>
											</form>
										</div>
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
</body>

</html>