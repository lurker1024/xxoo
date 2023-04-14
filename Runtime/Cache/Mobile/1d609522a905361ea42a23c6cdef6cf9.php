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
	    input:focus{
			outline: none;
		}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
	    .no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;line-height: 50px;background:#121420;}
	    .contentbox{width:100%;height:600px;margin-top:45px;padding:5px 15px;}
	    .contentbox_top{width:100%;height:50px;line-height:50px;text-align:left;}
	    .contentbox_line{width:100%;height:50px;background:#1b1d2a;border-radius:10px;padding:0px 10px;}
	    .line_1{width:20%;height:50px;line-height:50px;float:left;}
	    .line_2{width:70%;height:50px;line-height:50px;float:right;text-align:right;}
	    .imgbox{width:100%;padding:10px;background:#1b1d2a;margin-top:15px;border-radius:10px;}
	    .imgbox_1{width:100%;height:40px;line-height:40px;text-align:left;}
	    .imgbox_2{width:100%;height:35px;line-height:35px;text-align:left;}
	    .imgbox_3{width:100px;height:35px;line-height:35px;text-align:center;border:1px solid #fff;border-radius:5px;background: #fff;color: #00b897}
	    .textbox{width:100%;background:#1b1d2a;margin-top:10px;border-radius:10px;padding:15px;}
	    .tx_inputbox{width:100%;height:40px;background:#e6e6e6;border-radius:10px;padding:0px 10px;}
	    .tx_inputbox_l{width:80%;height:30px;margin-top:5px;float:left;}
	    .tx_inputbox_r{width:20%;height:30px;line-height:30px;margin-top:5px;float:right;text-align:right;}
	    .inputbox_r_l{width:50%;height:30px;line-height:30px;float:left;text-align:center;}
	    .inputbox_r_r{width:50%;height:30px;line-height:30px;float:right;text-align:center;}
	    .imgbox_8{width:100%;text-align:center;}
	    .imgbox_9{width:100px;height:30px;line-height:30px;text-align:center;border-radius:5px;border:1px solid #00b897;margin:auto;background: #00b897}
	    .imgbox_10{width:100%;height:40px;line-height:40px;text-align:center;border-radius:5px;margin:auto;background: #00b897;color: #e6e6e6;}
	    .bottom_btn_box{width:100%;height:100px;background:#fff;position:fixed;bottom:0px;border-top-left-radius:15px;border-top-right-radius:15px;padding:15px;}
	    .dongbox{position:fixed;z-index:9999999999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
        .dongbox_cbox{width:75%;height:180px;background:#fff;margin:50% auto;border-radius:15px;padding:10px;}
        .showbtn{width:100%;height:40px;line-height:40px;background: #0052fe;color: #fff;border-radius:5px;text-align:center;margin-top:10px;}
        .addressinfo{width:100%;height:200px;background:#1b1d2a;margin-bottom:0px;position: fixed;bottom: 0;padding:10px 15px;border-top-right-radius:10px;border-top-left-radius:10px;}
        .addressinfo_1{width:100%;height:30px;}
        .addressinfo_2{width:50%;height:30px;line-height:30px;float:left;text-align:left;}
        .addressinfo_3{width:50%;height:30px;line-height:30px;float:right;text-align:right;}
        .addressinfo_4{width:100%;height:20px;line-height:20px;}
        .addressinfo_5{width:100%;height:90px;background: rgb(169 164 150 / 20%);margin-top:10px;border-radius:10px;border:1px solid #FCD535;padding:10px;}
        .overflow{overflow: hidden;text-overflow:ellipsis;white-space: nowrap;width:100%;height:35px;line-height:35px;}

		input::-webkit-input-placeholder {
			color: #707a8a;
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
			
			<a href="<?php echo U('User/txlist');?>">
			<div class="fr allhg txtr" style="line-height:50px;width:10%;">
				<svg t="1656750606237"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4326" width="20" height="20"><path d="M914.9 158.4H183.5c-15.2 0-27.6-12.4-27.6-27.6v-4.1c0-15.2 12.4-27.6 27.6-27.6h731.4c15.2 0 27.6 12.4 27.6 27.6v4.1c0.1 15.2-12.3 27.6-27.6 27.6zM914.9 819.9H183.5c-15.2 0-27.6-12.4-27.6-27.6v-4.1c0-15.2 12.4-27.6 27.6-27.6h731.4c15.2 0 27.6 12.4 27.6 27.6v4.1c0.1 15.2-12.3 27.6-27.6 27.6zM574.7 489.2H176.6c-11.4 0-20.7-9.3-20.7-20.7v-18.1c0-11.4 9.3-20.7 20.7-20.7h398.1c11.4 0 20.7 9.3 20.7 20.7v18.1c0 11.4-9.3 20.7-20.7 20.7z" fill="#00b897" p-id="4327"></path></svg>
			</div>
			</a>
		</div>
		<div class="contentbox">
		    <div class="contentbox_top">
		        <span class="fe6im" style="font-size:18px;font-weight:500;"><?php echo L('提币');?></span>
		    </div>

		    <div class="contentbox_line">
		        <div class="line_1">
		            <span class="fzmmm fe6im"><?php echo L('币种');?></span>
		        </div>
		        <a href="<?php echo U('User/txcoin');?>">
		        <div class="line_2">
		            <span class="fzmmm fe6im" style="font-size:18px;font-weight:bold;"><?php echo strtoupper($info['name']);?></span>
		            <span class="fzmmm fe6im">&nbsp;&nbsp;<?php echo L($info['title']);?></span>
		            <i class="bi bi-chevron-right fzmmm fcc"></i>
		        </div>
		        </a>
		    </div>
		    
		    <div class="imgbox">
		        <div class="imgbox_1">
		            <span class="fzmmm fe6im"><?php echo L('提币网络');?></span>
		        </div>
		        <div class="imgbox_2">
		            <div class="imgbox_3 fl czline showQr" onclick="showQrCode(1, '<?php echo ($info["czline"]); ?>')">
		                <span class="fzmm"><?php echo ($info["czline"]); ?></span>
		            </div>

					<?php if(empty($info["czline2"])): else: ?>
						<div class="imgbox_3 fl czline2 ml10" onclick="showQrCode(2, '<?php echo ($info["czline2"]); ?>')">
							<span class="fzmm"><?php echo ($info["czline2"]); ?></span>
						</div><?php endif; ?>
					<input type="hidden" id="czline" value="<?php echo ($info["czline"]); ?>">
		        </div>
		        
		        <div class="imgbox_1" style="margin-top:10px;">
		            <span class="fzmmm fe6im"><?php echo L('提币地址');?></span>
		        </div>
		        
		        <div class="tx_inputbox">
		            <div class="tx_inputbox_l">
		                <input type="text" id="address" name="address" placeholder="<?php echo L('输入或长按粘贴地址');?>" style="background:#e6e6e6;border:1px solid #e6e6e6;width: 100%;height:30px;" />
		            </div>
		            <div class="tx_inputbox_r">
		                <i class="bi bi-journal-text " id="showdongbtn" style="font-size:18px;color: #444545"></i>
		            </div>
		        </div>
		        
		        <div class="imgbox_1" style="margin-top:10px;">
		            <div style="width:30%;height:40px;line-height:40px;float:left;">
		                <span class="fzmmm fe6im"><?php echo L('提币数量');?></span>
		            </div>
		            <div style="width:70%;height:40px;line-height:40px;float:right;text-align:right;">
		                <span class="fzm fcc"><?php echo L('可用');?>&nbsp;&nbsp;</span>
		                <span class="fzm fcc"><?php echo ($money); ?></span>
		                <span class="fzm fcc"><?php echo strtoupper($info['name']);?></span>
		            </div>
		        </div>


		        <input type="hidden" id="usermoney" value="<?php echo ($money); ?>" />
		        <input type="hidden" id="txminnum" value="<?php echo ($info["txminnum"]); ?>" />
		        <input type="hidden" id="txsxf" value="<?php echo ($info["txsxf"]); ?>" />
		        <input type="hidden" id="txsxf_n" value="<?php echo ($info["txsxf_n"]); ?>" />
		        <input type="hidden" id="sxftype" value="<?php echo ($info["sxftype"]); ?>" />
		        
		        <input type="hidden" id="tbid" value="<?php echo ($info["id"]); ?>" />
		        <input type="hidden" id="tbaddre" value="<?php echo ($adrinfo["addr"]); ?>" />
		        <div class="tx_inputbox">
		            <div class="tx_inputbox_l" style="width:65%;">
		                <input type="text" id="tbnum" onblur="changenum();" name="tbnum" placeholder="<?php echo L('输入提币数量');?>" style="background:#e6e6e6;border:1px solid #e6e6e6;height: 30px;" autocomplete="off" step="1"  min="0" onkeyup="this.value= this.value.match(/\d+(\.\d{0,2})?/) ? this.value.match(/\d+(\.\d{0,2})?/)[0] : ''" />
		            </div>
		            <div class="tx_inputbox_r" style="width:35%;">
		                <div class="inputbox_r_l">
		                    <span class="fzmmm fcc"><?php echo strtoupper($info['name']);?></span>
		                </div>
		                <div class="inputbox_r_r" id="allmoneybtn">
		                    <span class="fzmmm fcc"><?php echo L('全部');?></span>
		                </div>
		            </div>
		        </div>

				<div class="imgbox_1" style="margin-top:10px;">
					<span class="fzmmm fe6im"><?php echo L('提现密码');?></span>
				</div>

				<div class="tx_inputbox">
					<div class="tx_inputbox_l">
						<input type="password" id="paypwd" name="paypwd" placeholder="<?php echo L('提现密码');?>" style="background:#e6e6e6;border:1px solid #e6e6e6;width: 100%;height:30px;color: #707a8a" />
					</div>
				</div>

				<input type="hidden" id="flag" value="1" />
		        <div class="imgbox_8" style="margin-top:20px;">
		            <div class="imgbox_10" id="sumbtn">
		                <span class="fzmm"><?php echo L('提交');?></span>
		            </div>
		        </div>
		        
		        <div class="imgbox_1">
		            <div style="width:50%;height:40px;line-height:40px;float:left;">
		                <span class="fzm fcc"><?php echo L('实际到账');?></span>
		            </div>
		            <div style="width:50%;height:40px;line-height:40px;float:right;text-align:right;">
		                <span class="fzm fcc" id="tmoney">0.000000</span>
		                <span class="fzm fcc">&nbsp;&nbsp;<?php echo strtoupper($info['name']);?></span>
		            </div>
		        </div>
		        

		    </div>
		    
		    <div class="textbox">
		        <p class="fzm" style="color:red;"><?php echo L('最小提币数量');?>：<?php echo strtoupper($info['txminnum']); echo strtoupper($info['name']);?>，<?php echo L('小于最小金额的提币将不会到账且无法退回');?></p>
		        <p class="fzm fe6im"><?php echo L('为保障资金安全，当您账户安全策略变更，密码修改，我们会对提币进行人工审核，请耐心等待工作人员电话或邮件联系.');?></p>
		        <p class="fzm fe6im"><?php echo L('请务必确认电脑及浏览器安全，防止信息被篡改或泄露');?></p>
		    </div>

		    <div style="width:100%;height:30px;"></div>
   
		</div>
	</div>
	
<!---地址弹窗--->	
<div class="dongbox" id="addressbox" style="display:none;">
    <div class="addressinfo">
        <div class="addressinfo_1">
            <div class="addressinfo_2">
                <span class="fzmmm fe6im"><?php echo L('选择'); echo strtoupper($info['name']); echo L('地址');?></span>
            </div>
            <div id="hideaddress" class="addressinfo_3">
                <span class="fzmm fcc"><?php echo L('关闭');?></span>
            </div>
        </div>
        <a href="<?php echo U('User/txaddlist');?>?id=<?php echo ($info["id"]); ?>">
        <div class="addressinfo_4">
            <span class="fzm fe6im"><?php echo L('地址管理');?></span>
            <i class="bi bi-chevron-right fe6im"></i>
        </div>
        </a>
        
        <div class="addressinfo_5" id="tbadressbtn">
            <div class="overflow">
                <i class="bi bi-file-richtext fe6im fzmmm"></i>
                <span class="fzmm fe6im" id="address_remark"><?php echo ($adrinfo["remark"]); ?></span>
            </div>
            <div class="overflow">
                <i class="bi bi-link-45deg fe6im fzmmm"></i>
                <span class="fzmm fe6im" id="address_addr"><?php echo ($adrinfo["addr"]); ?></span>
            </div>
        </div>
        
    </div>
</div>
	<!---提醒弹窗--->
<div class="dongbox" id="dongbox" style="display:none;">
    <div class="dongbox_cbox">
        <div style="width:100%;height:50px;line-height:50px;text-align:center;">
            <i class="bi bi-exclamation-circle-fill fe6im" style="font-size:26px;"></i>
        </div>
        <div style="width:100%;height:50px;padding:5px 10px;">
            <span class="fzmm f444545"><?php echo L('暂时没有已保存地址');?></span>
        </div>
        
        <div style="width:100%;height:40px;line-height:40px;">
            <div class="showbtn" id="hidebtn" style="width:45%;float:left;background:#f5f5f5;">
                <span class="fzmm f444545"><?php echo L('取消');?></span>
            </div>
            <a href="<?php echo U('User/txaddlist');?>?id=<?php echo ($info["id"]); ?>">
            <div class="showbtn" id="add_address" style="width:45%;float:right;">
                <span class="fzmm fe6im"><?php echo L('去添加');?></span>
            </div>
            </a>
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


    function changenum(){
        var tbnum = parseFloat($("#tbnum").val());
        if(tbnum <= 0){
            layer.msg("<?php echo L('请输入正确的数量');?>");return false;
        }
        var txminnum = parseFloat($("#txminnum").val());
        if(tbnum < txminnum){
            layer.msg("<?php echo L('不能低于最小提币值');?>");return false;
        }
        var sxftype = $("#sxftype").val();
        var txsxf_n = $("#txsxf_n").val();
        
        var txsxf = $("#txsxf").val();
        if(sxftype == 1){
            var tmoney = tbnum - tbnum * txsxf / 100;
        }else if(sxftype == 2){
            var tmoney = tbnum - txsxf_n;
        }else{
            layer.msg("<?php echo L('参数错误');?>");return false;
        }

        $("#tmoney").text(tmoney);
  
    }
</script>
<script type="text/javascript">
    $("#sumbtn").click(function(){
        var flag = $("#flag").val();
        if(flag == 2){
            return false;
        }
        var address = $("#address").val();
        var num = parseFloat($("#tbnum").val());
        var txminnum = parseFloat($("#txminnum").val());
        var paypwd = $("#paypwd").val();
        var id = $("#tbid").val();
		var czline = $("#czline").val();
        if(id <= 0 || czline == ''){
            layer.msg("<?php echo L('参数错误');?>");return false;
        }
        if(address == '' || address == null){
            layer.msg("<?php echo L('请输入提币地址');?>");return false;
        }
		if(paypwd == '' || paypwd == null){
			layer.msg("<?php echo L('请输入提现密码');?>");return false;
		}
        if(num <= 0){
            layer.msg("<?php echo L('请输入正确的数量');?>");return false;
        }
        if(num < txminnum){
            layer.msg("<?php echo L('不能低于最小提币值');?>");return false;
        }
        $("#flag").val(2);
        $.post("<?php echo U('User/tbhandle');?>",
        {'address':address,'num':num,'id':id,'paypwd':paypwd,'czline':czline},
        function(data){
            if(data.code == 1){
                layer.msg(data.info);
                setTimeout(function(){
                    window.location.href = "<?php echo U('User/txlist');?>";
                },2000);
            }else{
                layer.msg(data.info);return false;
            }
        });
    });
</script>
<script type="text/javascript">
   $("#tbadressbtn").click(function(){
       var tbaddress = $("#tbaddre").val();
       $("#addressbox").hide();
       $("#address").val(tbaddress);
   });
   $("#hideaddress").click(function(){
       $("#addressbox").hide();
   });
   $("#showdongbtn").click(function(){
       var id = $("#tbid").val();
       $.post("<?php echo U('User/getaddress');?>",
       {'id' : id},
       function(data){
           if(data.code == 1){
               $("#addressbox").show();
           }else{
               $("#dongbox").show();
           }
       }
       );
   });

   $("#hidebtn").click(function(){
       $("#dongbox").hide();
   });
   
   
   
   $("#allmoneybtn").click(function(){
       var usermoney = parseFloat($("#usermoney").val());
       var txsxf = $("#txsxf").val();
       var txminnum = parseFloat($("#txminnum").val());
       if(usermoney < txminnum){
           layer.msg("<?php echo L('请输入正确的数量');?>");return false;
       }
       var tmoney = usermoney - usermoney * txsxf / 100
       $("#tmoney").text(tmoney);
       $("#tbnum").val(usermoney);
   });
</script>

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
</html>