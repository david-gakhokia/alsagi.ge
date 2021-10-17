

@extends('frontend.layouts.app')

@section('title', ' არაავტორიზებულია! ')

@section('content')

        <section>
            <div class="gap black-layer opc5">
                <div class="fixed-bg2" style="background-image: url(frontend/assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pag-tp">
                        <div class="pag-tp-inr">
                            <h1 itemprop="headline">გვერდი არაავტორიზებულია!</h1>
                            {{-- <p itemprop="description">სამწუხაროდ გვერდი ვერ მოიძებნა</p> --}}
                        </div>
                        <ol class="breadcrumb brd-rd30 theme-bg">
                            <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">მთავარი</a></li>
                            <li class="breadcrumb-item active">401 შეცდომა</li>
                        </ol>
                    </div><!-- Page Top -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="srch-fnd-wrp error-sec">
                        <div class="row">
                            <div class="col-md-1 col-sm-12 col-lg-1"></div>
                            <div class="col-md-10 col-sm-12 col-lg-10">
                                <div class="srch-fnd-inr error-sec text-center">
                                    <div class="srch-fnd">
                                        <div class="srch-inr mb-3">
                                            <i class="flaticon-error theme-clr"></i>
                                            <h1 itemprop="headline">401</h1>
                                            <h4 itemprop="headline">უიი, გვერდი არაავტორიზებულია!</h4>
                                            <p itemprop="description">ეწვიეთ მთავარ გვერდს ...</p>
                                        </div>

                                        <a class="theme-btn theme-bg brd-rd30" href="index.html" title="" itemprop="url">მთავარი გვერდი</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-12 col-lg-1"></div>
                        </div>
                    </div><!-- Search Found -->
                </div>
            </div>
        </section>

@endsection

