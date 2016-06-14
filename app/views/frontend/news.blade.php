<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<link rel="shortcut icon" href="/favicon.ico">	 
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="/css/default.css">
	<link rel="stylesheet" type="text/css" href="/css/news.css">

	<script src="/js/jquery.js"></script>
	<script src="/js/jquery.flexslider-min.js"></script>
	<script src="/js/Crawler.js"></script>
	<script src="http://malsup.github.com/jquery.cycle2.js"></script>

	<script src="/js/script.js"></script>



</head>
<body>
<div id="container">
	@include("frontend.comm.top")

    @include("frontend.comm.top_ad",array("sql_data"=>$ad_20))
    <img id="toTop" src="images/toTop.png">

  	@include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))

    <div id="main" class="clearfix">
        <section>
            <p>NEWS</p>
            <span>地產動態</span>
            <select>
                <option>2016</option>
            </select>
        </section>


        <article>
					<?php
					$titless=array("green","brown","yellow","wheat","pink",);
					$bgs = array( "images/news/n1.jpg",
												"images/news/n2.jpg",
												"images/news/n3.jpg",
												"images/news/n4.jpg",
												"images/news/n5.jpg",
													);
					$bgi=0;
					?>

						@foreach($posts as $post)
            <div class="news clearfix">
                <div>
                    <span class="{{$titless[$bgi]}} title"></span><span>
											<?php
												// $dd=explode(" ",$post->created_at);
												// echo $dd[0];
												echo $post->date;
											?>
										</span>
                    <p class="{{$titless[$bgi]}} title">{{$post->name}}</p>
                    <p>{{ms_str_news($post->content,200) }}<a href="news2/{{$post->id}}?color={{$titless[$bgi]}}"><span>(繼續閱讀)</span></a></p>
                </div>

                <div class="newsPic">
                    <a href="/news2/{{$post->id}}?color={{$titless[$bgi]}}">



												@if( !empty($post->image) AND File::exists(public_path().$post->image) )
													<img src="/public{{$post->image}}">
												@else
													<img src="{{$bgs[$bgi]}}">
												@endif
													<img class="hover" src="images/news/hover.png">

                    </a>
                </div>
            </div>
						<?php $bgi++;?>
						@endforeach



            <p id="page">

							<?php echo with(new CustomPresenter($posts))->render(); ?>
						</p>
        </article>
    </div>

   @include("frontend.comm.footer")
</div>
</body>
</html>
