<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>笠竹園</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

	<style type="text/css">

	#newsList{
		position: relative;
		padding: 30px 40px;
	}
	.news , .news:first-child{
		border: none;
	}
	.news .pic , .news .content{
		float: none;
		margin: 20px auto;
		width: 90%;
	}
	.news .content .date{
		font-size: 18px;
	}
	#newsList .bg{
		position: absolute;
		bottom: -50px; right: -50px;
	}

	@media (max-width: 980px){

	#newsList .bg{
		display: none;
	}
	#newsList{
		padding: 5%;
	}
	.news{
		padding: 0;
	}

	}

	</style>
</head>
<body>

	<nav>
		<div class="PC clearfix">
			<ul>
				<li><a href="index"><img src="img/m1.png">首頁</a></li>
				<li><a href="about"><img src="img/m2.png">關於笠竹園</a></li>
				<li><a href="hotnews"><img src="img/m3.png">最新消息</a></li>
				<li><a href="menu"><img src="img/m4.png">特色餐點</a></li>
				<li><a href="process"><img src="img/m5.png">招牌胡椒鴨</a></li>
				<li><a href="contact"><img src="img/m6.png">交通資訊</a></li>
			</ul>

			<a href=""><img class="fb" src="img/fb2.png"></a>
		</div>

		<div class="MB"><a href="#modal" data-toggle="modal"><img src="img/menu-icon.png"></a></div>
		<div id="modal" class="fade">
			<div class="close" data-dismiss="modal">X</div>
			<img src="img/menu.png">

			<ul class="ul1">
				<li><a href="index"><p>首頁</p></a></li>
				<li class="thisPage">
					<p class="fade">關於笠竹園</p>
					<ul class="ul2">
						<li><a href="about">- 關於笠竹園</a></li>
						<li><a href="environment">- 環境特色</a></li>
						<li><a href="news">- 報章雜誌報導</a></li>
					</ul>
				</li>
				<li>
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


			<img src="img/menu2.png">
		</div>
	</nav>

<div id="container" class="clearfix">
	<ul id="subMenu">
		<li><a href="about">經營理念</a></li>
		<li><a href="environment">環境特色</a></li>
		<li class="thisPage"><a href="news">報章雜誌報導</a></li>
	</ul>

	<div class="titlePic"><img src="img/news/about.png"></div>

	<div id="newsList">
		<div class="news clearfix">
			<div class="pic"><img src="img/news/news1.jpg"></div>
			<div class="content">
				<span>報章雜誌報導 / NEWS</span>
				<p class="date">8年級新鮮人 努力跟上團隊腳步</p>
				<p>從原本的幼教系統，轉踏入生硬的房地產工作，入行僅年餘的楊芳綾絲毫沒</p>
			</div>
		</div>

		<img class="bg" src="img/news/onion.png">
	</div>

	<p class="EN"><span>The Hakkas, sometimes Hakka Han,are Han Chinese people</span><span>whose ancestral homes are chiefly from the Hakka-speaking provincial</span></p>
</div>

	<footer class="clearfix">
		<div class="info">
			<img src="img/addr.png"><span>地址：新竹縣北埔鄉南興街110號</span><img src="img/tel.png"><span>TEL:0911-322-321</span>
		</div>


		<div class="copyright">
			<a href=""><img class="FB" src="img/fb.png"></a>
			<img src="img/logo.png">
			<span class="EN">Copyright © 2015 LI-CHU-YUAN. All rights reserved</span>
			<span>Design by UTMOST</span>
		</div>
	</footer>

</body>
</html>
