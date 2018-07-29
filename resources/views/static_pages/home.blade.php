@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>LaraSNS</h1>
    <p class="lead">
      Hello,欢迎来到<a href="https://weibo.com/baiketeamceo">LaraSNS</a> 一个类似新浪微博的社交网站!
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop