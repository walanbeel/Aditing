@extends('layout.master')
@section('content')

 <!-- start breadcrumb-->
 <section class="breadcrumb-section ">
    <div class="container">
        <div class="row">
            <div class="col-12 breadcrumb-custom__main bg-gray-light">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.html">home</a></li>
                    <li class="breadcrumb-item active">about Us</li>
                </ol>
            </div>
        </div>

    </div>
    </section>
   <!-- end breadcrumb-->

  <br><br>
  <section id="contactus" class="contactus">
    <div class="container" data-aos="fade-up">

      <div class="section-title text-center">

        <h3> <span>About</span> <span>Us</span></h3>

      </div>
      </div>
      </section>
    <br><br>
    <!-- Satrt About us  -->
    <div class="choose-us ">
      <div class="container-fluid">
        <div class="row">
          <div class="info col-lg-6">
              <img src="{{asset('Front/images/3.jpg')}}" alt=""/>
          </div>
          @foreach ($aboutus as $item)
          <div class="info col-lg-6">
              <h2 class="h1">About us </h2>
              <p>{!!$item->aboutus_en!!}</p>
          </div>
          @endforeach
        </div>
      </div>

    </div>
    <!-- end About us  -->

  <br>
  <!-- ======= Contact Section ======= -->
 <section id="contactus" class="contactus">
    <div class="container" data-aos="fade-up">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        @foreach ($sets as $set)

        <div class="col-lg-6">
          <div  class="info-box mb-4">
            <i class="fa fa-map-marker mb-4"></i>
            <h3>Our Address</h3>
            <p> {{$set->location}}</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i  class="fa fa-envelope"></i>
            <h3>Email Us</h3>
            <p><a href="{{$set->email_web}}">{{$set->email_web}}</a></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i  class="fa fa-phone"></i>
            <h3>Call Us</h3>
            <p> +0{{$set->mobile_num}}</p>

          </div>
        </div>
        @endforeach

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3848.0302657129096!2d44.197747764849!3d15.320590289347164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1603db307509a3cf%3A0xf372c5de7701fb8!2sAl%20Nozaili%20Building%2C%20Sana&#39;a%2C%20Yemen!5e0!3m2!1sen!2s!4v1608790699652!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
            @if(Session::has('message_sent'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message_sent') }}
            </div>
            @endif
          <form  method="POST" action="{{route('contact.send')}}" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" href="mailto:info@mkyacpa.com" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->


 <!-- satrt Contact Us  -->
 <div class="contact">
  <div class="container">
      <div class="row">
             <div class="col-md-8 text-center text-md-left">
                <p>If you have any questions, do not hesitate to contact us</p>
             </div>
             <div class="col-md-4 text-center text-md-right">
                 <a href="contactus.html" class="contact-btn">Contact Us</a>
             </div>
      </div>
  </div>

</div>
<!-- end  Contact Us  -->




@endsection
