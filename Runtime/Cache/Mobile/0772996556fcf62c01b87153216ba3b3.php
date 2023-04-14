<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" style="background:#121420;">
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
	.no_header{position: fixed;z-index: 9999;background:#121420;padding:0px 10px;top:0px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);}
	.txtl{line-height:50px;width:10%;}
	.klinebox{width:100%;height:90vh;margin-top:15px;background:#1b1d29}
	.klinetitle{width:100%;height:80px;background:#1b1d29;padding:20px 20px;box-shadow: 0 2px 10px 0 rgb(0 0 0 / 5%);}

	.klinetitle_l{width:45%;height:80px;float:left;}
	.klinetitle_r{width:55%;height:80px;float:left;}
	.newpricebox{height:40px;line-height:60px;margin-bottom:0px;color:#2ebd85;font-size:22px;font-weight:bold;}
	.changebox{height:40px;line-height:40px;margin-bottom:0px;color:#2ebd85;font-weight:bold;}
	.klr3_box{width:100%;height:30px;}
	.klr2_box{width:100%;height:25px;}
	.klr3_box_dl{width:45%;height:30px;line-height:40px;float:left;text-align:left;}
	.klr3_box_dr{width:55%;height:30px;line-height:40px;float:right;text-align:right;}
	.klr2_box_dl{width:45%;height:25px;line-height:25px;float:left;text-align:left;}
	.klr2_box_dr{width:55%;height:25px;line-height:25px;float:right;text-align:right;}
	.dongbox{position:fixed;z-index:9999;display:none;top:0px;width:100%;height:100vh;background:rgba(18,20,32,0.9);}
	.dong_con{
		width: 80%;
		height: 100vh;
		background: #212332;
		padding: 20px 15px 10px 20px;
		float: left;
	}
	.dong_title{width:100%;height:40px;line-height:40px;}
	.dong_title_span{font-size:18px;font-weight:bold;}
	.dong_find_box{width:100%;height:30px;background:#f5f5f5;border-radius:10px;}
	.dong_find_box_img{width:20%;height:30px;line-height:30px;float:left;text-align:center;}
	.dong_input_box{width:80%;height:30px;float:left;}
	.dong_symbox{width:90%;height:20px;border:none;background:#f5f5f5;margin-top:5px;}
	.dong_sel_box{width:100%;height:30px;border-bottom:1px solid #272936;}
	.dong_sel_span{display:block;width:35px;height:30px;line-height:30px;border-bottom:2px solid #FCD535;font-size:14px;text-align:center;font-size:14px;}
	.symbol_list{width:100%;height:80vh;overflow-y: scroll;margin-top:10px;}
	.sy_list_box{width:100%;height:50px;}
	.sy_list_boxl{width:35%;height:30px;line-height:30px;float:left;text-align:left;}
	.sy_list_boxr{width:30%;height:30px;line-height:30px;float:right;text-align:center;}
	.btnbox{width:100%;height:60px;padding: 10px 25px 10px 25px;position: fixed;bottom: 0px;background: #222430;border-radius: 20px 20px 0px 0px;}
	.btnbox_l{width:45%;height:40px;line-height:40px;float:left;text-align:center;border-radius:10px;background:#0ecb81;}
	.btnbox_r{width:45%;height:40px;line-height:40px;float:right;text-align:center;border-radius:10px;background:#f5465c;}
	.sy_list_boxl span {
		color: #e6e6e6 !important;
	}
	.dong_order_c{
		width: 100%;
		height: 580px;
		background: #2a405c;
		margin: 0px auto;
		border-radius: 20px 20px 0 0;
		padding: 10px;
		position: fixed;
		/*bottom: -600px;*/
		bottom: 0px;
		/*transition: all 3s;*/
		/*-webkit-transition: all 3s;*/
	}

	.dong_order_c.dong_order_h{
		bottom: 0px;
	}

	.dong_order_x{width:100%;height:20px;line-height:20px;text-align:right;}
	.dong_order_title{width:100%;height:30px;line-height:20px;border-bottom: 1px solid #d6d6d9;}
	.dong_order_option{width:100%;height:80px;;overflow: hidden;overflow-x: scroll;margin-top:5px;scrollbar-face-color: #fff}
	.dong_order_option_list{width:83px;height:65px;background:#1eb585;float:left;margin-right:10px;border-radius:10px;padding:5px;}
	.option_list_active{border:1px solid #FCD535;}
	.dong_order_p{width:100%;margin-bottom: 0.5rem;margin-top:10px;padding-left:5px;}
	.dong_money_list{width:100%;height:40px;}
	.dong_money_list_box{width:70%;height:65px !important;float:left;overflow: hidden;overflow-x: scroll;height:50px; }
	.dong_money_list_box_l{width:2000px;height:50px;}
	.dong_money_list_box_option{width:68px;height:50px;line-height:40px;background:#1eb585;float:left;margin-right:5px;border-radius:5px;text-align:center;}
	.green{color:#0ecb81;}
    .red{color:#f5465c;}
    .circle_box{position: relative;left: 0;right: 0;top: 5px;bottom: 120px;margin: auto;width: 110px;height: 127px;box-sizing: content-box;}
    /*倒计时圆形进度条*/
    .circle_wrapper {
        /*position: relative;*/
        /*left: 0;*/
        /*right: 0;*/
        /*top: 5px;*/
        /*bottom: 120px;*/
        margin: auto;
        width: 150px;
        height: 150px;
        box-sizing: content-box;
    }

	.bi-x::before {
		color: #707a8a;
	}
    
    .right_circle,.left_circle {
        position: absolute;
        width: 110px;
        height: 110px;
        overflow: hidden;
        top: 8px;
    }
    .right_circle {
        right: -50%;
    }
    .left_circle {
        left: -50%;
    }
    .right_circle > img {
        width: 100%;
        position: absolute;
        right: 50%;
        -webkit-animation: run 5s linear;
        animation-fill-mode: forwards;
    
    }
    @-webkit-keyframes run{
        0{
            transform: rotate(0);
        }
        50%{
            transform: rotate(180deg);
        }
        100% {
            transform: rotate(180deg);
        }
    }
    .left_circle > img {
        width: 100%;
        position: absolute;
        left: 50%;
        -webkit-animation: runaway 5s linear;
        animation-fill-mode: forwards;
    }
    @-webkit-keyframes runaway{
        0{
            transform: rotate(0);
        }
        50%{
            transform: rotate(0);
        }
        100% {
            transform: rotate(180deg);
        }
    }
    
    .count_remaining {
        margin-top: -128px !important;
    }
    .remaining {
        position: relative;
        height: 138px;
    }
    .row {
        padding-top: 10px !important;
    }
    .remaining > .col {
        color: red;
        font-size: 40px;
        text-align: center;
        height: 105px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .remaining > div >div:nth-of-type(1) {
        font-size: 40px;
        color: #fdbe19;
        text-align: center;
        margin-top: 10px;
    }
    .remaining > div >div:nth-of-type(2) {
        font-size: 12px;
        color: #6d6d6d;
        text-align: center;
    }
    .remaining > div >div:nth-of-type(3) {
        font-size: 14px;
        color: #fa2e42;
        text-align: center;
    }

	.fe6{

	}
		.jine-box {
			line-height: 0px;
			margin-top: 16px;
		}

		.dong_order_option::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 5px rgba(9, 74, 238, 0.7);
			/* border-radius: 0; */
			background: rgba(0, 0, 0, 0.1);
		}

		.xj-box span{
			font-size: 16px !important;
		}

	.wtlistbox {
		width: 100%;
		padding: 0px;
		background: #121420;
	}

	.noordersvg {
		margin: 0 auto;
		padding-top: 100px;
	}

	</style>

	  <style>
		  body {
			  font-family: sans-serif;
			  display: grid;
			  height: 100vh;
			  place-items: center;
		  }

		  .base-timer {
			  position: relative;
			  width: 150px;
			  height: 150px;
		  }

		  .base-timer__svg {
			  transform: scaleX(-1);
		  }

		  .base-timer__circle {
			  fill: none;
			  stroke: none;
		  }

		  .base-timer__path-elapsed {
			  stroke-width: 7px;
			  stroke: #768da9;
		  }

		  .base-timer__path-remaining {
			  stroke-width: 7px;
			  stroke-linecap: round;
			  transform: rotate(90deg);
			  transform-origin: center;
			  transition: 1s linear all;
			  fill-rule: nonzero;
			  stroke: currentColor;
		  }

		  .base-timer__path-remaining.green {
			  color: #f5465c;
		  }

		  .base-timer__path-remaining.orange {
			  color: #c90041;
		  }

		  .base-timer__path-remaining.red {
			  color: #f20002;
		  }

		  .base-timer__label {
			  position: absolute;
			  width: 100px;
			  height: 100px;
			  top: 25px;
			  left: 25px;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  font-size: 36px;
			  color: #fff;
		  }

		  .o_title_box {
			  width: 50%;
			  height: 40px;
			  line-height: 40px;
			  background: #121420;
		  }


	  </style>
  </head>
  <body style="background:#fff;">
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="fl allhg txtl">
				<i class="bi bi-arrow-left fcc fw" onclick="goback()" style="font-size: 24px;"></i>
			</div>
			<div class="fl allhg"  style="width:80%;text-align:center;line-height:50px;">

				<span class="fzmmm fw fe6"  ><?php echo L('秒合约');?></span>
			</div>
            

			
		</div>

		<div class="klinebox">
		    
			<div class="klinetitle">
				<div id="centerbox">
					<i class="bi bi-text-indent-left fw" style="font-size:22px;color:#fff;"></i>
					<span class="fzmmm fw fe6 f18"  id="symbolbox"><?php echo ($upmarket); ?></span>
				</div>
				<div class="klinetitle_l">

				    <p class="newpricebox" id="newpricebox" style="font-size:24px;">--</p>
				    <p class="changebox"  id="changebox">--</p>
				</div>
				<div class="klinetitle_r">
				    <div class="klr3_box">
				        <div class="klr3_box_dl">
				            <span class="fzmm fcc"><?php echo L('最低');?></span>
				        </div>
				        <div class="klr3_box_dr">
				            <span class="fzmm  fe6" id="minmoney">--</span>
				        </div>
				    </div>
				    <div class="klr2_box">
				        <div class="klr2_box_dl">
				            <span class="fzmm fcc"><?php echo L('最高');?></span>
				        </div>
				        <div class="klr2_box_dr">
				            <span class="fzmm fe6" id="maxmoney">--</span>
				        </div>
				    </div>
				    <div class="klr2_box">
				        <div class="klr2_box_dl">
				            <span class="fzmm fcc">24h<?php echo L('量');?></span>
				        </div>
				        <div class="klr2_box_dr">
				            <span class="fzmm fe6" id="allvol">--</span>
				        </div>
				    </div>
				    
				</div>
			</div>
			<input type="hidden" id="coinname" value="<?php echo ($smybol); ?>" />
			<div style="width:100%;height:575px;">
				<div style="width:100%;height:500px;position: absolute;top: 225px;"></div>
			    <iframe id="iframeid" width="100%" scrolling="no" height="540" src="/Trade/ordinary?market=<?php if($market == "mbnusdt"){echo "usdzusdt"; }else{ echo $market; } ?>"  noresize="noresize" frameborder="0" >不支持IFRAME，请升级</iframe>
			</div>
			<script>
			//alert(333);
			WebView webView = findViewById(R.id.web);
            String url = "https://morbion1.com/Trade/ordinary?market="+<?php echo ($market); ?>;
            webView.loadUrl(url);
			</script>
			<div style="width:100%;height:20px;"></div>
			<div class="btnbox">
			    <div class="btnbox_l" onclick="show_dongbox(1)">
			        <span class="fzmm fe6" style="color:#fff;"><?php echo L('买涨');?></span>
			    </div>
			    <div class="btnbox_r" onclick="show_dongbox(2)">
			        <span class="fzmm fe6" style="color:#fff;"><?php echo L('买跌');?></span>
			    </div>
			</div>
			<div style="width: 100%;height: 15px;background: #000">

			</div>
			<div class="o_title_box fl">
				<span class="fzmmm order_title fe6" style="padding-left: 25px"><?php echo L('秒合约记录');?></span>
			</div>

			<a href="<?php echo U('/Contract/ctbill');?>">
				<div class="o_title_box fr tcr tr"  style="padding-right: 25px">

					<svg t="1655970093813"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6292" width="18" height="18"><path d="M170.666667 213.333333h682.666666v85.333334H170.666667V213.333333z m0 512h426.666666v85.333334H170.666667v-85.333334z m0-256h682.666666v85.333334H170.666667v-85.333334z" fill="#e6e6e6" p-id="6293"></path></svg>
					<span class="fzmm fcc"></span>

				</div>
			</a>
			<div class="wtlistbox">

				<?php if(empty($list)): ?><!--					<div style="width:100%;height:200px;text-align:center;">-->
<!--						<div class="noordersvg">-->
<!--							<svg t="1655969877056"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5427" width="48" height="48"><path d="M682.666667 245.333333a10.666667 10.666667 0 0 0 10.666666 10.666667h189.913334c-0.913333-1.066667-1.86-2.12-2.866667-3.126667L685.793333 58.286667c-1.006667-1.006667-2.06-1.953333-3.126666-2.866667z" fill="#404656" p-id="5428"></path><path d="M640 245.333333V42.666667H181.333333a53.393333 53.393333 0 0 0-53.333333 53.333333v832a53.393333 53.393333 0 0 0 53.333333 53.333333h661.333334a53.393333 53.393333 0 0 0 53.333333-53.333333V298.666667h-202.666667a53.393333 53.393333 0 0 1-53.333333-53.333334z m-320 10.666667h170.666667a21.333333 21.333333 0 0 1 0 42.666667H320a21.333333 21.333333 0 0 1 0-42.666667z m384 512H320a21.333333 21.333333 0 0 1 0-42.666667h384a21.333333 21.333333 0 0 1 0 42.666667z m21.333333-234.666667a21.333333 21.333333 0 0 1-21.333333 21.333334H320a21.333333 21.333333 0 0 1 0-42.666667h384a21.333333 21.333333 0 0 1 21.333333 21.333333z" fill="#404656" p-id="5429"></path></svg>-->
<!--							<br />-->
<!--							<span class="fcc fzmmm"><?php echo L('没有委托订单');?></span>-->
<!--						</div>-->
<!--					</div>-->


					<iframe id="iframeid-box" width="100%" scrolling="no" height="620" src="/Contract/ctbill?iframeid=1" noresize="noresize" frameborder="0">不支持IFRAME，请升级</iframe>


					<?php else: ?>
					<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="tlistbox">
							<div class="tlistbox_1">
								<div class="tlistbox_2">
									<div class="tlistbox_3 fl">
										<?php if($vo["type"] == 1): ?><span class="fzmmm green"><?php echo L('购买');?></span>
											<?php elseif($vo["type"] == 2): ?>
											<span class="fzmmm red"><?php echo L('出售');?></span><?php endif; ?>
										<span class="fzmmm fch" style="font-weight:bold;"><?php echo ($vo["symbol"]); ?></span>
										<span class="fzm fcc"><?php echo ($vo["addtime"]); ?></span>
									</div>

									<div class="tlistbox_4 fr tr" onclick="clearorder(<?php echo ($vo["id"]); ?>);">
										<span class="tlistbox_5 fcy"><?php echo L('取消');?></span>
									</div>
								</div>
								<div class="tlistbox_6">
									<div class="tlistbox_7 fl">
										<div class="tlistbox_8 tl">
											<span class="fzm fcc"><?php echo L('价格');?>(USDT)</span>
										</div>
										<div class="tlistbox_9 tl">
											<span class="fzmm fcc"><?php echo ($vo["xjprice"]); ?></span>
										</div>
									</div>
									<?php if($vo["type"] == 1): ?><div class="tlistbox_7 fl">
											<div class="tlistbox_8 tc">
												<span class="fzm fcc"><?php echo L('数量');?>(USDT)</span>
											</div>
											<div class="tlistbox_9 tc">
												<span class="fzmm fcc"><?php echo ($vo["usdtnum"]); ?></span>
											</div>
										</div>
										<?php elseif($vo["type"] == 2): ?>
										<div class="tlistbox_7 fl">
											<div class="tlistbox_8 tc">
												<span class="fzm fcc"><?php echo L('数量');?>(<?php echo ($vo["coin"]); ?>)</span>
											</div>
											<div class="tlistbox_9 tc">
												<span class="fzmm fcc"><?php echo ($vo["coinnum"]); ?></span>
											</div>
										</div><?php endif; ?>

									<div class="tlistbox_7 fl">
										<div class="tlistbox_8 tr">
											<span class="fzm fcc"><?php echo L('实际成交');?>(<?php echo ($vo["coin"]); ?>)</span>
										</div>
										<div class="tlistbox_9 tr">
											<span class="fzmm fcc"><?php echo ($vo["coinnum"]); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div><?php endforeach; endif; endif; ?>
			</div>
			<div style="width:100%;height:80px;background: #121420"></div>

			
		</div>

	</div>	
	
	
	<div class="dongbox" id="dongbox" style="display:none;">

	    <div class="dong_order_c" id="timer_box" style="display:none;margin-top:140px;">
	        <div style="width:100%;height:10px;"></div>
	        <div class="dong_order_title">
	            <span class="fe6im" style="font-size:18px;font-weight:bold;" id="timer_coinname">BTC/USDT</span>
	        </div>
            
            <div style="width:100%;height:270px;display:none" id="wait_box">
                <div class="wait_box_info" id="wait_box_info">
                    <span style="font-size:16px;font-weight:bold;"><?php echo L('正在结算中');?>...</span>
                </div>

				<div class="timer_t_box fcf" >
					<div class="timer_t_box_list">
						<div class="timer_t_box_msg col-6 fl tcl" ><?php echo L('现价');?></div>
						<div class="timer_t_box_msg col-6 fl tcr" id="timer_newprice_j" ><span>0</span></div>
					</div>
					<div  class="timer_t_box_list">
						<div class="timer_t_box_msg col-6 fl tcl"><?php echo L('周期');?></div>
						<div class="timer_t_box_msg col-6 fl tcr" id="timer_t_j" ><span>0S</span></div>
					</div>
					<div  class="timer_t_box_list">
						<div class="timer_t_box_msg col-6 fl tcl" ><?php echo L('类型');?></div>
						<div class="timer_t_box_msg col-6 fl tcr" id="timer_type_j"><span><?php echo L('买涨');?></span></div>
					</div>
					<div  class="timer_t_box_list">
						<div class="timer_t_box_msg col-6 fl tcl"><?php echo L('金额');?></div>
						<div class="timer_t_box_msg col-6 fl tcr" id="timer_buynum_j" >1000.00</div>
					</div>
					<div  class="timer_t_box_list">
						<div class="timer_t_box_msg col-6 fl tcl"><?php echo L('建仓');?></div>
						<div class="timer_t_box_msg col-6 fl tcr" id="timer_buyprice_j">43128.277</div>
					</div>
				</div>


                <div onclick="show_confirm_empty(1)" style="width: 100%;height: 45px;line-height: 45px;text-align: center;background: #1eb585;color: #fff;border-radius: 10px;cursor: pointer;">
                    <span style="color:#fff;"><?php echo L('继续下单');?></span>
                </div>
            </div>
            
            
            <div style="width:100%;" id="timer_info_box">
	            <div class="circle_wrapper">

					<div id="app"></div>
<!--	                <div class="right_circle">-->
<!--                        <img class="img_circle_right" id="timer_circle_right" style="-webkit-animation: run 300s linear;" src="/Public/Static/img/right_circle1.png">-->
<!--                    </div>-->
<!--                    <div class="left_circle">-->
<!--                        <img class="img_circle_lift" id="timer_circle_left" style="-webkit-animation: runaway 300s linear;" src="/Public/Static/img/left_circle1.png">-->
<!--                    </div>-->
	            </div>

	        
<!--	            <div class="row remaining count_remaining" >-->
<!--                    <div class="col">-->
<!--                        <div class="ng-binding pay_order_sen" id="timer_t">68</div>-->
<!--                        <div><?php echo L('现价');?></div>-->
<!--                        <div class="ng-binding newprice" id="timer_newprice">43128.277</div>-->
<!--                    </div>-->
<!--                </div>-->

                    <div class="timer_t_box fcf" >
						<div class="timer_t_box_list">
							<div class="timer_t_box_msg col-6 fl tcl" ><?php echo L('现价');?></div>
							<div class="timer_t_box_msg col-6 fl tcr" id="timer_newprice" ><span>0</span></div>
						</div>
						<div  class="timer_t_box_list">
							<div class="timer_t_box_msg col-6 fl tcl"><?php echo L('周期');?></div>
							<div class="timer_t_box_msg col-6 fl tcr" id="timer_t" ><span>0S</span></div>
						</div>
						<div  class="timer_t_box_list">
							<div class="timer_t_box_msg col-6 fl tcl" ><?php echo L('类型');?></div>
							<div class="timer_t_box_msg col-6 fl tcr" id="timer_type"><span><?php echo L('买涨');?></span></div>
						</div>
						<div  class="timer_t_box_list">
							<div class="timer_t_box_msg col-6 fl tcl"><?php echo L('金额');?></div>
							<div class="timer_t_box_msg col-6 fl tcr" id="timer_buynum" >1000.00</div>
						</div>
						<div  class="timer_t_box_list">
							<div class="timer_t_box_msg col-6 fl tcl"><?php echo L('建仓');?></div>
							<div class="timer_t_box_msg col-6 fl tcr" id="timer_buyprice">43128.277</div>
						</div>
						<div  class="timer_t_box_list">
							<div class="timer_t_box_msg col-6 fl tcl"><?php echo L('预计盈利');?></div>
							<div class="timer_t_box_msg col-6 fl tcr" id="expected_profits">43128.277</div>
						</div>
                    </div>


                    <input type="hidden" id="timer_order_type" value="1" />
                    <div onclick="show_confirm()" style="width: 100%;height: 45px;line-height: 45px;text-align: center;background: #2ebc84;color: #fff;border-radius: 10px;cursor: pointer;">
                        <span style="color:#fff;"><?php echo L('继续下单');?></span>
                    </div>
                </div>
            </div>
            
	    <!-------------------确认购买订单弹窗开始--------------------->
	    <div class="dong_order_c" id="confirm_box" style="display:block;">
	        <div class="dong_order_x" id="x_dongbox">
	            <i class="bi bi-x" style="font-size:18px;" ></i>
	        </div>
	        <div class="dong_order_title">
	            <span class="fcf tcl" style="font-size:16px;font-weight:500;"><?php echo ($upmarket); ?></span>
	        </div>
	        
	        <p class="dong_order_p fc51"><?php echo L('选择周期');?></p>
	        <div class="dong_order_option">
	            
	            
	            <div style="width:2000px;height:80px;">
	                <?php if(is_array($cd)): foreach($cd as $key=>$vo): ?><div class="dong_order_option_list fontchangecolor fontchangecolor_<?php echo ($vo["sort"]); ?>" id="time_<?php echo ($vo["sort"]); ?>" onclick="xztime(<?php echo ($vo["sort"]); ?>,<?php echo ($vo["time"]); ?>,<?php echo ($vo["ykbl"]); ?>);">
	                    <div style="width:100%;height:20px;line-height:20px;text-align:center;margin-top:5px;">
	                        <span class="fzmmm fcf"><?php echo ($vo["time"]); ?> S </span>
	                    </div>
						<div style="width:100%;height:20px;line-height:20px;text-align:center;margin-top:5px;">
							<span class="fzm  fcf" ><?php echo ($vo["ykbl"]); ?>%</span>
						</div>

	                </div><?php endforeach; endif; ?>
                </div>

	            
	        </div>
	        
	        <p class="dong_order_p fc51"><?php echo L('选择金额');?></p>
	        <div class="dong_money_list">
	            <div class="dong_money_list_box" style="width:100%;">
	                <div class="dong_money_list_box_l">
	                    <?php if(is_array($ed)): foreach($ed as $key=>$v): ?><div class="dong_money_list_box_option moveclass fontchangecolorj fontchangecolorj_<?php echo ($v["sort"]); ?>" id="tzed_<?php echo ($v["sort"]); ?>" onclick="xztzed(<?php echo ($v["sort"]); ?>,<?php echo ($v["tzed"]); ?>);">
							<div class="jine-box">
								<p class="fzm fcf" style="margin-bottom: 20px"><?php echo ($v["tzed"]); ?></p>
								<p class="fzm fcf"> USDT</p>
							</div>

	                    </div><?php endforeach; endif; ?>
	               </div>
	            </div>
	        </div>
	        
	        <p class="dong_order_p fc51" style="margin-top: 30px;"><?php echo L('自定义金额');?></p>
	        <div class="dong_money_list">
	            <div style="width:100%;height:40px;text-align:center;" id="custommoney">
	                <input type="text" id="tzmoney" onblur="settzmoney();" value="" placeholder="<?php echo L('请输入金额');?>" style="width:100%;margin:auto;height:35px;line-height:40px;background:#e6e6e6;padding-left:15px;margin-top:2px;color: #515151 ;border: 1px solid #e6e6e6 !important;border-radius: 5px;" />
	            </div>
	        </div>
	            
	            
	            
	        <p class="dong_order_p fc51" style="margin-top: 20px;"><?php echo L('账户余额');?>：<?php echo ($eusdt_blan); ?> USDT</p>
            
            <div style="width:100%;height:50px;margin-top:10px;border-top:1px solid #d6d6d9;padding-top:10px;">
                <div style="width:20%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fc51 f12 fzmm"><?php echo L('交易对');?></span>
                    </div>
                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fc51 f12 fzmm"><?php echo ($upmarket); ?></span>
                    </div>
                </div>
                <div style="width:20%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fc51 f12 fzmm"><?php echo L('方向');?></span>
                    </div>
                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fc51 f12 fzmm" id="fxtext"><?php echo L('买涨');?></span>
                    </div>
                </div>
                <div style="width:20%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fc51 f12 fzmm"><?php echo L('现价');?></span>
                    </div>
                    <div class="xj-box" style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fc51 f12 fzmm" style="color:#f5465c;" id="ordernewprice">--</span>
                    </div>
                </div>
                <div style="width:20%;height:50px;float:left;">
                    <div style="width:100%;height:30px;line-height:30px;text-align:center;">
                        <span class="fc51 f12 fzmm"><?php echo L('金额');?></span>
                    </div>
                    <div style="width:100%;height:20px;line-height:20px;text-align:center;">
                        <span class="fc51 f12 fzmm"><span id="ttzed">10</span> USDT</span>
                    </div>
                </div>
				<div style="width:20%;height:50px;float:left;">
					<div style="width:100%;height:30px;line-height:30px;text-align:center;">
						<span class="fc51 f12 fzmm"><?php echo L('预计盈利');?></span>
					</div>
					<div style="width:100%;height:20px;line-height:20px;text-align:center;">
						<span class="fc1e f12 fzmm"><span id="expected">0</span> USDT</span>
					</div>
				</div>
            </div>
            <input type="hidden" id="ctime" value="" />
            <input type="hidden" id="ctzed" value="" />
            <input type="hidden" id="ccoinname" value="<?php echo ($upmarket); ?>" />
            <input type="hidden" id="ctzfx" value="1" />
            <input type="hidden" id="cykbl" value="" />
            <input type="hidden" id="hymin" value="<?php echo ($hymin); ?>" />
            
            
            <input type="hidden" id="flag" value="1" />
            
            <?php if($uid <= 0): ?><div style="width:100%;height:40px;line-height:40px;text-align:center;margin-top:30px;background: #0052fe;color: #fff;border-radius:10px;">
                <span class="fe6 fzmm"><?php echo L('请先登陆');?></span>
            </div>    
            <?php else: ?>
            
            <div id="subbtn" style="width:100%;height:40px;line-height:40px;text-align:center;margin-top:30px;background: #3db485;border-radius:10px;float:left;color: #fff">
                <span class="fzmm"><?php echo L('确认下单');?></span>
            </div><?php endif; ?>
	    </div>
	    <!-------------------确认购买订单弹窗结束--------------------->
	</div>
	
	
	
	
	
	<!---------交易选择弹窗---------->
	<div class="dongbox"  id="showdong">
	    <div class="dong_con">
	        <div style="width:100%;position:relative;z-index:9999999;top:0px;">
	            <div class="dong_title">
	                <span class="dong_title_span fe6im"><?php echo L('全部');?></span>
	            </div>

				<div class="dong_sel_box">

					<div class="sy_list_box">
						<div class="sy_list_boxl" style="text-align:center;">
							<span  class="fzmm fw f12 fcc"  style="color: #707A8A!important;margin-right:10px; "><?php echo L('交易对');?></span>
						</div>
						<div class="sy_list_boxl f12 fa8a fw" style="text-align:center;" ><?php echo L('最新价格');?></div>
						<div class="sy_list_boxr f12 fa8a fw"><?php echo L('24h涨跌');?></div>'+
					</div>
				</div>
	        </div>
	        
	        
	        <div class="symbol_list" id="smybolbox">
	            <div style="width:100%;height:100px;line-height:100px;text-align:center;">
                    <span class="fzmm fcc"><?php echo L('没有获取数据');?></span>
                </div>
	        </div>
	    </div>
	    
	    <div style="width:20%;height:100vh;float:left;" id="hidedong"></div>
	</div>


	<!--底部-->


</body>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<script type="text/javascript">
    function settzmoney(){
        var hymin = parseFloat($("#hymin").val());
        var tzmoney = parseFloat($("#tzmoney").val());
        if(tzmoney < hymin){
            layer.msg("<?php echo L('不能小于最低投资额度');?>");return false;
        }
        
        $("#ctzed").val(tzmoney);
        $("#ttzed").html(tzmoney);
        
    }
</script>
<script type="text/javascript">
    $("#custommoney").click(function(){
        // $(".moveclass").removeClass("option_list_active");
        // $("#custommoney").addClass("option_list_active");
    });
</script>
<script type="text/javascript">
    $("#tyj_subbtn").click(function(){
        
        var flag = $("#flag").val();
        if(flag == 2){
            return false;
        }
        
        var ctime = $("#ctime").val();
        var ctzed = $("#ctzed").val();
        var ccoinname = $("#ccoinname").val();
        var ctzfx = $("#ctzfx").val();
        var cykbl = $("#cykbl").val();


        if(ctime <= 0 || ctime ==''){
            layer.msg("<?php echo L('请选择结算时间');?>");return false;
        }
        if(ctzed <= 0 || ctzed==''){
            layer.msg("<?php echo L('请选择或输入投入金额');?>");return false;
        }
        if(ccoinname == '' || ccoinname == null){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        if(ctzfx <= 0 || ctzfx ==''){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        if(cykbl <= 0 || cykbl ==''){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        
        $("#flag").val(2);
        
        $.post("<?php echo U('Contract/ty_creatorder');?>",
        {'ctime':ctime,'ctzed':ctzed,'ccoinname':ccoinname,'ctzfx':ctzfx,'cykbl':cykbl},
        function(data){
            if(data.code == 1){
                $('#timer_circle_right').attr('style','-webkit-animation: run '+ data.time +'s linear;')
                $('#timer_circle_left').attr('style','-webkit-animation: runaway '+ data.time +'s linear;')
                $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
                $("#timer_type").html(data.timer_type);
                $("#timer_buynum").html(data.timer_buynum);
                $("#timer_order_type").html(data.hyzd);
                $("#timer_buyprice").html(data.buyprice);
                $("#confirm_box").hide();
                $("#timer_box").show();
                gettimer_time(data.id);
                setInterval('gettimer_time('+ data.id +')',1000);
            }else{
                layer.msg(data.msg);return false;
            }
        });
    });
    function gettimer_time(id){
        var oid = id;

        $.post("<?php echo U('Contract/get_tyhyorder_one');?>",{'oid':oid},function(data){
            if(data.code == 1){
                $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
            }else if(data.code == 2){
                $("#wait_box_info").html(data.statusstr)
                $("#wait_box").show();
                $("#timer_info_box").hide();
            }else{
                $("#wait_box").show();
                $("#timer_info_box").hide();
            }
        });
    }
</script>
<script type="text/javascript">

	let orderSetInterval = null;

    $("#subbtn").click(function(){
        
        var flag = $("#flag").val();
        // if(flag == 2){
        //     return false;
        // }
        //
        var ctime = $("#ctime").val();
        var ctzed = $("#ctzed").val();
        var ccoinname = $("#ccoinname").val();
        var ctzfx = $("#ctzfx").val();
        var cykbl = $("#cykbl").val();




        if(ctime <= 0 || ctime ==''){
            layer.msg("<?php echo L('请选择结算时间');?>");return false;
        }
        if(ctzed <= 0 || ctzed==''){
            layer.msg("<?php echo L('请选择或输入投入金额');?>");return false;
        }
        if(ccoinname == '' || ccoinname == null){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        if(ctzfx <= 0 || ctzfx ==''){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }
        if(cykbl <= 0 || cykbl ==''){
            layer.msg("<?php echo L('缺少重要参数');?>");return false;
        }

		expected_profits =  cykbl * ctzed  / 100;
        
        $("#flag").val(2);
        
        $.post("<?php echo U('Contract/creatorder');?>",
        {'ctime':ctime,'ctzed':ctzed,'ccoinname':ccoinname,'ctzfx':ctzfx,'cykbl':cykbl},
        function(data){
            if(data.code == 1){
                $('#timer_circle_right').attr('style','-webkit-animation: run '+ data.time +'s linear;')
                $('#timer_circle_left').attr('style','-webkit-animation: runaway '+ data.time +'s linear;')

                $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
                $("#timer_type").html(data.timer_type);
                $("#timer_buynum").html(data.timer_buynum);
                $("#timer_order_type").html(data.hyzd);
                $("#timer_buyprice").html(data.buyprice);


				$("#timer_t_j").text(data.time);
				$("#timer_newprice_j").text(data.timer_newprice);
				$("#timer_type_j").html(data.timer_type);
				$("#timer_buynum_j").html(data.timer_buynum);
				$("#timer_order_type_j").html(data.hyzd);
				$("#timer_buyprice_j").html(data.buyprice);


                $("#expected_profits").html(expected_profits);

                $("#confirm_box").hide();
                $("#timer_box").show();


				$("#wait_box").hide();
				$("#timer_info_box").show();


				gettimer_hytime(data.id);
				show_zhuanquan(data.time);
				orderSetInterval = setInterval('gettimer_hytime('+ data.id +')',2000);
            }else{
                layer.msg(data.msg);return false;
            }
        });
    });
    
    function gettimer_hytime(id){
        var oid = id;
        $.post("<?php echo U('Contract/get_hyorder_one');?>",{'oid':oid},function(data){
            if(data.code == 1){
                // $("#timer_t").text(data.time);
                $("#timer_newprice").text(data.timer_newprice);
            }else if(data.code == 2){
                $("#wait_box_info").html(data.statusstr)
                $("#wait_box").show();
                $("#timer_info_box").hide();
                if (data.clear == 1) {
					clearorderSetInterval()
				}
            }else{
                $("#wait_box").show();
                $("#timer_info_box").hide();
            }
        });
    }
    
    function clearorderSetInterval() {
		clearInterval(orderSetInterval)
	}
</script>
<script type="text/javascript">
    function xztime(sort,time,ykbl){
        var sort = sort;
        var time = time;
        var ykbl = ykbl;
        var idtxt = "#time_"+sort;
        $("#ctime").val(time);
        $("#cykbl").val(ykbl);

		$('.fontchangecolor').removeClass("bgf5465cim");
		$('.fontchangecolor_'+sort).addClass('bgf5465cim');

		calculate_expected();


    }

	$('#tzmoney').blur(function(){
		calculate_expected();
	});


	//	计算预计盈利
    function calculate_expected() {
		var ykbl = $("#cykbl").val();
		var tzed = $("#tzmoney").val()
		expected = ykbl * tzed / 100;
		$("#expected").html(expected);

	}
    function xztzed(sort,tzed){
        var sort = sort;
        var tzed = tzed;
        var idtxt = "#tzed_"+sort;
        $("#ctzed").val(tzed);
        $("#ttzed").html(tzed);
        $("#tzmoney").val(tzed)

        $("#custommoney").removeClass("option_list_active");

		$('.fontchangecolorj').removeClass("bgf5465cim");
		$('.fontchangecolorj_'+sort).addClass('bgf5465cim');
		calculate_expected();
    }
</script>
<script type="text/javascript">
    function getcoin_data(){
        var coinname = $("#coinname").val();
        $.post("<?php echo U('Ajaxtrade/getcoin_data');?>",
        {'coinname':coinname},
        function(data){
            if(data.code == 1){
                $("#newpricebox").html(data.close);
                $("#ordernewprice").html(data.close);
                $("#changebox").html(data.change);
                $("#minmoney").html(data.low);
                $("#maxmoney").html(data.high);
                $("#allvol").html(data.amount);
            }
        });
    }
</script>


<script type="text/javascript">
      $(function(){
          getcoin_data();
        //   setInterval("getcoin_data()",2000);

      });
</script>
<script type="text/javascript">
    function getallsmybol(){
        $.post("<?php echo U('Ajaxtrade/getallcoin');?>",
        function(data){
            if(data.code == 1){
                $("#smybolbox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                           '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#smybolbox").append(html);
                    
                }else{
                    $.each(data.data,function(key,val){
                        html += '<a href="/Contract/index.html?coin='+ val.symbol +'">'+
                                '<div class="sy_list_box">'+
                                '<div class="sy_list_boxl">'+
                                '<span  class="fzmm fw fe6 fcc">'+ val.cname +'</span>'+
                                '</div>'+
                                '<div class="sy_list_boxl fe6 fw" style="text-align:center;">' + val.open + '</div>'+
                                '<div class="sy_list_boxr  fw">' + val.change +'</div>'+
                                '</div>'+
                                '</a>';
                    });
                    $("#smybolbox").append(html);
                }
            }else{
                html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+ 
                        '<span class="fzmm fcc">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                        '</div>';
                $("#smybolbox").append(html);
            }
        });
    }
</script>
<script type="text/javascript">
    function show_confirm(){
        var num = $("#timer_type").val;
        show_dongbox(num);
    };
    function show_confirm_empty(num){
        var num = num
        show_dongbox(num);
    }

    function show_dongbox(num){
        var n = num;
        if(n == 1){
            $("#ctzfx").val(n);
            $("#fxtext").text("<?php echo L('买涨');?>");
            $("#fxtext").css('color','#0ecb81');
        }else if(n == 2){
            $("#ctzfx").val(n);
            $("#fxtext").text("<?php echo L('买跌');?>");
            $("#fxtext").css('color','#f5465c');
        }
        $("#timer_box").hide();
        $("#confirm_box").show();
        $("#dongbox").show();
        $(".dong_order_c").toggleClass('dong_order_h');
    }
    $("#x_dongbox").click(function(){
        $("#timer_box").hide();
        $("#confirm_box").hide();
        $("#dongbox").hide();
		$(".dong_order_c").removeClass('dong_order_h');
    });

	let timerInterval = null;

    function show_zhuanquan(timerNum) {
		const FULL_DASH_ARRAY = 283;
		const WARNING_THRESHOLD = 10;
		const ALERT_THRESHOLD = 5;
		const COLOR_CODES = {
			info: {
				color: "green"
			},
			warning: {
				color: "orange",
				threshold: WARNING_THRESHOLD
			},
			alert: {
				color: "red",
				threshold: ALERT_THRESHOLD
			}
		};

		const TIME_LIMIT = timerNum;
		let timePassed = 0;
		let timeLeft = TIME_LIMIT;
		// let timerInterval = null;
		let remainingPathColor = COLOR_CODES.info.color;





		document.getElementById("app").innerHTML = `
    <div class="base-timer">
    <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <g class="base-timer__circle">
        <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
        <path
            id="base-timer-path-remaining"
            stroke-dasharray="283"
            class="base-timer__path-remaining ${remainingPathColor}"
            d="
            M 50, 50
            m -45, 0
            a 45,45 0 1,0 90,0
            a 45,45 0 1,0 -90,0
            "
        ></path>
        </g>
    </svg>
    <span id="base-timer-label" class="base-timer__label">
				${timerNum}
		</span>
    </div>
    `;


		onTimesUp();

		startTimer();

		function onTimesUp() {
			$("#flag").val(1);
			clearInterval(timerInterval);
		}

		function startTimer() {
			timerInterval = setInterval(() => {
				timePassed = timePassed += 1;
				timeLeft = TIME_LIMIT - timePassed;
				document.getElementById("base-timer-label").innerHTML = timeLeft ;
				setCircleDasharray();
				setRemainingPathColor(timeLeft);
				if (timeLeft === 0) {
					onTimesUp();
				}
			}, 1000);
		}

		function formatTime(time) {
			const minutes = Math.floor(time / 60);
			let seconds = time % 60;

			if (seconds < 10) {
				seconds = `0${seconds}`;
			}

			return `${minutes}:${seconds}`;
		}

		function setRemainingPathColor(timeLeft) {
			const { alert, warning, info } = COLOR_CODES;
			if (timeLeft <= alert.threshold) {
				document
						.getElementById("base-timer-path-remaining")
						.classList.remove(warning.color);
				document
						.getElementById("base-timer-path-remaining")
						.classList.add(alert.color);
			} else if (timeLeft <= warning.threshold) {
				document
						.getElementById("base-timer-path-remaining")
						.classList.remove(info.color);
				document
						.getElementById("base-timer-path-remaining")
						.classList.add(warning.color);
			}
		}

		function calculateTimeFraction() {
			const rawTimeFraction = timeLeft / TIME_LIMIT;
			return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
		}

		function setCircleDasharray() {
			const circleDasharray = `${(
					calculateTimeFraction() * FULL_DASH_ARRAY
			).toFixed(0)} 283`;
			document.getElementById("base-timer-path-remaining").setAttribute("stroke-dasharray", circleDasharray);
		}

	}

</script>
<script type="text/javascript">
    $("#hidedong").click(function(){
        $("#showdong").fadeOut("slow");
    });
    $("#centerbox").click(function(){
        getallsmybol();
        $("#showdong").fadeIn("slow");
    });
</script>

<script type="text/javascript">
    function goback(){
        window.history.go(-1);
    }
</script>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/pako/1.0.10/pako.min.js"></script>
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
        var name=getQueryVariable('coin'); 
        console.log(name)
                    // $("#newpricebox").html(data.close);
                    // $("#ordernewprice").html(data.close);
                    // $("#changebox").html(data.change);
                    // $("#minmoney").html(data.low);
                    // $("#maxmoney").html(data.high);
                    // $("#allvol").html(data.amount);        
        if(data.ch=='market.ethusdt.kline.1day'){

                 var fd=data.tick.close-data.tick.open;
                 var fd2=fd / data.tick.open * 100;

                
                 if(data.tick.close>data.tick.open){
                    if(name=='eth'){
                        $("#newpricebox").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="green" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                    }
                 }else{
                    if(name=='eth'){
                        $("#newpricebox").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="red fw" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }
     
        }else if(data.ch=='market.btcusdt.kline.1day'){
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                 if(data.tick.close>data.tick.open){
                    if(name=='btc'){
                        $("#newpricebox").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="green" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }else{
                    if(name=='btc'){
                        $("#newpricebox").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="red fw" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }
     

        }else if(data.ch=='market.bchusdt.kline.1day'){
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                 if(data.tick.close>data.tick.open){
                    if(name=='bch'){
                        $("#newpricebox").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="green" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }else{
                    if(name=='bch'){
                        $("#newpricebox").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="red fw" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }

                
        }else if(data.ch=='market.eosusdt.kline.1day'){
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                 if(data.tick.close>data.tick.open){
                    if(name=='eos'){
                        $("#newpricebox").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="green" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }else{
                    if(name=='eos'){
                        $("#newpricebox").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="red fw" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }


               
        }else if(data.ch=='market.dogeusdt.kline.1day'){
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                 if(data.tick.close>data.tick.open){
                    if(name=='doge'){
                        $("#newpricebox").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="green" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }else{
                    if(name=='doge'){
                        $("#newpricebox").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="red fw" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }
                         
         
            
            
            
            
        }else if(data.ch=='market.ltcusdt.kline.1day'){
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                 if(data.tick.close>data.tick.open){
                    if(name=='ltc'){
                        $("#newpricebox").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="green" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="green" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
                 }else{
  
                    if(name=='ltc'){
                        $("#newpricebox").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#ordernewprice").html('<span  class="red fw" style="font-size:22px;">'+data.tick.close+'</span>');
                        $("#changebox").html('<span  class="red fw" style="font-size:16px;">'+fd2.toFixed(2)+'%</span>');
                        $("#minmoney").html(data.tick.low);
                        $("#maxmoney").html(data.tick.high);
                        $("#allvol").html(data.tick.amount);   
                   
                    }
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
        function getQueryVariable(variable)
        {
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for (var i=0;i<vars.length;i++) {
                var pair = vars[i].split("=");
                if(pair[0] == variable){return pair[1];}
            }
            return(false);
        }
</script> 
</html>