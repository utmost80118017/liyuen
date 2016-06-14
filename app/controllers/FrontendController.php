<?php

class FrontendController extends BaseController {



    public function init_date(){

        $data["cases"]  = Cas::take(10)->get();
        $cas=Cate::where('type', '廣告')->get();

        foreach ($cas as $row ) {
          $data["ad_".$row->id]    =   Ad::where("category_id",$row->id)->orderBy("pr","asc")->get();
        }

        $data["ad_8"]     =   Ad::where("category_id",8)->take(6)->orderBy(DB::raw('RAND()'))->get();
        $data["ad_14"]    =   Ad::where("category_id",14)->take(6)->orderBy("pr","asc")->get();
        $data["ad_10"]    =   Ad::where("category_id",10)->take(6)->orderBy("pr","asc")->get();
        $data["ad_23"]    =   Ad::where("category_id",23)->take(6)->orderBy("pr","asc")->get();
        #20	地產動態-置頂Banner
        $data["ad_20"]    =   Ad::where("category_id",20)->orderBy("pr","asc")->get();
        #22	生活美學-置頂Banner
        $data["ad_22"]    =   Ad::where("category_id",22)->orderBy("pr","asc")->get();
        #25	人物觀點-置頂Banner
        $data["ad_25"]    =   Ad::where("category_id",25)->orderBy("pr","asc")->get();
        #26	關於米築-置頂Banner
        $data["ad_26"]    =   Ad::where("category_id",26)->orderBy("pr","asc")->get();

        $data["adall"]  = Ad::orderBy("pr","asc")->get();

        return $data;
    }


	  public function index(){

      $d=array("title"=>"index","ip"=>$_SERVER["REMOTE_ADDR"],"created_at"=>date("Y-m-d h:i:s"));
      $this->insertToExplode($d);
  		$data = $this->init_date();

      $data["rates"]    = Rate::all();
      # 地產動態
      $data["one_news"] = Post::whereNotIn('id', array(7))->orderBy("prim","asc")->first();
      $tpeople         =  Deco::first();
      $data["one_life"] = !empty($tpeople)?$tpeople:false;
      $data["oabout"]   = Post::where('id',7)->first();
      $about            = Post::where('id',7)->first();
      #關於米築
      $data["about"]    = !empty($about)?$about:false;

      $data["deco_ads"]   = Deco::where('flag',1)->get();

      $data["areas"]   = RateArea::where("flag",1)->get();

      $data["people"]   = People::first();
      #新案訊息
      $data["rate_ads"] = Rate::where("xm",1)->orderBy(DB::raw('RAND()'))->take(5)->get();
      $data["layouts"]  = DB::table("layouts")->get();
  		return View::make('frontend.index',$data);

  	}



	public function hotnews(){

        // $d=array("title"=>"about","ip"=>$_SERVER["REMOTE_ADDR"],"created_at"=>date("Y-m-d h:i:s"));
        // $this->insertToExplode($d);
  		  $data = $this->init_date();
        $data["rates"] = Rate::all();

  		  return View::make('frontend.hotnews',$data);
  	}

    public function news(){
    		  $data = $this->init_date();
          $data["rates"] = Rate::all();

    		  return View::make('frontend.news',$data);
    	}
    public function about(){
            $data = $this->init_date();
            $data["rates"] = Rate::all();

            return View::make('frontend.about',$data);
    }

  public function news2(){

            $data = $this->init_date();
            $data["rates"] = Rate::all();

            return View::make('frontend.news2',$data);
  }

	public function hotnews2($id){

        $d=array("title"=>"about","ip"=>$_SERVER["REMOTE_ADDR"],"created_at"=>date("Y-m-d h:i:s"));
        $this->insertToExplode($d);
  		  $data = $this->init_date();
        $data["rate"] = Rate::where('id',$id)->first();

  		  return View::make('frontend.hotnews2',$data);
  	}

    public function contact(){

              $data = $this->init_date();
              $data["rates"] = Rate::all();

              return View::make('frontend.contact',$data);
    }

    public function environment(){

              $data = $this->init_date();
              $data["rates"] = Rate::all();

              return View::make('frontend.environment',$data);
    }

    public function menu(){

          $data = $this->init_date();
          $data["rates"] = Rate::all();
          return View::make('frontend.menu',$data);
    }

    public function process(){

              $data = $this->init_date();
              $data["rates"] = Rate::all();

              return View::make('frontend.process',$data);
    }

    public function recommend(){

              $data = $this->init_date();
              $data["rates"] = Rate::all();

              return View::make('frontend.recommend',$data);
    }
    // recommend.blade


    public function insertToExplode($d){

      //定義那些User Agent String屬於手機瀏覽
      if( $this->check_mobile() ){
        //如果是手機瀏覽，則執行此段語法
        $d["from_drvice"] = "mobile"."|".$_SERVER['HTTP_USER_AGENT'];
      }else {
        $d["from_drvice"] = "pc";
      }

      $d["date"]=date("Y-m-d");

      DB::table("explode")->insert($d);

    }

    public function check_mobile(){
        $regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
        $regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
        $regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
        $regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
        $regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
        $regex_match.=")/i";
        return preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));
    }
}
