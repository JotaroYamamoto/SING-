@extends('layouts.sing')
@section('content')
<form action="/posts/del" method='post'>
@csrf
  <input type="hidden"name="id" value="{{$form->id}}">
  <div class='showtop'>
    <div class='TT delA'>削除ページ</div>
    <div class='showabout '>
      <div class='showtitle'>{{$form->title}}</div>
      <div class='showsinger'><span>/</span> {{$form->composer}}</div>
    </div>
  </div>
  <div class='showbottom'>
    <div class='showlyrics'>
      <h3 class='showindex'>歌詞</h3>
      <div class='lyrics'>{{$form->lyrics}}</div>
    </div>
    <div class='showpoint'>
      <h3 class='showindex'>学習ポイント(単語・熟語・文法・慣用句など)</h3>
      <div class='point'>{{$form->point}}</div>
      <div></div>
    </div>
  </div>
  <div class='editor'>
    <input type="submit" class='deletebtn' value='削除する'>
  </div>
</form>
@endsection