
@extends('layout.admin')

@section('content')



        @include("layout.comm.head")

        <div class="container-fluid">
            <div class="row-fluid">

<div class="btn-toolbar">
     <a href="/users/create" class="btn btn-primary">新增使用者</a>
    <!--
      <button class="btn">Import</button>
      <button class="btn">Export</button>
    -->
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table table-striped">
      <thead>
        <tr>

          <th>名稱</th>
          <th>E-Mail</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>

      <tbody>
        @foreach($users as $user)

        <tr>


          <td>{{$user->username}}</td>
          <td>{{$user->email}}</td>
          <td>
              <a href="/user/{{$user->id}}"><i class="icon-pencil"></i></a>
              <a href="#myModal" id="{{$user->id}}" class="del_user" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          </td>

        </tr>
        @endforeach

      </tbody>
    </table>
</div>


<div class="pagination">   
  <?php echo with(new CustomPresenter($users))->render(); ?>
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">刪除使用者</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>確定要刪除使用者?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <a  class="btn btn-danger user_id" >Delete</a>
    </div>
</div>





            </div>
        </div>
<script type="text/javascript">
$("document").ready(function(){

  $("a").click(function(){
        $('.user_id').attr('id' , $(this).attr('id'));
  });

  $('#myModal').on('shown.bs.modal', function () {

      // $('.modal-footer').hide()
      $('.user_id').attr('href',"/delUser/"+$('.user_id').attr('id'))
      // alert( $('.user_id').attr('href') );

  })

})
</script>

@stop
