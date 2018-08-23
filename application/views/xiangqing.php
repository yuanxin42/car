<!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<base href="<?php echo site_url(); ?>"/>
<link href="http://localhost/car/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'> 
<style lang="">
    .xiangqing{
        text-align:center;
        font-size:30px;
    }
    .ximg{
        display:block;
        width: 800px;
        height: 500px;
    }
     .contact-form{
        width: 800px;
        /* background:red; */
         margin: 0 auto; 
    } 
    .fanhui{
         display:inline-block;
        width: 10px;
        height: 100px;
        background:black;
        text-align:center;
         position:fixed;
         bottom:200px;
         right:50px;
         padding:20px;
         border-radius:5px;
        opacity:0.5;
        color:white;
    }
</style>  
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
					</div><div class="clear"></div> 
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
		<!-- <div class="menu"> 	
			<div class="top-nav"> 
					<ul>
						<li><a href=<?php site_url('Car_index/index')?>>首页</a></li>
						<li><a href=<?php echo site_url('Car_about/index')?>>关于我们</a></li>
						<li><a href=<?php echo site_url('Car_specials/index')?>>全部车辆</a></li>
						<li><a href=<?php echo site_url('Car_new/index')?>>超值特价车</a></li>
						<li><a href=<?php echo site_url('Car_contact/index')?>>联系我们</a></li>
					</ul>
					<div class="clear"></div> 
				</div>
		</div> -->
		<div class="banner-top">
				  <div class="contact-form">
                          <a  class='fanhui' href="">返回首页</a>
				  	<h1 class='xiangqing'>车辆信息详情</h1>
					    	<div>
						    	<span><label>车主名字&nbsp&nbsp:&nbsp&nbsp<?php echo $car->user_name?></label></span>
                            </div>
                            <div>
						    	<span><label>车辆价格&nbsp&nbsp:&nbsp&nbsp￥<?php echo $car->price?></label></span>
                            </div>
                            <div>
						    	<span><label>联系电话&nbsp&nbsp:&nbsp&nbsp<?php echo $car->phone?></label></span>
                            </div>
                            <div>
						    	<span><label>车辆标题&nbsp&nbsp:&nbsp&nbsp<?php echo $car->title?></label></span>
                            </div>
                            <div>
						    	<span><label>车辆信息&nbsp&nbsp:&nbsp&nbsp<?php echo $car->information?></label></span>
                            </div>
                             <div>
						    	<span><label>车辆地址&nbsp&nbsp:&nbsp&nbsp<?php echo $car->adress?></label></span>
                            </div>
						    <div class='ximg'>
                                <img src="<?php echo $car->img?>" alt="">				    	
                            </div>

				  </div>
  				</div><div class="clear">
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

    	
    	
            