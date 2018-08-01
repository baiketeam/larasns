@extends('layouts.default')

@section('content')
  @if (Auth::check())
  <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h3>微博列表</h3>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
        <section class="stats">
          @include('shared._stats', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
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
  @endif
@stop