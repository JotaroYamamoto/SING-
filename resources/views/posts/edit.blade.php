@extends('layouts.sing')

@section('content')
  <div class='main-index'>
    <div class='TT'>投稿する</div>
  </div>
  <form action="/posts/edit" method="post">
    @csrf
      <input type="hidden" name="id" value="{{$post->id}}">
      <div class='newtop'>
        <div class='newA'>
          <div class='textA'>タイトル<span class='HS'>必須<span></div>
          <input class='inputA' type='text' placeholder='Yellow Submarine' name='title' value="{{$post->title}}"></input>
        </div>
        <div class='newA'>
          <div class='textA'>歌手名<span class='HS'>必須<span></div>
          <input class='inputA' type='text' placeholder='The Beatles' name='composer' value="{{$post->composer}}"></input>
        </div>
        <div class='newA'>
          <div class='textA'>YouTubeリンク</div>
          <input class='inputA' type='text' placeholder='https://www.youtube.com/watch?v=m2uTFF_3MaA' name='url' value="{{$post->url}}"></input>
        </div>
        <div class='newA'>
          <div class='textA'>サムネイル</div>
          <input class='inputA' type='text' placeholder='yellolsubmarine.png' name='image' value="{{$post->image}}"></input>
        </div>
      </div>
      <div class='newbottom'>
        <div>
          <div class='newlyrics'>
            <div class='textA'>歌詞<span class='HS'>必須</span></div>
            <textarea name='lyrics'  class ="areaA" name="" id="" cols="50" rows="55" placeholder= 'マークダウン記法が利用できます。
    > In the town where I was born lived a man who sailed to sea
    僕が生まれた街の中で海へ航海していた男がいたんだ。
    > And he told us of his life intheland of submarines
    そして彼は僕たちに人生について語ってくれた。潜水艦の中の大地の話を。'>{{$post->lyrics}}</textarea>
          </div>
          <div class='newpoint'>
            <div class='textA'>学習ポイント(単語・熟語・文法・慣用句など)</div>
            <textarea name='point'  class ='areaA' name="" id="" cols="50" rows="30" placeholder='マークダウン記法が利用できます。'>{{$post->point}}</textarea>
          </div>
        </div>
      </div>
      <div class='newsubmit'>
        <input class="btnA" type="submit" value='投稿'>
      </div>
  </form> 
@endsection