@extends('layouts.app')

<<<<<<< HEAD
@section('content')
  <section class="container">
=======

@section('content')
<section class="container">
>>>>>>> dev
  <div class="content-wrap">
    <div class="content">
      <div class="jumbotron">
        <h1>欢迎访问异清轩博客</h1>
        <p>在这里可以看到前端技术，后端程序，网站内容管理系统等文章，还有我的程序人生！</p>
      </div>
      <div id="focusslide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#focusslide" data-slide-to="0" class="active"></li>
          <li data-target="#focusslide" data-slide-to="1"></li>
          <li data-target="#focusslide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active"> <a href="" target="_blank"><img src="home/images/banner/banner_01.jpg" alt="" class="img-responsive"></a> 
            <!--<div class="carousel-caption"> </div>--> 
          </div>
          <div class="item"> <a href="" target="_blank"><img src="home/images/banner/banner_02.jpg" alt="" class="img-responsive"></a> 
            <!--<div class="carousel-caption"> </div>--> 
          </div>
          <div class="item"> <a href="" target="_blank"><img src="home/images/banner/banner_03.jpg" alt="" class="img-responsive"></a> 
<<<<<<< HEAD
            <!-- <div class="carousel-caption"> </div>  -->
=======
            <!--<div class="carousel-caption"> </div>--> 
>>>>>>> dev
          </div>
        </div>
        <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span> </a> </div>
      <article class="excerpt-minic excerpt-minic-index">
        <h2><span class="red">【今日推荐】</span><a href="" title="">从下载看我们该如何做事</a></h2>
        <p class="note">一次我下载几部电影，发现如果同时下载多部要等上几个小时，然后我把最想看的做个先后排序，去设置同时只能下载一部，结果是不到一杯茶功夫我就能看到最想看的电影。 这就像我们一段时间内想干成很多事情，是同时干还是有选择有顺序的干，结果很不一样。同时...</p>
      </article>
      <div class="title">
        <h3>最新发布</h3>
        <div class="more"><a href="">PHP</a><a href="">JavaScript</a><a href="">EmpireCMS</a><a href="">Apache</a><a href="">MySQL</a></div>
      </div>
      <article class="excerpt excerpt-1"><a class="focus" href="article.html" title=""><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></a>
        <header><a class="cat" href="program">后端程序<i></i></a>
          <h2><a href="article.html" title="">php如何判断一个日期的格式是否正确</a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-1-4 10:29:39</time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 共120人围观</span> <a class="comment" href="article.html#comment"><i class="glyphicon glyphicon-comment"></i> 0个不明物体</a></p>
        <p class="note">可以用strtotime()把日期（$date）转成时间戳，再用date()按需要验证的格式转成一个日期，来跟$date比较是否相同来验证这个日期的格式是否是正确的。所以要验证日期格式 ... </p>
      </article>
      <article class="excerpt excerpt-2"><a class="focus" href="article.html" title=""><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></a>
        <header><a class="cat" href="program">后端程序<i></i></a>
          <h2><a href="article.html" title="">php如何判断一个日期的格式是否正确</a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-1-4 10:29:39</time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 共120人围观</span> <a class="comment" href="article.html#comment"><i class="glyphicon glyphicon-comment"></i> 0个不明物体</a></p>
        <p class="note">可以用strtotime()把日期（$date）转成时间戳，再用date()按需要验证的格式转成一个日期，来跟$date比较是否相同来验证这个日期的格式是否是正确的。所以要验证日期格式 ... </p>
      </article>
      <article class="excerpt excerpt-3"><a class="focus" href="article.html" title=""><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></a>
        <header><a class="cat" href="program">后端程序<i></i></a>
          <h2><a href="article.html" title="">php如何判断一个日期的格式是否正确</a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-1-4 10:29:39</time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 共120人围观</span> <a class="comment" href="article.html#comment"><i class="glyphicon glyphicon-comment"></i> 0个不明物体</a></p>
        <p class="note">可以用strtotime()把日期（$date）转成时间戳，再用date()按需要验证的格式转成一个日期，来跟$date比较是否相同来验证这个日期的格式是否是正确的。所以要验证日期格式 ... </p>
      </article>
      <article class="excerpt excerpt-4"><a class="focus" href="article.html" title=""><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></a>
        <header><a class="cat" href="program">后端程序<i></i></a>
          <h2><a href="article.html" title="">php如何判断一个日期的格式是否正确</a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-1-4 10:29:39</time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 共120人围观</span> <a class="comment" href="article.html#comment"><i class="glyphicon glyphicon-comment"></i> 0个不明物体</a></p>
        <p class="note">可以用strtotime()把日期（$date）转成时间戳，再用date()按需要验证的格式转成一个日期，来跟$date比较是否相同来验证这个日期的格式是否是正确的。所以要验证日期格式 ... </p>
      </article>
      <article class="excerpt excerpt-5"><a class="focus" href="article.html" title=""><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></a>
        <header><a class="cat" href="program">后端程序<i></i></a>
          <h2><a href="article.html" title="">php如何判断一个日期的格式是否正确</a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> 2016-1-4 10:29:39</time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 共120人围观</span> <a class="comment" href="article.html#comment"><i class="glyphicon glyphicon-comment"></i> 0个不明物体</a></p>
        <p class="note">可以用strtotime()把日期（$date）转成时间戳，再用date()按需要验证的格式转成一个日期，来跟$date比较是否相同来验证这个日期的格式是否是正确的。所以要验证日期格式 ... </p>
      </article>
      <nav class="pagination" style="display: none;">
        <ul>
          <li class="prev-page"></li>
          <li class="active"><span>1</span></li>
          <li><a href="?page=2">2</a></li>
          <li class="next-page"><a href="?page=2">下一页</a></li>
          <li><span>共 2 页</span></li>
        </ul>
      </nav>
    </div>
  </div>
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">网站公告</a></li>
          <li role="presentation"><a href="#centre" aria-controls="centre" role="tab" data-toggle="tab">会员中心</a></li>
          <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系站长</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane notice active" id="notice">
            <ul>
              <li>
                <time datetime="2016-01-04">01-04</time>
                <a href="" target="_blank">欢迎访问异清轩博客</a></li>
              <li>
                <time datetime="2016-01-04">01-04</time>
                <a target="_blank" href="">在这里可以看到前端技术，后端程序，网站内容管理系统等文章，还有我的程序人生！</a></li>
              <li>
                <time datetime="2016-01-04">01-04</time>
                <a target="_blank" href="">在这个小工具中最多可以调用五条</a></li>
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane centre" id="centre">
          @if(!Auth::check())
            <h4>需要登录才能进入会员中心</h4>
