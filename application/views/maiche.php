<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">

        <title>车辆信息上传</title>

        <link rel="stylesheet" type="text/css" href="http://localhost/car/assets/css/maiche/base.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/car/assets/css/maiche/home.css">
		
    </head>
    <body>
        <section class="aui-content">
            <div style="height:20px;"></div>
            <div class="aui-content-up">
                   

                   <form action="http://localhost/car/index.php/Car_index/maiche_message" name="form1" method="post" enctype="multipart/form-data">   
                    <div class="aui-content-up-form">
                        <h2>车辆信息上传</h2>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            姓名 <em>*</em>
                        </label>
                        <div class="aui-form-input">
                            <input type="text" class="aui-form-control-two" name="yourname" onBlur="checkna()" required id="1" placeholder="请输入身份证名字">
                            <span class="tips" id="divname">长度1~6个字符</span>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            手机号码 <em>*</em>
                        </label>
                        <div class="aui-form-input">
                            <input type="text" class="aui-form-control-two" name="youphone" id="2" placeholder="请输入11位的手机号码" onBlur="checkpsd1()" required/>
                            <span class="tips" id="phone">必须是11位的数字</span>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            原始价格:                 </label>
                        <div class="aui-form-input">
                            <input type="text" class="aui-form-control-two" name="oldprice" id="3" placeholder="请输入车辆的原始价格（只能填写数字，否则发布失败）" onBlur="checkpsd2()" required/>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            出售价格:                 </label>
                        <div class="aui-form-input">
                            <input type="text" class="aui-form-control-two" name="price" id="4" placeholder="请输入您的期望价格（只能填写数字，否则发布失败）" onBlur="checkpsd2()" required/>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            您的地址:                        </label>
                        <div class="aui-form-input">
                            <input type="text" class="aui-form-control-two" name="adress" id="5" placeholder="请输入您的地址" onBlur="checkpsd2()" required/>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            车辆标题:
                        </label>
                        <div class="aui-form-input">
                            <input type="text" class="aui-form-control-two" name="youtit" id="6" placeholder="请简单介绍您的车辆" onBlur="checkpsd2()" required/>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            车辆信息:
                        </label>
                        <div class="aui-form-input">
                            <textarea class="aui-form-control" name="description" id="7" minlength="5">请输入您要推广的信息...</textarea>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            新旧程度:
                        </label>
                        <label class="aui-label-control">
                            <select name='nineoreight'>
                                <option value ="0">不选择</option>
                                <option value ="1">九成新</option>
                                <option value="2">八成新</option>
                            </select>
                        </label>
                    </div>    
                    <div class="aui-form-group clear">
                        <label class="aui-label-control w120">
                            是否添加到热销车:
                        </label>
                        <label class="aui-label-control">
                            <select  name='ishot_car' class='hot_carbtn'>
                                <option value ="0">否</option>
                                <option value ="1">是</option>
                            </select>
                        </label>
                    </div>    
                    <div class='hot_car_box' style='display:none;'>
                        <div class="aui-form-group clear">
                            <label class="aui-label-control">
                                热手车标题:
                            </label>
                             <div class="aui-form-input">
                                <input type='hidden' class="aui-form-control-two" name="hottit" id="8"  placeholder="请简单介绍您的车辆" onBlur="checkpsd2()" required/>
                            </div> 
                        </div>
                        <div class="aui-form-group clear">
                            <label class="aui-label-control">
                                热手车信息:
                            </label>
                            <div class="aui-form-input">
                                <textarea class="aui-form-control" id="9" name="hotdes" minlength="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control w120">
                            是否添加到枪手手车:
                        </label>
                        <label class="aui-label-control">
                            <select name='isrob_car' class='rob_carbtn'>
                                <option value ="0">否</option>
                                <option value ="1">是</option>
                            </select>
                        </label>
                    </div>
                    <div class='rob_car_box' style='display:none;'>
                        <div class="aui-form-group clear">
                            <label class="aui-label-control">
                                枪手车标题:
                            </label>
                             <div class="aui-form-input">
                                <input type='hidden' class="aui-form-control-two" name="robtit" id="10" placeholder="请简单介绍您的车辆" onBlur="checkpsd2()" required/>
                            </div> 
                        </div>
                        <div class="aui-form-group clear">
                            <label class="aui-label-control">
                                抢手车信息:
                            </label>
                            <div class="aui-form-input">
                                <textarea class="aui-form-control" name="robdes" id="11"  minlength="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                            车辆照片<em>*</em>
                        </label>
                        <div class="aui-form-input">
                             <div class="aui-content-img-box aui-content-full">
                                <div class="aui-photo aui-up-img clear">
                                    <section class="aui-file-up fl">
                                        <img src="http://localhost/car/assets/images/up.png" class="add-img">
                                          <input type="file" name="userfile" id="file" class="file" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple/>  
                                    </section>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="aui-form-group clear">
                        <label class="aui-label-control">
                        </label>
                        <input class="aui-btn aui-btn-account" type="submit" value ='保存并提交审核'>
                    </div>
                    <div class="aui-form-group-text">
                        <h3>二手车交易系统的设计于实现</h3>
                        <p>二手车交易系统的设计于实现二手车交易系统的设计于实现二手车交易系统的设计于实现二手车交易系统的设计于实现二手车交易系统的设计于实现二手车交易系统的设计于实现</p>
                    </div>
                </form>
            </div>
        </section>
        <!-- mask begin -->
        <div class="aui-mask aui-works-mask">
            <div class="aui-mask-content">
                <p class="aui-delete-text">确定要删除你上传的资料？</p>
                <p class="aui-check-text">
                    <span class="aui-delete aui-accept-ok">确定</span>
                    <span class="aui-accept-no">取消</span>
                </p>
            </div>
        </div>
        <!-- mask end -->
        <script type="text/javascript" src="http://localhost/car/assets/js/maiche/jquery.min.js"></script>
         <script type="text/javascript" src="http://localhost/car/assets/js/maiche/up.js"></script> 
        <script type="text/javascript">
            

            //验证姓名
            function checkna(){
                na=form1.yourname.value;
                if( na.length <1 || na.length >6)
                {
                    divname.innerHTML='<font class="tips_false">长度是1~6个字符</font>';
                }else{
                    divname.innerHTML='<font class="tips_true">输入正确</font>';
                }
            }
            //验证手机号码
            function checkpsd1(){
                na=form1.youphone.value;
                if( na.length <11 || na.length >11)
                {
                    phone.innerHTML='<font class="tips_false">必须是11位的数字</font>';
                }else{
                    phone.innerHTML='<font class="tips_true">输入正确</font>';
                }
            }
            //验证社会统一代码
            function checkpsd2(){
                na=form1.youziz.value;
                if( na.length <18 || na.length >18)
                {
                    zizhi.innerHTML='<font class="tips_false">必须是18位社会信用代码</font>';
                }else{
                    zizhi.innerHTML='<font class="tips_true">输入正确</font>';
                }
            }



        
        </script>
    </body>
</html>
