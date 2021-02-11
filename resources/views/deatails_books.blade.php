@extends('layout.master')

@section('content')
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>


<!--Section: Block Content-->
<section class="mb-5">

    <div class="row">
    
         
   
      <div class="col-md-6 mb-4 mb-md-0">

        <div id="mdb-lightbox-ui"></div>

        <div class="mdb-lightbox">
            @foreach ($bookDetails as $item)
          

          <div class="col-12 mb-0 ml-6">
            <figure class="view overlay rounded z-depth-1 main-img">
              <a href="#"
                data-size="710x823">
                <img src="{{asset('/images/books/'.$item->cover)}}"
                  class="img-fluid z-depth-1" style="width: 50px;height:80px">
              </a>
            </figure>
            
            
            
          </div>
        </div>

      </div>
      <div class="col-md-6">

        <h5>{{$item->B_name_en}}</h5>

        <p class="pt-1">{!!$item->B_preface_en!!}</p>
        <div class="table-responsive">
          <table class="table table-sm table-borderless mb-0">
            <tbody>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Author</strong></th>
                <td>{{$item->authoer_name_en}}</td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Catgory</strong></th>
                <td>{{$item->cat_name_en}}</td>
              </tr>

            </tbody>
          </table>
        </div>
        <hr>

       
        <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
            class="fa fa-download pr-2"></i>Download</button>
      </div>
    </div>
   
  </section>
  <!--Section: Block Content-->

  <!-- Classic tabs -->
<div class="classic-tabs border rounded px-4 pt-1">

    <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
      </li>
    </ul>
    <div class="tab-content" id="advancedTabContent">
      <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
        <h5>Product Description</h5>
        <p class="pt-1">{!!$item->B_preface_en!!}</p>
      </div>

      @endforeach
    </div>
  </div>
  <!-- Classic tabs -->

  <!--Section: Block Content-->
{{-- <section class="text-center">
    @foreach ( $lib as $item)
    <!-- Grid row -->
    <div class="row">
       
      <!-- Grid column -->
      <div class="col-md-6 col-lg-3 mb-5">

        <!-- Card -->
        <div class="">
       
            
      
          <div class="view zoom overlay z-depth-2 rounded">
            <img class="img-fluid w-100"
          
              src="{{asset('/images/books/'.$item->cover)}}" alt="Sample">
            <a href="#!">
              <div class="mask">
                <img class="img-fluid w-100"
                  src="{{asset('/images/books/'.$item->cover)}}">
                <div class="mask rgba-black-slight"></div>
              </div>
            </a>
          </div>

          

        </div>
        <!-- Card -->

      </div>
      @endforeach
      <!-- Grid column -->

     
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section> --}}
  <!--Section: Block Content-->


@endsection


