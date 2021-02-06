@extends('layout.master')

@section('content')
<br><br><br>
<br><br><br>




    <!--Page Wrapper-->
    <div class="page-wrapper">
     <!-- Start Content wrapper-->
    <div class="content clearfix">
        <!--Main Content Wrapper-->
        <div class="main-content-wrapper">
        @foreach($blogs as $blog)
        <div class="main-contant single">
           <h4 class="post-title">{{$blog->title_en}}</h4>
           <hr>
           <div class="post-content">
            <img src="{{asset('/images/news/'.$blog->main_img)}}"  alt="">
               <p>{!!$blog->content_en !!}</p>

           </div>
        </div>
         </div>
        @endforeach

        <!--Main Content-->
        <div class="sidebar single">

            <div class="section topic">
                <h2 class="section-title">Topics</h2>
                 @foreach ($blogs as $blog)
                <ul>
                    <li>
                    <h6>
                    <a href="#">{{$blog->title_en}}</a>
                    </h6>
                   </li>
                </ul>
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
    </div>

    <!--End Content-->



@endsection


