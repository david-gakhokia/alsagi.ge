@extends('frontend.layouts.app')

@section('title', ' ჩვენ შესახებ ')

@section('content')

        <section>
            <div class="gap black-layer opc5">
                <div class="fixed-bg2" style="background-image: url(frontend/assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pag-tp">
                        <div class="pag-tp-inr">
                            <h1 itemprop="headline">ჩვენ შესახებ</h1>
                            <p itemprop="description">ვინ ვართ და რას ვსაქმიანობთ?</p>
                        </div>
                        <ol class="breadcrumb brd-rd30 theme-bg">
                            <li class="breadcrumb-item"><a href="/" title="" itemprop="url">მთავარი</a></li>
                            <li class="breadcrumb-item active">ჩვენ შესახებ</li>
                        </ol>
                    </div><!-- Page Top -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap white-layer opc95">
                <div class="fixed-bg" style="background-image: url(frontend/assets/images/parlx1.jpg);"></div>
                <div class="container">
                    <div class="srv-sec remove-ext6">
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="srv-bx-wrp">
                                    <i class="flaticon-glue theme-clr"></i>
                                    <div class="srv-bx-inr">
                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">სათევზაო ანკესები</a></h5>
                                        {{-- <p itemprop="description">With state-of-the-art indoor training faciliti service lorim custom </p> --}}
                                    </div>
                                </div>
                                <div class="srv-bx-wrp">
                                    {{-- <i class="flaticon-target-1 theme-clr"></i> --}}
                                    <i class="flaticon-revolver theme-clr"></i>
                                    <div class="srv-bx-inr">
                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">სანადირო თოფები</a></h5>
                                        {{-- <p itemprop="description">With state-of-the-art indoor training faciliti service lorim custom </p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-12 col-lg-1"></div>
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <div class="srv-intro text-center">
                                    <h2 itemprop="headline"><i class="theme-clr">ვინ ვართ ჩვენ?</i> ჩვენ შესახებ</h2>
                                    <p itemprop="description">სანადირო , სათევზაო და დასვენების და გართობის საშუალებების ფართო არჩევანი: <br> ნადირობა, თევზაობა. სანადირო თოფების და აქსესუარების უდიდესი არჩევანი. <br> სანადირო და სათევზაო მოწყობილობების უდიდესი არჩევანი, ყველასათვის ხელმისაწვდომ ფასებში.</p>
                                    {{-- <a class="grd-lyr theme-btn brd-rd30" href="#" title="" itemprop="url">MORE INFORMATION</a> --}}
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-12 col-lg-1"></div>
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <div class="srv-bx-wrp">
                                    <i class="flaticon-bullet-proof-vest theme-clr"></i>
                                    <div class="srv-bx-inr">
                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">სათევზაო აქსესუარები</a></h5>
                                        {{-- <p itemprop="description">With state-of-the-art indoor training faciliti service lorim custom </p> --}}
                                    </div>
                                </div>
                                <div class="srv-bx-wrp">
                                    <i class="flaticon-bullets theme-clr"></i>
                                    <div class="srv-bx-inr">
                                        <h5 itemprop="headline"><a href="#" title="" itemprop="url">სანადირო აქსესუარები</a></h5>
                                        {{-- <p itemprop="description">With state-of-the-art indoor training faciliti service lorim custom </p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Services Sec -->
                </div>
            </div>
        </section>



@endsection
