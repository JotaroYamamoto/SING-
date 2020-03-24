@extends('layouts.sing')
@section('content')
<div class='showtop'>
  <div class='showby'>
    <div class='showuser'>
      <img src ='https://pbs.twimg.com/profile_images/447676684787937280/BmxG3QCQ_400x400.jpeg' class='showimg'></img>
      <a class='showname' href='/posts/userpage?id={{$post->user->id}}'>{{$post->user->name}}</a>
    </div>
    <div class='showdate'><span>投稿日：</span>{{$post->created_at}}</div>
  </div>
  <div class='showabout'>
    <div class='showtitle'>{{$post->title}} ({{$post->composer}})</div>
  </div>
  <div class='showbtn'>
    <div class='showgood'><span class="sing">SING!：</span>500</div>
  </div>
</div>
<div class='showbottom'>
  <div class='youtube'>
    {!! $post->mark_body3 !!}
  </div>
  <div class='showlyrics'>
    <h3 class='showindex'>歌詞</h3>
    <p class='lyrics'>{!! $post->mark_body !!}</p>
  </div>
  <div class='showpoint'>
    <h3 class='showindex'>学習ポイント(単語・熟語・文法・慣用句など)</h3>
    <p class='point'>{!! $post->mark_body2 !!}</p>
    <div></div>
  </div>
</div>

<div class='editor'>
      <a href="/" class="editbtn">戻る</a>
  @if( ($post->user->id) === ( Auth::user()->id) )
      <a href='/posts/edit?id={{$post->id}}' class='editbtn'>編集</a>
      <a href='/posts/del?id={{$post->id}}' class='deletebtn'>削除</a>
  @endif
</div>

@endsection