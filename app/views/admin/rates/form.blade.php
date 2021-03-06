

<div class="tab-pane active in" id="home">


  <!-- <link href="/jqueryui/jquery-ui.css" rel="stylesheet">
  <script src="/jqueryui/external/jquery/jquery.js"></script>
  <script src="/jqueryui/jquery-ui.js"></script> -->

  @if ($errors->has())
  <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
          {{ $error }}<br>
      @endforeach
  </div>
  @endif


  <label>標題</label>
  <input type="text" name="title" value="<?php echo (!empty($result))?$result->title:''?>" class="input-xlarge">



  <input type="hidden" name="choice" value="point">
  <input type="hidden" name="sub" value="1">



  <label>住址</label>
  <input type="text" name="address" value="<?php echo (!empty($result))?$result->address:''?>"  >


   </div>





  <label>圖片</label>




<div class="mainRow">
    <div class="col-md-12" style="margin:0px 0px 0px 0px;">
      <?php

      $googleIms=false;
      $listIms=false;
      $showIms=false;
      if(!empty($result)){
      $rate_pics=DB::table("rate_pics")->where('rate_id',$result->id)->get();
      ?>

      @foreach($rate_pics as $pic)



          @if($pic->name=="setList")
                  <?php
                  $listIms="/public".$pic->image;
                  ?>
          @elseif($pic->name=="setGoogle")
                  <?php
                  $googleIms="/public".$pic->image;
                  ?>
          @elseif($pic->name=="setShow")
                  <?php
                  $showIms="/public".$pic->image;
                  ?>
          @else
          <div   class="showPic">
            <div class="picControl">

                <a href="#" id="{{$pic->id}}"  class="close2"  style="float:left;">
                  <input type="radio" name="name" value="">
                    删除圖片
                </a>

                <br>

                <a  href="#"    id="{{$pic->id}}"  class="setShow"  >
                  <input type="radio" name="name" value=""  >
                  設為外觀圖片
                </a>
            </div>
                {{ HTML::image( "/public".$pic->image ,'',array( 'class' => 'img-thumbnail',
                                "id" => $result->id )) }}
            </div>
          @endif


      @endforeach

      <div style="width:100%;float:left;margin:50px 0px 20px 10px;">

      </div>

        @if($googleIms)
        <div   class="showPic" id="setListPic">
          <div class="picControl">
            <span>列表圖片</span>
            {{ HTML::image( $listIms ,'') }}
          </div>
        </div>
        @endif


        @if($googleIms)
        <div   class="showPic" id="setGooglePic">
          <div class="picControl">
            <span>GOOGLE圖片</span>
            {{ HTML::image( $googleIms ,'') }}
          </div>
        </div>
        @endif

        @if($showIms)
        <div   class="showPic" id="setGooglePic">
          <div class="picControl">
            <span>外觀圖片</span>
            {{ HTML::image( $showIms ,'') }}
          </div>
        </div>
        @endif



      <?php } ?>
    </div>
</div>





    <div style="width:100%;float:left;margin: 200px 0px 20px 10px;">

    </div>

    {{ Form::file('images[]', array('multiple'=>true)) }}


  <label>內容</label>
  <textarea name="content" rows="8" cols="40" ><?php echo ($result)?$result->content:''?></textarea>


<style media="screen">



  label{
    font-size: 20px;
    font-weight: 600;
    margin: 8px 0px 8px 0px;
  }

  .showPic{
    width:25%;
    float:left;
    margin:10px;
    padding:10px;
  }

  .mainRow{
    width: 100%;
    float: left;
  }

  .picControl{
    height: 85px;
  }

  .showPic img{
    width: 100%;
    height: 220px;
  }

  #setGooglePic img{

    border-style: solid;
    border-width: 2px 10px 4px 20px;
  }
</style>
</div>


<script type="text/javascript">
$("document").ready(function(){
      // $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
      $(".setShow").click(function(){
        var html = $(this);
        var pic_id = html.attr('id') ;
        var r = confirm("確定要設定為外觀圖片!?");
        if (r == true) {

          $.post("/setShowImage",
                {"id":pic_id},
                function(data){
                  // alert(data);
                  if(data==1){
                      alert("設定成功!");
                      location.reload();
                  }


              });
        }
      });



      $(".setGoogle").click(function(){
        var html = $(this);
        var pic_id = html.attr('id') ;
        var r = confirm("確定要設定為GOOLGE MAP圖片!?");
        if (r == true) {

          $.post("/setGoogleImage",
                {"id":pic_id},
                function(data){
                  // alert(data);
                  if(data==1){
                      alert("設定成功!");
                      location.reload();
                  }


              });
        }
      });


      $(".setList").click(function(){
        var html = $(this);
        var pic_id = html.attr('id') ;
        var r = confirm("確定要設定為列表圖片!?");
        if (r == true) {

          $.post("/setListImage",
                {"id":pic_id},
                function(data){
                  // alert(data);
                  if(data==1){
                      alert("設定成功!");
                      location.reload();
                  }


              });
        }

      });


      $("#xm").click(function(){

          // alert(  $(this).prop("checked" ) );
          var rate_id =  $(this).val()   ;
          // alert(rate_id);

          $.post("/selectRate",
                {"id":rate_id },
                function(data){
                  // alert(data)
                  if(data==1){
                       alert('修改成功');
                  }else{
                        $("#xm").prop("checked", false);
                       alert('失敗,上限是5則顯示在前台');
                  }
                  // alert('成功');
              });
      });

      $("a.close2").click(function(){
            var html = $(this);
            var pic_id = html.attr('id') ;
            // $(this).clone().appendTo('.clone');
            // alert(pic_id);
            var r = confirm("確定刪除圖片!?");
            if (r == true) {

              $.post("/delRateImage",
                    {"id":pic_id},
                    function(data){
                      // alert(data);
                      if(data==1){
                          alert("删除成功!");
                          location.reload();
                      }


                  });
            }

      });

});
</script>
