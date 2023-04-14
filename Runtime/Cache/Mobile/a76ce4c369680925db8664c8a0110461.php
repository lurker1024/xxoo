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
		::-webkit-input-placeholder { /* WebKit browsers */
		  color: #b5b5b5;
		  font-size: 18px;
		}

		::-moz-placeholder { /* Mozilla Firefox 19+ */
		  color: #b5b5b5;
		  font-size: 18px;
		}
		input:focus{background:#F5F5F5;outline: 1px solid #F5F5F5;}
		a:hover,a:link,a:visited,a:active{color:#707A8A;text-decoration:none;}
		.headerbox{height:50px;line-height:50px;}
		.iconf{height: 30px;width: 30px;border-radius: 15px;background: #eaebed;margin-top: 10px;}
		.imgbox{width:40px;height:50px;line-height:47px;float:left;}
		.badge-light{background-color: #FCD535;position: relative;left: -15px;top: -10px;}
		.badge{line-height: 0.8;border-radius: .5rem;}
		ul, li {list-style-type: none;padding: 0px;}
		.scrollDiv {
			height: 25px;/* 必要元素 */
			line-height: 25px;
			border: none;
			overflow: hidden;/* 必要元素 */
			margin-top:8px;
		}
		.scrollDiv li {
			height: 25px;
			padding-left: 10px;
		}

		.oplist{width:20%;height:80px;float:left;}
		.opimg{width:100%;height: 50px;line-height: 50px;text-align: center;}
		.opicon{width:30px;height:30px;margin-top: 10px;}
		.optext{width:100%;height: 30px;line-height: 30px;text-align: center;overflow: hidden;}
		.hyicon{width:40px;height: 40px; margin-left: 20px;margin-top: 10px;}
		.ricon{background: #eaebed;padding: 5px;border-radius: 20px;font-size: 20px;color: #000;}
		.zixunconten{height: 90px;width: 33.3%;background: #1b1d2a;float: left;margin: 0 auto;text-align: center;}
        .bgreen{background:#1e363a;}
        .bred{background:#3b2937;color: #f5465c !important;}
        .bgfcc{background:#f5f5f5;}
        .green{color:#0ecb81;}
        .red{color:#f5465c;}
        .list_open{width:30%;height:50px;line-height:50px;float:left;text-align:center;}
        .list_cname{width:40%;height:50px;line-height:50px;float:left;}
        .list_change{width:30%;height:50px;line-height:50px;float:left;text-align:right;}
        .dongbox{position:fixed;z-index:9999;display:none;top:0px;width:100%;height:100vh;background:rgba(0,0,0,0.2);}
        .dong_order_c{width:90%;background:#fff;margin:80px auto;border-radius:10px;padding:10px;}
	    .dong_order_x{width:100%;height:20px;line-height:20px;text-align:right;}
	    .dong_order_title{width:100%;height:30px;line-height:20px;text-align:center;border-bottom: 1px solid #f5f5f5;}
	    .infobox{width:100%;height:400px;padding:5px 20px;margin-top:50px;}
	    .infotbox{width:100%;margin-top:15px;}
	    .lbox{width:100%;height:50px;}
	    .lboxc{width:100%;padding:15px 0px;}
	    .lbox_l{width:20%;height:50px;line-height:50px;float:left;text-align:left;}
	    .lbox_r{width:80%;height:50px;line-height:50px;float:right;text-align:right;}


	</style>

  </head>
  <body>
	<div class="container-fluid " style="padding:0px;width:100vw;">
		<div class="no_header">
			<div class="headerbox fl">
				<?php if($uid <= 0): ?><a href="<?php echo U('Login/index');?>">
				<div class="imgbox" style="">
					<svg t="1656830630289"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="32495" width="30" height="30"><path d="M513.023306 401.066445m-149.158135 0a149.158135 149.158135 0 1 0 298.31627 0 149.158135 149.158135 0 1 0-298.31627 0Z" p-id="32496" fill="#2acc8e"></path><path d="M513.023306 65.459874c-247.133563 0-447.474404 200.340841-447.474404 447.474405S265.889743 960.408683 513.023306 960.408683s447.474404-200.340841 447.474405-447.474404S760.155846 65.459874 513.023306 65.459874z m272.202519 754.331188c4.88424-20.698414 7.468089-42.284035 7.468089-64.474431 0-100.883665-53.416584-189.292204-133.508714-238.484579-34.151821 43.062771-86.931908 70.681806-146.161894 70.681806s-112.010073-27.619034-146.162917-70.680783C286.767236 566.024427 233.351676 654.432966 233.351676 755.316631c0 22.189372 2.583848 43.776016 7.468088 64.474431-84.643796-75.140351-137.981584-184.76919-137.981584-306.85576 0-226.538503 183.6456-410.185126 410.185126-410.185127S923.207409 286.395776 923.207409 512.934279c0 122.086569-53.336766 231.716432-137.981584 306.856783z" p-id="32497" data-spm-anchor-id="a313x.7781069.0.i61" class="" fill="#2acc8e"></path></svg>
				</div>
				</a>
				<?php else: ?>	
				<a href="<?php echo U('Index/uoption');?>">
				<div class="imgbox" style="">
					<svg t="1656830630289"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="32495" width="30" height="30"><path d="M513.023306 401.066445m-149.158135 0a149.158135 149.158135 0 1 0 298.31627 0 149.158135 149.158135 0 1 0-298.31627 0Z" p-id="32496" fill="#2acc8e"></path><path d="M513.023306 65.459874c-247.133563 0-447.474404 200.340841-447.474404 447.474405S265.889743 960.408683 513.023306 960.408683s447.474404-200.340841 447.474405-447.474404S760.155846 65.459874 513.023306 65.459874z m272.202519 754.331188c4.88424-20.698414 7.468089-42.284035 7.468089-64.474431 0-100.883665-53.416584-189.292204-133.508714-238.484579-34.151821 43.062771-86.931908 70.681806-146.161894 70.681806s-112.010073-27.619034-146.162917-70.680783C286.767236 566.024427 233.351676 654.432966 233.351676 755.316631c0 22.189372 2.583848 43.776016 7.468088 64.474431-84.643796-75.140351-137.981584-184.76919-137.981584-306.85576 0-226.538503 183.6456-410.185126 410.185126-410.185127S923.207409 286.395776 923.207409 512.934279c0 122.086569-53.336766 231.716432-137.981584 306.856783z" p-id="32497" data-spm-anchor-id="a313x.7781069.0.i61" class="" fill="#2acc8e"></path></svg>
				</div>
				</a><?php endif; ?>

				<?php if($uid <= 0): ?><a href="<?php echo U('Login/index');?>" class="fcf f16 fw"><?php echo L('登陆');?> / <?php echo L('注册');?></a><?php endif; ?>
			</div>

            <a href="<?php echo U('Login/setlang');?>">
			<div class="headerbox fr txtr">
<!--				<i class="bi bi-bell fcf" style="font-size:22px;"></i>-->
<!--				<svg t="1654071212180"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="20103" width="30" ><path d="M782 912H242c-71.68 0-130-58.32-130-130V242c0-71.68 58.32-130 130-130h540c71.68 0 130 58.32 130 130v540c0 71.68-58.32 130-130 130zM242 172c-38.59 0-70 31.41-70 70v540c0 38.59 31.41 70 70 70h540c38.59 0 70-31.41 70-70V242c0-38.59-31.41-70-70-70H242z" p-id="20104" fill="#8a8a8a"></path><path d="M455.49 621.78c-3.97-1.08-8.51-1.71-13.51-1.9-4.32-0.15-8.84-0.21-13.6-0.21h-100.5v-86.64h107.87c9.01 0 15.72-1.65 20.48-4.99 4.09-2.86 8.98-8.65 8.98-20.14 0-9.2-2.82-16.12-8.37-20.56-4.91-3.93-11.8-5.86-21.09-5.86H327.89V404.8h112.2c8.39 0 14.92-1.69 19.96-5.14 4.34-2.94 9.51-8.88 9.5-20.98-0.48-9.18-3.66-15.97-9.53-20.18-4.96-3.53-11.48-5.25-19.93-5.25H302.76c-10.47 0-18.01 2.31-23.07 7.09-5.17 4.93-7.69 12.25-7.69 22.36v259.06c0 11.11 3.15 19.06 9.36 23.65 5.28 3.91 12.28 5.82 21.4 5.82h139.93c9.38 0 16.37-1.54 21.44-4.74 4.45-2.83 9.75-8.84 9.75-21.26 0-8.19-3.11-13.24-5.7-16.01-3.26-3.53-7.52-6.03-12.69-7.44zM745.3 356.36c-4.74-5.25-11.96-7.91-21.46-7.91-9.85 0-17.18 3.02-21.79 8.99-3.95 5.1-5.94 11.4-5.94 18.74v188.1L559.8 364.97c-2.85-3.45-5.68-6.6-8.5-9.41-3.24-3.24-9.06-7.11-18.51-7.11-11.87 0-17.89 5.16-20.85 9.5-3.42 4.99-5.14 11.13-5.14 18.23v271.21c0 7.47 2.22 13.94 6.59 19.23 3.36 4.06 9.75 8.93 21.13 8.93 11.23 0 17.72-4.74 21.17-8.72 4.64-5.33 6.99-11.89 6.99-19.44v-184.6l135.35 195.08c3.18 4.61 6.73 8.5 10.59 11.63 5.01 4.02 10.86 6.05 17.39 6.05 11.9 0 17.92-5.18 20.85-9.5 3.42-4.99 5.14-11.13 5.14-18.23V376.19c0-8.19-2.24-14.85-6.7-19.83z" p-id="20105" fill="#8a8a8a"></path></svg>-->
				<img src="/Public/Static/img/flag/en.png" width="25" height="25">

			</div>
			</a>
		</div>

<!--		<div style="width:100%;height:60px;"></div>-->

		<div class="shuffl-title index-div-base-margin">
			<!--轮播图-->
			<div id="carouselExampleIndicators" class="carousel slide slidepm col-6 divfl" data-ride="carousel" style="width:margin: 0px;padding:0px">
				<div class="carousel-inner" style="height: 290px;border-radius: 20px !important;background: #1b1d2a;">
					<div class="carousel-item active">
						<img src="/Upload/public/<?php echo ($clist["websildea"]); ?>" class="d-block w-100" style="height:290px;border-radius:10px;" />
					</div>
					<div class="carousel-item">
						<img src="/Upload/public/<?php echo ($clist["websildeb"]); ?>" class="d-block w-100" style="height:290px;border-radius:10px;" />
					</div>
					<div class="carousel-item">
						<img src="/Upload/public/<?php echo ($clist["websildec"]); ?>" class="d-block w-100" style="height:290px;border-radius:10px;" />
					</div>
				</div>
			</div>
			<div class="col-6 divfl shuffl-title-r" >
				<div class="shuffl-title-rtop">
					<img src="/Public/Mobile/images/iconltop.png" class="icon-top" >
				</div>
				<div class="shuffl-title-rbottom">
					<div class="col-8 fl shuffl-title-rbottom-l">
						<p class="shuffl-title-rbottom-p fcf" ><?php echo L('我要买币');?></p>
						<a href="/User/czcoin/"><p class="shuffl-title-rbottom-p fcf" >Visa,Mastercard</p></a>
					</div>
					<div class="col-4 fl shuffl-title-rbottom-r">
						<img src="/Public/Mobile/images/icon_spot.svg" class="icon_spot">
					</div>
				</div>
			</div>
			</div>
		</div>


	</div>



	<!--OPTION选项-->
	<div class="optionbox index-div-base-margin">
		<div style="width:100%;height:80px;">

			<a href="<?php echo U('User/czcoin');?>">
				<div class="oplist">
					<div class="opimg" style="line-height:50px;">
						<img src="/Public/Static/Icoinfont/icon/icon-1.png" style="width: 35px;" >
					</div>
					<div class="optext">
						<span class="fzmm fcf"><?php echo L('充币');?></span>
					</div>
				</div>
			</a>

			<a href="<?php echo U('User/txcoin');?>">
				<div class="oplist">
					<div class="opimg" style="line-height:50px;">
						<img src="/Public/Static/Icoinfont/icon/icon-2.png" style="width: 35px;" >
					</div>
					<div class="optext">
						<span class="fzmm fcf"><?php echo L('提币');?></span>
					</div>
				</div>
			</a>

			<a href="<?php echo U('Issue/index');?>">
				<div class="oplist">
					<div class="opimg" style="line-height:50px;">
						<img src="/Public/Static/Icoinfont/icon/icon-3.png" style="width: 35px;" >
					</div>
					<div class="optext">
						<span class="fzmm fcf">IEO</span>
					</div>
				</div>
			</a>

			<a href="<?php echo U('Orepool/index');?>">
				<div class="oplist">
					<div class="opimg" style="line-height:50px;">
						<img src="/Public/Static/Icoinfont/icon/icon-4.png" style="width: 35px;" >
					</div>
					<div class="optext">
						<span class="fzmm fcf">Staking</span>
					</div>
				</div>
			</a>

			<a href="<?php echo U('User/online');?>">
				<div class="oplist">
					<div class="opimg" style="line-height:50px;">
						<img src="/Public/Static/Icoinfont/icon/icon-5.png" style="width: 35px;" >
					</div>
					<div class="optext">
						<span class="fzmm fcf"><?php echo L('客服');?></span>
					</div>
				</div>
			</a>

		</div>
	</div>


	<!--重点币行情区-->
	<div class="zixunlist index-div-base-margin">
		<div class="zixunconten-box">
		    <a href="/Contract/index.html?coin=btc">
			<div class="zixunconten zixunconten-l" style="padding:10px;">
				<div class="tjcoinbox1">
					<span style="font-size:14px;" class="fa8a"  id="btc_coin_box">BTC/USDT</span>
				</div>
				<div class="tjcoinbox2" id="btc_money_box">
					<span class="font-size:16px;font-weight: 500;"  >46766.55</span>
				</div>
				<div class="tjcoinbox3" id="btc_change_box">
					<span class="f16 fw"  style="color:#2ebd85;">+2.16%</span>
				</div>
			</div></a>
			<?php $MBN1= M("issue")->where(["id"=>3])->find(); ?>
			  <a href="/Issue/details?id=3">
			<div class="zixunconten zixunconten-l" style="padding:10px;">
				<div class="tjcoinbox1">
					<span style="font-size:14px;" class="fa8a"  id="btc_coin_box">MORBION</span>
				</div>
				<div class="tjcoinbox2" id="mbn_money_box">
					<span class="font-size:16px;font-weight: 500;"  style="color: #3db485;
    font-size: 16px;"><?php echo ($MBN1["price"]); ?></span>
				</div>
				<div class="tjcoinbox3" id="mbn_change_box">
					<span class="f16 fw"  style="color:#2ebd85;">+<?php echo ($MBN1["lixi"]); ?>%</span>
				</div>
			</div></a>
			<!-- <a href="/Contract/index.html?coin=bch">-->
			<!--<div class="zixunconten" style="padding:10px;">-->
			<!--	<div class="tjcoinbox1">-->
			<!--		<span style="font-size:14px;" class="fa8a"  id="bch_coin_box">BCH/USDT</span>-->
			<!--	</div>-->
			<!--	<div class="tjcoinbox2" id="bch_money_box">-->
			<!--		<span  class="f22 fw fe6 " >174.77</span>-->
			<!--	</div>-->
			<!--	<div class="tjcoinbox3" id="bch_change_box">-->
			<!--		<span class="f16 fw" style="color:#2ebd85;">+2.33%</span>-->
			<!--	</div>-->
			<!--</div></a>-->
			 <a href="/Contract/index.html?coin=eth">
			<div class="zixunconten zixunconten-r" style="padding:10px;">
				<div class="tjcoinbox1">
					<span style="font-size:14px;font-weight:500;" class="fa8a"  id="eth_coin_box">ETH/USDT</span>
				</div>
				<div class="tjcoinbox2" id="eth_money_box">
					<span class="font-size:16px;font-weight: 500;"  >3204.28</span>
				</div>
				<div class="tjcoinbox3" id="eth_change_box">
					<span class="f16 fw"  style="color:#2ebd85;">+4.47%</span>
				</div>
			</div></a>
		</div>
		<div style="width: 86%;height: 1px;background: #272936;margin: 0 7% "></div>
		<!--滚动新闻-->
		<div class="scroll-to-notice" style="width:100%;height:40px;margin-top:5px;padding: 0px 10px;">
			<div style="width:10%;height:40px;float:left;line-height: 40px;text-align: center;">
				<svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><rect x="4" y="15" width="11" height="18" fill="none" stroke="#3db485" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 15L33 8V40L15 33" stroke="#3db485" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M40 17H42" stroke="#3db485" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M39 25H44" stroke="#3db485" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M40 33H42" stroke="#3db485" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</div>
			<div style="width:75%;height:40px;float:left;line-height: 40px;">
				<div class="scrollDiv" id="s1">
					<ul>
						<?php if(is_array($nlist)): foreach($nlist as $key=>$vo): ?><li><a href="<?php echo U('Index/gginfo');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>

			</div>
			<div style="width:10%;height:40px;float:right;line-height: 40px;text-align:center;">
				<a href="<?php echo U('Index/gglist');?>">
					<svg t="1655957377851"  viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3572" width="24" height="24"><path d="M170.666667 298.666667h682.666666v42.666666H170.666667V298.666667z m0 426.666666h426.666666v42.666667H170.666667v-42.666667z m0-213.333333h682.666666v42.666667H170.666667v-42.666667z" fill="#707070" p-id="3573"></path></svg>
				</a>
			</div>
		</div>
    </div>

	<!--单选项区-->
<!--	<div style="width:100%;padding:2px 10px 2px 10px;">-->
<!--		&lt;!&ndash;<div style="width:20%;height:60px;float:left;">&ndash;&gt;-->
<!--		&lt;!&ndash;	<svg class="icon hyicon" aria-hidden="true"><use xlink:href="#icon-ziyuan1"></use></svg>&ndash;&gt;-->
<!--		&lt;!&ndash;</div>&ndash;&gt;-->
<!--		&lt;!&ndash;<div style="width:65%;height:60px;float:left;">&ndash;&gt;-->
<!--		&lt;!&ndash;	<div style="width:100%;height:30px;line-height:40px;">&ndash;&gt;-->
<!--		&lt;!&ndash;		<span class="fcc fzmmm"><?php echo L('秒合约');?></span>&ndash;&gt;-->
<!--		&lt;!&ndash;	</div>&ndash;&gt;-->
<!--		&lt;!&ndash;	<div style="width:100%;height:20px;line-height:20px;">&ndash;&gt;-->
<!--		&lt;!&ndash;		<span class="fcc fzm"><?php echo L('支持多币种、多时间类型');?></span>&ndash;&gt;-->
<!--		&lt;!&ndash;	</div>&ndash;&gt;-->
<!--		&lt;!&ndash;</div>&ndash;&gt;-->
<!--		&lt;!&ndash;<a href="<?php echo U('Contract/index');?>">&ndash;&gt;-->
<!--		<a href="https://buy.ramp.network">-->
<!--		    <img src="/Public/Static/img/fast_contract.png"  style="width:100%;padding:2px 10px 2px 10px;">-->
<!--&lt;!&ndash;		    <img src="/Public/Static/img/index-1.jpg"  style="width:100%;padding:2px 10px 2px 10px;">&ndash;&gt;-->
<!--		&lt;!&ndash;<div style="width:15%;height:60px;line-height:60px;float:left;text-align:center;">&ndash;&gt;-->
<!--		&lt;!&ndash;	<i class="bi bi-arrow-right ricon"></i>&ndash;&gt;-->
<!--		&lt;!&ndash;</div>&ndash;&gt;-->
<!--		</a>-->
<!--	</div>	-->


    <!--单选项区-->
	<!--<div style="width:100%;height:80px;padding:10px;">-->
	<!--	<div style="width:20%;height:60px;float:left;">-->
	<!--		<svg class="icon hyicon" aria-hidden="true"><use xlink:href="#icon-ziyuan14"></use></svg>-->
	<!--	</div>-->
	<!--	<div style="width:50%;height:60px;float:left;">-->
	<!--		<div style="width:100%;height:30px;line-height:40px;">-->
	<!--			<span class="fcc fzmmm"><?php echo L('智能挖矿');?></span>-->
	<!--		</div>-->
	<!--		<div style="width:100%;height:20px;line-height:20px;">-->
	<!--			<span class="fcc fzm"><?php echo L('矿机出租、共享矿机');?></span>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--	<a href="/Trade/trans?sytx=BTC/USDT">-->
	<!--	<div style="width:30%;height:60px;line-height:60px;float:left;text-align:center;">-->
	<!--		<span style="background: #FCD535;padding: 10px;border-radius: 5px;"><?php echo L('立即参与');?></span>-->
	<!--	</div>-->
	<!--	</a>-->
	<!--</div>-->

	<!--市场行情-->
	<div  class="market index-div-base-margin">

		<div class="market-list" style="width:100%;height:30px;">
			<div style="width:40%;height:30px;line-height:30px;float:left;text-align:center;">
				<span  class="fzm f14 fcch" style="margin-left: -30px;"><?php echo L('交易对');?></span>
			</div>
			<div style="width:30%;height:30px;line-height:30px;float:left;text-align:center;">
				<span  class="fzm f14 fcch" ><?php echo L('最新价格');?></span>
			</div>
			<div style="width:30%;height:30px;line-height:30px;float:left;text-align:right;">
				<span  class="fzm f14 fcch" >24h<?php echo L('涨跌幅');?></span>
			</div>
		</div>
<a href="/Issue/details?id=3">
		<div style="width:100%;" id="tradebox">
		    <div class="market-list">
                <div class="list_cname">
					<img src="/xm/mbn.png" style="width: 20px; margin: 0px 10px 0px 0px;">
                    <span class="fzmmm fw fe6 cn_mbn">MORBION</span>
                </div>
                <div class="list_open cpr_mbn">
                    <span class="f14 fgreen fw" ><?php echo ($MBN1["price"]); ?></span></div>
                <div class="list_change cch_mbn">
                    <span class="fzmm bgreen market-list-info"><?php echo ($MBN1["lixi"]); ?>%</span>
                </div>
            </div>
            </a>
		    <?php if(is_array($market)): foreach($market as $key=>$vo): ?><a href="/Contract/index.html?coin=<?php echo ($vo["coinname"]); ?>">
		    <div class="market-list">
                <div class="list_cname">
					<img src="<?php echo ($vo["logo"]); ?>" style="width: 20px; margin: 0px 10px 0px 0px;">
                    <span  class="fzmmm fw fe6 cn_<?php echo ($vo["coinname"]); ?>"><?php echo strtoupper($vo['coinname']);?>/USDT</span>
                </div>
                <div class="list_open cpr_<?php echo ($vo["coinname"]); ?>">
                    <span  class='fzmmm fw fcc'>--.--</span></div>
                <div class="list_change cch_<?php echo ($vo["coinname"]); ?>">
                    <span  class='fzmm bgreen market-list-info'>0%</span>
                </div>
            </div></a><?php endforeach; endif; ?>

		</div>

	</div>
<!--
	<div class="dongbox" id="dongbox" style="display:none;">
        <div class="dong_order_c" >
            <div class="dong_order_x" id="x_dongbox">
	            <i class="bi bi-x" style="font-size:18px;" ></i>
	        </div>
	        <div class="dong_order_title">
	            <span class="fcf" style="font-size:16px;font-weight:500;"><?php echo L('公告中心');?></span>
	        </div>

			<img src="/Public/Static/img/index-2.png" style="width: 100%;">

        </div>
    </div>
-->
	<div style="width:100%;height:87px;"></div>
	<!--底部-->
	<div class="footer" >

		<a href="<?php echo U('Index/index');?>">
			<div class="footer_op">
				<div class="f_op_t" style="line-height: 35px;" >
					<?php
 if($select == 'index') { echo '<img src="/Public/Static/Icoinfont/icon/nav-1-active.png" style="width: 25px;" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-1.png" style="width: 25px;" >'; } ?>
				</div>
				<div class="f_op_b">
					<span class="fzm fcy"><?php echo L('首页');?></span>
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


	<!-- markup structure
  nav, a wrapping container for a series of link elements
    a, each anchor link element nesting an SVG icon and a span describing the link
  -->
	<nav style="display: none">
		<div class="nav-box">
			<div class="div-col-5 fl nav-box-li tcc">
				<a class="active nav-footer-a" href="#">
					<?php
 if($select == 'index') { echo '<img src="/Public/Static/Icoinfont/icon/nav-1-active.png" class="nav-img" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-1.png" class="nav-img" >'; } ?>
					<span class="nav-footer-a-span tcc" >
      Home
    </span>
				</a>
			</div>
			<div class="div-col-5 fl nav-box-li tcc">
			<a class="nav-footer-a" href="#">
				<?php
 if($select == 'trade') { echo '<img src="/Public/Static/Icoinfont/icon/nav-2-active.png" class="nav-img" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-2.png" class="nav-img" >'; } ?>
					<span  class="nav-footer-a-span tcc" >Likes</span>
			</a>
			</div>
			<div class="div-col-5 fl nav-box-li tcc">
			<a class="nav-footer-a"  href="#">
				<?php
 if($select == 'trans') { echo '<img src="/Public/Static/Icoinfont/icon/nav-3-active.png" class="nav-img" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-3.png" class="nav-img" >'; } ?>
				<span class="nav-footer-a-span tcc" >
      Search
    </span>
			</a>
			</div>
			<div class="div-col-5 fl nav-box-li tcc">
			<a class="nav-footer-a"  href="#">
				<?php
 if($select == 'contract') { echo '<img src="/Public/Static/Icoinfont/icon/nav-4-active.png" class="nav-img" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-4.png" class="nav-img" >'; } ?>
				<span class="nav-footer-a-span tcc" >
      Profile
    </span>
			</a>
			</div>
			<div class="div-col-5 fl nav-box-li tcc">
				<a class="nav-footer-a"  href="#">
					<?php
 if($select == 'user') { echo '<img src="/Public/Static/Icoinfont/icon/nav-5-active.png" class="nav-img" >'; }else{ echo '<img src="/Public/Static/Icoinfont/icon/nav-5.png" class="nav-img" >'; } ?>
					<span class="nav-footer-a-span tcc" >
      Profile
    </span>

				</a>
			</div>
		</div>

	</nav>


	<nav  style="display: none">
			<a class="active" href="#">
				<svg viewBox="0 0 100 100" style="width: 26px;">
					<g transform="translate(10 5) scale(0.8 0.9)">
						<path d="M 0 30 v 70 h 100 v -70 l -50 -30 z" stroke="currentColor" stroke-width="10" fill="none"
							  stroke-linejoin="round" stroke-linecap="round" />
					</g>
				</svg>

				<span>
			Home
		  </span>
			</a>

			<a href="#">
				<svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M41 25C41 34.9411 32.9411 43 23 43C13.0589 43 5 34.9411 5 25C5 15.0589 13.0589 7 23 7" fill="none" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M12 28.5C20.5 28.5 24 28 31 19" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round" fill="none" stroke-linejoin="round"/>
					<path d="M23 19H31V27" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round" fill="none" stroke-linejoin="round"/>
					<path d="M31 5V9.5" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round" fill="none" stroke-linejoin="round"/>
					<path d="M43.5 17L39 17" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round" fill="none" stroke-linejoin="round"/>
					<path d="M40.8892 7L37.0001 10.8891" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round" fill="none" stroke-linejoin="round"/>
				</svg>
				<span>
			Likes
		  </span>
			</a>

			<a href="#">
				<svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="none" stroke="#FDFDFD" stroke-width="4" stroke-linejoin="round"/><rect x="24" y="16.929" width="10" height="10" rx="2" transform="rotate(45 24 16.929)" fill="none" stroke="#FDFDFD" stroke-width="4" stroke-linejoin="round"/></svg>
				<span>
			Search
		  </span>
			</a>

			<a href="#">
				<svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.9821 11.9689L31.7847 4L36.3971 11.9889L17.9821 11.9689Z" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 14C4 12.8954 4.89543 12 6 12H42C43.1046 12 44 12.8954 44 14V42C44 43.1046 43.1046 44 42 44H6C4.89543 44 4 43.1046 4 42V14Z" fill="none" stroke="#FDFDFD" stroke-width="4" stroke-linejoin="round"/><path d="M35.25 33H44V23H35.25C32.3505 23 30 25.2386 30 28C30 30.7614 32.3505 33 35.25 33Z" fill="none" stroke="#FDFDFD" stroke-width="4" stroke-linejoin="round"/><path d="M44 16.5V40.5" stroke="#FDFDFD" stroke-width="4" stroke-linecap="round"/></svg>
				<span>
			Profile
		  </span>
			</a>

	</nav>


</body>
  <script>
	  // array describing the options of the navigation elements
	  // specifying the lower case option and the matching color
	  const navigationOptions = [
		  {
			  name: 'home',
			  color: '#5B37B7'
		  },
		  {
			  name: 'likes',
			  color: '#C9379D'
		  },
		  {
			  name: 'search',
			  color: '#E6A919'
		  },
		  {
			  name: 'profile',
			  color: '#1892A6'
		  }
	  ];

	  // target all anchor link elements
	  const links = document.querySelectorAll('nav a');

	  // function called in response to a click event on the anchor link
	  function handleClick(e) {
		  // prevent the default behavior, but most importantly remove the class of .active from those elements with it
		  e.preventDefault();
		  links.forEach(link => {
			  if (link.classList.contains('active')) {
				  link.classList.remove('active');
			  }
		  });

		  // retrieve the option described the link element
		  const name = this.textContent.trim().toLowerCase();
		  // find in the array the object with the matching name
		  // store a reference to its color
		  const { color } = navigationOptions.find(item => item.name === name);

		  // retrieve the custom property for the --hover-c property, to make it so that the properties are updated only when necessary
		  const style = window.getComputedStyle(this);
		  const hoverColor = style.getPropertyValue('--hover-c');
		  // if the two don't match, update the custom property to show the hue with the text and the semi transparent background
		  if (color !== hoverColor) {
			  this.style.setProperty('--hover-bg', `${color}20`);
			  this.style.setProperty('--hover-c', color);
		  }

		  // apply the class of active to animate the svg an show the span element
		  this.classList.add('active');
		  // change the color of the background of the application to match
		  document.querySelector('body').style.background = color;
	  }

	  // listen for a click event on each and every anchor link
	  links.forEach(link => link.addEventListener('click', handleClick));
  </script>

<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/pako/1.0.10/pako.min.js"></script>
<script src="https://cdn.staticfile.org/Base64/1.0.2/base64.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/Public/Static/js/layer/layer.js" ></script>
<!--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>-->
<script type="text/javascript">
    $("#x_dongbox").click(function(){
        $("#dongbox").hide();
    });

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
    function obtain_hm(){
        var coin = "usdz";
        var nameclass = ".cn_hm";
        var priceclass = ".cpr_hm";
        var changeclass = ".cch_hm";
        $.post("<?php echo U('Ajaxtrade/obtain_usdz');?>",
        {'coin':coin},
        function(data){
            if(data.code == 1){
                $(nameclass).html("HM/USDT");
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
      		var uid = '<?php echo ($uid); ?>';
      		if(!uid) {
				$("#dongbox").show();
				setCookie('_is_index', '', 1)
			}else {
				var is_index = getCookie('_is_index');
				console.log(is_index);
				if(!is_index) {
					setCookie('_is_index', true, 1)
					$("#dongbox").show();
				}
			}

          //obtain_btc();
        //   setInterval("obtain_btc()",2000);
          //obtain_eth();
        //   setInterval("obtain_eth()",3000);
          //obtain_eos();
        //   setInterval("obtain_eos()",5000);
        //   obtain_doge();
        //   setInterval("obtain_doge()",7000);
        //   obtain_bch();
        //   setInterval("obtain_bch()",9000);
        //   obtain_ltc();
        //   setInterval("obtain_ltc()",11000);

        //   obtain_iota();
        //   setInterval("obtain_iota()",13000);

        //   obtain_fil();
        //   setInterval("obtain_fil()",15000);

        //   obtain_flow();
        //   setInterval("obtain_flow()",17000);

        //   obtain_jst();
        //   setInterval("obtain_jst()",19000);

        //   obtain_itc();
        //   setInterval("obtain_itc()",21000);

        //   obtain_ht();
        //   setInterval("obtain_ht()",23000);

        //   obtain_hm();
        //   setInterval("obtain_hm()",25000);
          //getallsymbol();
          //setInterval("getallsymbol()",5000);
        //   getonemarket();
        //   setInterval("getonemarket()",2000);


      });


	  function setCookie(cname,cvalue,exdays)
	  {
		  var d = new Date();
		  d.setTime(d.getTime()+(exdays*24*60*60*1000));
		  var expires = "expires="+d.toGMTString();
		  document.cookie = cname + "=" + cvalue + "; " + expires;
	  }

	  function getCookie(cname)
	  {
		  var name = cname + "=";
		  var ca = document.cookie.split(';');
		  for(var i=0; i<ca.length; i++)
		  {
			  var c = ca[i].trim();
			  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
		  }
		  return "";
	  }


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
    // function getonemarket(){
    //     $.post("<?php echo U('Ajaxtrade/get_market_one');?>",
    //     function(data){
    //         if(data.code == 1){
    //             $("#btc_coin_box").html(data.btccoin);
    //             $("#btc_money_box").html(data.btcnewprice);
    //             $("#btc_change_box").html(data.btcchange);

    //             $("#eth_coin_box").html(data.ethcoin);
    //             $("#eth_money_box").html(data.ethnewprice);
    //             $("#eth_change_box").html(data.ethchange);

    //             $("#bch_coin_box").html(data.bchcoin);
    //             $("#bch_money_box").html(data.bchnewprice);
    //             $("#bch_change_box").html(data.bchchange);
    //         }
    //     });
    // }
    
    
    
    
</script>
<!--<script type="text/javascript">
    function getallsymbol(){
        $.post("<?php echo U('Ajaxtrade/getallsymbol');?>",
        function(data){
            if(data.code == 1){
                $("#tradebox").empty();
                var html = '';
                if(data.data == '' || data.data == null){
                    html = '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+
                           '<span class="fzmm fcf">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                           '</div>';
                    $("#tradebox").append(html);

                }else{
                    $.each(data.data,function(key,val){
                        html += '<div style="width:100%;height:50px;">'+
                                '<div class="list_cname">'+
                                '<span  class="fzmmm fcf">'+ val.cname +'</span>'+
                                '</div>'+
                                '<div class="list_open">' + val.open + '</div>'+
                                '<div class="list_change">' + val.change +'</div>'+
                                '</div>';
                    });
                    $("#tradebox").append(html);
                }
            }else{
                html =  '<div style="width:100%;height:100px;line-height:100px;text-align:center;">'+
                        '<span class="fzmm fcf">' + "<?php echo L('没有获取数据');?>" + '</span>'+
                        '</div>';
                $("#tradebox").append(html);
            }
        });
    }
</script>-->

<script type="text/javascript">
	function AutoScroll(obj) {
		$(obj).find("ul:first").animate({
			marginTop: "-25px"
		}, 500, function() {
			$(this).css({
				marginTop: "0px"
				}).find("li:first").appendTo(this);
		});
	}
	$(document).ready(function() {
		setInterval('AutoScroll("#s1")', 3000);
	});
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
                    $("#eth_money_box").html('<span class="green" style="font-size:16px;font-weight: 500;">'+data.tick.close+'</span> ');
                    $('.cpr_eth').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                    $("#eth_money_box").html('<span class="red" style="font-size:16px;font-weight: 500;">'+data.tick.close+'</span> ');
                    $('.cpr_eth').html("<span  class='f14 fred fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                if(fd2>=0){
                    $("#eth_change_box").html('<span class="green" style="font-size:14px;font-weight: 500;">' +fd2.toFixed(2)+ '%</span>');  
                    $('.cch_eth').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
                    $("#eth_change_box").html('<span class="red" style="font-size:14px;font-weight: 500;">' +fd2.toFixed(2)+ '%</span>');  
                    $('.cch_eth').html("<span  class='fzmm bred market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }
                

                
    //             $("#bch_coin_box").html(data.bchcoin);
    //             $("#bch_money_box").html(data.bchnewprice);
    //             $("#bch_change_box").html(data.bchchange);            
        }else if(data.ch=='market.btcusdt.kline.1day'){

                //波动btc
                $('.cn_btc').html('BTC/USDT');
                $("#btc_coin_box").html('BTC/USDT');
                
                if(data.tick.close>data.tick.open){
                    $("#btc_money_box").html('<span class="green" style="font-size:16px;font-weight: 500;">'+data.tick.close+'</span> ');
                    $('.cpr_btc').html("<span  class='f14 fgreen fw'>"+data.tick.close+"</span>");
                }else{
                    $("#btc_money_box").html('<span class="red" style="font-size:16px;font-weight: 500;">'+data.tick.close+'</span> ');
                     $('.cpr_btc').html("<span  class='f14 fred fw'>"+data.tick.close+"</span>");
                }
                var fd=data.tick.close-data.tick.open;
                var fd2=fd / data.tick.open * 100;
                if(fd2>=0){
                    $("#btc_change_box").html('<span class="green" style="font-size:14px;font-weight: 500;">' +fd2.toFixed(2)+ '%</span>');  
                    $('.cch_btc').html("<span  class='fzmm bgreen market-list-info'>"+fd2.toFixed(2)+"%</span>");
                }else{
                    $("#btc_change_box").html('<span class="red" style="font-size:14px;font-weight: 500;">' +fd2.toFixed(2)+ '%</span>');  
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