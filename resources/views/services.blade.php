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
   @foreach($services as $ser)

   <div class="details-services">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
       <img src="{{asset('Front/images/3.jpg')}}" class="img-fluid">
       <span class="title-img text-justify">AUDIT & ASSURANCE</span>
      </div>

      <div class="col-lg-8 col-md-8 col-sm-12 desc">

       <h3>{{$ser->s_name_en}}</h3>
       <p>{!!$ser->s_describe_en!!}
        {{-- At MK we provide financial Audit Assurance services to companies of all sizes
         from SMEs to joint stock companies. We realize that building and maintaining trust
          has never been more important and more challenging and therefore being the independent
           financial auditors, we perform the valuable role of trusted intermediary between the
           providers of business information and its user, ranging from general public to private
           businesses and decision makers. --}}
        </p>

        </div>
        </div>

      </div>
      @endforeach




@endsection
