<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" style="background:#fff;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base2.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
	<link rel="stylesheet" href="/Public/Static/Icoinfont/iconfont.css">
	<script src="/Public/Static/Icoinfont/iconfont.js"></script>
	<title><?php echo ($webname); ?></title>
	<style>
	::-webkit-input-placeholder {color: #b5b5b5;font-size: 12px;}
	::-moz-placeholder {color: #b5b5b5;font-size: 12px;}
	input:focus{background:#ebecf0;outline: 1px solid #ebecf0;}
	textarea:focus{background:#fff;outline: 1px solid #f5f5f5;}
	a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	.no_header{position: fixed;z-index: 9999;background:#fff;padding:0px 10px;top:0px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	.txtl{line-height:50px;width:10%;}
    .txtbox{width:100%;height:80px;background:#fff;bottom: 0px;position: fixed;border-top: 1px solid #ccc;padding: 10px;}
    .textbox_1{width:70%;height:60px;float:left;}
    .textbox_2{width:25%;height:60px;line-height:60px;float:right;text-align:center;background: #0052fe;color: #fff;border-radius:5px;}
    .textbox_3{width:100%;height:60px;padding:5px;border:1px solid #f5f5f5;border-radius:5px;}
    textarea{background:#fff;color:#000000;}
    .emptybox{width:100%;height:200px;}
    .headertitle{width:100%;height:90px;margin-top:50px;padding:10px 20px;border-bottom:1px solid #f5f5f5;position: fixed;background: #fff;top: 0px;}
    .contentbox{width:100%;margin-top:155px;padding:10px 20px;}
    .contentbox_1{width:100%;margin-bottom:15px;}
    .contentbox_2{min-width:50%;max-width:80%;background:#f5f5f5;float:right;padding:5px 10px;border-radius:5px;margin-bottom: 15px;}
    .contentbox_3{min-width:50%;max-width:80%;background:#f5f5f5;float:right;padding:5px 10px;border-radius:5px;margin-bottom: 15px;float:left;}
    .msgbox{width:100%;padding:5px 0px;}
	.msgbox_left{max-width:70%;min-height:40px;background:#f5f5f5;border-radius:5px;padding:10px;word-wrap:break-word;word-break:normal;}
	.msgbox_right{max-width:70%;min-height:40px;background:#f5f5f5;border-radius:10px;padding:10px;word-wrap:break-word;word-break:normal;margin-left:30%;}
	</style>
  </head>
  <body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('在线客服');?></span>
			</div>
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>
		</div>
		
		<div class="headertitle">
		    <div style="width:25%;height:70px;float:left;">
		        <img src="/Public/Static/img/kfheader.png" style="height:70px;" />
		    </div>
		    <div style="width:75%;height:70px;float:right;">
		        <div style="width:100%;height:40px;line-height:50px;">
		            <span class="fcc" style="font-size:20px;font-weight:bold;">Josn</span>
		        </div>
		        <div style="width:100%;height:30px;line-height:20px;">
		            <span class="fcy fzmm"><?php echo L('在线');?></span>
		        </div>
		    </div>
		</div>
		
		
		<div class="contentbox">
		    <div class="contentbox_1" style="height:40px;margin-bottom:0px;">
		        <div class="contentbox_2" style="float:left;">
		            <span class="fcc fzmm"><?php echo L('您好,请问有什么可以帮您?');?></span>
		        </div>
		    </div>
		    
		    <!---信息盒子--->
		    <div style="width:100%;min-height:360px;overflow-y:scroll;margin-bottom:100px;" id="msgbox">
                
		    </div>

		    
		</div>
		

		
		<div class="txtbox">
		    <input type="hidden" id="flag" value="1" />
		    <div class="textbox_1">
		        <textarea class="textbox_3" id="content" placeholder="<?php echo L('请输入信息内容');?>"></textarea>
		    </div>
		    <div class="textbox_2" id="sendbtn">
		        <span class="fch fzmmm"><?php echo L('发送');?></span>
		    </div>
		</div>

	</div>	

</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>

<script type="text/javascript">
    $(function(){
        getchatlist();
    });
    
    setInterval(function () {
      getchatlist();
    }, 1000);
</script>
<script type="text/javascript">
    function getchatlist(){
        $.post("<?php echo U('User/getlineinfo');?>",
        function(data){
            if(data.code = 1){
                $("#msgbox").empty();
                var html = '';
				if(data.data == '' || data.data == null){
					$("#msgbox").empty();
				}else{
					$.each(data.data,function(key,val){
						if(val.type == 1){
							html+='<div class="msgbox">'+
                                  '<div class="msgbox_left">'+
                                  '<span></span>'+
                                  '<span style="font-size:14px;color:#000000;">' + val.content +'</span>'+
                                  '<span style="float:right;color:#FCD535;font-size:14px;">'+ val.time +'</span>'+
                                  '</div>'+
                                  '</div>';
							      
						}else if(val.type == 2){
							html+='<div class="msgbox">'+
                                  '<div class="msgbox_right">'+
                                  '<span></span>'+
                                  '<span style="font-size:14px;color:#000000;">' + val.content +'</span>'+
                                  '<span style="float:right;color:#FCD535;font-size:14px;">'+ val.time +'</span>'+
                                  '</div>'+
                                  '</div>';
						}						
					});
					$("#msgbox").append(html);
				}
                $('#msgbox').children("div:last-child")[0].scrollIntoView();
                
                
            }else{
                console.log();return false;
            }
        });
    }
</script>

<script type="text/javascript">
    $("#sendbtn").click(function(){
        var flag = $("#flag").val();
        if(flag == 2){
            return false;
        }
        var txt = $("#content").val();
        if(txt == '' || txt == null){
            layer.msg("<?php echo L('请输入信息内容');?>");return false;
        }
        $("#flag").val(2);
        $.post("<?php echo U('User/uptxt');?>",
        {'txt':txt},
        function(data){
            if(data.code == 1){
                $("#content").val("");
            }else{
                layer.msg(data.info);return false;
            }
        });
        
    });
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>