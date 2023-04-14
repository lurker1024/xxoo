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
<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content"><?php echo L('警告内容');?></div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title"><?php echo L('会员管理');?></span>
			<a class="btn btn-warning" onClick="location.href='<?php echo U('Agent/Index/index');?>'"><?php echo L('初始化搜索');?></a>
				<a class="btn btn-warning" onClick="location.href='<?php echo U('Agent/Index/edit');?>'"><?php echo L('新增会员');?></a>
				<a class="btn btn-warning" onClick="location.href='<?php echo U('Agent/Index/coin');?>'"><?php echo L('推广连接');?></a>
		</div>
		
		<div class="cf">
			<div class="search-form cf">
				<div class="sleft">
					<form name="formSearch" id="formSearch" method="get" name="form1">
					    	<select style="width:120px;float:left;margin-right:10px;" name="user_type" class="form-control">
							<option value="" <?php if(empty($_GET['user_type'])): ?>selected<?php endif; ?> >全部用户</option>
							<option value="1" <?php if(($_GET['user_type']) == "1"): ?>selected<?php endif; ?> >正常用户</option>
							<option value="2" <?php if(($_GET['user_type']) == "2"): ?>selected<?php endif; ?> >测试用户</option>
						</select>
						<select style="width:120px;float:left;margin-right:10px;" name="field" class="form-control">
							<option value="username"
							<?php if(empty($_GET['field'])): ?>selected<?php endif; ?>
							><?php echo L('邮箱账号');?></option>
						</select>

						<script type="text/javascript" src="/Public/layer/laydate/laydate.js"></script>

						<input type="text" name="name" class="search-input form-control" value="<?php echo ($_GET['name']); ?>" placeholder="<?php echo L('请输入邮箱账号');?>" style="width: 380px;">
						<a class="sch-btn" href="javascript:;" id="search"> <i class="btn-search"></i> </a>
					</form>
					<script>
						//搜索功能
						$(function () {
							$('#search').click(function () {
								$('#formSearch').submit();
							});
						});
						//回车搜索
						$(".search-input").keyup(function (e) {
							if (e.keyCode === 13) {
								$("#search").click();
								return false;
							}
						});
					</script>
				</div>
			</div>
		</div>
		
		<div class="data-table table-striped">
			<table class="">
				<thead>
				<tr>
					<th class="row-selected row-selected"><input class="check-all" type="checkbox"/></th>
					<th>ID</th>
					<th><?php echo L('会员账号');?></th>
					<th><?php echo L('USDT余额');?></th>
					<th><?php echo L('登陆');?></th>
					<th><?php echo L('注册IP');?>/<?php echo L('注册时间');?></th>
					<th><?php echo L('地址');?></th>
					<th><?php echo L('推荐人');?></th>
					<th><?php echo L('认证状态');?></th>
					<th><?php echo L('邀请码');?></th>
					<th><?php echo L('操作');?></th>
				</tr>
				</thead>
				<tbody>
                    <?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"/>
								</td>
								<td><?php echo ($vo["id"]); ?></td>
								<td title="登录该用户"><?php echo ($vo["username"]); ?></td>
								<td ><?php
 $money=M("user_coin")->where(['userid'=>$vo['id']])->getField('usdt'); echo $money; ?></td>
								<td><span><?php echo ($vo["logins"]); ?></span>次</td>
								<td>
								    <span>最后登录IP：<?php echo ($vo["addip"]); ?></span><br />
								    <span>注册时间：<?php echo date("Y-m-d H:i:s",$vo['addtime']);?></span><br />
								    <span>最后登录：<?php echo ($vo["logintime"]); ?></span>
								</td>
								<td><span><?php echo ($vo["addr"]); ?></span><br /><?php echo ($vo["czaddress"]); ?><br /><?php echo ($vo["czaddress2"]); ?></td>
                                <td>
									<?php if(($vo["invit_1"]) != ""): ?>1代：<?php echo ($vo['invit_1']); ?><br/><?php endif; ?>
									<?php if(($vo["invit_2"]) != ""): ?>2代：<?php echo ($vo['invit_2']); ?><br/><?php endif; ?>
									<?php if(($vo["invit_3"]) != ""): ?>3代：<?php echo ($vo['invit_3']); ?><br/><?php endif; ?>
								</td>
								
								<td>
								    <?php if(($vo["rzstatus"]) == "0"): ?>未提交<?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "1"): ?><span style="color:blue;">待审核</span><?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "2"): ?><span style="color:green;">认证成功</span><?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "3"): ?><span style="color:red;">认证驳回</span><?php endif; ?>
								    <br />
									    <?php if(($vo["user_type"]) == "1"): ?>用户类型：<span style="color:green;">正常用户</span><?php endif; ?>
								    <?php if(($vo["user_type"]) == "2"): ?>用户类型：<span style="color:red;">测试用户</span><?php endif; ?>
								      
								 
								    
								</td>

                                <td><span><?php echo ($vo["invit"]); ?></span></td>
                                 <td>
                                      <a class="btn btn-primary btn-xs" href="<?php echo U('Agent/Index/sendnotice');?>?id=<?php echo ($vo["id"]); ?>&type=1">发送通知</a>
                                       <?php if(($vo["rzstatus"]) == "1"): ?><a class="btn btn-primary btn-xs" href="<?php echo U('Agent/Index/authrz');?>?id=<?php echo ($vo["id"]); ?>">审核认证</a><?php endif; ?>
						             <?php if(($vo["is_agent"]) == "0"): ?><input type="button" class="ajax-get btn btn-danger btn-xs" value="设为代理" onclick="sheagent('<?php echo ($vo['id']); ?>');"/><?php endif; ?>
                                      <?php if($vo['status'] == 2){ ?>
                                     <input type="button" class="ajax-get btn btn-warning btn-xs" value="解冻账号" onclick="setagent1('<?php echo ($vo['id']); ?>');">
                                     <?php }else{ ?>
                                     <input type="button" class="ajax-get btn btn-danger btn-xs" value="冻结账号" onclick="setagent('<?php echo ($vo['id']); ?>');">
                                      <?php } ?>
                                        <?php if(($vo["buy_on"]) == "1"): ?><input type="button" class="ajax-get btn btn-danger btn-xs" value="禁止交易" onclick="buy_off('<?php echo ($vo['id']); ?>');"><?php endif; ?>
                                       <?php if(($vo["buy_on"]) == "2"): ?><input type="button" class="ajax-get btn btn-warning btn-xs" value="允许交易" onclick="buy_on('<?php echo ($vo['id']); ?>');"><?php endif; ?>
                                   <?php
 $yinginfo = M("hysetting")->where(array('id'=>1))->find(); $uid= $vo['id']; $yingstr=explode("|",$yinginfo['hy_ylid']); $shustr=explode("|",$yinginfo['hy_ksid']); if(in_array($uid,$shustr)){ ?>
                                        <input type="button" class="ajax-get btn btn-warning btn-xs" value="指定必赢" onclick="buy_ying('<?php echo ($vo['id']); ?>');">
                                         <input type="button" class="ajax-get btn btn-info btn-xs" value="正常输赢" onclick="buy_zhengchang('<?php echo ($vo['id']); ?>');">
                                         <?php }elseif( in_array($uid,$yingstr)){ ?>
                                           <input type="button" class="ajax-get btn btn-success btn-xs" value="指定必输" onclick="buy_shu('<?php echo ($vo['id']); ?>');">
                                             <input type="button" class="ajax-get btn btn-info btn-xs" value="正常输赢" onclick="buy_zhengchang('<?php echo ($vo['id']); ?>');">
                                        <?php } ?>
                                     <?php
 if(!in_array($uid,$shustr) && !in_array($uid,$yingstr)){ ?>
                                       <input type="button" class="ajax-get btn btn-warning btn-xs" value="指定必赢" onclick="buy_ying('<?php echo ($vo['id']); ?>');">
                                        <input type="button" class="ajax-get btn btn-success btn-xs" value="指定必输" onclick="buy_shu('<?php echo ($vo['id']); ?>');">
                                     <?php } ?>
                                      </td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php else: ?>
					<td colspan="12" class="text-center empty-info">
					    <i class="glyphicon glyphicon-exclamation-sign"></i>暂无数据
					</td><?php endif; ?>
				</tbody>
			</table>
			<div class="page">
				<div><?php echo ($page); ?></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">
    function sheagent(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/sheagent');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                location.reload();
                setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
                
                location.reload();
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function setagent(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/setagent');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
                location.reload();
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function setagent1(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/setagent1');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
                location.reload();
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function buy_off(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/buy_off');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
                location.reload();
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function buy_on(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/buy_on');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
                location.reload();
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function buy_ying(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/buy_ying');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
                location.reload();
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function buy_shu(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/buy_shu');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
                location.reload();
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function buy_zhengchang(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Agent/Index/buy_zhengchang');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",3000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    time: 3000, //2秒关闭（如果不配置，默认是3秒）
                    icon: 1
                });
                location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    time:3000,
                    icon: 2
                    
                });
                location.reload();
            }
        }, "json");
    }
</script>

<script type="text/javascript">
    $(function(){
        setInterval("tzfc()",2000);
    });
    
    function tzfc(){
        var st = 1;
        $.post("<?php echo U('Admin/Trade/gethyorder');?>",
        {'st':st},
        function(data){
            if(data.code == 1){
                layer.confirm('有新的合约订单', {
                  btn: ['知道了'] //按钮
                }, function(){
                    
                    $.post("<?php echo U('Admin/Trade/settzstatus');?>",
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