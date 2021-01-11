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

  </br></br>
  <section id="contactus" class="contactus">
    <div class="container" data-aos="fade-up">

      <div class="section-title text-center">

        <h3> <span>About</span> <span>Us</span></h3>

      </div>
      </div>
      </section>
    </br></br>
    <!-- Satrt About us  -->
    <div class="choose-us ">
      <div class="container-fluid">
        <div class="row">
          <div class="info col-lg-6">
              <img src="{{asset('Front/images/3.jpg')}}" alt=""/>
          </div>
          <div class="info col-lg-6">
              <h2 class="h1">About us </h2>
              <p>We are a professional firm of Certified Public Accountants in Yemen. We pride ourselves in providing top quality services to our clients ranging from Audit Assurance, Taxation, Business Transformation Consulting, Due Diligence, Policies & Procedure, Risk Management, Internal Audit,
                 Bankruptcy and expertise in Technology Audit with ERP systems. We are known in the market as trusted.</p>
              <p>Our knowledge of local regulations, culture and customs in our areas of expertise provides us with repeat business as well as attracting new local clients and international ventures entering the region from outside Yemen.
                </p>

          </div>

        </div>
      </div>

    </div>
    <!-- end About us  -->

  </br></br></br>

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
