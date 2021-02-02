
@extends('layout.master')
@section('content')

  <!-- Start  silder -->
  <div class="slider">
    <div id="mysild" class="carousel slide " data-ride="carousel" >

         <div class="carousel-inner">
            <h2>We are a professional <br> firm of Certified Public<span> Accountants </span> <br>in Yemen .</h2>
            <div class="overly"></div>
             <div class="carousel-item  carousel-one active"></div>
             <div class="carousel-item carousel-tow"></div>
             <div class="carousel-item carousel-three"></div>

             <ol class="carousel-indicators ">
               <li data-target="#mysild" data-slide-to="0" ></li>
               <li data-target="#mysild" data-slide-to="1"class="active"></li>
               <li data-target="#mysild" data-slide-to="2"></li>
             </ol>
             <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next"  href="#testimonials" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
           </a>

         </div>
     </div>
 </div>

<!-- End  silder -->

<!-- start feauters -->
<div class="feauters text-center">
   <div class="container">
     <div class="row">
       <div class="col-sm-6 col-lg-3 " >
           <i class="fa fa-cogs fa-3x rounded-circle mycss"></i>
           <h3>Goals of the company </h3>
           <p>Commitment to the rules of standards of  the profession and honor.</p>
       </div>
       <div class="col-sm-6 col-lg-3 " >
           <i class="fa fa-cogs fa-3x rounded-circle mycss"></i>
              <h3>Goals of the company </h3>
           <p>The auspices of the interests of customers and help them to apply the best practices and financial and accounting and least internal control system.</p>
       </div>
       <div class="col-sm-6 col-lg-3 " >
           <i class="fa fa-cogs fa-3x rounded-circle mycss"></i>
             <h3>Goals of  the company </h3>
           <p>Contribute to in the development of professional performance in the areas of occupation different.</p>
       </div>
       <div class="col-sm-6 col-lg-3 " >
           <i class="fa fa-cogs fa-3x rounded-circle mycss"></i>
             <h3>Goals of the company </h3>
           <p>Planning and developing training and qualification programs to raise the  efficiency of the company's staff in all areas of the profession.</p>
       </div>
     </div>
   </div>
</div>
<!-- end feauters -->

    <!-- Satrt About us  -->
    <div class="choose-us">
     <div class="container-fluid">
       <div class="row">
         <div class="info col-lg-6">
             <img src="{{asset('Front/images/3.jpg')}}" alt=""/>
         </div>
         @foreach ($aboutus as $item)

         <div class="info col-lg-6">
             <h2 class="h1">About us </h2>
             <p>{!!$item->aboutus_en!!}</p>
             <a href="about.html" class="read-more">View More</a>

         </div>
         @endforeach

       </div>
     </div>

   </div>
   <!-- end About us  -->

 <!-- start our service  -->
<section class="service-grid pb-5 pt-5 text-center">
 <div class="container">
     <div class="row">
         <div class="col-md-12 text-center mb-4">
             <div class="service-title">
                 <h2>Our Services</h2>
                 <p>Services By sharing a common set of values, our teams create tailored solutions and consistently deliver high levels of professional advice across
                   Audit, Assurance, Tax and Consultancy services. Our specialist teams proactively engage with you to understand your needs and create tailored solutions. Our experts work with you on a wide range of issues from Assurance, Tax and Business Consulting delivered through a proactive, partner-led approach that helps you to achieve your ambitions.</p>
               </div>
         </div>
     </div>
     <div class="row">
         <div class="col-lg-4 col-md-6 text-center mb-3">
             <div class="service-wrap">
                 <div class="service-icon">
                     <i class="fa fa-search"></i>
                 </div>
                 <h4>Assurance</h4>
                 <ul class="list-sevice">
                   <li>Auditing</li>
                   <li>Technology Audit</li>
                   <li>Agreed Upon Procedures</li>
                   <li>Due Diligence</li>

                </ul>
                 <a  class="service-link" href="#">Read More</a>
             </div>
         </div>
         <div class="col-lg-4 col-md-6 text-center mb-3">
           <div class="service-wrap">
               <div class="service-icon">
                   <i class="fa fa-exclamation-triangle"></i>
               </div>
                <h4> Risk Assurance</h4>
                <ul class="list-sevice">
                 <li>Internal control evaluation</li>
                 <li>Risk assessment</li>
                 <li>Internal audit</li>
                 <li>Information Security Controls Evaluation</li>
                 </ul>
               <a  class="service-link" href="#">Read More</a>

           </div>
       </div>
         <div class="col-lg-4 col-md-6 text-center mb-3">
             <div class="service-wrap">
                 <div class="service-icon">
                   <i class="fas fa-hand-holding-usd"></i>
                 </div>
                 <h4>Forensic Accounting</h4>
                 <ul class="list-sevice">
                   <li>Company liquidations</li>
                   <li>inheritance and probate</li>
                 </ul>
                  <a  class="service-link" href="#">Read More</a>
             </div>
         </div>
         <div class="col-lg-4 col-md-6 text-center mb-3">
           <div class="service-wrap">
               <div class="service-icon">
                  <i class="fa fa-briefcase"></i>
               </div>
               <h4>Business Consulting</h4>
               <ul class="list-sevice">
                 <li>IFRS</li>
                 <li>Policies and Procedures</li>
                 <li>Cost Reduction</li>
                 <li>Bookkeeping</li>
                 <li>Human capital</li>
                 </ul>
               <a  class="service-link" href="#">Read More</a>

           </div>
       </div>
         <div class="col-lg-4 col-md-6 text-center mb-3">
             <div class="service-wrap">
                 <div class="service-icon">
                   <i class="fas fa-chart-pie"></i>
                 </div>
                 <h4>Tax</h4>
                 <ul class="list-sevice">
                   <li>Income tax</li>
                   <li>Sales tax</li>
                 </ul>
                 <a  class="service-link" href="#">Read More</a>
             </div>
         </div>

          <div class="col-lg-4 col-md-6 text-center mb-3">
             <div class="service-wrap">
                 <div class="service-icon">
                  <i class="fas fa-sort-amount-down-alt"></i>
                 </div>
                 <h4>Bankruptcy</h4>
                 <ul class="list-sevice">
                   <li>pre-Bankruptcy Planning</li>
                   <li>Business Operations</li>
                   <li>Cash flow and Viability Analysis</li>
                   <li>Interim Management and Oversight </li>
                   <li>Preferential & Fraudulent Transfer Analysis </li>
                   <li>Restructuring Plan</li>

                </ul>
                 <a  class="service-link" href="#">Read More</a>

             </div>
         </div>
     </div>
     <div class="col-sm-12 text-center mb-4">
       <a href="about.html" class="btn-service">View All <i class="fas fa-angle-double-right"></i></a>
   </div>
 </div>
