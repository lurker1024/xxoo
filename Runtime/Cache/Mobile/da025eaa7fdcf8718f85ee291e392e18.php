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
		input:focus{outline:none;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;}
	    .contentbox{width:100%;height:600px;margin-top:45px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:center;}
	    .contentbox_line{width:100%;height:50px;padding: 0px 15px;}
	    .line_1{width:20%;height:50px;line-height:50px;float:left;}
	    .line_2{width:70%;height:50px;line-height:50px;float:right;text-align:right;}
        .btitle{width:100%;height:35px;line-height:35px;text-align:center;background:#fff;margin-top:10px;border-radius:15px;}
        .addbox{width:100%;height:120px;background:#fff;margin-top:20px;border-radius:15px;}
        .addressbox{width:100%;height:40px;line-height:40px;background:#f9f9f9;padding:0px 15px;border-top-left-radius:10px;border-top-right-radius:10px;}
        .address{width:100%;height:80px;margin-top:10px;padding:10px;word-wrap:break-word;word-break:normal; }
        .btnbox{width:100%;height:70px;background:#1b1d2a;position:fixed;bottom:0px;}
        .btnaddress{width:92%;height:40px;line-height:40px;background: #00b897;color: #e6e6e6;margin:0px auto;text-align:center;margin-top:15px;border-radius:10px;}
        .imgbox_1{width:100%;height:40px;line-height:40px;text-align:left;}
	    .imgbox_2{width:100%;height:30px;line-height:30px;text-align:left;}
	    .imgbox_3{width:100px;height:30px;line-height:30px;text-align:center;border:1px solid #fff;border-radius:5px;background: #fff;color: #00b897}
	    .tx_inputbox{width:100%;height:40px;background:#e6e6e6;border-radius:5px;padding:0px 10px;}
	    .tx_inputbox_l{width:100%;height:30px;margin-top:5px;float:left;line-height: 30px;}
	    .tx_inputbox_r{width:20%;height:30px;line-height:30px;margin-top:5px;float:right;text-align:right;}
	    .inputbox_r_l{width:50%;height:30px;line-height:30px;float:left;text-align:center;}
	    .inputbox_r_r{width:50%;height:30px;line-height:30px;float:right;text-align:center;}

		.addressinput {
			border: none;
			background: #e6e6e6;
			outline: none;
			color: #e6e6e6;
		}
		.showQr{
			border: 1px solid #00b897;
			background: #00b897;
			color: #e6e6e6;
		}



	</style>
</head>
<body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="contentbox_top">
				<span class="fe6im" style="font-size:18px;font-weight:500;"><?php echo L('添加提币地址');?></span>
			</div>

			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
			</div>

		</div>
		<div class="contentbox">

            <div class="contentbox_line">
		        <div class="line_1">
		            <span class="fzmmm fe6im"><?php echo L('币种');?></span>
		        </div>
		        <a href="<?php echo U('User/txcoin');?>">
		        <div class="line_2">
		            <span class="fzmmm fcy" style="font-size:18px;font-weight:bold;"><?php echo strtoupper($info['name']);?></span>
		            <span class="fzmmm fe6im">&nbsp;&nbsp;<?php echo L($info['title']);?></span>
		            <i class="bi bi-chevron-right fzmmm fcc"></i>
		        </div>
		        </a>
		    </div>
		    
		    <div style="width:100%;height:500px;background:#1b1d2a;margin-top:10px;padding:5px 15px;">
		        <div class="imgbox_1">
		            <span class="fzmmm fe6im"><?php echo L('提币网络');?></span>
		        </div>
		        <div class="imgbox_2">
		            <div class="imgbox_3 fl czline showQr" onclick="showQrCode(1, '<?php echo ($info["czline"]); ?>')">
		                <span class="fzmm "><?php echo ($info["czline"]); ?></span>
		            </div>

					<div class="imgbox_3 fl ml10 czline2" onclick="showQrCode(2, '<?php echo ($info["czline2"]); ?>')">
						<span class="fzmm "><?php echo ($info["czline2"]); ?></span>
					</div>

					<input type="hidden" id="czline" value="<?php echo ($info["czline"]); ?>">

		        </div>
		        
		        <div class="imgbox_1" style="margin-top:10px;">
		            <span class="fzmmm fe6im"><?php echo L('提币地址');?></span>
		        </div>
		        
		        <div class="tx_inputbox">
		            <div class="tx_inputbox_l">
		                <input type="text" id="address" name="address" class="addressinput" placeholder="<?php echo L('输入或长按粘贴地址');?>" style="width: 100%;" />
		            </div>
		        </div>
		        
		        <div class="imgbox_1" style="margin-top:10px;">
		            <span class="fzmmm fe6im"><?php echo L('备注');?></span>
		        </div>
		        
		        <div class="tx_inputbox">
		            <div class="tx_inputbox_l">
		                <input type="text" id="remark" name="remark" class="addressinput" placeholder="<?php echo L('请输入备注');?>" style="width: 100%;" />
		            </div>
		        </div>
		        
		    </div>
            <input type="hidden" id="oid" value="<?php echo ($info["id"]); ?>" />

		</div>
		
		<div class="btnbox">
		    <div class="btnaddress">
		        <span class="fzmm fe6im"><?php echo L('保存');?></span>
		    </div>
		</div>
		
	</div>

</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">


	function showQrCode(type, hv) {
		$('.imgbox_3').removeClass('showQr')
		$('#czline').val(hv)
		if (type == 1) {
			$('.czline').addClass('showQr');
		}else {
			$('.czline2').addClass('showQr');
		}
	}

    $(".btnaddress").click(function(){
        var address = $("#address").val();
        var remark = $("#remark").val();
        var oid = $("#oid").val();
        if(address == ""){
            layer.msg("请输入提币地址");return false;
        }
        if(remark == ''){
            layer.msg("请输入备注");return false;
        }
        if(oid <= 0){
            layer.msg("参数错误");return false;
        }
        
        $.post("<?php echo U('User/upplusaddress');?>",
        {'address':address,'remark':remark,'oid':oid},
        function(data){
            if(data.code == 1){
                layer.msg(data.msg);
                setTimeout(function(){
                    window.location.reload();
                },2000);
                
            }else{
                layer.msg(data.msg);return false;
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