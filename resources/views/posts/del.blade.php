@extends('layouts.sing')
@section('content')
<form action="/posts/del" method='post'>
@csrf
  <input type="hidden"name="id" value="{{$post->id}}">
  <div class='showtop'>
    <div class='TT delA'>削除ページ</div>
    <div class='showabout '>
      <div class='showtitle'>{{$post->title}} ({{$post->composer}})</div>
    </div>
  </div>
  <div class='showbottom'>
    <div>
    {!! $post->mark_body3 !!}
    </div>
    <div class='showlyrics'>
      <h3 class='showindex'>歌詞</h3>
      <div class='lyrics'>{!! $post->mark_body !!}</div>
    </div>
    <div class='showpoint'>
      <h3 class='showindex'>学習ポイント(単語・熟語・文法・慣用句など)</h3>
      <div class='point'>{!! $post->mark_body2 !!}</div>
      <div></div>
    </div>
  </div>
  <div class='editor'>
    <input type="submit" class='deletebtn' value='削除する'>
  </div>
</form>
@endsection