@extends('frontend.layouts.app')

@section('title', ' პროდუქცია')

@section('content')


        <section>
            <div class="gap black-layer opc5">
                <div class="fixed-bg2" style="background-image: url({{ asset('frontend/assets/images/pg-tp-bg.jpg') }});"></div>
                <div class="container">
                    <div class="pag-tp">
                        <div class="pag-tp-inr">
                            <h1 itemprop="headline">{{ $product->name }}</h1>
                        </div>
                        <ol class="breadcrumb brd-rd30 theme-bg">
                            <li class="breadcrumb-item"><a href="/" title="" itemprop="url">მთავარი</a></li>
                            <li class="breadcrumb-item"><a href="/products" title="" itemprop="url">პროდუქცია</a></li>
                        </ol>
                    </div><!-- Page Top -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="product-detail-wrp">
                        <div class="product-detail">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-lg-5">
                                    <div class="product-detail-thumb">
                                        <img src="{{ URL::asset('/'.$product->image) }}" alt="NoImage" itemprop="image">
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-lg-7">
                                    <div class="product-detail-inf">

                                        <h3 itemprop="headline">{{ $product->name }}</h3>
                                        <p itemprop="description" class="price"><ins>{{ $product->price }} ₾</ins></p>
                                        <div class="product-detail-description">
                                            <p itemprop="description">{{ $product->description }}</p>
                                        </div>
                                        <form class="cart">
                                            <div class="quantity">
                                                <input type="text">
                                            </div>
                                            <button type="submit" class="theme-btn theme-bg brd-rd30"><i class="flaticon-shopping-basket-button"></i>დამატება</button>
                                        </form>
                                        <div class="product_meta">
                                            <span class="posted_in">
                                                <span class="theme-clr">კატეგორია:</span>
                                                <a>{{ $product->category->name }}</a>
                                            </span>
                                            <span class="tagged_as">
                                                <span class="theme-clr">SKU:</span>
                                                <a>#{{ $product->sku }}</a>
                                            </span>
                                            <span class="tagged_as">
                                                <span class="theme-clr">რაოდენობა:</span>
                                                <a href="#" title="" >{{ $product->qty }}</a>
                                            </span>
                                            <span class="tagged_as">
                                                <span class="theme-clr">სტატუსი:</span>
                                                @if ($product->status == 1)
                                                <a> მარაგშია </a>
                                                @else
                                                <a>არ არის </a>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail-tabs">
                            <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link" href="#discription" data-toggle="tab" itemprop="url">აღწერა</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#additional-information" data-toggle="tab" itemprop="url">სპეციფიკაციები</a></li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade " id="discription">
                                    <p itemprop="description"> {{ $product->description }} </p>
                                </div>
                                <div class="tab-pane fade show active" id="additional-information">
                                    <div class="shop-table-wrap">
                                        <table class="shop_attributes">
                                            <tbody>
                                                <tr><th class="theme-clr">CAPACITY:</th><td>10+1, 30+1</td></tr>
                                                <tr><th class="theme-clr">WEIGHT:</th><td>6.5 lb, 7 lb</td></tr>
                                                <tr><th class="theme-clr">Range:</th><td>22M</td></tr>
                                                <tr><th class="theme-clr">Bullet:</th><td>14</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- Product Detail Wrap -->
                </div>
            </div>
        </section>
@endsection
