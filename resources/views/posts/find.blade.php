@extends('layouts.sing')
@section('content')
        <div class='main-index'>
          <div class='TT'>検索結果</div>
        </div>
        @if(isset($posts))
          @foreach($posts as $post)
            <div class= 'apost'>
              <div class='postimg'>
                <img src="{{$post->image}}">
              </div>
              <div class='postview'>
                <a href='/posts/show?id={{$post->id}}' class='posttitle'><span>{{$post->title}} / {{$post->composer}}</span></a>
                <div class='postby'><div class='postbyname'>投稿者:JotaroYamamoto</div><div>SING!:321</div></div>
              </div>
            </div>
          @endforeach
        @endif
        
@endsection

