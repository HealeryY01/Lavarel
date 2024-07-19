{{-- @for ($i = 2; $i <= $n; $i++)
    <p> Giá trị của i hiện tại là {{$i}}</p>
@endfor --}}

{{-- 
@foreach ($users as $user)
<p>{{$user['name']}} </p>    
@endforeach --}}


@include('inc.comment',['title'=>'Comment bài viết'])


{{-- @php
    foreach ($users as $user) {
        echo $user['name'],'<br>';
    }
@endphp --}}