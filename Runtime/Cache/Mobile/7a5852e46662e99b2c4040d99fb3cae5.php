<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
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
	a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	.no_header{position: fixed;z-index: 9999;background:#1b1d29;padding:0px 10px;top:0px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	.txtl{line-height:50px;width:10%;}
	.oplist{width:100%;height:50px;background:#000;padding:0px 15px;}
	.listbox{width:30px;height:50px;line-height:50px;float:left;}
	.emptybox{width:30px;height:50px;float:left;}
	.hsborder{border-bottom:3px solid #FCD535;}
	.btmbox{width:100%;height:60px;background:#f5f5f5;}
	.orebox{width:100%;margin:0px auto;background:#f7f9fc;margin-bottom:20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);padding: 10px;border-radius: 20px 20px 0 0}
	.progress-bar{color: #000;background: linear-gradient(to right, #f77062 , #fe5196);}
	.progress{height:0.9rem;background-color: #f5f5f5;border-radius: .5rem;}
	.obbox{width:33.33%;height:80px;float:left;}
	.obbox_h{width:100%;height:40px;line-height:40px;}
	.bm20{margin-bottom:2px;}
	.infobox{width:100%;background:#f7f9fc;border-top:1px solid #f7f9fc;}
	.infobox_1{width:100%;min-height:40px;}
	.infobox_1l{width:30%;float:left;}
	.infobox_1r{width:70%;float:right;}
	.festyle{width:80px;height:30px;line-height:30px;text-align:center;border-radius:5px;float:left;}
	.feactive{border:1px solid #FCD535;}
	.fenc{border:1px solid #000000;}
	.copyurl{background: #0052fe;color: #fff;padding:5px 10px;border-radius:5px;}
	.buybtn{width:60%;height:40px;line-height:40px;background: #00b897;color: #fff;margin-top:30px;text-align:center;border-radius:5px;margin: auto}
	html, body {
		background-color: #fff;
		}
	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fl allhg" id="centerbox" style="width:80%;text-align:center;line-height:50px;">
				<span class="fcc fzmmm"><?php echo L('矿机详情');?></span>
			</div>
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>
		</div>

		<div id="zlbox" style="width:100%;height:500px;background:#121420;padding:10px 0px;margin-top:40px;">
			<div class="orebox">
				<div style="width:100%;height:120px;">
					<div style="width:30%;height:120px;line-height: 120px;float:left;text-align: center;">
						<img src="/Upload/public/<?php echo ($info["imgs"]); ?>" style="width:100%;"/>
					</div>
					<div style="width:70%;height:120px;float:left;padding:5px;">
						<p class="fzmmm fcc fw"><?php echo ($info["title"]); ?></p>
						<p class="fzmm fcc"><?php echo L('上市时间');?>：<?php echo ($info["addtime"]); ?></p>
						<p class="fzmm fcc"><?php echo L('产出币种');?>：<?php echo strtoupper($info['outcoin']);?></p>
					</div>
				</div>
				<div style="width:100%;">
					<div class="progress">
					  <div class="progress-bar" role="progressbar" style="width:<?php echo ($info['ycnum'] + $info['sellnum']) / $info['allnum'] * 100;?>%;" aria-valuenow="<?php echo ($info['ycnum'] + $info['sellnum']) / $info['allnum'] * 100;?>" aria-valuemin="0" aria-valuemax="100"><?php echo ($info['ycnum'] + $info['sellnum']) / $info['allnum'] * 100;?>%</div>
					</div>
				</div>
				<div style="width:100%;height:80px;margin-top:15px;padding:0px 15px;">
					<div class="obbox" style="width:40%;">
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo L('矿机单价');?></span>
						</div>
						<div class="obbox_h">
							<span class="fzmm fcc"><?php echo ($info["pricenum"]); ?> <?php echo strtoupper($info['pricecoin']);?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo L('矿机产权');?></span>
						</div>
						<div class="obbox_h" style="text-align:center;">
							<span class="fzmm fcc"><?php echo ($info["cycle"]); ?> <?php echo L('天');?></span>
						</div>
					</div>
					<div class="obbox" style="width:30%;">
						<div class="obbox_h" style="text-align:right;">
							<span class="fzmm fcc"><?php echo L('矿机类型');?></span>
						</div>
						<div class="obbox_h" style="text-align:right;">
						    <?php if($info["type"] == 1): ?><span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('独资机型');?></span>
						    <?php elseif($info["type"] == 2): ?>
						    <span class="fzmmm fcy" style="font-weight:bold;"><?php echo L('共享机型');?></span><?php endif; ?>
						</div>
					</div>
				</div>
				<div class="infobox">
				    <div style="width:100%;height:10px;"></div>
				    <div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('产出说明');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <?php if($info["outtype"] == 1): ?><span class="fzmm fcc"><?php echo L('按产值');?>：<?php echo ($info["dayoutnum"]); ?>USDT</span>
				            <?php elseif($info["outtype"] == 2): ?>
				            <span class="fzmm fcc"><?php echo L('按币量');?>：<?php echo ($info["dayoutnum"]); ?> <?php echo strtoupper($info['outcoin']);?></span><?php endif; ?>
				        </div>
				    </div>
				    <div style="width:100%;min-height:60px;padding:10px 0px;">
				        <div style="width:30%;height:60px;float:left;">
				            <span class="fzmm fcc"><?php echo L('矿机说明');?>：</span>
				        </div>
				        <div style="width:70%;height:60px;float:right;">
				            <span class="fzmm fcc"><?php echo ($info["content"]); ?> </span>
				        </div>
				    </div>
				    
				    <?php if($info["buyask"] == 1): ?><div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('购买条件');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <span class="fzmm fcc"><?php echo L('最低持仓');?>：<?php echo ($info["asknum"]); echo L('平台币');?></span>
				        </div>
				    </div>
				    <?php elseif($info["buyask"] == 2): ?>
				    <div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('购买条件');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <span class="fzmm fcc"><?php echo L('要求直推'); echo ($info["asknum"]); echo L('人');?></span>
				        </div>
				    </div><?php endif; ?>
				    <?php if($info["djout"] == 1): ?><div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('产币冻结');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <span class="fzmm fcc"><?php echo L('否');?></span>
				        </div>
				    </div>
				    <?php elseif($info["djout"] == 2): ?>
				    <div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('产币冻结');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <span class="fzmm fcc"><?php echo ($info["djday"]); echo L('天');?></span>
				        </div>
				    </div><?php endif; ?>
				    
				    <div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('结算说明');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <span class="fzmm fcc"><?php echo L('定期自动结算');?></span>
				            </if>
				        </div>
				    </div>
				    
				    <?php if($info["type"] == 2): ?><div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('选择份额');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <div class="festyle feactive" id="fe1btn">
				                <input type="hidden" id="fe1box" value="<?php echo ($info["fe1"]); ?>" />
				                <span class="fzmm fcy" id="fe1span"><?php echo ($info["fe1"]); ?>%</span>
				            </div>
				            <div class="festyle fenc" style="margin-left:15px;"  id="fe2btn">
				                <input type="hidden" id="fe2box" value="<?php echo ($info["fe2"]); ?>" />
				                <span class="fzmm fcc"  id="fe2span"><?php echo ($info["fe2"]); ?>%</span>
				            </div>
				        </div>
				    </div>
				    
				    <div class="infobox_1">
				        <div class="infobox_1l">
				            <span class="fzmm fcc"><?php echo L('共享链接');?>：</span>
				        </div>
				        <div class="infobox_1r">
				            <div style="width:70%;float:left;">
				                <span class="fzmm fcc"><?php echo L('修改份额后需重新复制链接');?></span>
				            </div>
				            
				            <input type="hidden" value="" id="qrcode_url">
				            <div style="width:20%;float:left;">
				                <span class="copyurl"  onclick="copyUrl()"><?php echo L('复制');?></span>
				            </div>
				        </div>
				    </div><?php endif; ?>
				    <input type="hidden" value="<?php echo ($info["fe1"]); ?>" id="cfebox" />
				    <input type="hidden" value="<?php echo ($info["id"]); ?>" id="kjid" />
				    
				    <input type="hidden" id="flag" value="1" />
				    <input type="hidden" id="sharbltxt" var="" />
				    
				    <?php if($uid <= 0): ?><div class="buybtn">
				        <span class="fzmm fe6im"><?php echo L('请先登陆');?></span>
				    </div>   
				    <?php else: ?>
				    <?php if($info["type"] == 1): ?><div class="buybtn" onclick="dzbuynow(<?php echo ($info["id"]); ?>);">
				        <span class="fzmm fe6im"><?php echo L('购买');?></span>
				    </div>
				    <?php elseif($info["type"] == 2): ?>
				    <div class="buybtn" onclick="gxbuynow(<?php echo ($info["id"]); ?>);">
				        <span class="fzmm fe6im"><?php echo L('购买');?></span>
				    </div><?php endif; endif; ?>
				    
				    
				    
				</div>
			</div>
		</div>
  

	</div>	



	
	<!--底部-->
	<div class="footer hide">

		<a href="<?php echo U('Index/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height: 35px;" >
					<?php
 if($select == 'index') { echo '<img src="/Public/Static/Icoinfont/icon/nav-1-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-1.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('首页');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('Trade/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'trade') { echo '<img src="/Public/Static/Icoinfont/icon/nav-2-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-2.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('行情');?></span>
				</div>
			</div>
		</a>

		<a href="/Trade/transinfo.html?symbol=BTC&type=buy">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'trans') { echo '<img src="/Public/Static/Icoinfont/icon/nav-3-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-3.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcy"><?php echo L('交易');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('Contract/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'contract') { echo '<img src="/Public/Static/Icoinfont/icon/nav-4-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-4.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('合约');?></span>
				</div>
			</div>
		</a>

		<a href="<?php echo U('User/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height:35px;">
					<?php
 if($select == 'user') { echo '<img src="/Public/Static/Icoinfont/icon/nav-5-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-5.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcch"><?php echo L('资产');?></span>
				</div>
			</div>
		</a>


	</div>


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    $(function(){
        var fetxt2 = $("#fe2box").val();
        var oid = $("#kjid").val();
        var domain = "http://" + window.location.host + "/Orepool/kjshare?oid="+ oid +"&fe=" + fetxt2;
        $("#qrcode_url").val(domain);
    });
</script>
<script type="text/javascript">
    function gxbuynow(id){
        var flag = $("#flag").val();
        if(flag == 2){
            return false;
        }
        
        var kid = id;
        if(kid <= 0 || kid == null){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        var gxfe = $("#cfebox").val();
        if(gxfe <= 0 || gxfe == null){
            layer.msg("<?php echo L('请选择份额');?>");return false;
        }
        var sharbltxt = $("#sharbltxt").val();
        if(sharbltxt <= 0 || sharbltxt == null){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        $("#flag").val(2);
        $.post("<?php echo U('Orepool/buygxmining');?>",
        {'kid':kid,'gxfe':gxfe,'st':8,"sharbltxt":sharbltxt},
        function(data){
            if(data.code == 1){
                layer.msg(data.msg);
                setTimeout(function(){
                    window.location.href="<?php echo U('Orepool/index');?>";
                },2000);
            }else{
                layer.msg(data.msg);
                setTimeout(function(){
                    window.location.reload();
                },2000);
            }
        });
    }
</script>
<script type="text/javascript">
    function dzbuynow(id){
        
        var flag = $("#flag").val();
        if(flag == 2){
            return false;
        }
        
        
        var kid = id;
        if(kid <= 0 || kid == null){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        $("#flag").val(2);
        $.post("<?php echo U('Orepool/buydzmining');?>",
        {'kid':kid,'st':7},
        function(data){
            if(data.code == 1){
                layer.msg(data.msg);
                setTimeout(function(){
                    window.location.href="<?php echo U('Orepool/index');?>";
                },2000);
            }else{
                layer.msg(data.msg);
                setTimeout(function(){
                    window.location.reload();
                },2000);
            }
        });
    }
</script>
<script type="text/javascript">
    function createRand(){
        var x = 100000;
        var y = 1;
        var randnum = parseInt(Math.random() * (x - y + 1) + y);
        return randnum;
    }
    $("#fe1btn").click(function(){
        $("#fe1btn").addClass("feactive");
        $("#fe1btn").removeClass("fenc");
        $("#fe1span").addClass("fcy");
        $("#fe1span").removeClass("fcc");
        
        $("#fe2btn").removeClass("feactive");
        $("#fe2btn").addClass("fenc");
        $("#fe2span").removeClass("fcy");
        $("#fe2span").addClass("fcc");
        var fetxt1 = $("#fe1box").val();
        var fetxt2 = $("#fe2box").val();
        var oid = $("#kjid").val();
        $("#cfebox").val(fetxt1);
        var randnum = createRand();
        $("#sharbltxt").val(randnum);
        var domain = "https://" + window.location.host + "/Orepool/kjshare?oid="+ oid +"&fe="+fetxt2 + "&sharbltxt=" + randnum;
        $("#qrcode_url").val(domain);
    });
    $("#fe2btn").click(function(){
        $("#fe2btn").addClass("feactive");
        $("#fe2btn").removeClass("fenc");
        $("#fe2span").addClass("fcy");
        $("#fe2span").removeClass("fcc");
        
        $("#fe1btn").removeClass("feactive");
        $("#fe1btn").addClass("fenc");
        $("#fe1span").removeClass("fcy");
        $("#fe1span").addClass("fcc");
        var fetxt1 = $("#fe1box").val();
        var fetxt2 = $("#fe2box").val();
        var oid = $("#kjid").val();
        $("#cfebox").val(fetxt2);
        var randnum = createRand();
        $("#sharbltxt").val(randnum);
        var domain = "https://" + window.location.host + "/Orepool/kjshare?oid="+ oid +"&fe="+fetxt1 + "&sharbltxt=" + randnum;
        $("#qrcode_url").val(domain);
        
    });
</script>
<script type="text/javascript">
    function copyUrl(){
        var qrcode_url=$("#qrcode_url").val();
        copy(qrcode_url);
    }

    function copy(message) {
        var input = document.createElement("input");
        input.value = message;
        document.body.appendChild(input);
        input.select();
        input.setSelectionRange(0, input.value.length), document.execCommand('Copy');
        document.body.removeChild(input);
        layer.msg("<?php echo L('复制成功');?>");
    }
</script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>