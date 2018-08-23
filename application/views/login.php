<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<title>登录界面</title>
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
							登录
						</div>
						<form action="#" method="post">
							
							<div class="form_text_ipt">
								<input class='user' name="username" type="text" placeholder="用户名/账号">
							</div>
							<div class="ececk_warning"><span>用户名/账号不能为空</span></div>
							<div class="form_text_ipt">
								<input class='pass' name="password" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>密码不能为空</span></div>
							<div class="form_btn">
								<button class='login_btn' type="button">登录</button>
							</div>
							<div class="form_reg_btn">
								<span>还没有帐号？</span><a href="http://localhost/car/index.php/Car_index/register">马上注册</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="http://localhost/car/assets/js/login/jquery.min.js" ></script>
		<script type="text/javascript" src="http://localhost/car/assets/js/login/common.js" ></script>
		<script>
			$('.login_btn').on('click',function(){
				if($('.user').val()==''||$('.pass').val()==''){
					alert('用户名或者密码不能为空');
					window.location.reload();
				}else{
					$.ajax({
						url:"http://localhost/car/index.php/Car_index/tologin",
						type:"get",
						data:{"user":$('.user').val(),"pass":$('.pass').val()},
						success:function(res){
							alert(res)
							if(res == '登陆成功'){
								window.location.href="http://localhost/car/index.php/Car_index/index"; 
							}
						}
					});
				}
			})
		</script>
	</body>
</html>
