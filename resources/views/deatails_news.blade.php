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
           <h4 class="post-title">{{$blog->title_en}}</h4>
           <hr>
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
                    <a href="#" class="title"><h6>{{Illuminate\Support\Str::limit($blog->title_en,30, $end='...') }}</h6></a>
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
            {{-- <div class="section topic">
                <h2 class="section-title">Topics</h2>
                 @foreach ($blogs  as $blog)
                <ul>
                    <li><h5>
                    <a href="#">{{$blog->title_en}}
                    </a></h5></li>
                </ul>
                @endforeach

            </div> --}}

        </div>
    </div>
    <!--End Content-->

@endsection


