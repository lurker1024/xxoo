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
		<div class="main-title-h" style="height:70px;line-height:70px;">
			<div class="search-form fl cf">
				<div class="sleft">
                    <span class="h1-title">币种管理</span>
				</div>
			</div>
			<div class="fr">
				<a class="btn btn-success" href="<?php echo U('Config/coinEdit');?>">新 增</a> 
				<button class="btn ajax-post btn-info" id="TRXzz" onclick="TRXzz()" target-form="ids">补充TRX矿工费</button>
				<button class="btn ajax-post btn-info"  onclick="cha_blanceall()" id="USDTguiji" target-form="ids">查余额(先查再归集)</button>
				<button class="btn ajax-post btn-info"  onclick="USDTguiji()" id="USDTguiji" target-form="ids">一键归集USDT</button>
				<button class="btn ajax-post btn-info" url="<?php echo U('Config/coinStatus',array('type'=>'resume'));?>" target-form="ids">启 用</button>
				<button class="btn ajax-post btn-warning" url="<?php echo U('Config/coinStatus',array('type'=>'forbid'));?>" target-form="ids">禁 用</button>
				<button class="btn ajax-post confirm btn-danger" url="<?php echo U('Config/coinStatus',array('type'=>'delt'));?>" target-form="ids">删 除</button>
			</div>
		</div>

		<div class="data-table table-striped">
			<table class="">
				<thead>
					<tr>
						<th class="row-selected"><input class="check-all" type="checkbox"/></th>
						<th width="5%" class="">ID</th>
						<th class="">代码</th>
						<th class="">名称</th>
						<th class="">类型</th>
						<th class="">代理信息</th>
						<th class="">合约地址</th>
						<th class="">状态</th>
						<th class="">充币</th>
						<th class="">提币</th>
						<th class="">手续费类型</th>
						<th class="">币币手续费</th>
						<th class="">合约手续费</th>
						<th class="">默认通道</th>
						<th class="">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>"/></td>
								<td><?php echo ($vo["id"]); ?></td>
								<td style="text-transform:uppercase"><?php echo ($vo["name"]); ?></td>
								<td style="text-transform:uppercase"><?php echo ($vo["title"]); ?></td>
								<td>
									<?php if($vo["type"] == 1): ?><span>钱包币</span>
									<?php elseif($vo["type"] == 2): ?>
									<span>平台币</span>
									<?php elseif($vo["type"] == 3): ?>
                                    <span>认购币</span><?php endif; ?>
								</td>
								<td style="color:red;">	
								<?php if(($vo["default_on"]) == "1"): ?><b style="color: #red;">系统默认通道</b><?php endif; ?>	
								<?php if(($vo["default_on"]) == "0"): ?><b style="color: #f47920;"><?php echo ($vo["agent_id"]); ?>
									<br><?php  if(!empty($vo['agent_id'])){ $agent_name=M('user')->where(["id"=>$vo['agent_id']])->getField('username'); echo $agent_name; } ?>
								</b><?php endif; ?>
							
								</td>
								<td><?php echo ($vo["czaddress"]); ?><br />USDT： <?php echo ($vo["blance"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRX： <?php echo ($vo["trx_blance"]); ?></td>
								<td>
									<?php if(($vo["status"]) == "1"): ?><b style="color: #028E16;">可用</b>
									<?php else: ?>
									<b style="color: #F70408">禁用</b><?php endif; ?>
								</td>
								
								<td>
									<?php if(($vo["czstatus"]) == "1"): ?><b style="color: #028E16;">正常</b>
									<?php else: ?>
									<b style="color: #F70408">禁用</b><?php endif; ?>
								</td>
								
								<td>
									<?php if(($vo["txstatus"]) == "1"): ?><b style="color: #028E16;">正常</b>
									<?php else: ?>
									<b style="color: #F70408">禁用</b><?php endif; ?>
								</td>
								<td>
								    <?php if($vo['sxftype'] == 1){ ?>
								        <span>按比例：<?php echo $vo['txsxf']."%";?></span>
								        
								    <?php }elseif($vo['sxftype'] == 2){?>
								        <span>按数量：<?php echo $vo['txsxf_n'];?></span>
								    <?php }?>
								</td>


								
								<td><span><?php echo $vo['bbsxf']."%";?></span></td>
								<td><span><?php echo $vo['hysxf']."%";?></span></td>
								<td><span>	<?php if(($vo["default_on"]) == "1"): ?><b style="color: #028E16;">是</b>
									<?php else: ?>
									<b style="color: #F70408">否</b><?php endif; ?></span></td>
								<td>
									<?php if(($vo["name"]) != "cny"): ?><a href="<?php echo U('Config/coinEdit?id='.$vo['id']);?>" class="btn btn-primary btn-xs">编辑</a>
										  <?php if(($vo["name"]) == "usdt"): ?><input type="button" class="ajax-get btn btn-warning btn-xs" value="查询余额" onclick="cha_blance('<?php echo ($vo['id']); ?>');">
									  <input type="button" class="ajax-get btn btn-warning btn-xs" value="生成账号" onclick="addusdt('<?php echo ($vo['id']); ?>');"><?php endif; endif; ?>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php else: ?>
						<td colspan="12" class="text-center empty-info">Oh! 暂时还没有内容!</td><?php endif; ?>
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
    function addusdt(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Config/addusdt');?>", {
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
    function cha_blance(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Config/getblance');?>", {
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
    function cha_blanceall(id) {
        var uid = parseInt(id);
        if (uid == "" || uid == null || uid <=0) {
            layer.alert('参数错误！');
            return false;
        }
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Config/getblanceall');?>", {
            id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
               // location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
              //  location.reload();
            }
        }, "json");
    }
</script>
   

<script type="text/javascript">
    function TRXzz() {
       
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Config/gettrx');?>", {
            //id: uid
        }, function (data) {
            setTimeout("closetanchu()",2000);
            if (data.status == 1) {
                layer.msg(data.info, {
                    icon: 1
                });
                //location.reload();
                //setTimeout("shuaxin()",1000);
            } else {
                layer.msg(data.info, {
                    icon: 2
                });
               // location.reload();
            }
        }, "json");
    }
</script>

<script type="text/javascript">
    function USDTguiji() {
       
        layer.load(0, {shade: [0.5,'#8F8F8F']});
        $.post("<?php echo U('Config/getguiji');?>", {
            //id: uid
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
	<script type="text/javascript" charset="utf-8">
		//导航高亮
		highlight_subnav("<?php echo U('Config/coin');?>");
	</script>