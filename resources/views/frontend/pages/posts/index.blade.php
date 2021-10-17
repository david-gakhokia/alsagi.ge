
@extends('frontend.layouts.app')

@section('title', ' ბლოგი')

@section('content')

        <section>
            <div class="gap black-layer opc5">
                <div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pag-tp">
                        <div class="pag-tp-inr">
                            <h1 itemprop="headline">ბოლო სიახლეები</h1>
                            <p itemprop="description"></p>
                        </div>
                        <ol class="breadcrumb brd-rd30 theme-bg">
                            <li class="breadcrumb-item"><a href="/" title="" itemprop="url">მთავარი</a></li>
                            <li class="breadcrumb-item active">სიახლეები</li>
                        </ol>
                    </div><!-- Page Top -->
                </div>
            </div>
        </section>
        <section>
            <div class="gap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div class="blg-pst-wrp">
                                <div class="pst-bx2 lst">
                                    <div class="pst-thmb2"><a href="blog-detail.html" title="" itemprop="url"><img src="assets/images/resources/pst-lst-img1-1.jpg" alt="pst-lst-img1-1.jpg" itemprop="image"></a></div>
                                    <div class="pst-inf2">
                                        <ul class="pst-meta">
                                            <li class="theme-clr">Posted by <a href="#" title="" itemprop="url">Admin</a></li>
                                            <li class="theme-clr"><a href="#" title="" itemprop="url">May 17, 2018</a></li>
                                        </ul>
                                        <h4 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">RUNNING FROM THE STADIUM TO THE SEA</a></h4>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit gna aliqua. Ut enim ad minim reprehenderit veniam Exc qui officia deserunt sed ut perspiciatis unde omnis iste magna aliqua Ut enim ad minim veniam.</p>
                                        <a class="theme-btn grd-lyr brd-rd30" href="blog-detail.html" title="" itemprop="url">ვრცლად</a>
                                    </div>
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
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="sidebar-wrap">
                                <div class="widget style2">
                                    <h5 itemprop="headline">Facebook</h5>
                                    <div class="rct-psts-wrp text-center">



                                    </div>
                                </div>
                                <div class="widget style2">
                                    <h5 itemprop="headline">კატეგორიები</h5>
                                    <ul class="cate-lst">
                                        <li><a href="#" title="" itemprop="url">Lifestyle</a> ( 120 )</li>
                                        <li><a href="#" title="" itemprop="url">Fashion</a> ( 12 )</li>
                                        <li><a href="#" title="" itemprop="url">Photography</a> ( 10 )</li>
                                        <li><a href="#" title="" itemprop="url">Creative</a> ( 12 )</li>
                                        <li><a href="#" title="" itemprop="url">Travel</a> ( 66 )</li>
                                        <li><a href="#" title="" itemprop="url">Electronics</a> ( 22 )</li>
                                    </ul>
                                </div>
                                <div class="widget style2">
                                    <h5 itemprop="headline">გამოგვყევით</h5>
                                    <div class="scl-wrp text-center">
                                        <ul class="scl-lst">
                                            <li>
                                                <a class="facebook" href="#" title="" itemprop="url" target="_blank">
                                                    <i class="fa fa-facebook brd-rd40"></i><span>Facebook</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="twitter" href="#" title="Twitter" itemprop="url" target="_blank">
                                                    <i class="fa fa-twitter brd-rd40"></i><span>Twitter</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="linkedin" href="#" title="Linkedin" itemprop="url" target="_blank">
                                                    <i class="fa fa-linkedin brd-rd40"></i><span>Linked In</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
