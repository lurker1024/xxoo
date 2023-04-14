<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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
	.no_header{position: fixed;z-index: 9999;padding:0px 10px;top:0px;background: #1b1d29;}
	.txtl{line-height:50px;width:10%;}
	.findbox{width:90%;height:40px;margin:0px auto;background:#ebecf0;border-radius:20px;}
	.findbox_l{width:15%;height:40px;line-height:40px;float:left;text-align: center;}
	.findbox_r{width:80%;height:40px;line-height:40px;float:right;}
	.symbol_t{height:30px;border:none;background: #ebecf0;}
	.titlebox{width:100%;height:40px;position: fixed;z-index: 9999;top:0px;background: #121420}
	.txt_style{display:inline-block;height:40px;line-height:40px;border-bottom:3px solid #3db485;color:#e6e6e6;font-size: 18px;font-weight: bold;}
	.symboltitle{width:100%;height:50px;background:#1b1d29;border-top-right-radius:10px;border-top-left-radius:10px;position: fixed;z-index: 9999;top:40px;padding: 0px 15px;}
	.listbox{width:100%;background: #1b1d29;margin-top:80px;z-index: -9999;padding: 0px 10px;min-height:100vh;}
	.stitle_l{width:30%;height:50px;line-height:60px;float:left;text-align: left;}
	.stitle_c{width:40%;height:50px;line-height:60px;float:left;text-align: center;}
	.stitle_r{width:30%;height:50px;line-height:60px;float:left;text-align: right;}
	.emptybox{width:100%;background:#272936;height:11px;}
    .bgfcc{background:#f5f5f5;}
	.bgreen{background:#1e363a;}
	.bred{background:#3b2937;color: #f5465c !important;}
    .green{color:#0ecb81;}
    .red{color:#f5465c;}
    .list_open{width:40%;height:50px;line-height:50px;float:left;text-align:center;}
    .list_cname{width:30%;height:50px;line-height:50px;float:left;}
    .list_change{width:30%;height:50px;line-height:50px;float:left;text-align:right;}
	</style>
  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">

		
		<div class="titlebox">
			<div style="width:100%;padding:0px 15px;">
				<span class="txt_style fzmmm fe6"><?php echo L('USDT市场');?></span>
			</div>
		</div>
		
		<div class="symboltitle">
			<div class="stitle_l">
				<span class="fcc fzmmm "><?php echo L('交易对');?></span>
			</div>
			<div class="stitle_c">
				<span class="fcc fzmmm"><?php echo L('最新价格');?></span>
			</div>
			<div class="stitle_r">
				<span class="fcc fzmmm"><?php echo L('24h涨跌');?></span>
			</div>
		</div>

		<div class="listbox">

	<?php $MBN1= M("issue")->where(["id"=>3])->find(); ?>
			<div class="emptybox"></div>
            <div style="width:100%;" id="tradebox">
                    <a href="/Issue/details?id=3">
		            <div style="width:100%;height:50px;">
                        <div class="list_cname">
                            <span  class="fzmmm fw fe6 cn_mbn">MORBION</span>
                        </div>
                        <div class="list_open cpr_mbn">
                            <span  class='f14 fgreen fw' ><?php echo ($MBN1["price"]); ?></span></div>
                        <div class="list_change cch_mbn">
                            <span  class='fzmm bgreen ' style='color:#3db485;border-radius: 2px;width:70px;height:35px;line-height:35px;text-align:center;display:inline-block;'>+<?php echo ($MBN1["lixi"]); ?>%</span>
                        </div>
                    </div>
                    </a>
                 <?php if(is_array($market)): foreach($market as $key=>$vo): ?><a href="/Trade/trans.html?sytx=<?php echo strtoupper($vo['coinname']);?>/USDT">
		            <div style="width:100%;height:50px;">
                        <div class="list_cname">
                            <span  class="fzmmm fw fe6 cn_<?php echo ($vo["coinname"]); ?>"><?php echo strtoupper($vo['coinname']);?>/USDT</span>
                        </div>
                        <div class="list_open cpr_<?php echo ($vo["coinname"]); ?>">
                            <span  class='fzmmm fcc'>--.--</span></div>
                        <div class="list_change cch_<?php echo ($vo["coinname"]); ?>">
                            <span  class='fzmm bgreen ' style='color:#3db485;border-radius: 2px;width:70px;height:35px;line-height:35px;text-align:center;display:inline-block;'>0%</span>
                        </div>
                    </div>
                    </a><?php endforeach; endif; ?>
                
            </div>

			<div style="width:100%;height:60px;"></div>
		</div>

	</div>	

    
	
	<!--底部-->
	<div class="footer">

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
					<span class="fzm fcy"><?php echo L('行情');?></span>
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
					<span class="fzm fcch"><?php echo L('交易');?></span>
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
<script src="https://cdn.staticfile.org/pako/1.0.10/pako.min.js"></script>
<script src="https://cdn.staticfile.org/Base64/1.0.2/base64.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
<script type="text/javascript">
    function obtain_btc(){
        var coin = "btc";
        var nameclass = ".cn_btc";
        var priceclass = ".cpr_btc";
        var changeclass = ".cch_btc";
        $.post("<?php echo U('Ajaxtrade/obtain_btc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                console.log(data);
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_eth(){
        var coin = "eth";
        var nameclass = ".cn_eth";
        var priceclass = ".cpr_eth";
        var changeclass = ".cch_eth";
        $.post("<?php echo U('Ajaxtrade/obtain_eth');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>

<script type="text/javascript">
    function obtain_eos(){
        var coin = "eos";
        var nameclass = ".cn_eos";
        var priceclass = ".cpr_eos";
        var changeclass = ".cch_eos";
        $.post("<?php echo U('Ajaxtrade/obtain_eos');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>

<script type="text/javascript">
    function obtain_doge(){
        var coin = "doge";
        var nameclass = ".cn_doge";
        var priceclass = ".cpr_doge";
        var changeclass = ".cch_doge";
        $.post("<?php echo U('Ajaxtrade/obtain_doge');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_bch(){
        var coin = "bch";
        var nameclass = ".cn_bch";
        var priceclass = ".cpr_bch";
        var changeclass = ".cch_bch";
        $.post("<?php echo U('Ajaxtrade/obtain_bch');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_ltc(){
        var coin = "ltc";
        var nameclass = ".cn_ltc";
        var priceclass = ".cpr_ltc";
        var changeclass = ".cch_ltc";
        $.post("<?php echo U('Ajaxtrade/obtain_ltc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_iota(){
        var coin = "iota";
        var nameclass = ".cn_iota";
        var priceclass = ".cpr_iota";
        var changeclass = ".cch_iota";
        $.post("<?php echo U('Ajaxtrade/obtain_iota');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_fil(){
        var coin = "fil";
        var nameclass = ".cn_fil";
        var priceclass = ".cpr_fil";
        var changeclass = ".cch_fil";
        $.post("<?php echo U('Ajaxtrade/obtain_fil');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_flow(){
        var coin = "flow";
        var nameclass = ".cn_flow";
        var priceclass = ".cpr_flow";
        var changeclass = ".cch_flow";
        $.post("<?php echo U('Ajaxtrade/obtain_flow');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_jst(){
        var coin = "jst";
        var nameclass = ".cn_jst";
        var priceclass = ".cpr_jst";
        var changeclass = ".cch_jst";
        $.post("<?php echo U('Ajaxtrade/obtain_jst');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_itc(){
        var coin = "itc";
        var nameclass = ".cn_itc";
        var priceclass = ".cpr_itc";
        var changeclass = ".cch_itc";
        $.post("<?php echo U('Ajaxtrade/obtain_itc');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_ht(){
        var coin = "ht";
        var nameclass = ".cn_ht";
        var priceclass = ".cpr_ht";
        var changeclass = ".cch_ht";
        $.post("<?php echo U('Ajaxtrade/obtain_ht');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html(data.cname);
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
    function obtain_usdz(){
        var coin = "usdz";
        var nameclass = ".cn_usdz";
        var priceclass = ".cpr_usdz";
        var changeclass = ".cch_usdz";
        $.post("<?php echo U('Ajaxtrade/obtain_usdz');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html("USDZ/USDT");
                $(priceclass).html(data.open);
                $(changeclass).html(data.change);
            }else{
                console.log(data.info);return false;
            }
        }
        );
    }
</script>
<script type="text/javascript">
     $(function(){
        //obtain_btc();
        // setInterval("obtain_btc()",2000); 
        // //obtain_eth();
        // setInterval("obtain_eth()",3000); 
        // obtain_eos();
        // setInterval("obtain_eos()",5000);
        // obtain_doge();
        // setInterval("obtain_doge()",7000);
        // obtain_bch();
        // setInterval("obtain_bch()",9000);
        // obtain_ltc();
        // setInterval("obtain_ltc()",11000);
        
        // obtain_iota();
        // setInterval("obtain_iota()",13000);
        
        // obtain_fil();
        // setInterval("obtain_fil()",15000);
        
        // obtain_flow();
        // setInterval("obtain_flow()",17000);
        
        // obtain_jst();
        // setInterval("obtain_jst()",19000);
        
        // obtain_itc();
        // setInterval("obtain_itc()",21000);
        
        // obtain_ht();
        // setInterval("obtain_ht()",23000);
        
        //  obtain_usdz();
        //  setInterval("obtain_usdz()",25000);
        //getallsymbol();
        //setInterval("getallsymbol()",2000); 
    });
</script>


<script type="text/javascript">
    let hburl = "wss://api.huobi.pro/ws";  // 实时币种价格
    let requestK = { // 请求对应信息的数据
     "sub": "market.btcusdt.kline.1day"
    };
    
    let subK = {
     "sub": "market.ethusdt.kline.1day"
    };
    let subK1 = {
     "sub": "market.bchusdt.kline.1day"
    };
    
    let subK2 = {
     "sub": "market.eosusdt.kline.1day"
    };
    let subK3 = {
     "sub": "market.dogeusdt.kline.1day"
    };
    let subK4 = {
     "sub": "market.ltcusdt.kline.1day"
    };


    
    
    let socketK = new WebSocket(hburl);
    socketK.onopen = function () {
        console.log("connection establish");
        socketK.send(JSON.stringify(subK));
        socketK.send(JSON.stringify(requestK));
        socketK.send(JSON.stringify(subK1));
        socketK.send(JSON.stringify(subK2));
        socketK.send(JSON.stringify(subK3));
        socketK.send(JSON.stringify(subK4));
    };
    socketK.onmessage = function (event) {
        let blob = event.data;
        let reader = new FileReader();
        reader.onload = function (e) {
            let ploydata = new Uint8Array(e.target.result);
            let msg = pako.inflate(ploydata, {to: "string"});
            handleData(msg);
        };
        reader.readAsArrayBuffer(blob, "utf-8");
    };
    socketK.onclose = function () {
        console.log("connection closed");
    };
// 处理接收到的信息
function handleData(msg) {
    let data = JSON.parse(msg);
    if (data.ping) {
        // 如果是 ping 消息
        sendHeartMessage(data.ping);
    } else if (data.status === "ok") {
        // 响应数据
        handleReponseData(data);
    } else {
        // 数据体
        // console.log(data)
        if(data.ch=='market.ethusdt.kline.1day'){
                $("#eth_coin_box").html('ETH/USDT');
                $('.cn_eth').html('ETH/USDT');
                if(data.tick.close>data.tick.open){
                  
                    $('.cpr_eth').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                    $("#eth_money_box").html('<span class="red" style="font-size:16px;font-weight: 500;">'+data.tick.close+'</span> ');
                    $('.cpr_eth').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                if(fd2>=0){
                    
                    $('.cch_eth').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
                    
                    $('.cch_eth').html("<span  class='fzmm bred market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }
                

                
    //             $("#bch_coin_box").html(data.bchcoin);
    //             $("#bch_money_box").html(data.bchnewprice);
    //             $("#bch_change_box").html(data.bchchange);            
        }else if(data.ch=='market.btcusdt.kline.1day'){
                console.log(data);
                //波动btc
                $('.cn_btc').html('BTC/USDT');
                $("#btc_coin_box").html('BTC/USDT');
                
                if(data.tick.close>data.tick.open){
                 
                    $('.cpr_btc').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                  
                     $('.cpr_btc').html("<span  class='f14 fred fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=(fd/data.tick.open*100);
                if(fd2>=0){
                  
                    $('.cch_btc').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
               
                    $('.cch_btc').html("<span  class='fzmm bred market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }            
        }else if(data.ch=='market.bchusdt.kline.1day'){
                $('.cn_bch').html('BCH/USDT');
                
                if(data.tick.close>data.tick.open){
                    $('.cpr_bch').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                    $('.cpr_bch').html("<span  class='f14 fred fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                if(fd2>=0){
                    $('.cch_bch').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
                    $('.cch_bch').html("<span  class='fzmm bred market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }             
            
            
            
            
            
        }else if(data.ch=='market.eosusdt.kline.1day'){
                $('.cn_eos').html('EOS/USDT');
                
                if(data.tick.close>data.tick.open){
                    $('.cpr_eos').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                    $('.cpr_eos').html("<span  class='f14 fred fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                if(fd2>=0){
                    $('.cch_eos').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
                    $('.cch_eos').html("<span  class='fzmm bred market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }             
            
            
            
            
            
        }else if(data.ch=='market.dogeusdt.kline.1day'){
                $('.cn_doge').html('DOGE/USDT');
                
                if(data.tick.close>data.tick.open){
                    $('.cpr_doge').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                    $('.cpr_doge').html("<span  class='f14 fred fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                if(fd2>=0){
                    $('.cch_doge').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
                    $('.cch_doge').html("<span  class='fzmm bred market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }             
            
            
            
            
            
        }else if(data.ch=='market.ltcusdt.kline.1day'){
                $('.cn_ltc').html('DOGE/USDT');
                
                if(data.tick.close>data.tick.open){
                    $('.cpr_ltc').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                    $('.cpr_ltc').html("<span  class='f14 fred fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                if(fd2>=0){
                    $('.cch_ltc').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
                    $('.cch_ltc').html("<span  class='fzmm bred market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }             
            
            
            
            
            
        }
        
        
        
        
        
    }
}
    // 发送响应信息
    function sendHeartMessage(ping) {
        socketK.send(JSON.stringify({"pong": ping}));
    }
    
    function handleReponseData(data) {
    }

    // 解压
    function unzip(b64Data) {
        let strData = atob(b64Data);
        const charData = strData.split('').map(function (x) {
            return x.charCodeAt(0);
        });
        const binData = new Uint8Array(charData);
        const data = pako.inflate(binData);
        strData = String.fromCharCode.apply(null, new Uint16Array(data));
        return decodeURIComponent(strData);
    }

    // 压缩
    function zip(str) {
        const binaryString = pako.gzip(encodeURIComponent(str), {to: 'string'})
        return btoa(binaryString);
    }
</script>

</html>