@extends('layout.master')

@section('content')

<br><br><br>
<br><br><br>





     <!-- Start Content wrapper-->
    <div class="content clearfix">
        <!--Main Content-->
        <div class="main-content-wrapper">
            @foreach($blogs as $blog)

        <div class="main-contant single">
           <h1 class="post-title">{{$blog->title_en}}</h1>
           <div class="post-content">
            <img src="{{asset('/images/news/'.$blog->main_img)}}" style="width:750px;highet:200px" alt="">
               <p>{!!$blog->content_en !!}</p>

           </div>
        </div>
        @endforeach
    </div>
        <!--Main Content-->
        <div class="sidebar single">
            @foreach($blogs as $blog)

            <div class="section popular">
                <h2 class="section-title">Popular</h2>
                <div class="post clearfix ">
                    <img src="{{asset('/images/news/'.$blog->main_img)}}" style="width:90px;highet:90px" alt="">
                    <a href="#" class="title">{{$blog->title_en}}</a>
                </div>

                @endforeach

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


