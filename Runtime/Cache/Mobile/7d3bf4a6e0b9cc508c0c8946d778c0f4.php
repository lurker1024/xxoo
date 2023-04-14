<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/nologed.css" />
	<title><?php echo ($webname); ?></title>
	<style>
		::-webkit-input-placeholder { /* WebKit browsers */
		  color: #b5b5b5;
		  font-size: 18px;
		}

		::-moz-placeholder { /* Mozilla Firefox 19+ */
		  color: #b5b5b5;
		  font-size: 18px;
		}

		a:hover,a:link,a:visited,a:active{color:#FCD535;text-decoration:none;}
		.bmbtn{width:100%;position:fixed;bottom:0px;padding:10px;}
		.bmbtn_l{width:45%;height:40px;float:left;background:#ebecf0;border-radius:5px;line-height:40px;text-align:center;}
		.bmbtn_r{width:45%;height:40px;float:right;background: #0052fe;color: #fff;border-radius:5px;line-height:40px;text-align:center;}
		.badge-light {
		    background-color: #FCD535;
		    position: relative;
		    left: 15px;		  
		    top: -35px;
		}
		.badge{
			line-height: 0.4;
    		border-radius: .5rem;
		}

        .no_inbox {
            width: 100%;
            background: #121420;
            margin-top: 0px;
            min-height: 650px;
        }

        input::placeholder{
            font-size: 12px;
        }

	</style>
  </head>
  <body>
	<div class="container-fluid"  style="padding:0px;width:100vw;">
		<div class="no_header"  style="position: fixed;z-index: 9999;padding:0px 10px;top:0px;">
			<div class="fl allhg txtl" style="line-height:50px;width:10%;">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>

			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('登录密码');?></span>
			</div>

			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>
		</div>

		<div class="no_content" style="width:90%;margin:60px auto;">
			<div class="no_title" id="h1title" style="line-height: 24px;margin-bottom:20px;">
				<span style="color:red;">*<?php echo L('为了您的资金安全，登陆密码修改后24小时以内不允许提现');?>。</span>
			</div>

			<div class="no_inbox">

				<div class="inputbox boxh">
                    <div class="input_title txtl">
                        <span class="fzmm fcc"><?php echo L('旧密码');?></span>
                    </div>
                    <div class="input_div">
                        <input type="password" class="cinput" name="oldpwd" id="oldpwd" placeholder="<?php echo L('请输入旧密码');?>" />
                    </div>
                </div>

                <div class="inputbox boxh">
                    <div class="input_title txtl">
                        <span class="fzmm fcc"><?php echo L('新密码');?></span>
                    </div>
                    <div class="input_div">
                        <input type="password" class="cinput" name="newpwd" id="newpwd" placeholder="<?php echo L('请输入新密码');?>" />
                    </div>
                </div>

                <div class="inputbox boxh">
                    <div class="input_title txtl">
                        <span class="fzmm fcc"><?php echo L('确认密码');?></span>
                    </div>
                    <div class="input_div">
                        <input type="password" class="cinput" name="renewpwd" id="renewpwd" placeholder="<?php echo L('请输入确认密码');?>" />
                    </div>
                </div>


                <div class="inputbox boxh">
                    <div class="allbtn" id="mo_submit">
						<span class="fzmm"><?php echo L('提交');?></span>
                    </div>
                </div>
				

			</div>
		</div>

	</div>		
</body>

<body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
	$("#mo_submit").click(function(){
		var oldpwd = $("#oldpwd").val();
		var newpwd = $("#newpwd").val();
		var renewpwd = $("#renewpwd").val();
		if(oldpwd == ''){
			layer.msg("<?php echo L('请输入旧密码');?>");return false;
		}
		if(newpwd == ''){
			layer.msg("<?php echo L('请输入新密码');?>");return false;
		}
		if(renewpwd == ''){
			layer.msg("<?php echo L('请输入确认密码');?>");return false;
		}
		if(newpwd != renewpwd){
			layer.msg("<?php echo L('两次输入的密码不一致');?>");return false;
		}
		$.post("<?php echo U('Index/sub_respwd');?>",
		{'oldpwd' : oldpwd, 'newpwd' : newpwd},
		function(data){
			if(data.code == 1){
				layer.msg(data.info);
				setTimeout(function(){
					window.location.href = "<?php echo U('Index/uoption');?>";
				},2000);
			}else{
				layer.msg(data.info); return false;
			}
		});
	});
</script>
<script type="text/javascript">
	$("#showid").click(function(){
		$("#centerbox").show();
		$("#h1title").hide();
		$("#bmbtn").show();
		$("#hideid").show();
		$("#showid").hide();
	});
	$("#hideid").click(function(){
		$("#centerbox").hide();
		$("#h1title").show();
		$("#bmbtn").hide();
		$("#hideid").hide();
		$("#showid").show();
	});
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>