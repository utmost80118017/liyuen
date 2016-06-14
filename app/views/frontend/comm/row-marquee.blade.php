<div class="row-marquee">

    <img src="/images/row.png">
    <div class="marquee" id="{{$m}}">
      <?php
      $i_p=9;
      // echo $c_sql->count();
      $run_pic =$i_p-$c_sql->count();

      for($i=1 ; $i<=$run_pic ; $i++){

          echo "<a href='/'>";
          echo "<img src=/images/case/case".($i%3+1).".jpg>";
          echo "</a>";

      }
      ?>
        @foreach($c_sql as $ad8)
            @if(  !empty($ad8->image) AND File::exists( public_path().$ad8->image)  )
                <a href="{{$ad8->url}}"   target="_new" >
                  <img src="/public{{$ad8->image}}">
                </a>
            @endif
        @endforeach
    </div>
    <img src="/images/row.png">
</div>


<script type="text/javascript">
  $("document").ready(function(){

  });
</script>
