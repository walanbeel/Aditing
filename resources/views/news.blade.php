@extends('layout.master')

@section('content')

<br><br><br>
<br><br><br>

       <!-- Start Content-->
       <div class="content clearfix">
        <!--Main Content-->
        <div class="main-contant">
            <h1 class="recent-post-title">Recent Posts</h1>
            @foreach($posts as $post)

            <div class="Post clearfix">

                <img src="{{asset('/images/news/'.$post->main_img)}}" alt="imgpost" class="post-image">

                <div class="post-preview">
                    <h2><a href='deatails/{{$post->blog_id}}'>{{Illuminate\Support\Str::limit($post->title_en,60, $end='...') }}</a></h2>

                    <i class="fa fa-user-circle-o">{{$post->id}}</i>
                    &nbsp;
                    <i class="fa fa-calendar">{{$post->created_at}}</i>
                    {{-- <p class="preview-text">{!!strlen($post->content_en) > 150 ? substr($post->content_en,0,150,$end = '...') : $post->content_en!!} --}}
                        {{-- {!!str_limit($post->content_en, $limit = 100, $end = '...')!!} --}}
                        {!! Illuminate\Support\Str::limit($post->content_en, 130, $end='...') !!}

                    </p>
                    {{-- <i class="fa fa-comment">39 comments</i> --}}
                    <a href='deatails/{{$post->blog_id}}' class="btn read-more">Read More</a>

                </div>

            </div>
            @endforeach


            {{-- <div class="Post clearfix">
                <img src="{{asset('Front/images/service-2.jpg')}}" alt="imgpost" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.  </a></h2>
                    <i class="fa fa-user">Mohammed</i>
                    &nbsp;
                    <i class="fa fa-calendar">Aug 26,2020</i>
                    <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Aspernatur quis, sit similique aliquam maiores labore eveniet maxime ex .
                    </p>
                    <i class="fa fa-comment">39 comments</i>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

            <div class="Post clearfix">
                <img src="{{asset('Front/images/service-4.jpg')}}"alt="imgpost" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Lorem ipsum dolor sit amet consectetur adipisicing elit. </a></h2>
                    <i class="fa fa-user">Mohammed</i>
                    &nbsp;
                    <i class="fa fa-calendar">Aug 26,2020</i>
                    <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Aspernatur quis, sit similique aliquam maiores labore eveniet maxime ex .
                    </p>
                    <i class="fa fa-comment">39 comments</i>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

            <div class="Post clearfix">
                <img src="{{asset('Front/images/service1.jpg')}}" alt="imgpost" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h2>
                    <i class="fa fa-user">Mohammed </i>
                    &nbsp;
                    <i class="fa fa-calendar">Aug 26,2020</i>
                    <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Aspernatur quis, sit similique aliquam maiores labore eveniet maxime ex .
                    </p>
                    <i class="fa fa-comment">39 comments</i>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

            <div class="Post clearfix">
                <img src="{{asset('Front/images/sh1.jpg')}}" alt="imgpost" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h2>
                    <i class="fa fa-user">Mohammed</i>
                    &nbsp;
                    <i class="fa fa-calendar">Aug 26,2020</i>
                    <p class="preview-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Aspernatur quis, sit similique aliquam maiores labore eveniet maxime ex .
                    </p>
                    <i class="fa fa-comment">39 comments</i>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
        </div> --}}
        <!--Main Content-->
        <div class="sidebar">

            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="search..">
                </form>
            </div>

            <div class="section topic">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <li><a href="#"> Poem</a></li>
                    <li><a href="#"> Quotes</a></li>
                    <li><a href="#"> Ficition</a></li>
                    <li><a href="#"> Biography</a></li>
                    <li><a href="#"> Motivation</a></li>
                    <li><a href="#"> Inspiration</a></li>
                    <li><a href="#"> Life Lessons</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--End Content-->

    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br>
@endsection

