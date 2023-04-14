<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>后台 | 管理中心 - ADMIN EX</title>
	<!-- Loading Bootstrap -->
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
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<a class="navbar-brand" style="width:200px;text-align:center;background-color:#21202a;" href="<?php echo U('Index/index');?>">
			<img src="/Public/Admin/ecshe_img/alogn.png" width="40" />
		</a>
	</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<!-- 主导航 -->
			<?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li <?php if(($menu["class"]) == "current"): ?>class="active"<?php endif; ?> > 
					<a href="<?php echo (U($menu["url"])); ?>">
						<?php echo ($menu["title"]); ?> 
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<ul class="nav navbar-nav navbar-rights" style="margin-right:10px;">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					 <?php echo session('admin_username');?><b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo U('User/setpwd');?>">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 修改密码 
						</a>
					</li>
					<li class="center">
						<a href="javascript:void(0);" onclick="lockscreen()">
							<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> 锁屏休息 
						</a>
					</li>
					<li class="dividers"></li>
					<li>
						<a href="<?php echo U('Login/loginout');?>">
							<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 退出后台 
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo U('Tools/delcache');?>" class="dropdown-toggle" title="清除缓存">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>
			</li>
			<li>
				<a class="dropdown-toggle" title="打开前台" href="/" target="_blank">
					<span class="glyphicon glyphicon-share" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- 边栏 -->
<div class="sidebar">
	<!-- 子导航 -->
	
		<div id="subnav" class="subnav" style="max-height: 94%;overflow-x: hidden;overflow-y: auto;">
			<?php if(!empty($_extra_menu)): ?> <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
			<?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
				<?php if(!empty($sub_menu)): if(!empty($key)): ?><h3><i class="icon icon-unfold"></i><?php echo ($key); ?></h3><?php endif; ?>
					<ul class="side-sub-menu">
						<?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
								<a class="item" href="<?php echo (U($menu["url"])); ?>">
									<?php if(empty($menu["ico_name"])): ?><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
										<?php else: ?>
										<span class="glyphicon glyphicon-<?php echo ($menu["ico_name"]); ?>" aria-hidden="true"></span><?php endif; ?>
									<?php echo ($menu["title"]); ?>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul><?php endif; ?>
				<!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	
	<!-- /子导航 -->
