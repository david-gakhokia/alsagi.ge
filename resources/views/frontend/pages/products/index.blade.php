
@extends('frontend.layouts.app')

@section('title', ' პროდუქცია')

@section('content')

        <section>
            <div class="gap black-layer opc5">
                <div class="fixed-bg2" style="background-image: url(frontend/assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pag-tp">
                        <div class="pag-tp-inr">
                            <h1 itemprop="headline">ჩვენი პროდუქცია</h1>
                            <h6 itemprop="description">პროდუქცია რომელსაც გთავაზობთ თქვენ</h6>
                        </div>
                        <ol class="breadcrumb brd-rd30 theme-bg">
                            <li class="breadcrumb-item"><a href="/" title="" itemprop="url">მთავარი</a></li>
                            <li class="breadcrumb-item active">პროდუქცია</li>
                        </ol>
                    </div><!-- Page Top -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="remove-ext3">
                        <div class="row">

                            @foreach ($products as  $product)
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="product-box">

                                        @if ($product->image)
                                            <img src="{{ $product->image }}">
                                        @else
                                            <img src="{{ asset('frontend/assets/images/no-image.png')}}">
                                        @endif

                                        <div class="product-btns">
                                            <a class="brd-rd50" href="{{ $product->image }}" data-fancybox="gallery" title="" itemprop="url"><i class="fa fa-search"></i></a>
                                            <a class="brd-rd50" href="{{ $product->id }}" title="" itemprop="url"><i class="flaticon-shopping-basket-button"></i></a>

                                        </div>
                                        <div class="product-info">
                                            <span class="price"><ins>{{ $product->price }}</ins> ₾</span>
                                            <h5 itemprop="headline"><a href="{{ 'product/'. $product->id }}" title="" itemprop="url">{{ $product->name }}</a></h5>


                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="pagination-wrap text-center">
                        <ul class="pagination">
                            <li class="page-item prev"><a href="#" class="page-link" title="" itemprop="url"><i class="fa fa-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#" title="" itemprop="url">1</a></li>
                            <li><a class="page-link" href="#" title="" itemprop="url">2</a></li>
                            <li><a class="page-link" href="#" title="" itemprop="url">3</a></li>
                            <li><a class="page-link" href="#" title="" itemprop="url">4</a></li>
                            <li class="page-item next"><a href="#" class="page-link" title="" itemprop="url"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div><!-- Pagination Wrap -->
                </div>
            </div>
        </section>

@endsection