<<<<<<< HEAD
            <p> <a data-toggle="modal" data-target="#loginModal" class="btn btn-primary">立即登录</a> <a href="{{route('register')}}" class="btn btn-default">现在注册</a> </p>
          @else
            <a href="">详细信息</a>
            {{dump(Auth::user()->name)}}
          @endif  
=======
            <p> <a data-toggle="modal" data-target="#loginModal" class="btn btn-primary">立即登录</a> <a href="javascript:;" class="btn btn-default">现在注册</a> </p>
          @else
            {{dump(Auth::user()->name)}}
          @endif
>>>>>>> dev
          </div>
          <div role="tabpanel" class="tab-pane contact" id="contact">
            <h2>Email:<br />
              <a href="mailto:admin@ylsat.com" data-toggle="tooltip" data-placement="bottom" title="admin@ylsat.com">admin@ylsat.com</a></h2>
          </div>
        </div>
      </div>
      <div class="widget widget_search">
        <form class="navbar-form" action="/Search" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div>
    </div>
    <div class="widget widget_sentence">
      <h3>每日一句</h3>
      <div class="widget-sentence-content">
        <h4>2016年01月05日星期二</h4>
        <p>Do not let what you cannot do interfere with what you can do.<br />
          别让你不能做的事妨碍到你能做的事。（John Wooden）</p>
      </div>
    </div>
    <div class="widget widget_hot">
      <h3>热门文章</h3>
      <ul>
<<<<<<< HEAD
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="home/images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="home/images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="home/images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="home/images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="home/images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
=======
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
        <li><a href=""><span class="thumbnail"><img class="thumb" data-original="images/excerpt.jpg" src="home/images/excerpt.jpg" alt=""></span><span class="text">php如何判断一个日期的格式是否正确</span><span class="muted"><i class="glyphicon glyphicon-time"></i> 2016-1-4 </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> 120</span></a></li>
>>>>>>> dev
      </ul>
    </div>
  </aside>
</section>
<<<<<<< HEAD
@endsection
=======

@endsection
>>>>>>> dev
