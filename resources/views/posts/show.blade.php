@extends('layouts.sing')
@section('content')
<div class='showtop'>
  <div class='showby'>
    <div class='showuser'>
      <img src ='https://shop38-makeshop.akamaized.net/shopimages/getback/000000003072_MaVIayk.jpg' class='showimg'></img>
      <div class='showname'>JotaroYamamoto</div>
    </div>
    <div class='showdate'><span>投稿日：</span>2020/01/01</div>
  </div>
  <div class='showabout'>
    <div class='showtitle'>{{$form->title}}</div>
    <div class='showsinger'><span>/</span> {{$form->composer}}</div>
  </div>
  <div class='showbtn'>
    <div class='showgood'><span class="sing">SING!：</span>500</div>
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
      <a href='edit?id={{$form->id}}' class='editbtn'>編集</a>
      <a href='del?id={{$form->id}}' class='deletebtn'>削除</a>
</div>
@endsection