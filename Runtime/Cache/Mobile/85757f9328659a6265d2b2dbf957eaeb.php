<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"  style="background:#fff;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="/Public/Static/css/base2.css" />
	<link rel="stylesheet" href="/Public/Static/Icoinfont/iconfont.css">
	<script src="/Public/Static/Icoinfont/iconfont.js"></script>
	<title><?php echo ($webname); ?></title>
	<style>
	    ::-webkit-input-placeholder {color: #b5b5b5;font-size: 12px;}
	    ::-moz-placeholder {color: #b5b5b5;font-size: 12px;}
	    input:focus{background:#f5f5f5;outline: 1px solid #f5f5f5;}
	    a:hover,a:link,a:visited,a:active{color:#000000;text-decoration:none;}
        .topbox{width:100%;height:50px;padding:5px 10px;position: fixed;top: 0px;background: #121420;}
        .topbox_1{width:80%;height:40px;float:left;padding:0px 10px;}
        .topbox_1_b{width:100%;height:30px;margin-top:5px;background:#f5f5f5;border-radius:15px;padding:0px 5px;}
        .topbox_2{width:20%;height:40px;line-height:40px;float:left;text-align:center;}
        .sybolc{width:80%;height:25px;line-height:25px;margin-top:2px;border:#f5f5f5;background:#f5f5f5;}
        .topbox_1_c{width:20%;height:30px;line-height:30px;text-align:center;float:left;}
        .topbox_1_d{width:80%;height:30px;line-height:30px;float:right;}
        .lmcoin{width:20%;height:30px;line-height:30px;float:left;text-align:center;border:1px solid #00b897;border-radius:5px;margin-right:5%;background: #00b897}
        .coinlistbox{width:96%;margin-top:10px;margin:0px 2%;}
        .coinlistbox_top{width:100%;height:30px;line-height:30px;}
        .coinlistbox_info{width:100%;padding:10px 0px;;padding:5px;height:800px;}
        .coinlistbox_info_list{
            width: 100%;
            height: 60px;
            margin: 10px 0px;
            padding: 0 10px;
            background: #1b1d2a;
            border-radius: 10px;
        }

        .coinlistbox_info_list_l{width:30%;height:60px;line-height:60px;float:left;}
        .coinlistbox_info_list_c{width:50%;height:60px;line-height:60px;float:left; text-align: center}
        .coinlistbox_info_list_r{width:20%;height:60px;line-height:60px;float:right;text-align:right;}

        .coinlistbox_info_list_l img {
            width: 100%;
            margin: auto;
        }
        
	</style>
</head>
<body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;background: #121420">
        <div class="topbox">
            <div class="topbox_1" style="">
                <div class="topbox_1_b">
                    <div class="topbox_1_c">
                        <i class="bi bi-search"></i>
                    </div>
                    <div class="topbox_1_d">
                        <input type="text" oninput="findc();" id="symbol" class="sybolc" placeholder="<?php echo L('搜索您需要的币种');?>" />
                    </div>
                </div>
            </div>
            <div class="topbox_2" onclick="goback();">
                <span class="fzmmm fe6im"><?php echo L('取消');?></span>
            </div>
        </div>
        
        <div style="width:100%;height:160px;margin-top:50px;padding:10px;background: #121420;">
            <div style="width:100%;height:30px;line-height:30px;">
                <span class="fzmmm fe6im" style="padding:5px;border-bottom:3px solid #00b897;"><?php echo L('充值');?></span>
            </div>
            <div style="width:100%;height:70px;padding: 20px 20px 0 20px;">
                 <?php if(is_array($list)): foreach($list as $key=>$vo): ?><a href="<?php echo U('User/czpage');?>?id=<?php echo ($vo["id"]); ?>">
                <div class="lmcoin">
                    <span class="fzmm fe6im"><?php echo ($vo["title"]); ?></span>
                </div>
                </a><?php endforeach; endif; ?>
               
            </div>
          
        </div>
       
        
        <div class="coinlistbox">
            <div class="coinlistbox_top">
                <span class="fzmmm fe6im" style="padding:5px;border-bottom:3px solid #00b897;"><?php echo L('购买加密货币');?></span>
            </div>
            <div class="coinlistbox_info" id="coinbox">

                <a href="https://paybis.com/">
                <div class="coinlistbox_info_list">
                    <div class="coinlistbox_info_list_l">
                        <img src="/Public/Static/coin/paybis.png" alt="">
                    </div>
                    <div class="coinlistbox_info_list_c">
                        <span class="fzmm fcc">Paybis</span>
                    </div>
                    <div class="coinlistbox_info_list_r">
                        <span class="fzm fcc">Buy</span>
                        <i class="bi bi-chevron-right fcc"></i>
                    </div>
                </div>
                </a>

                <a href="https://www.binance.com/en">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/binance.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Binance</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://huobi.com/en-us/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/huobi.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Huobi</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://www.kraken.com/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/kraken.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Kraken</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://buy.ramp.network/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/ramp.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Ramp</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://banxa.com/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/banx.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Banx</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://www.simplex.com/account/buy">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/simplex.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Simplex</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://crypto.com/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/Crypto.com_Logo.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Crypto</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://www.coinbase.com/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/coinbase.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Coinbase</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://www.okx.com/hk/buy-usdt/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/okex.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Okex</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>

                <a href="https://www.bybit.com/">
                    <div class="coinlistbox_info_list">
                        <div class="coinlistbox_info_list_l">
                            <img src="/Public/Static/coin/bubit.png" alt="">
                        </div>
                        <div class="coinlistbox_info_list_c">
                            <span class="fzmm fcc">Bubit</span>
                        </div>
                        <div class="coinlistbox_info_list_r">
                            <span class="fzm fcc">Buy</span>
                            <i class="bi bi-chevron-right fcc"></i>
                        </div>
                    </div>
                </a>


            </div>
        </div>
        
	</div>	
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function findc(){
        var symbol = $("#symbol").val();
        $.post("<?php echo U('User/getsymbol');?>",
        {'symbol' : symbol},
        function(data){
            if(data.code == 1){
                $("#coinbox").empty();
                var html = '';
                if(data.info != '' || data.info != null){
                    html += '<a href="/User/czpage.html?id='+ data.info.id +'">'+
                            '<div class="coinlistbox_info_list">'+
                            '<div class="coinlistbox_info_list_l">'+
                            '<span class="fzmmm fcc">' + data.info.uname + '</span>'+
                            '</div>'+
                            '<div class="coinlistbox_info_list_c">'+
                            '<span class="fzmm fcc">' + data.info.title + '</span>'+
                            '</div>'+
                            '<div class="coinlistbox_info_list_r">'+
                            '<i class="bi bi-chevron-right fcc"></i>'+
                            '</div>'+
                            '</div>'+
                            '</a>';
                    $("#coinbox").append(html);        
                }
            }
        });
    }
</script>
<script type="text/javascript">
    function goback(){
        window.location.href = "<?php echo U('User/index');?>";
    }
</script>
</html>