</div>
<!-- /边栏 -->
<script type="text/javascript">
    $(function(){
        setInterval("tzfc()",8000);
    });
    
    function tzfc(){
        var st = 1;
        $.post("<?php echo U('Admin/Trade/gethyorder');?>",
        {'st':st},
        function(data){
            if(data.code == 1){
                 //  var mp3 = new Audio('/heyue.mp3');  // 创建音频对象
               // mp3.play(); 
                return false;
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



<?php if(($versionUp) == "1"): ?><script type="text/javascript" charset="utf-8">
		/**顶部警告栏*/
		var top_alert = $('#top-alerta');
		top_alert.find('.close').on('click', function () {
			top_alert.removeClass('block').slideUp(200);
			// content.animate({paddingTop:'-=55'},200);
		});
	</script><?php endif; ?>
<div id="main-content">
	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
		<button class="close fixed" style="margin-top: 4px;">&times;</button>
		<div class="alert-content">警告内容</div>
	</div>
	<div id="main" class="main">
		<div class="main-title-h">
			<span class="h1-title">用户管理</span>
		</div>
		<div class="cf">
			<div class="fl">
				<a class="btn btn-success  " href="<?php echo U('User/edit');?>">新 增</a>
				<button class="ajax-post btn  btn-info " url="<?php echo U('User/status',array('type'=>'1'));?>" target-form="ids">
				冻结</button>
				<button class="ajax-post btn  btn-danger" url="<?php echo U('User/status',array('type'=>'2'));?>" target-form="ids">
				解冻</button>
				<button class="ajax-post btn  btn-info " url="<?php echo U('User/status',array('type'=>'3'));?>" target-form="ids">
				允许提币</button>
				<button class="ajax-post btn  btn-danger" url="<?php echo U('User/status',array('type'=>'4'));?>" target-form="ids">
				禁止提币</button>
				<button class="btn ajax-post confirm btn-danger " url="<?php echo U('User/status',array('type'=>'5'));?>" target-form="ids">
				删除</button>
				<a class="btn btn-success" href="<?php echo U('User/sendnotice');?>?id=0&type=2">群发通知</a>
			</div>
			<div class="search-form fr cf">
				<div class="sleft">
					<form name="formSearch" id="formSearch" method="get" name="form1">
						<select style="width:120px;float:left;margin-right:10px;" name="status" class="form-control">
							<option value="" <?php if(empty($_GET['status'])): ?>selected<?php endif; ?> >全部状态</option>
							<option value="1" <?php if(($_GET['status']) == "1"): ?>selected<?php endif; ?> >正常状态</option>
							<option value="2" <?php if(($_GET['status']) == "2"): ?>selected<?php endif; ?> >冻结状态</option>
						</select>
							<select style="width:120px;float:left;margin-right:10px;" name="user_type" class="form-control">
							<option value="" <?php if(empty($_GET['user_type'])): ?>selected<?php endif; ?> >全部用户</option>
							<option value="1" <?php if(($_GET['user_type']) == "1"): ?>selected<?php endif; ?> >正常用户</option>
							<option value="2" <?php if(($_GET['user_type']) == "2"): ?>selected<?php endif; ?> >测试用户</option>
						</select>
						<select style="width:120px;float:left;margin-right:10px;" name="field" class="form-control">
							<option value="username"
							<?php if(empty($_GET['field'])): ?>selected<?php endif; ?>
							>邮箱账号</option>
						</select>

						<script type="text/javascript" src="/Public/layer/laydate/laydate.js"></script>

						<input type="text" name="name" class="search-input form-control" value="<?php echo ($_GET['name']); ?>" placeholder="请输入邮箱账号" style="">
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
			<form id="form"  method="post" class="form-horizontal">
				<table class="">
					<thead>
					<tr>
						<th class="row-selected row-selected">
							<input class="check-all" type="checkbox"/>
						</th>
						<th class="">ID</th>
						<th class="">会员账号</th>
						<th class="">USDT余额</th>
						<th class="">登陆</th>
						<th class="">注册IP/时间</th>
						<th class="">地址</th>
						<th class="">推荐人</th>
						<th class="">认证</th>
						<th class="">状态/类型</th>
						<th class="">邀请码</th>
						<th class="">操作</th>
					</tr>
					</thead>
					<tbody>
					<?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"/>
								</td>
								<td><?php echo ($vo["id"]); ?></td>
								<td title="登录该用户"><a href=" <?php echo U('User/loginadmin?id='.$vo['id'].'&pass='.$vo['password']);?>" target="_blank"><?php echo ($vo["username"]); ?></a></td>
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
                                     <?php if(($vo["zongdai"]) == ""): ?>没有上级<?php endif; ?>
                                     <?php if(($vo["zongdai"]) != ""): ?><a href="<?php echo U('User/index?name='.$vo['zongdai'].'&field=username');?>">总代：<?php echo ($vo["zongdai"]); ?></a><?php endif; ?>
                                
                                 <br>
									<?php if(($vo["invit_1"]) != ""): ?><a href="<?php echo U('User/index?name='.$vo['invit_1'].'&field=username');?>">1代：<?php echo ($vo['invit_1']); ?></a><br><?php endif; ?>
									<?php if(($vo["invit_2"]) != ""): ?><a href="<?php echo U('User/index?name='.$vo['invit_2'].'&field=username');?>">2代：<?php echo ($vo['invit_2']); ?></a><br><?php endif; ?>
									<?php if(($vo["invit_3"]) != ""): ?><a href="<?php echo U('User/index?name='.$vo['invit_3'].'&field=username');?>">3代：<?php echo ($vo['invit_3']); ?></a><br><?php endif; ?>
								</td>
								
								<td>
								    <?php if(($vo["rzstatus"]) == "0"): ?>未提交<?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "1"): ?><span style="color:blue;">待审核</span><?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "2"): ?><span style="color:green;">认证成功</span><?php endif; ?>
								    <?php if(($vo["rzstatus"]) == "3"): ?><span style="color:red;">认证驳回</span><?php endif; ?>
								    
								    
								</td>
								
								<td>
								    <?php if(($vo["status"]) == "1"): ?>登陆：<span style="color:green;">正常</span><?php endif; ?>
								    <?php if(($vo["status"]) == "2"): ?>登陆：<span style="color:red;">冻结</span><?php endif; ?>
								    <br />
								    <?php if(($vo["txstate"]) == "1"): ?>提币：<span style="color:green;">正常</span><?php endif; ?>
								    <?php if(($vo["txstate"]) == "2"): ?>提币：<span style="color:red;">禁止</span><?php endif; ?>
								      <br />
								      
								    <?php if(($vo["user_type"]) == "1"): ?>用户类型：<span style="color:green;">正常用户</span><?php endif; ?>
								    <?php if(($vo["user_type"]) == "2"): ?>用户类型：<span style="color:red;">测试用户</span><?php endif; ?>
								      
								 
								</td>
                                <td><span><?php echo ($vo["invit"]); ?></span></td>
                                <td>
						            <a class="btn btn-primary btn-xs" href="<?php echo U('User/edit');?>?id=<?php echo ($vo["id"]); ?>">编辑</a>
						             
						            <?php if(($vo["rzstatus"]) == "1"): ?><a class="btn btn-primary btn-xs" href="<?php echo U('User/authrz');?>?id=<?php echo ($vo["id"]); ?>">审核认证</a><?php endif; ?>
						            <a class="btn btn-primary btn-xs" href="<?php echo U('User/sendnotice');?>?id=<?php echo ($vo["id"]); ?>&type=1">发送通知</a>
						            <?php if(($vo["is_agent"]) == "0"): ?><input type="button" class="ajax-get btn btn-danger btn-xs" value="设为代理" onclick="setagent('<?php echo ($vo['id']); ?>');"/><?php endif; ?>
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
						             <button type="button" class="btn btn-primary btn-xs test1" name="test1" id="test1" onclick="addtext('<?php echo ($vo['id']); ?>')">操作余额</button>
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
	<div class="site-text" style="margin: 5%; display: none" id="czye"  target="test123">	
			<form class="layui-form" id="book" method="post" lay-filter="example">
			    <input type="hidden" name="userid" id="userid" value="">
			  <div class="layui-form-item">
			    <label class="layui-form-label">金额</label>
			    <div class="layui-input-block">
			      <input type="number" id="money" name="money" lay-verify="title" autocomplete="off" placeholder="请输入变动金额" class="layui-input">
			    </div>
			  </div>
			  <div class="layui-form-item">
			    <label class="layui-form-label">方法</label>
			    <div class="layui-input-block">
			    <select style=" width: 160px; float: left; margin-right: 10px;" name="money_type" id="money_type" class="form-control">
                           <option value="1">增加余额</option>
                            <option value="2">减少余额</option>
                        </select>
			    </div>
			  </div><br>
			  <div class="layui-form-item">
			    <label class="layui-form-label">币种</label>
			    <div class="layui-input-block">
			    <select style=" width: 160px; float: left; margin-right: 10px;" name="bizhong" id="bizhong" class="form-control">
                           <option value="usdt">USDT</option>
                            <option value="btc">BTC</option>
                            <option value="eth">ETH</option>
                            <option value="trx">TRX</option>
                            <option value="eos">EOS</option>
                            <option value="doge">DOGE</option>
                            <option value="bch">BCH</option>
                            <option value="ltc">LTC</option>
                            <option value="xrp">XRP</option>
                            <option value="iotx">IOTX</option>
                            <option value="fil">FIL</option>
                            <option value="shib">SHIB</option>
                            <option value="flow">FLOW</option>
                            <option value="jst">JST</option>
                            <option value="itc">ITC</option>
                            <option value="ht">HT</option>
                            <option value="ogo">OGO</option>
                        </select>
			    </div>
			  </div>
			</form>
		</div>
	
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/layer/js/layer.js"></script>

<script>
function addtext(id) {
     var userid1=parseInt(id);
$("#userid").attr("value",userid1);
//	console.log(111)
	};
			$('.test1').on('click', function(){
			  //  console.log(222)
			 // alert(1111);
				//页面层
				layer.open({
				               type: 1 //Page层类型
				               ,skin: 'layui-layer-molv'
				               ,area: ['480px', '380px']
				               ,title: ['操作用户余额','font-size:18px']
				               ,btn: ['确定', '取消'] 
				               ,shadeClose: true
				               ,shade: 0 //遮罩透明度
				               ,maxmin: true //允许全屏最小化
				               ,content:$("#czye")
				              // console.log(111)
				               ,success:	function(){
				               	$('#bid').val("bid");
					            $('#bname').val("bname"); 
					            $('#price').val("price"); 
					              
				               },yes:function(){
				               	  var userid = $('#userid').val();
                                   var money =  $('#money').val();
                                   var money_type = $('#money_type').val();
                                   var bizhong = $('#bizhong').val();
                              $.post("<?php echo U('User/setmoney');?>", {
                                  userid:userid,
                                  money:money,
                                  money_type:money_type,
                                  bizhong:bizhong,
                                    }, function (data) {
                                        setTimeout("closetanchu()",2000);
                                        if (data.status == 1) {
                                            layer.msg(data.info, {
                                                icon: 1
                                            });
                                            setTimeout("shuaxin()",1000);
                                        } else {
                                            layer.msg(data.info, {
                                                icon: 2
                                            });
                                        }
                                    }, "json");
				               }
				           });
  			});
		</script>
<script type="text/javascript">

	//提交表单
	$('#submit').click(function () {
		$('#form').submit();
	});
	$(".page > div").children("a").each(function(){
		var ahref = $(this).attr('href');
		var ahrefarr = ahref.split("/");
		var ahlength = ahrefarr.length;
		var newhref = '';
		for(var i=0;i<ahlength;i++){
			if(i<3 && i>0){
				newhref += "/"+ahrefarr[i];
			}
			if(i==3){
				newhref += "/"+ahrefarr[i]+".html?";
			}
			if(i>=4 && i%2==0){
				newhref += "&"+ahrefarr[i]+"="+ahrefarr[i+1];
			}
		}
		$(this).attr("href",newhref);
	});
</script>
<script type="text/javascript">
    function buy_off(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('User/buy_off');?>", {
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
        $.post("<?php echo U('User/buy_on');?>", {
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
        $.post("<?php echo U('User/buy_ying');?>", {
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
        $.post("<?php echo U('User/buy_shu');?>", {
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
        $.post("<?php echo U('User/buy_zhengchang');?>", {
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

<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">
	+function(){
		//$("select").select2({dropdownCssClass: 'dropdown-inverse'});//下拉条样式
		layer.config({
			extend: 'extend/layer.ext.js'
		});

		var $window = $(window), $subnav = $("#subnav"), url;
		$window.resize(function(){
			//$("#main").css("min-height", $window.height() - 90);
		}).resize();

		/* 左边菜单高亮 */
		url = window.location.pathname + window.location.search;

		url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
		$subnav.find("a[href='" + url + "']").parent().addClass("current");

		/* 左边菜单显示收起 */
		$("#subnav").on("click", "h3", function(){
			var $this = $(this);
			$this.find(".icon").toggleClass("icon-fold");
			$this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
			prev("h3").find("i").addClass("icon-fold").end().end().hide();
		});

		$("#subnav h3 a").click(function(e){e.stopPropagation()});

		/* 头部管理员菜单 */
		$(".user-bar").mouseenter(function(){
			var userMenu = $(this).children(".user-menu ");
			userMenu.removeClass("hidden");
			clearTimeout(userMenu.data("timeout"));
		}).mouseleave(function(){
			var userMenu = $(this).children(".user-menu");
			userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
			userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
		});

		/* 表单获取焦点变色 */
		$("form").on("focus", "input", function(){
			$(this).addClass('focus');
		}).on("blur","input",function(){
			$(this).removeClass('focus');
		});
		$("form").on("focus", "textarea", function(){
			$(this).closest('label').addClass('focus');
		}).on("blur","textarea",function(){
			$(this).closest('label').removeClass('focus');
		});

		// 导航栏超出窗口高度后的模拟滚动条
		var sHeight = $(".sidebar").height();
		var subHeight  = $(".subnav").height();
		var diff = subHeight - sHeight; //250
		var sub = $(".subnav");

	}();

	//导航高亮
	function highlight_subnav(url){
		$('.side-sub-menu').find('a[href="'+url+'"]').closest('li').addClass('current');
	}

	function lockscreen(){
		layer.prompt({
			title: '输入一个锁屏密码',
			formType: 1,
			btn: ['锁屏','取消'] //按钮
		}, function(pass){
			if(!pass){
				layer.msg('需要输入一个密码!');
			}else{
				$.post("<?php echo U('Login/lockScreen');?>",{pass:pass},function(data){
					layer.msg(data.info);
					layer.close();
					if(data.status){
						window.location.href = "<?php echo U('Login/lockScreen');?>";
					}
				},'json');
			}
		});
	}
</script>
<div style="display:none;">

</div>
</body>
</html>
<script type="text/javascript">
    function setagent(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('User/setagent');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
            }
        }, "json");
    }
</script>
<script type="text/javascript">
    function closetanchu(){
        layer.closeAll('loading');
    }
    function shuaxin(){
        window.location.href=window.location.href;
    }
</script>

	<script type="text/javascript" charset="utf-8">
		//导航高亮
		highlight_subnav("<?php echo U('User/index');?>");
	</script>