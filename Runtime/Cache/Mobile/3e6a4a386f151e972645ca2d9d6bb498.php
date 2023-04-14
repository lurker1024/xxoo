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
	    input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#fff;}
	    .lbox{width:100%;height:50px;border-bottom:1px solid #f5f5f5;}
	    .lbox_l{width:50%;height:50px;line-height:50px;float:left;text-align:left;}
	    .lbox_r{width:50%;height:50px;line-height:50px;float:right;text-align:right;}
	    .infobox{width:100%;height:400px;padding:5px 20px;margin-top:50px;}
	    .infotbox{width:100%;height:50px;line-height:50px;border-bottom:1px solid #f5f5f5;}
	</style>
</head>
<body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
        <div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fr allhg txtr" style="line-height:50px;width:10%;"></div>
		</div>
		
		<div class="infobox">
		    <div class="infotbox">
		        <span class="fcy" style="font-size:24px;font-weight:bold;">+<?php echo ($info["num"]); ?> <?php echo strtoupper($info['coin']);?></span>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('类型');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmm"><?php echo L('普通充币');?></span>
		        </div>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('状态');?></span>
		        </div>
		        <div class="lbox_r">
		            <?php if($info['status'] == 2){?>
		                <span class="fch fzmm"><?php echo L('已完成');?></span>
		            <?php }elseif($info['status'] == 3){?>
		                <span class="fch fzmm"><?php echo L('原路返回');?></span>
		            <?php }elseif($info['status'] == 1){?>
		                <span class="fch fzmm"><?php echo L('确认中');?></span>
		            <?php }?>
		        </div>
		    </div>
		    <div class="lbox">
		        <div class="lbox_l">
		            <span class="fcc fzmm"><?php echo L('时间');?></span>
		        </div>
		        <div class="lbox_r">
		            <span class="fch fzmm">2021-08-22 10:20:26</span>
		        </div>
		    </div>
		    
		    <div style="width:100%;height:200px;border-bottom:1px solid #f5f5f5;">
		        <div style="width:20%;height:200px;line-height:200px;float:left;text-align:left;">
		            <span class="fcc fzmm"><?php echo L('转账凭证');?></span>
		        </div>
		        <div style="width:80%;height:200px;line-height:200px;text-align:right;float:right;">
		            <img src="/Public/Static/payimgs/613181ded2fbf.jpg" style="height:120px;"/>
		        </div>
		    </div>
		    
		    <?php if($info['status'] == 3){ ?>
		    <div style="width:100%;height:100px;border-bottom:1px solid #f5f5f5;">
		        <div style="width:20%;height:100px;line-height:100px;float:left;text-align:left;">
		            <span class="fcc fzmm"><?php echo L('备注');?></span>
		        </div>
		        <div style="width:80%;height:100px;line-height:100px;text-align:right;float:right;">
		            <span class="fcc fzmm"><?php echo $info['msg'];?></span>
		        </div>
		    </div>
		    <?php } ?>
		    
		    
		</div>

	</div>	
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>