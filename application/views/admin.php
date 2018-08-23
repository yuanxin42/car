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
     table.hovertable {
        font-family: verdana,arial,sans-serif;
        color:#333;
        border-width: 1px;
        border-color: #999999;
        border-collapse: collapse;
        margin: 0 auto; 
        opacity:0.7;
    }
    table.hovertable th {
        background-color:black;
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: white;
         color:white;
    }
    table.hovertable tr {
        /* background-color:#d4e3e5; */
    }
    table.hovertable td {
        border-width: 1px;
        padding: 5px;
        border-style: solid;
        border-color: #a9c6c9;
    }
    .jianyi tr{
        height: 20px;
        /* border: 1px solid black; */
    }
    .xiangqing{
        text-align:center;
        font-size:30px;
        margin-bottom:30px;
        margin-top:30px;
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

		</div>	
		<div class="banner-top">
				  <div class="contact-form">
                          <a  class='fanhui' href="">返回首页</a>
				  	<h1 class='xiangqing'>车辆信息详情</h1>
    <table class="hovertable">
        <tr>
            <th>车主</th><th>原始价格</th><th>出售价格</th><th>标题</th><th>内容</th><th>电话</th><th>地址</th><th>车辆类型</th><th>审核结果</th>
        </tr>
            <?php 
				for ($x=0; $x<count($rs); $x++) {
			?>	
                <tr>
                 <td><?php echo $rs[$x]->user_name?></td>
                 <td><?php echo $rs[$x]->price?></td>
                 <td><?php echo $rs[$x]->oldprice?></td>
                 <td><?php echo $rs[$x]->title?></td>
                 <td><?php echo $rs[$x]->information?></td>
                 <td><?php echo $rs[$x]->phone?></td>
                 <td><?php echo $rs[$x]->adress?></td>
                 <td><?php
                         $str=explode(",",$rs[$x]->car_type); 
                         for ($y=0; $y<count($str); $y++) {
                             // 0是枪手 1是热门 2是九成新 3是八成新
                             if($str[$y]=='0'){
                                 echo '抢手车 ';
                             }
                             if($str[$y]=='1'){
                                 echo '热门车 ';
                             }
                             if($str[$y]=='2'){
                                 echo '9成新 ';
                             }
                             if($str[$y]=='3'){
                                 echo '8成新 ';
                             }
                         }
                    ?></td>
                    <td>
                        <a href="http://localhost/car/index.php/Car_index/adminyes?id=<?php echo $rs[$x]->id?>">同意发布</a>
                        <a href="http://localhost/car/index.php/Car_index/adminno?id=<?php echo $rs[$x]->id?>">删除该条记录</a>
                    </td>
                </tr>
            <?php 
                }
			?>	
    </table>
        <h1 class='xiangqing'>用户意见以及留言</h1>
        <table class='jianyi'>
         <?php 
				for ($x=0; $x<count($tit); $x++) {
?>
        <div class='jianyibox'>
             <tr>
                 <td>用户序号：<?php echo $x?></td>
                 <td>用户名字：<?php echo $tit[$x]->name?></td>
                 <td>用户邮箱：<?php echo $tit[$x]->emil?></td>
                 <td>用户电话：<?php echo $tit[$x]->phone?></td>
                 <td>用户建议：<?php echo $tit[$x]->msg?></td>
            <tr>     
        </div>
           
                <?php 
                    }
        ?>	
        </table>
		</div>
  		</div><div class="clear">
		</div>

</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

    	
    	
            