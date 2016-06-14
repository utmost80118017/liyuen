<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico">
	<meta property="og:title" content="米築首頁"></meta>
	<meta property="og:type" content="米築首頁"></meta>
	<meta property="fb:app_id" content="1325670327461704" />
	<meta property="og:url" content="{{Request::url()}}"></meta>
	<meta property="og:description" content="{{ms_str($one_news->content,500)}}"></meta>
	<meta property="og:site_name" content="米築"></meta>
	<meta name="description" content="{{ms_str($one_news->content,500)}}" />

	@foreach($rate_ads as $rate_ad)
			<?php
				$r_img = getRateImage($rate_ad->id,'noGoogleList');
			?>

			@if(  !empty($r_img->image) AND File::exists( public_path().$r_img->image)  )
				<meta property="og:image" src="/public{{$r_img->image}}"></meta>
			@endif
	@endforeach


    <link rel="stylesheet" type="text/css" href="/css/slick/flexslider.css">
    <link rel="stylesheet" type="text/css" href="/css/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css">

    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/index.css">

    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/Crawler.js"></script>

    <script src="/js/script.js"></script>
    <script src="/js/index.js"></script>

</head>
<body>

<div id="container">

	<nav>
				<section class="clearfix">
						<div id="logo"><a href="/index"><img src="/images/index/logo.png"></a></div>
						<div id="slogan">
								<img src="/images/index/slogan.png">

								<div>
									<form method="post" action="/search">
											<img src="/images/index/fb_icon.png">
	                    <input type="text" name="name" placeholder="SEARCH" />
	                    <img src="/images/search_icon.png">
	                </form>


								</div>
						</div>
				</section>
				<div>
						<ul>
								<li><a href="/news"><p>NEWS</p><span>地產動態</span></a></li>
								<li><a href="/case"><p>CASE</p><span>新案訊息</span></a></li>
								<li><a href="/deco"><p>DECO</p><span>生活美學</span></a></li>
								<li><a href="/people"><p>PEOPLE</p><span>人物觀點</span></a></li>
								<li><a href="/about"><p>ABOUT</p><span>關於米築</span></a></li>
						</ul>
				</div>
		</nav>


    <img id="toTop" src="images/toTop.png">

    <div id="main">

        <div class="flex">
            <div class="flexslider fs1">
                <ul class="slides">
										<?php foreach ($ad_14 as $row14): ?>
											<li>
												@if(  !empty($row14->image) AND File::exists( public_path().$row14->image)  )
													<a href="{{$row14->url}}"   target="_new" >
														<img src="/public{{$row14->image}}" />
													</a>
												@else
														<img src="/images/798x422.jpg"  />
												@endif
											</li>
										<?php endforeach; ?>

                </ul>
            </div>

            <div class="viewmore" style="display:none;" ><img src="images/index/viewmore.png" style="display:none;"></div>
        </div>

				@include("frontend.comm.row-marquee",array("m"=>"m" , "c_sql"=>$ad_8))

    </div>

    @include("frontend.comm.middle")

    <div id="news">
        <div class="content clearfix">
            <img src="images/index/news_bg2.jpg">
            <p class="summary">
                <span class="EN">NEWS</span>
                <span class="CH"> / 地產動態  </span>
								<br>
								<span class="summaryTitle" > {{$one_news->name}}</span>
                <span class="text">{{ms_str($one_news->content,300)}}</span>
                <a href="/news2/{{$one_news->id}}"><span class="link">MORE</span></a>
            </p>
            <div>



							@if( !empty($one_news->image) AND File::exists(public_path().$one_news->image) )
								<img src="/public{{$one_news->image}}">
							@else
								<img src="images/index/news1.jpg">
							@endif



            </div>
        </div>
    </div>


		@include("frontend.comm.row-marquee",array("m"=>"m2" , "c_sql"=>$ad_8))

    <div id="case">
        <div class="select">
            <img class="left" src="images/index/case_arrowL.png">
            <img class="right" src="images/index/case_arrowR.png">
            <div class="slick4">
                		<div class="area" id="" >
											<a href="/case">
												<p>全部區域</p><p>ALL</p>
											</a>
										</div>

										@foreach($areas as $area)
										<div class="area" id="{{$area->id}}">
												<a href="/case?taiwanArea={{$area->id}}">
													<p>{{$area->name}}</p>
													<p>{{$area->title}}</p>
												</a>
										</div>
										@endforeach




            </div>
        </div>

        <div class="slick">


						@foreach($rate_ads as $rate_ad)
            <div class="slick2">
								<?php
									$r_img = getRateImage($rate_ad->id,'noAd');
								?>
								@if(  !empty($r_img->image) AND File::exists( public_path().$r_img->image)  )
                	<img src="/public{{$r_img->image}}"  >
								@else

								@endif

                <div class="detail">
                    	<img src="images/index/case_close.png">
											{{$rate_ad->name}}
                    	{{rate_info($rate_ad)}}
                </div>
            </div>
						@endforeach





        </div>

        <button id="prev"></button>
        <button id="next"></button>

        <p class="summary">
            <span class="EN">CASE</span>
            <span class="CH"> /新案訊息</span>
            <a href="/case"><span class="link">MORE</span></a>
        </p>
    </div>


		@include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))

		<section id="deco">
        <div class="flexslider fs1">
            <ul class="slides">

								@foreach($deco_ads as $deco)
		                <li>
												@if(  !empty($deco->image) AND File::exists( public_path().$deco->image)  )
													<img src="/public{{$deco->image}}" />
												@else
		                    	<img src="images/index/deco1.jpg" />
												@endif
		                    <p class="summary">
		                        <span class="EN">DECO</span>
		                        <span class="CH"> / 生活美學 </span>
														<br>
														<span class="summaryTitle" >  {{$deco->name}}</span>
		                        <span class="text">{{ms_str($deco->content,300)}}</span>
		                        <a href="/deco2/{{$deco->id}}"><span class="link">MORE</span></a>
		                    </p>
		                </li>
								@endforeach
            </ul>
        </div>
        <!-- <p class="summary">
            <span class="EN">DECO</span>
            <span class="CH"> / 生活美學</span>
            <span class="text">ETABS是由CSI公司開發研製的房屋建築結構分析與設計軟體，ETABS已有近三十年的發展歷史....</span>
            <a href="deco.html"><span class="link">MORE</span></a>
        </p> -->
    </section>

  <section class="row-ad">
									<?php
									$ad23_get = AD::where("category_id",23)->orderByRaw("RAND()")->take(3)->get();

									// $ad23_1 = AD::where("category_id",23)->orderByRaw("RAND()")->first();
									?>
									@if(  !empty($ad23_get[0]->image) AND File::exists( public_path().$ad23_get[0]->image)  )
											<a href="{{$ad23_get[0]->url}}" target="_new">
		                    <img src="/public{{$ad23_get[0]->image}}"   />
											</a>
									@endif
		</section>

    <section id="people" class="clearfix">
        <p class="summary">
            <span class="EN">PEOPLE</span>
            <span class="CH"> / 人物觀點   </span>
						<br>
						<span class="summaryTitle" > {{$people->name}}</span>
            <span class="text">
							<?php
							$pd=explode("<p>",$people->content);
							$pd=explode("</p>",$pd[1]);
							echo $pd[0];
							?>
						</span>
            <a href="/people2/{{$people->id}}"><span class="link">MORE</span></a>
        </p>

        <div >
						@if(  !empty($people->image) AND File::exists( public_path().$people->image)  )
            	<img src="/public{{$people->image}}">
						@endif



        </div>
    </section>

		<section class="row-ad">
								<?php
								// $ad23_2 = AD::where("category_id",23)->orderByRaw("RAND()")->first();
								?>
								@if(  !empty($ad23_get[1]->image) AND File::exists( public_path().$ad23_get[1]->image)  )
									<a href="{{$ad23_get[1]->url}}"  target="_new" >
                  		<img src="/public{{$ad23_get[1]->image}}"/>
									</a>
								@endif
			</section>


		<div id="about" class="clearfix">
        <div>
					@if(  !empty($about->image) AND File::exists( public_path().$about->image)  )
					<img src="/public{{$about->image}}">
					@endif
				</div>
        <p class="summary">
            <span class="EN">ABOUT US</span>
            <span class="CH"> / 關於米築</span>
            <span class="text">{{ms_str($about->content,200)}}</span>
            <a href="/about"><span class="link">MORE</span></a>
        </p>
    </div>

    @include("frontend.comm.footer")

</div>


<script type="text/javascript">
$("document").ready(function(){
		// $(".area").click(function(){
		//
		// 		if(  $(this).attr("id") != "undefined" ){
		//
		// 				// alert( $(this).attr("id") );
		// 		}
		//
		// });
});

</script>
</body>
</html>
