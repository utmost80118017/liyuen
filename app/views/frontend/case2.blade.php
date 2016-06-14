<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
	<meta charset="UTF-8">
	<title>米築</title>
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta property="og:title" content="{{$case->title}}"></meta>
	<meta property="og:type" content="房屋"></meta>
	<meta property="fb:app_id" content="1325670327461704" />

	<meta property="og:url" content="{{Request::url()}}" />
	<meta property="og:site_name" content="米築"></meta>
	<meta property="og:description" content="{{ms_str($case->content,200)}}"></meta>

	<?php
	try {

				// $html = new \Htmldom($case->content);
				// foreach($html->find('img') as $element){
				// 	echo '<meta property="og:image" src="/public'.$element->src.'" ></meta>';
				// }

	} catch (Exception $e) {
		 //  echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

	?>




    <link rel="stylesheet" type="text/css" href="/css/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/case.css">
    <link rel="stylesheet" type="text/css" href="/css/case2.css">

    <script src="/js/jquery.js"></script>
		<script src="/js/jquery.flexslider-min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/Crawler.js"></script>
		<script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="/js/script.js"></script>

		<script src="/js/jquery.tinyMap.js"></script>


		<script type="text/javascript">
				$(window).load(function() {
						$('.fs1').flexslider({
								animation: "slide",
								slideshowSpeed: 3500,
						});
				});

		function loadMap(){
		  var map 	=  $('.wmap');

		  map.tinyMap({
		    'center':  ['{{$case->latitude}}','{{$case->longitude}}'],
		    'zoom': 13,
				'infoWindowAutoClose':true,
				'scrollwheel': false,
		    'marker': [
		          {
		            'addr'          :['{{$case->latitude}}','{{$case->longitude}}'],

		            'icon'          : createMarkerIcon('{{$case->title}}'),
		            'newLabelCSS'   : 'labels',
		            'ignore'        : true,
		            'text'          :    '<table><tr><td>'+
																					<?php
																						$o_img = getRateImageType($case->id,'setGoogle');
																					?>
																					@if(  !empty($o_img->image) AND File::exists( public_path().$o_img->image)  )
																						'<img src="/public{{$o_img->image}}"    >'+
																					@endif
																			'</td><td> '+

																					' {{$case->googleTitle}}<br>'+
																					' {{$case->googleContent}}<br>'+

																			'</td></tr></table>'

		          },
							@foreach($cases as $o_case)
								{
									'addr'          : ['{{$o_case->latitude}}','{{$o_case->longitude}}'],

									'icon'          : createMarkerIcon('{{$o_case->title}}'),
									'newLabelCSS'   : 'labels',
									'ignore'        : true,
									'text'          : '<table><tr><td>'+
																				<?php
																					$r_img = getRateImageType($o_case->id,'setGoogle');
																				?>
																				@if(  !empty($r_img->image) AND File::exists( public_path().$r_img->image)  )
												                	'<img src="/public{{$r_img->image}}"    >'+
																				@endif
																			 '</td><td>'+
																					 '{{$o_case->googleTitle}} <br>'+
																					 ' {{$o_case->googleContent}} '+
																			 '<ul></td></tr></table>'

								},
							@endforeach

		    ] ,
		});
		}

		$("document").ready(function(){
		        loadMap();
		});



		</script>
		<script src="/js/cases.js"></script>
		<style type="text/css">
		  #map-canvas { height: 100%; margin: 0; padding: 0;}


			.wmap {
				width: 100%; height: 500px;
			}

			@media (max-width: 480px) {


				.wmap {
			    height: 250px;
			  }
			}
		</style>
</head>

<body>





<div id="container">


	<div class="WtfMap"></div>
	@include("frontend.comm.top")

     @include("frontend.comm.top_ad",array("sql_data"=>$ad_12))
    <img id="toTop" src="/images/toTop.png">
		@include("frontend.comm.row-marquee",array("m"=>"m3" , "c_sql"=>$ad_8))



		<div class="mainPic">
        <div class="flex">
            <div class="flexslider fs1">
                <ul class="slides">

										{{$case->title}}
										<?php
							      $rate_pics=DB::table("rate_pics")
																		->where('rate_id',$case->id)
																		->whereNotIn('name',array("setGoogle","setList","setShow"))
																		->take(6)
																		->get();
							      ?>

							      @foreach($rate_pics as $pic)
												@if( !empty($pic->image) AND File::exists(public_path().$pic->image) )
				                    <li>
				                        <img src="/public{{$pic->image}}" />
				                    </li>
												@endif
										@endforeach



                </ul>
            </div>
        </div>
    </div>






    <div id="main">

        <span id="Name">{{$case->title}}</span>

        <p id="subTitle">
					<span>{{$case->sub}}</span>


					<span class="clearfix">
					@if($case->videoLink)
						<a href="{{$case->videoLink}}" target="_new" >
								<img src="/images/case/icon4.png">
						</a>
					@endif

					@if($case->vr360Link)
						<a href="{{$case->vr360Link}}"  target="_new" >
							<img src="/images/case/icon3.png">
						</a>
					@endif

					<a href="javascript: void(window.open('http://www.facebook.com/share.php?u='.concat(encodeURIComponent(location.href)) ));"  target="_new" >
							<img src="/images/case/icon2.png">
					</a>

					@if($case->lineLink)
						<a href="{{$case->lineLink}}"  target="_new" >
							<img src="/images/case/icon1.png">
						</a>
					@endif
					</span>

				</p>
        	
						<div id="intro" style="">
					{{$case->content}}
						</div>
        
        
		<p></p>
			
        <div id="info" class="clearfix">
            <p>本案資訊</p>
            <ul>
            		@if($case->investment)
                		<li>建設：{{$case->investment}}</li>
                @endif
                
                @if($case->baseArea)
                		<li>基地面積：{{$case->baseArea}}</li>
                @endif
                
                @if($case->floor)
                		<li>	樓層：{{$case->floor}}</li>
                @endif
                @if($case->households)
                		<li>戶數：{{$case->households}}</li>
                @endif
                
                @if($case->floorNumber)
                		<li>坪數：{{$case->floorNumber}}</li>
                @endif
                @if($case->pattern)
                		<li>格局：{{$case->pattern}}</li>
				@endif
            </ul>
            <ul>
            		@if($case->postulate)
                		<li>公設比：{{$case->postulate}}</li>
                @endif
                
                @if($case->one_price)
                		<li>單價：{{$case->one_price}}</li>
                @endif
                
                @if($case->total_price)
                		<li>總價：{{$case->total_price}}</li>
                @endif
                
                @if($case->base_address)
                		<li>基地位置：{{$case->base_address}}</li>
                @endif
                
                @if($case->reception)
                		<li>接待中心：{{$case->reception}}</li>
                @endif
                	
                @if($case->tel)
                		<li>洽詢電話：{{$case->tel}}</li>
                @endif
            </ul>
            <div>
							<?php
								$s_img = getRateImageType($case->id,'setShow');
							?>
							@if(  !empty($s_img->image) AND File::exists( public_path().$s_img->image)  )
								<img src="/public{{$s_img->image}}"     >
							@else
								<img src="/images/case/c1.jpg">
							@endif

						</div>
        </div>

    </div>


    <section id="map">


			<!-- @include("frontend.demo2") -->
			<div class="googlemap">
				<img src="/images/case/map.jpg">
				<div class="wmap"></div>
				<img src="/images/case/map.jpg">
			</div>


        <div class="select">
            <img class="left" src="/images/index/case_arrowL.png">
            <img class="right" src="/images/index/case_arrowR.png">
            <div class="slick3">
                <div class="area"><a href="/case"><p>全部區域</p><p>ALL</p></a></div>


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
    </section>

    <aside class="clearfix">

				@foreach($cases as $sub_case)
        <div class="case">
            <div class="casePic">
								<a href="/case2/{{$sub_case->id}}">
									<?php
										$r_img = getRateImageType($sub_case->id,'setList');
									?>
									@if(  !empty($r_img->image) AND File::exists( public_path().$r_img->image)  )
	                						<img src="/public{{$r_img->image}}"  >
									@else
										<img src="/images/case/case1.jpg"  >
									@endif



								</a>
						</div>
        </div>
				@endforeach



        <p id="page">

					@if($taiwanArea)
					<?php echo with(new CustomPresenter($cases->appends(array('taiwanArea' => $taiwanArea)) ))->render(); ?>
					@else
					<?php echo with(new CustomPresenter($cases))->render(); ?>
					@endif
				</p>
    </aside>

    @include("frontend.comm.footer")
</div>



<script type="text/javascript">
		$("document").ready(function(){
				$(".area").click(function(){
					location.href="?taiwanArea="+$(this).attr("id");
				});
		});
</script>




</body>
</html>
