<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>注册界面</title>
		<link rel="stylesheet" href="http://localhost/car/assets/css/login/reset.css" />
		<link rel="stylesheet" href="http://localhost/car/assets/css/login/common.css" />
		<link rel="stylesheet" href="http://localhost/car/assets/css/login/font-awesome.min.css" />
	</head>
	<body>
		<div class="wrap login_wrap">
			<div class="content">
				
				<div class="logo"></div>
				
				<div class="login_box">	
					
					<div class="login_form">
						<div class="login_title">
							注册
						</div>
						<form action="#" method="post">
							
							<div class="form_text_ipt">
								<input class='user' name="username" type="text" placeholder="用户名">
							</div>
							<div class="ececk_warning"><span>用户名</span></div>
							<div class="form_text_ipt">
								<input class='pass1' name="password" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_text_ipt">
								<input class='pass2' name="repassword" type="password" placeholder="重复密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_btn">
								<button class='register_btn' type="button">注册</button>
							</div>
							<div class="form_reg_btn">
								<span>已有帐号？</span><a href="http://localhost/car/index.php/Car_index/login">马上登录</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="http://localhost/car/assets/js/login/jquery.min.js" ></script>
		<script type="text/javascript" src="http://localhost/car/assets/js/login/common.js" ></script>
		<script>
			$('.register_btn').on('click',function(){
				if($('.user').val()==''||$('.pass1').val()==''||$('.pass2').val()==''){
					alert('输入有误，请重新输入')
					window.location.reload();
				}else if($('.pass1').val()!=$('.pass2').val()){
					alert('用户名密码不匹配')
					window.location.reload();
				}else{
					$.ajax({
						url:"http://localhost/car/index.php/Car_index/regis",
						type:"get",
						data:{"user":$('.user').val(),"pass":$('.pass1').val()},
						success:function(res){
							alert('注册成功！！')
							window.location.href="http://localhost/car/index.php/Car_index/login"; 
						}
					});
				}
			})
		</script>
	</body>
</html>
