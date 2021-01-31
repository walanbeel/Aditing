@extends('layout.master')

@section('content')

<br><br><br>
<br><br><br>
<br><br><br>
<div class="container wrapper">

    <br>
    <h2>IFRS and IAS Summaries</h2>

    <hr>
    <div class="button-group  pull-right">
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="all">
            All
        </button>
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="consulting">
            consulting
        </button>
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="Auditing">
            Auditing
        </button>
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="Tax">
            Tax
        </button>
    </div>
    <div class="clearfix"></div>

    <br>
    <div class="container">
        <div class="row">
            @foreach($books as $book)
            <div class="col-md-3 col-sm-6"  data-tag="Tax">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('/images/books/'.$book->cover)}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="{{route('download', $book->file)}}" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$book->B_name_en}}</a></h3>
                        <a href='{{route('show',$book->B_id)}}' class="btn read-more" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i>View More</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="modal fade product_view" id="product_view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            <h3 class="modal-title">{{$book->B_name_en}}</h3>
                        </div>
                        <!--Section: Block Content-->
                        <section class="mb-5">
                        <div class="row">
                            @if(isset($lib))
                            @foreach($lib as $book)
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div id="mdb-lightbox-ui"></div>
                            <div class="mdb-lightbox">
                            <div class="row product-gallery mx-1">
                                <div class="col-12 mb-0">
                                <figure class="view overlay rounded z-depth-1 main-img">
                                    <a href="#">
                                        <img class="pic-1" src="{{asset('/images/books/'.$book->cover)}}">
                                    </a>
                                </figure>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>{{$book->B_name_en}}</h5>
                            <p class="pt-1">{{$book->B_preface_en}}</p>
                            <div class="table-responsive">
                            <table class="table table-sm table-borderless mb-0">
                                <tbody>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Author</strong></th>
                                    <td>{{$book->authoer_name_en}}</td>
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Category</strong></th>
                                    <td>{{$book->cat_id}}</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                            <hr>
                            <button type="button"  class="btn btn-outline-warning"><i class="fas fa-download"></i>Download</button>
                            <button type="button" class="btn btn-light btn-md mr-1 mb-2">cancel</button>
                        </div>
                        </div>
                    </section>
                    <!--Section: Block Content-->
                 </div>
                 @endforeach
                 @endif
                 </div>
                 </div>




    </div>
</div>


    <div class="push"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
            <div class="pagination justify-content-center">
               {{$books->links()}}
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
