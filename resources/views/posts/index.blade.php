@extends('layouts.sing')
@section('content')
        <div class='main-index'>
          <div class='TT'>新着投稿</div>
        </div>
        @foreach($posts as $post)
          <div class= 'apost'>
            <div class='postimg'>
              <img src="{{$post->image}}">
            </div>
            <div class='postview'>
              <a href='/posts/show?id={{$post->id}}' class='posttitle'><span>{{$post->title}} / {{$post->composer}}</span></a>
              <div class='postby'><a class='postbyname' href='/posts/userpage?id={{$post->user->id}}'>投稿者: {{$post->user->name}}</a><div>SING: {{ $post->likes_count }}</div></div>
            </div>
          </div>
          
        @endforeach
        
@endsection

@section('pagination')
{{$posts->links()}}
@endsection
