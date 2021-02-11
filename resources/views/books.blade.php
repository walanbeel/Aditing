@extends('layout.master')

@section('content')

<br><br><br>
<br><br><br>
<br><br><br>

<div class="container wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main">
                   <a href="{{route('books.show')}}" class="btn btn-small btn-primary" data-toggle="portfilter" data-target="all">
                        all
                  </a>

                @foreach ($category as $cat)
                 <a href="{{route('filter',$cat->cat_id)}}" class="btn btn-small btn-primary" data-toggle="portfilter" data-target="all">
                    {{$cat->cat_name_en}}
                 </a>
                @endforeach
     @foreach($books as $item)
    <div class="button-group  pull-center">

    </div>

@endforeach
    <div class="clearfix"></div>
    <br><br><br>

    <div class="container">
        <div class="row">
            @foreach($books  as $book)
            <div class="col-md-3 col-sm-6"  data-tag="Tax">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('/images/books/'.$book->cover)}}">
                        </a>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#" class="btnread-more" onclick="decryptfun({{$book->B_id}})">{{$book->B_name_en}}</a></h3>
                        <a data-toggle="modal" data-target="#myModal{{$book->B_id}}"><p>{{$book->authoer_name_en}}</p></a>
                    </div>
                    <div class="product-image4">
                    <ul class="social">
                        <li><a href="{{route('download', $book->file)}}" data-tip="download"><i class="fa fa-download"></i></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal{{$book->B_id}}" data-tip="view"><i class="fa fa-eye"></i></a></li>
                    </ul>
                </div>
            </div>
            </div>
 <!-- The Modal -->

 <!-- The Modal -->
 <div class="modal fade bd-example-modal-lg" id="myModal{{$book->B_id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title">{{$book->B_name_en}}</h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
         <section class="mb-5">

             <div class="row">
              <div class="col-md-6 mb-4 mb-md-0">
                 <div id="mdb-lightbox-ui"></div>
                 <div class="mdb-lightbox">
                   <div class="col-12 mb-0 ml-6">
                     <figure class="view overlay rounded z-depth-1 main-img">
                        <img src="{{asset('/images/books/'.$book->cover)}}"
                           class="img-fluid z-depth-1" data-size="710x823">
                     </figure>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                   <h5>{{$book->B_name_en}}</h5>
                 <p class="pt-1">{!! Illuminate\Support\Str::limit($book->B_preface_en,600, $end='...') !!}</p>
                 <div class="table-responsive">
                   <table class="table table-sm table-borderless mb-0">
                     <tbody>
                       <tr>
                         <th class="pl-0 w-25" scope="row"><strong>Author</strong></th>
                         <td>{{$book->authoer_name_en}}</td>
                       </tr>
                       <tr>
                         <th class="pl-0 w-25" scope="row"><strong>Catgory</strong></th>
                         <td>{{$book->cat_name_en}}</td>
                       </tr>

                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </section>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
    @endforeach

                 </div>
                </div>

                {{-- <div class="d-flex justify-content-center mt-4">
                    {!!  $books->links() !!}
                    </div> --}}
   </div>
</div>
</div>
</div>
</div>




<script >
!function(d){
   var c="portfilter";var b=function(e){
       this.$element=d(e);this.stuff=d("[data-tag]");
       this.target=this.$element.data("target")||""};
       b.prototype.filter=function(g){var e=[],f=this.target;
       this.stuff.fadeOut("fast").promise().done(function(){d(this).each(function(){if(d(this).data("tag")==f||f=="all"){e.push(this)}});
       d(e).show()})};var a=d.fn[c];d.fn[c]=function(e){return this.each(function(){var g=d(this),f=g.data(c);
       if(!f){g.data(c,(f=new b(this)))}if(e=="filter"){f.filter()}})};
       d.fn[c].defaults={};d.fn[c].Constructor=b;d.fn[c].noConflict=function(){d.fn[c]=a;return this};
       d(document).on("click.portfilter.data-api","[data-toggle^=portfilter]",function(f){d(this).portfilter("filter")})}
       (window.jQuery);

</script>

@endsection
