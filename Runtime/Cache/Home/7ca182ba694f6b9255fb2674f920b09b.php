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
	    input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#f5f5f5;}
	    .contentbox{width:100%;margin-top:45px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:left;padding:5px 15px;}
        .listbox{width:100%;height:100px;background:#fff;border-bottom:1px solid #f5f5f5;padding:5px 15px;}
        .listbox_title{width:100%;height:30px;line-height:30px;}
        .listbox_title_l{width:50%;height:30px;float:left;text-align:left;}
        .listbox_title_r{width:50%;height:30px;float:right;text-align:right;}
	</style>
</head>
<body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
        <div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fr allhg txtr" style="line-height:50px;width:10%;"></div>
		</div>
		<div class="contentbox">
		    <div class="contentbox_top" style="position: fixed;top: 50px;background: #f5f5f5;">
		        <span style="font-size:26px;font-weight:500;"><?php echo L('合约记录');?></span>
		    </div>
		    
		    
		    
		    
		    <div style="width:100%;background:#fff;margin-top:120px;">

		        <?php if(empty($list)): ?><div class="listbox" style="border:none;">
		            <div style="width:100%;height:100px;line-height:100px;text-align:center;">
		                <span class="fzm fcc"><?php echo L('暂时没有充值记录');?></span>
		            </div>
		        </div>    
		        <?php else: ?>
		        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="listbox">
                    <div class="listbox_title">
                        <div class="listbox_title_l">
                            <span class="fcc" style="font-size:16px;font-weight:500;"><?php echo L('交易对');?>：<?php echo ($vo["coinname"]); ?></span>
                        </div>
                        <a href="<?php echo U('Contract/cbillinfo');?>?bid=<?php echo ($vo["id"]); ?>">
                        <div class="listbox_title_r">
                            <?php if($vo['status']==1){?>
                            <span class="fcc" style="font-size:14px;"><?php echo L('未结算');?></span>
                            <?php }elseif($vo['status']==2){?>
                            <span class="fcc" style="font-size:14px;"><?php echo L('结算成功');?></span>
                            <?php }elseif($vo['status']==3){?>
                            <span class="fcc" style="font-size:14px;"><?php echo L('无效结算');?></span>
                            <?php }?>
                            <i class="bi bi-chevron-right fzmmm"></i>
                        </div>
                        </a>
                    </div>
                    <div style="width:100%;height:60px;">
                        <div style="width:33.33%;height:60px;float:left;">
                            <div style="width:100%;height:30px;line-height:40px;">
                                <span style="color:#cbcbcb;"><?php echo L('投入金额');?></span>
                            </div>
                            <div style="width:100%;height:30px;line-height:30px;">
                                <span class="fch"><?php echo ($vo["num"]); ?></span>
                            </div>
                        </div>
                        <div style="width:33.33%;height:60px;float:left;">
                            <div style="width:100%;height:30px;line-height:40px;">
                                <span style="color:#cbcbcb;"><?php echo L('建仓单价');?></span>
                            </div>
                            <div style="width:100%;height:30px;line-height:30px;">
                                <span class="fch"><?php echo ($vo["buyprice"]); ?></span>
                            </div>
                        </div>
                        <div style="width:33.33%;height:60px;float:left;">
                            <div style="width:100%;height:30px;line-height:40px;text-align:right;">
                                <span style="color:#cbcbcb;"><?php echo L('建仓时间');?></span>
                            </div>
                            <div style="width:100%;height:30px;line-height:30px;text-align:right;">
                                <span class="fch"><?php echo date("m-d H:i",strtotime($vo['buytime']))?></span>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; endif; ?>
                

		        
		    </div>
		    
		    

		    <div style="width:100%;height:80px;"></div>
   
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