<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div class="container">

    
    <h1>Đăng Ký</h1>
    {!! Form::open(['url'=>'post/store' , 'method'=> 'POST' ])!!}
        <div class="form-group">
            {!! Form::label('username','Tên đăng nhập')!!}
          {!! Form::text('username','',['class' =>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Mật khẩu')!!}
            {!!Form::password('password',['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email')!!}
            {!!Form::email('email','',['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('city','Thành phố')!!}
            {!!Form::select('city',[0=>'Chọn',1=>'Hà nội',2=>'TP.HCM',3=>'Đà nẵng'],'',['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('gender','Giới tính')!!}
            <div class="form-check">
                {!!Form::radio('gender','male','checked',['class'=>'form-check-input','id'=>'male'])!!}
                {!! Form::label('male','Nam',['class'=>'form-check-label'])!!}
            </div>    
            <div class="form-check">
                {!!Form::radio('gender','female','',['class'=>'form-check-input','id'=>'female'])!!}
                {!! Form::label('female','Nữ',['class'=>'form-check-label'])!!}
            </div>    
        </div>
        <div class="form-group">
            {!! Form::label('skills','Kỹ năng')!!}
            <div class="form-check">
                {!!Form::checkbox('skills','html','',['class'=>'form-check-input','id'=>'html'])!!}
                {!! Form::label('html','Html',['class'=>'form-check-label'])!!}
            </div>
            <div class="form-check">
                {!!Form::checkbox('skills','css','',['class'=>'form-check-input','id'=>'css'])!!}
                {!! Form::label('css','Css',['class'=>'form-check-label'])!!}
            </div>
            <div class="form-check">
                {!!Form::checkbox('skills','php','',['class'=>'form-check-input','id'=>'php'])!!}
                {!! Form::label('php','Php',['class'=>'form-check-label'])!!}
            </div>
        </div> 
        <div class="form-group">
            {!! Form::label('birth','Ngày sinh')!!}
            {!!Form::date('birth','',['class'=>'form-control'])!!}
        </div>   
        <div class="form-group">
            {!! Form::label('intro','Giới thiệu bản thân')!!}
            {!! Form::textarea('intro','',['class' =>'form-control','id'=>'intro'])!!}
        </div>  
        <div class="form-group">
          {!! Form::submit('Đăng ký',['name' =>'sm-reg','class'=>'btn btn-dark'])!!}
        </div>     
    {!!Form::close()!!}    
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>