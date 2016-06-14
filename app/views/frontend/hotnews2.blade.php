<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>笠竹園</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="/css/slick.css">
	<link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

	<link rel="stylesheet" type="text/css" href="/css/default.css">
	<link rel="stylesheet" type="text/css" href="/css/hotnews2.css">

	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/slick.js"></script>
	<script src="/js/script.js"></script>
</head>
<body>

	<nav>
		<div class="PC clearfix">
			<ul>
				<li><a href="index"><img src="/img/m1.png">首頁</a></li>
				<li><a href="about"><img src="/img/m2.png">關於笠竹園</a></li>
				<li><a href="hotnews"><img src="/img/m3.png">最新消息</a></li>
				<li><a href="menu"><img src="/img/m4.png">特色餐點</a></li>
				<li><a href="process"><img src="/img/m5.png">招牌胡椒鴨</a></li>
				<li><a href="contact"><img src="/img/m6.png">交通資訊</a></li>
			</ul>

			<a href=""><img class="fb" src="/img/fb2.png"></a>
		</div>

		<div class="MB"><a href="#modal" data-toggle="modal"><img src="/img/menu-icon.png"></a></div>
		<div id="modal" class="fade">
			<div class="close" data-dismiss="modal">X</div>
			<img src="/img/menu.png">

			<ul class="ul1">
				<li><a href="index"><p>首頁</p></a></li>
				<li>
					<p class="fade">關於笠竹園</p>
					<ul class="ul2">
						<li><a href="about">- 關於笠竹園</a></li>
						<li><a href="environment">- 環境特色</a></li>
						<li><a href="news">- 報章雜誌報導</a></li>
					</ul>
				</li>
				<li class="thisPage">
					<p class="fade">最新消息</p>
					<ul class="ul2">
						<li><a href="hotnews">- 優惠方案</a></li>
					</ul>
				</li>
				<li>
					<p class="fade">特色餐點</p>
					<ul class="ul2">
						<li><a href="menu">- 美味菜色</a></li>
						<li><a href="recommend">- 推薦商品</a></li>
					</ul>
				</li>
				<li><a href="process"><p>招牌胡椒鴨</p></a></li>
				<li><a href="contact"><p>交通資訊</p></a></li>
			</ul>


			<p><span>Copyright © 2015 LI-CHU-YUAN. All rights reserved</span><span>Design by UTMOST</span></p>


			<img src="/img/menu2.png">
		</div>
	</nav>

<div id="container" class="clearfix">
	<ul id="subMenu">
		<li class="thisPage"><a href="hotnews">優惠方案</a></li>
	</ul>

	<div class="titlePic"><img src="/img/hot/hotnews.png"></div>
	<?php
	$pics=DB::table("rate_pics")->where("rate_id",$rate->id)->get();
	?>
	<div class="clearfix">
		<div class="left">
			<div class="s-for">
				@foreach($pics as $pic)
						@if(  !empty($pic->image) AND File::exists( public_path().$pic->image)  )
								<img src="/public{{$pic->image}}">
						@endif
				@endforeach

			</div>

			<div class="s-nav">
				@foreach($pics as $pic)
						@if(  !empty($pic->image) AND File::exists( public_path().$pic->image)  )
								<img src="/public{{$pic->image}}">
						@endif
				@endforeach
			</div>
		</div>
		<div class="right">
			<span>{{$rate->title}}</span>
			<p>{{$rate->content}}</p>
		</div>
	</div>
</div>

	<footer class="clearfix">
		<div class="info">
			<img src="/img/addr.png"><span>地址：新竹縣北埔鄉南興街110號</span><img src="/img/tel.png"><span>TEL:0911-322-321</span>
		</div>


		<div class="copyright">
			<a href=""><img class="FB" src="/img/fb.png"></a>
			<img src="/img/logo.png">
			<span class="EN">Copyright © 2015 LI-CHU-YUAN. All rights reserved</span>
			<span>Design by UTMOST</span>
		</div>
	</footer>

</body>
</html>
