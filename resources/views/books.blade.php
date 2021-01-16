@extends('layout.master')

@section('content')
 
<br><br><br>
<br><br><br>
<br><br><br>
<div class="container wrapper">

    <br>
    <h2>Very Lightweight Portfolio Filter for Bootstrap</h2>
    <hr>
    <div class="pull-right">
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="all">
            All
        </button>
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="art">
            Art
        </button>
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="media">
            Media
        </button>
        <button class="btn btn-small btn-primary" data-toggle="portfilter" data-target="brand">
            Brand
        </button>
    </div>
    <div class="clearfix"></div>

    <br>

    <div class="thumbnails gallery">
        <div class="col-md-3" data-tag="brand">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Brand Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="art">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Art Project</h4>

                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="media">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Media Project</h4>

                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="brand">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Brand Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="art">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Art Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="media">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Media Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 clearfix" data-tag="brand">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Brand Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="art">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Art Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="art">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Art Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="brand">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Brand Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="brand">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Brand Project</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-tag="brand">
            <div class="thumbnail">
                <img alt="270x170" src="http://placehold.it/270x170">
                <div class="caption">
                    <h4>Brand Project</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="push"></div>
</div>
<script >!function(d){var c="portfilter";var b=function(e){this.$element=d(e);this.stuff=d("[data-tag]");this.target=this.$element.data("target")||""};b.prototype.filter=function(g){var e=[],f=this.target;this.stuff.fadeOut("fast").promise().done(function(){d(this).each(function(){if(d(this).data("tag")==f||f=="all"){e.push(this)}});d(e).show()})};var a=d.fn[c];d.fn[c]=function(e){return this.each(function(){var g=d(this),f=g.data(c);if(!f){g.data(c,(f=new b(this)))}if(e=="filter"){f.filter()}})};d.fn[c].defaults={};d.fn[c].Constructor=b;d.fn[c].noConflict=function(){d.fn[c]=a;return this};d(document).on("click.portfilter.data-api","[data-toggle^=portfilter]",function(f){d(this).portfilter("filter")})}(window.jQuery);

</script>
    
@endsection
