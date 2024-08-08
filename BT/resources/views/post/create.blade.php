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

    
    <h1>Thêm bài viết</h1>


    {{-- @if($errors->any())
   <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>    
   </div>
    @endif --}}


    {!! Form::open(['url'=>'post/store' , 'method'=> 'GET' ])!!}
        <div class="form-group">
          {!! Form::text('title','',['class' =>'form-control','placeholder'=>'Tiêu đề'])!!}
          {{-- <input type="text" name="title" id="" class="form-control" placeholder="Tiêu đề"> --}}
          @error('title')
          <small class="form-text text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          {!! Form::textarea('content','',['class' =>'form-control','placeholder'=>'Nội dung'])!!}
            {{-- <textarea class="form-control" name="content" placeholder="Nội dung" id="" cols="30" rows="10"></textarea> --}}
            @error('content')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div> 
        <div class="form-group">
          {!! Form::submit('Thêm mới',['name' =>'sm-add','class'=>'btn btn-dark'])!!}
            {{-- <input type="submit" name="sm-add"> --}}
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