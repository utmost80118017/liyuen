<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico">

	<meta property="og:title" content="{{$post->name}}"></meta>
	<meta property="og:type" content="地產動態"></meta>
	<meta property="og:url" content="{{Request::url()}}"></meta>
	<meta property="fb:app_id" content="1325670327461704" />	
	<meta property="og:site_name" content="米築"></meta>
	<meta property="og:description" content="{{ms_str($post->content,200)}}"></meta>

	<?php
	try {

				$html = new \Htmldom($post->content);
				foreach($html->find('img') as $element){
					echo '<meta property="og:image" src="/public'.$element->src.'" ></meta>';
				}

	} catch (Exception $e) {
		 //  echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

	?>






    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/news.css">

    <script src="/js/jquery.js"></script>
		<script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/Crawler.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="/js/script.js"></script>

    <style type="text/css">

    article{
        width: 94%;
    }
    .news{
        border: none;
    }
    .news p{
        margin: 30px 0;
    }
		.news img{
			max-width: 100%;
			height: auto !important;
		}
		.title a img{
			float: right;
		}


    </style>
</head>
<body>
<div id="container">
	@include("frontend.comm.top")

    @include("frontend.comm.top_ad",array("sql_data"=>$ad_20))
    <img id="toTop" src="/images/toTop.png">

    @include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))

    <div id="main" class="clearfix">
        <article>
            <div class="news clearfix">
                <span class="{{$color}} title"></span>
								<span>

									<?php
										// $dd=explode(" ",$post->created_at);
										// echo $dd[0];
										echo $post->date;

									?>
								</span>
                <p class="{{$color}} title">{{$post->name}}
										<a href="javascript: void(window.open('http://www.facebook.com/share.php?u='.concat(encodeURIComponent(location.href)) ));"  target="_new" >
												<img src="/images/news/fb_icon.png">
										</a>
								</p>

								@if( !empty($post->image) AND File::exists( public_path().$post->image))
									<!-- <img src="/public{{$post->image}}"> -->
								@endif



                <p>{{ ($post->content) }}</p>
            </div>
        </article>
    </div>

  @include("frontend.comm.footer")
</div>
</body>
</html>
