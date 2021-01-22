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
                            <img class="pic-1" src="{{asset('/images/books/'.$book->file)}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">{{$book->B_name_en}}</a></h3>

                        <a class="add-to-cart" href="{{url('file/download/'.$book->file)}}">View More</a>
                    </div>
                </div>
            </div>
            @endforeach



            {{-- <div class="col-md-3 col-sm-6" data-tag="consulting">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/service1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 2 Share-based Payment </a></h3>

                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-tag="Auditing">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/service1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 3 Business Combinations</a></h3>

                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-tag="Tax">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/sh1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 3 Business Combinations</a></h3>

                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6"  data-tag="Tax">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/sh1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 3 Business Combinations</a></h3>

                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" data-tag="consulting">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/service1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 4 Insurance Contracts</a></h3>

                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-tag="Auditing">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/service1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 4 Insurance Contracts</a></h3>

                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-tag="Tax">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/sh1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 4 Insurance Contracts</a></h3>

                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6"  data-tag="Tax">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/sh1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IFRS 8 Operating Segments  </a></h3>


                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6" data-tag="consulting">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/service1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IAS 2 Inventories</a></h3>


                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-tag="Auditing">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/service1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IAS 2 Inventories</a></h3>

                         <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-tag="Tax">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" src="{{asset('Front/images/sh1.jpg')}}">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Quick download"><i class="fa fa-download"></i></a></li>
                        </ul>

                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">IAS 2 Inventories </a></h3>


                        <a class="add-to-cart" href="">View More</a>
                    </div>
                </div>
        </div>--}}
        </div>

    </div>
</div>


    <div class="push"></div>

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
