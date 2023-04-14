<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>代理中心</title>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/base.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/default_color.css" media="all">
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/layer/layer.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/flat-ui.css">
	<script src="/Public/Admin/js/flat-ui.min.js"></script>
	<script src="/Public/Admin/js/application.js"></script>
</head>
<body style="margin:0px;padding:0px; margin-top:100px;">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header" style="background-color:#3c434d;">
		<a class="navbar-brand" style="width:200px;text-align:center;background-color:#3c434d;" href="<?php echo U('Agent/Index/index');?>">
		    <span><?php echo L('代理系统');?></span>	
		</a>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li class="active"> 
			    <a href="<?php echo U('Agent/Index/index');?>"><?php echo L('会员列表');?></a>
			</li>
			
			<li> 
				<a href="<?php echo U('Agent/Index/jclist');?>"><?php echo L('合约建仓订单');?></a>
			</li>
			
			<li>
			    <a href="<?php echo U('Agent/Index/pclist');?>"><?php echo L('合约平仓订单');?></a>
			</li>
				<li>
			     <a href="<?php echo U('Agent/Index/online');?>"><?php echo L('在线客服');?></a>
			</li>
				<li>
			    <a href="<?php echo U('Agent/Index/log');?>"><?php echo L('新币认购记录');?></a>
			</li>
				<li>
			    <a href="<?php echo U('Agent/Index/myzr');?>"><?php echo L('充值记录');?></a>
			</li>
				<li>
			    <a href="<?php echo U('Agent/Index/myzc');?>"><?php echo L('提现记录');?></a>
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-rights" style="margin-right:10px;">
		    
			<li> <a href="<?php echo U('?Lang=zh-cn');?>">简体中文</a>	</li>
			<li> <a href="<?php echo U('?Lang=en-us');?>">English</a>	</li>
			<li>
				<a class="dropdown-toggle" title="<?php echo L('退出');?>" href="<?php echo U('Agent/Login/loginout');?>" target="_blank">
					<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</div>

</div>
<script type="text/javascript" src="/Public/layer/laydate/laydate.js"></script>
<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content">警告内容</div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title"><a href="<?php echo U('index/index');?>">用户管理</a> &gt;&gt;</span>
			<span class="h1-title"><?php if(empty($data)): ?>添加用户<?php else: ?>编辑用户<?php endif; ?></span>
		</div>
		<div class="tab-wrap">
			<div class="tab-content">
				<form id="form" action="<?php echo U('Index/edit');?>" method="post" class="form-horizontal">
					<div id="tab" class="tab-pane in tab">
						<div class="form-item cf">
							<table>

								<tr class="controls">
									<td class="item-label">用户名 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="username" value="<?php echo ($data["username"]); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">手机号 :</td>
									<td>
										<input type="text" class="form-control input-10x" name="phone" value="<?php echo ($data["phone"]); ?>">
									</td>
									<td class="item-note"></td>
								</tr>
								<tr class="controls">
									<td class="item-label">用户密码 :</td>
									<td><input type="text" class="form-control input-10x" name="password" value=""></td>
									<td class="item-note" style="color:red;">*留空不更新</td>
								</tr>
								<tr class="controls">
									<td class="item-label">交易密码 :</td>
									<td><input type="text" class="form-control input-10x" name="paypassword" value="">
									</td>
									<td class="item-note" style="color:red;">*留空不更新</td>
								</tr>
								
							
								
								<tr class="controls">
									<td class="item-label">登陆状态 :</td>
									<td>
									    <select name="status" class="form-control input-10x">
										<option value="1" <?php if(($data["status"]) == "1"): ?>selected<?php endif; ?>>正常</option>
										<option value="2" <?php if(($data["status"]) == "2"): ?>selected<?php endif; ?>>冻结</option>
									    </select>
									</td>
									<td class="item-note" style="color:red;">*会员登陆的状态</td>
								</tr>
								
								<tr class="controls">
									<td class="item-label">提币状态 :</td>
									<td>
									    <select name="txstate" class="form-control input-10x">
										<option value="1" <?php if(($data["txstate"]) == "1"): ?>selected<?php endif; ?>>正常</option>
										<option value="2" <?php if(($data["txstate"]) == "2"): ?>selected<?php endif; ?>>禁止</option>
									</select></td>
									<td class="item-note" style="color:red;">*会员提币的状态</td>
								</tr>
									
								<tr class="controls">
									<td class="item-label">用户类型 :</td>
									<td>
									    <select name="user_type" class="form-control input-10x">
										<option value="1" <?php if(($data["user_type"]) == "1"): ?>selected<?php endif; ?>>正常用户</option>
										<option value="2" <?php if(($data["user_type"]) == "2"): ?>selected<?php endif; ?>>测试用户</option>
									</select></td>
									<td class="item-note" style="color:red;">*用户是系统测试用户还是正常用户</td>
								</tr>
								<tr class="controls">
									<td class="item-label"></td>
									<td>
										<div class="form-item cf">
											<button class="btn submit-btn ajax-post" id="submit" type="submit" target-form="form-horizontal">提交</button>
											<a class="btn btn-return" href="<?php echo ($_SERVER['HTTP_REFERER']); ?>">返 回</a>
											<?php if(!empty($data["id"])): ?><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/><?php endif; ?>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	//提交表单
	$('#submit').click(function () {
		$('#form').submit();
	});
</script>

<script type="text/javascript">
    $(function(){
        setInterval("xiaoxi()",10000);
    });
    
    function xiaoxi(){
      //  alert(333);
        var st = 1;
        $.post("<?php echo U('Index/getxiaoxi');?>",
         {'st':st},
        function(data){
            if(data.code == 1){
                  var mp3 = new Audio('/kefu.mp3');  // 创建音频对象
                mp3.play(); 
                return false;
                layer.confirm('有新的合约订单', {
                  btn: ['知道了'] //按钮
                }, function(){
                    
                    $.post("<?php echo U('Index/settzstatus');?>",
                    function(data){
                        if(data.code == 1){
                            window.location.reload();  
                        } 
                    });
                });
            }   
        });
    }
        
        
</script>


	<script type="text/javascript" charset="utf-8">
		//导航高亮
		highlight_subnav("<?php echo U('User/index');?>");
	</script>