</section>
<!-- end our service -->

 <!-- start  overview -->
   <!-- <div class="overview text-center">
     <div class="container">
       <h1>Company Overview</h1>
       <p>We are a professional firm of Certified Public Accountants in Yemen. We pride ourselves in providing top quality services to
          our clients ranging from Audit Assurance, Taxation,Business Transformation Consulting, Due Diligence, Policies & Procedure, Risk Management, Internal Audit, Bankruptcy and expertise in Technology Audit with ERP systems. We are known in the market as trusted.</p>
       <h4>Let's Satrt Today</h4>
       <button class="btn btn-deafult">View More</button>
     </div>
   </div> -->
  <!-- end overview -->




 <!-- start latest posts -->
  <div class="latset-post ">
    <div class="container">
      <h2 class="text-center">Latset News</h2>

        <div class="row">
            @foreach ($blogs as $item)
          <div class="col-md-4 card-container" >
               <div class="cardn">
                <img src="{{asset('/images/news/'.$item->main_img)}}"  class="card-img-top" alt=" " />
                <div class="card-body">
                  <h4 class="card-title">{{$item->title_en}}</h4>
                  <h6 class="text-muted mb-2"> <i class="icofont-calendar">{{ date('M j, Y', strtotime($item->created_at)) }}</i></h6>
                  <p class="card-text">{!! Illuminate\Support\Str::limit($item->content_en, 130, $end='...')!!}</p>
                     <a href="#" class="card-link">Read More</a>
                </div>
               </div>
         </div>

         @endforeach
     </div>
    </div>
</div>
 <!-- end latest posts -->




 <!-- start Testimonials -->

 <div class="demo">
    <div class="container">
      <div class="row">
        <div id="testimonial-slider" class="owl-carousel">
            @foreach ($teams as $item)
          <div class="testimonial">
            <span class="icon fa fa-quote-left"></span>
            <p class="description">
                {!!$item->short_intro_en!!}
            </p>
            <div class="testimonial-content">
              <div class="pic">
                <img src="{{asset('/images/teams/'.$item->t_profile)}}" alt="pic" style="width:100px">
              </div>
              <h3 class="name">{{$item->name_en}}</h3>
              <span class="title">{{$item->sub_title_en}}</span>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
 <!-- end Testimonials -->




 <!-- satrt sliderbrand-->
 <section class="brand-logo pb-5 pt-5">
   <div class="container">
       <div class="row">
           <div class="col-xl-12 text-center mb-4">
               <div class="brand-title">
                   <h2>Our experiences</h2>
                 </div>
           </div>
       </div>
 <div class="wrapper">
   <div id="carousel" class="carousel owl-carousel">
    @foreach ($exper as $item)

     <div class="card-brand card-1">
        <a href="{{$item->url}}"><img src="{{asset('/images/experienc/'.$item->logo)}}"></a>
    </div>
    @endforeach

     </div>
  </div>
  </div>
  </section>
 <!-- end  sliderbrand  -->

  <!-- satrt Contact Us  -->
  <div class="contact">
   <div class="container">
       <div class="row">
              <div class="col-md-8 text-center text-md-left">
                 <p>If you have any questions, do not hesitate to contact us</p>
              </div>
              <div class="col-md-4 text-center text-md-right">
                  <a href="{{ route('contact.contact-us')}}" class="contact-btn">Contact Us</a>
              </div>
       </div>
   </div>

 </div>
 <!-- end  Contact Us  -->



@endsection
