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
                    <h4><a href='deatails/{{$post->blog_id}}'>{{Illuminate\Support\Str::limit($post->title_en,60, $end='...') }}</a></h4>

                    <i class="icofont-user">by{{$post->id}}</i>
                    &nbsp;
                    <i class="icofont-calendar">{{ date('M j, Y', strtotime($post->created_at)) }}</i>
                    <p class="preview-text">
                        {!! Illuminate\Support\Str::limit($post->content_en, 130, $end='...') !!}

                    </p>
                    {{-- <i class="fa fa-comment">39 comments</i> --}}
                    <a href='deatails/{{$post->blog_id}}' class="btn read-more">Read More</a>

                </div>

            </div>
            @endforeach
        </div>
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
                 @foreach ($blogs  as $blog)
                <ul>
                    <li>
                    <h6>
                    <a href="#">{{$blog->title_en}}</a>
                    </h6>
                   </li>
                </ul>
                @endforeach

            </div>

        </div>
    </div>
    <!--End Content-->
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <div class="pagination justify-content-center">
               {{$posts->links()}}
            </div>
            </div>
        </div>
    </div>


@endsection

