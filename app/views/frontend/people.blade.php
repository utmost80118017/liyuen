<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="/favicon.ico">	 
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/news.css">
    <link rel="stylesheet" type="text/css" href="/css/people.css">

    <script src="/js/jquery.js"></script>
		<script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/Crawler.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="/js/script.js"></script>

    <script type="text/javascript">
        $(window).load(function(){
            $("#main section > div span:eq(0)").click(function(){
                $("html , body").animate({
                    "scrollTop": $(".people:eq(0)").offset().top -30
                })
            });

            $("#main section > div span:eq(1)").click(function(){
                $("html , body").animate({
                    "scrollTop": $(".people:eq(1)").offset().top -30
                })
            });

						$("#main section > div span:eq(2)").click(function(){
                $("html , body").animate({
                    "scrollTop": $(".people:eq(2)").offset().top -30
                })
            });

						$("#main section > div span:eq(3)").click(function(){
                $("html , body").animate({
                    "scrollTop": $(".people:eq(3)").offset().top -30
                })
            });

						$("#main section > div span:eq(4)").click(function(){
                $("html , body").animate({
                    "scrollTop": $(".people:eq(4)").offset().top -30
                })
            });

            $(window).scroll(function(){
                if( $(window).scrollTop() > $("#main").offset().top ){
                    $("#main aside").css("position","fixed");
                }
                else{
                    $("#main aside").css("position","absolute");
                }
            });
        });
    </script>
</head>
<body>
<div id="container">
	@include("frontend.comm.top")

    @include("frontend.comm.top_ad",array("sql_data"=>$ad_25))
    <img id="toTop" src="/images/toTop.png">

	@include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))

    <div id="main" class="clearfix">
        <section>
            <p>PEOPLE</p>
            <span>人物觀點</span>

            <div>
							@foreach($peoples as $peoplfueck)
									<span>{{$peoplfueck->title}}</span>
							@endforeach
						</div>

        </section>



        <article>
					<?php
					$i=1;
					?>
						@foreach($peoples as $people)
							<?php
							$i++;
							?>
								@if( $i % 2 == 0)

				            <div class="people">

											@if( !empty($people->image) AND File::exists(public_path().$people->image) )
												<img src="/public{{$people->image}}">
											@endif




				                <div class="name"><p>-{{$people->title}}-</p><span>{{$people->name}}</span></div>
				                <p>{{ms_str($people->content,200) }}</p>
				            </div>

				            <div class="link">
				                <a href="/people2/{{$people->id}}"><span>MORE</span></a>
				                <img src="/images/people/b2.png">
				            </div>


									@else


				            <div class="people">
											@if( !empty($people->image) AND File::exists(public_path().$people->image) )
												<img src="/public{{$people->image}}">
											@endif

				                <div class="name"><p>-  {{$people->title}} -</p><span>{{$people->name}}</span></div>
				                <p>{{ms_str($people->content,200)}}</p>
				            </div>

										<div class="link">
				                <a href="/people2/{{$people->id}}"><span>MORE</span></a>
				                <img src="/images/people/b1.png">
				            </div>
								@endif
						@endforeach

            <p id="page">
							<?php echo with(new CustomPresenter($peoples))->render(); ?>
						</p>


        </article>
    </div>

    @include("frontend.comm.footer")
</div>
</body>
</html>
