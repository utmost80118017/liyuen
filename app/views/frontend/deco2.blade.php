
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html prefix='og: http://ogp.me/ns#'>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>米築</title>
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />



	<meta property="fb:app_id" content="1325670327461704" />
	<meta property="og:title" content="{{$deco->name}}" />	
	<meta property="og:url" content="{{Request::url()}}" />
	<?php
	try {
			$html = new \Htmldom($deco->content );
			foreach($html->find('img') as $element){
			      //  echo $element->src . '<br>';
						//  echo '<meta property="og:image" content="http://www.maisonbest.com.tw'.$element->src.'" /></meta>';
						 echo '<meta property="og:image" content="http://www.maisonbest.com.tw'.$element->src.'" />';
			}
	} catch (Exception $e) {

	}
	?>


	<meta property="og:site_name" content="米築" />
	<meta property="og:description" content="{{ms_str($deco->content,200)}}" />
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/deco2.css">

    <script src="/js/jquery.js"></script>
		<script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/Crawler.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>

    <script src="/js/script.js"></script>
		<style media="screen">
			div.articleControllerList{
				float:right;
			}
		</style>
</head>
<body>
<div id="container">
		@include("frontend.comm.top")

    @include("frontend.comm.top_ad",array("sql_data"=>$ad_22))

    <img id="toTop" src="/images/toTop.png">

	@include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))

    <div id="main" class="clearfix">
        <section>
            <!-- <p>HOME & LIVING</p> -->
            <span>{{$deco->name}}</span>

						@if( !empty($deco->image) AND File::exists( public_path().$deco->image))
						<!--
							<img src="/public{{$deco->image}}">
						-->
						@endif

        </section>

        <article>
					<div class="articleControllerList">
							@if($deco->videoLink)
								<a href="{{$deco->videoLink}}" target="_new" >
										<img src="/images/case/icon4.png" style="width:35px;">
								</a>
							@endif

							@if($deco->vr360Link)
								<a href="{{$deco->vr360Link}}"  target="_new" >
									<img src="/images/case/icon3.png"  style="width:35px;">
								</a>
							@endif

							<a href="javascript: void(window.open('http://www.facebook.com/share.php?u='.concat(encodeURIComponent(location.href)) ));"  target="_new" >
									<img src="/images/case/icon2.png"  style="width:35px;">
							</a>





							<a href="http://line.naver.jp/R/msg/text/?{{$deco->name}}%0D%0A{{Request::url()}}" rel="nofollow" >
								<img src="/images/case/icon1.png"   alt="用LINE傳送"   style="width:35px;"/>
							</a>





					</div>
            {{$deco->content}}
        </article>
    </div>

    @include("frontend.comm.footer")
</div>
</body>
</html>
