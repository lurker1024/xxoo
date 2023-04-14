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



<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo L('代理中心');?></title>
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
			<li> 
			    <a href="<?php echo U('Agent/Index/index');?>"><?php echo L('会员列表');?></a>
			</li>
			
			<li> 
				<a href="<?php echo U('Agent/Index/jclist');?>"><?php echo L('合约建仓订单');?></a>
			</li>
			
			<li>
			    <a href="<?php echo U('Agent/Index/pclist');?>"><?php echo L('合约平仓订单');?></a>
			</li>
				<li class="active">
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
<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content">警告内容</div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title">在线客服</span>
		</div>

		<div class="data-table table-striped">
			<form id="form"  method="post" class="form-horizontal">
				<table class="">
					<thead>
					<tr>
						<th class="row-selected row-selected">
							<input class="check-all" type="checkbox"/>
						</th>
						<th class="">ID</th>
						<th class="">会员账号</th>
						<th class="">未回复记录</th>
						<th class="">操作</th>
					</tr>
					</thead>
					<tbody>
					<?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"/>
								</td>
								<td><?php echo ($vo["id"]); ?></td>
								<td><?php echo ($vo["username"]); ?></td>
								<td><?php echo ($vo["nor"]); ?></td>
                                <td>
						            <a class="btn btn-primary btn-xs" href="<?php echo U('Agent/Index/onlinelist');?>?id=<?php echo ($vo["id"]); ?>">查看详情</a>
						        </td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<?php else: ?>
						<td colspan="12" class="text-center empty-info"><i class="glyphicon glyphicon-exclamation-sign"></i>暂无数据</td><?php endif; ?>
					</tbody>
				</table>
			</form>
			<div class="page">
				<div><?php echo ($page); ?></div>
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
		highlight_subnav("<?php echo U('User/online');?>");
	</script>