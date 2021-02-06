@extends('layout.master')
@section('content')

<!-- start breadcrumb-->
<section class="breadcrumb-section ">
    <div class="container">
        <div class="row">
            <div class="col-12 breadcrumb-custom__main bg-gray-light">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.html">home</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
        </div>

    </div>
    </section>
   <!-- end breadcrumb-->
   {{-- @foreach($services as $ser)

   <div class="details-services">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
       <img src="{{asset('Front/images/3.jpg')}}" class="img-fluid">
       <span class="title-img text-justify">AUDIT & ASSURANCE</span>
      </div>

      <div class="col-lg-8 col-md-8 col-sm-12 desc">

       <h3>{{$ser->s_name_en}}</h3>
       <p>{!!$ser->s_describe_en!!} </p>
        </div>
        </div>

      </div>
      @endforeach --}}

      @foreach($services as $ser)
      <div class="py-5 service-26">
        <div class="container">

            <div class="row wrap-service-26">
                <div class="col-md-7 align-self-center">
                    <div class="max-box">
                        <h3 class="mt-3">{{$ser->s_name_en}}</h3>
                        <p class="mt-3">{!!$ser->s_describe_en!!}</p>
                    </div>
                </div>
                <div class="col-md-5 col-md-5">
                    <img src="{{asset('Front/images/3.jpg')}}" class="img-fluid" />
                </div>
            </div>
          

            <div class="row wrap-service-26 mt-4 pt-3">
                <div class="col-md-6">
                                <img src="{{asset('Front/images/3.jpg')}}" class="img-fluid" />
                            </div>
                <div class="col-md-6 align-self-center">
                    <h3 class="mt-3">{{$ser->s_name_en}}</h3>
                    <p class="mt-3">{!!$ser->s_describe_en!!}</p>
                </div>
            </div>
        </div>


    </div>

    @endforeach
@endsection
