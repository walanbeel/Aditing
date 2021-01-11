
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
         <div class="info col-lg-6">
             <h2 class="h1">About us </h2>
             <p>We are a professional firm of Certified Public Accountants in Yemen. We pride ourselves in providing top quality services to our clients ranging from Audit Assurance, Taxation, Business Transformation Consulting, Due Diligence, Policies & Procedure, Risk Management, Internal Audit,
                Bankruptcy and expertise in Technology Audit with ERP systems. We are known in the market as trusted.</p>
             <p>Our knowledge of local regulations, culture and customs in our areas of expertise provides us with repeat business as well as attracting new local clients and international ventures entering the region from outside Yemen.
               </p>
             <a href="about.html" class="read-more">View More</a>

         </div>

       </div>
     </div>

   </div>
   <!-- end About us  -->

 <!-- start our service  -->
<section class="service-grid pb-5 pt-5 text-center">
 <div class="container">
     <div class="row">
         <div class="col-xl-12 text-center mb-4">
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
  <!-- <div class="latset-post ">
    <div class="container">
      <h2 class="text-center">Latset News</h2>

        <div class="row">
          <div class="col-md-4 card-container" >
               <div class="cardn">
                <img src="{{asset('Front/images/about us.jpg')}}"  class="card-img-top" alt=" " />
                <div class="card-body">
                  <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
                  <h6 class="text-muted mb-2">March 24 2017 </h6>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim
                     ad minim veniam, quis nostrud exercitation ullamco laboris
                     nisi ut aliquip ex ea commodo consequat. </p>
                     <a href="#" class="card-link">Read More</a>
                </div>
               </div>
         </div>
          <div class="col-md-4" >
               <div class="cardn">
                <img src="{{asset('Front/images/acciunting servicjpg.jpg')}}"  class="card-img-top" alt=" " />
                <div class="card-body">
                  <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
                  <h6 class="text-muted mb-2">March 24 2017 </h6>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim
                     ad minim veniam, quis nostrud exercitation ullamco laboris
                     nisi ut aliquip ex ea commodo consequat. </p>
                     <a href="#" class="card-link">Read More</a>
                </div>
               </div>
         </div>
         <div class="col-md-4" >
               <div class="cardn">
                <img src="{{asset('Front/images/3.jpg')}}"  class="card-img-top" alt=" " />
                <div class="card-body">
                  <h4 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
                  <h6 class="text-muted mb-2">March 24 2017 </h6>
                  <p class="card-text">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim
                     ad minim veniam, quis nostrud exercitation ullamco laboris
                     nisi ut aliquip ex ea commodo consequat. </p>
                     <a href="#" class="card-link">Read More</a>
                </div>
             </div>
        </div>
     </div>
    </div>
</div> -->
 <!-- end latest posts -->
 <!-- start Testimonials -->
 <div class="testimonials">
   <div class="overly"></div>
    <div class="container">
      <div id="testimonials" class="carousel slide " data-ride="carousel" >

           <div class="carousel-inner">
              <div class="carousel-item  active">

                     <div class="carousel-caption d-none d-block" >
                         <img src="{{asset('Front/images/photo 4.jpg')}}" alt="pic" >
                         <h2 >Mohammed H. AL-Mufarrea</h2>
                         <span>General Manager</span>
                         <p >The responsible partner of the company holds a master's degree in accounting, a member of the Yemeni Association of Certified Public Accountants, and a consultant at the Commercial Court.
                         </p>
                     </div>
               </div>
               <div class="carousel-item ">

                     <div class="carousel-caption d-none d-block" >
                       <img src="{{asset('Front/images/photo 3.jpg')}}"  alt="pic" >
                         <h2 >Khailed Ahmed</h2>
                         <span>Audit manager</span>
                         <p >A partner in the company and holds the position of audit manager, with more than 20 years of experience in accounting, auditing, and financial and management consulting, and he is a fellow of the American Institute of Certified Financial Managers (IPM)
                         </p>
                     </div>
               </div>
               <div class="carousel-item ">

                <div class="carousel-caption d-none d-block" >
                  <img src="{{asset('Front/images/al.jpg')}}"  alt="pic" >
                    <h2 >Dr.Aref Al-Haj</h2>
                    <span>Senior advisor</span>
                    <p >Dr. Aref is the senior advisor of MK, specialized in international NGOs consultants. He is associate professor in the accounting department at Sana'a University, and a consultant in finance, investment and strategic planning and development for many local and international companies and organizations
                    </p>
                </div>
                </div>

                <div class="carousel-item ">

                    <div class="carousel-caption d-none d-block" >
                      <img src="{{asset('Front/images/Ibrahim.jpg')}}"  alt="pic" >
                        <h2 >Ibrahim Alshatbi</h2>
                        <span>Business Consulting Manger</span>
                        <p >Strategically-focused certified senior Project Manager and Principle Consultant offering more than 15 years of experience in enterprise technology , business consulting ,project management ,planning, Business Transformation, Performance Improvement, e-Government Professional, busniess  Road-maps and  ERP Implementation.
                        </p>
                    </div>
                    </div>

               <ol class="carousel-indicators ">
                 <li data-target="#testimonials" data-slide-to="0" ></li>
                 <li data-target="#testimonials" data-slide-to="1"class="active"></li>
                 <li data-target="#testimonials" data-slide-to="2"></li>
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
 </div>
 <!-- end Testimonials -->


 <!-- satrt stat -->
 <!-- <div class="stat text-center">
   <div class="container">
       <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
               <i class="fa fa-user fa-fw fa-3x"></i>
               <span>625</span>
               <p>happy clients</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
               <i class="fa fa-tree fa-fw fa-3x"></i>
               <span>122</span>
               <p>amazing tours</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
               <i class="fa fa-briefcase fa-fw fa-3x"></i>
               <span>595</span>
               <p>parents</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-box">
               <i class="fa fa-comment fa-fw fa-3x"></i>
               <span>09</span>
               <p>qusetion comment</p>
            </div>
          </div>
       </div>
   </div>

 </div> -->
 <!-- satrt stat -->



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
     <div class="card-brand card-1">
         <img src="{{asset('Front/images/sabfon.jpg')}}"></div>
         <div class="card-brand card-2">
         <img src="{{asset('Front/images/ibrahem.jpg')}}"></div>
         <div class="card-brand card-3">
         <img src="{{asset('Front/images/OHjWGLs.jpg')}}"></div>
         <div class="card-brand card-4">
         <img src="{{asset('Front/images/madoen.png')}}"></div>
         <div class="card-brand card-5">
   <img src="{{asset('Front/images/ahuemjpg.jpg')}}"></div>
       <div class="card-brand card-5">
   <img src="{{asset('Front/images/haithem.jpg')}}"></div>
   <div class="card-brand card-5">
     <img src="{{asset('Front/images/Aldwany.jpg')}}"></div>
     <div class="card-brand card-5">
       <img src="{{asset('Front/images/YENWSA.jpg')}}"></div>
     <div class="card-brand card-5">
       <img src="{{asset('Front/images/Lawizigroup.png')}}"></div>

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
                  <a href="contactus.html" class="contact-btn">Contact Us</a>
              </div>
       </div>
   </div>

 </div>
 <!-- end  Contact Us  -->



@endsection
