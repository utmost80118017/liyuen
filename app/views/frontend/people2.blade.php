<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="/favicon.ico">
	<meta property="og:title" content="{{$people->name}}"></meta>
	<meta property="og:type" content="地產動態"></meta>


	<meta property="fb:app_id" content="1325670327461704" />
	 


	<meta property="og:url" content="{{Request::url()}}"></meta>
	<meta property="og:site_name" content="米築"></meta>
	<meta property="og:description" content="{{ms_str($people->content,200)}}"></meta>

	<?php
	try {

				$html = new \Htmldom($people->content);
				foreach($html->find('img') as $element){
					echo '<meta property="og:image" src="/public'.$element->src.'" ></meta>';
				}

	} catch (Exception $e) {
 	   //  echo 'Caught exception: ',  $e->getMessage(), "\n";
 	}

	?>



    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/news.css">
    <link rel="stylesheet" type="text/css" href="/css/people.css">

    <script src="/js/jquery.js"></script>
		<script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/Crawler.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="/js/script.js"></script>

    <style type="text/css">

    article{
        width: 100%;
    }
    .bg{
        font-size: 0;
    }
    .bg img{
        width: 100%;
    }
    .people{
        margin-top: 30px;
        max-width: 94%;
        padding: 0 3%;
    }
    .people > img{
        float: left;
        width: 30%;
    }
    .people .intro{
        float: right;
        width: 60%;
        padding: 0 5%;
        text-align: left;
    }
    .people .name{
        margin: 0;
        font-weight: bold;
        font-size: 20px;
    }
    .intro .subTitle{
        display: inline-block;
        margin: 10px 0;
        width: 100%;
        color: #b28850;
        font-size: 18px;
        font-weight: bold;
    }
    .intro .subTitle img{
        float: right;
    }
    .intro > p{
        margin: 20px 0;
        text-align: justify;
    }

    @media (max-width: 768px){

    .people > img{
        float: none;
        margin: 0 auto;
        width: 60%;
    }
    .people .intro{
        float: left;
        width: 90%;
    }

    }

    </style>
</head>
<body>
<div id="container">
	@include("frontend.comm.top")

    @include("frontend.comm.top_ad",array("sql_data"=>$ad_25) )
    <img id="toTop" src="/images/toTop.png">
  	@include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))

    <div id="main" class="clearfix">
        <article>
            <div class="bg"><img src="/images/people/b3.jpg"></div>

            <div class="people clearfix">


								@if( !empty($people->image2) AND File::exists(public_path().$people->image2) )
									<img src="/public{{$people->image2}}">
								@endif

								<div class="intro">
                    <div class="name"><p>- {{$people->name}} -</p><span>{{$people->title}}</span></div>
                    <span class="subTitle">{{$people->tag}}

												<a href="javascript: void(window.open('http://www.facebook.com/share.php?u='.concat(encodeURIComponent(location.href)) ));"  target="_new" >
													<img src="/images/people/fb_icon.png">
												</a>

										</span>
                    {{$people->content}}
                </div>
            </div>

            <div class="bg"><img src="/images/people/b1.png"></div>
        </article>
    </div>

   @include("frontend.comm.footer")
</div>
</body>
</html>
