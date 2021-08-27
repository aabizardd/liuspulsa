@extends('template.v_template')

@section('content')
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">

                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Apa saja yang
                                            kami jual ?</h1>
                                        <p>Kami menjual antara lain:

                                            <?php $no = 1?>
                                            @foreach ($products as $pr)
                                            <br>
                                            {{ $no++ }}. {{ $pr->nama_produk }} &emsp13; <a
                                                href="/product/{{$pr->id_produk}}">Lihat</a>
                                            @endforeach


                                        </p>
                                        <a href="/product" class="btn_2">Beli Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{!! asset('assets/img/caraousel/img-caraousel.png') !!}" alt=""
                                    style="width: 600px;margin-top: -150px;margin-left: -150px;">
                            </div>
                        </div>
                    </div>

                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Cloth & Wood
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block" style="margin-top: -100px;">
                                <img src="img/pulsa-caraousel.png" alt="">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="slider-counter"></div>
            </div>
        </div>
    </div>
</section>


<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Hai Lius, Selamat Datang Di Website Kami! <span>Produk Yang Dijual</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">

                            @foreach ($products as $product)
                            <div class="col-lg-2 col-sm-6">
                                <a href="/product/{{$product->id_produk}}">
                                    <div class="single_product_item">
                                        <img src='{!! asset("assets/img/products/$product->foto_produk") !!}' alt=""
                                            height="150">
                                        <div class="single_product_text">
                                            <h4>{{ $product->nama_produk }}</h4>

                                        </div>
                                    </div>
                                </a>
                            </div>

                            @endforeach

                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>
</section>



<section class="product_list section_padding" style="margin-top: -150px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Produk Kami <span>Berikut Produk kami</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">

                            @foreach ($products_pulsa as $pulsa)
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src='{!! asset("assets/img/barang/$pulsa->gambar_barang") !!}' alt=""
                                        width="100" height="150">
                                    <div class="single_product_text">
                                        <h4>{{ $pulsa->nama_barang }}</h4>
                                        <h3>Rp. {{$pulsa->harga_barang}}</h3>
                                        <a href="#" class="add_cart">Beli Sekarang<i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>



                </div>

                <a href="/product" class="btn_2">Lihat Semua</a>

            </div>
        </div>
    </div>
</section>


<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="img/pulsa-banner.jpg" alt="" style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Harga Murah Proses Cepat!</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Produk Paling Laku <span></span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    <div class="single_product_item">
                        <img src="img/product/xproduct_1.png.pagespeed.ic.zcUuYW5UEY.png" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/xproduct_2.png.pagespeed.ic.o70ZeeStwq.png" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/xproduct_3.png.pagespeed.ic.c35V289i18.png" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/xproduct_4.png.pagespeed.ic.kIabirvgae.png" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                    <div class="single_product_item">
                        <img src="img/product/xproduct_5.png.pagespeed.ic.i9PyC8Y1TR.png" alt="">
                        <div class="single_product_text">
                            <h4>Quartz Belt Watch</h4>
                            <h3>$150.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="subscribe_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Member</h5>
                    <h2>Masukkan nomor untuk menjadi member kami</h2>
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="masukkan nomor Hp"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">Join sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="client_logo padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single_client_logo">
                    <img src="img/client_logo/xclient_logo_1.png.pagespeed.ic.k13XFWCmRf.png" alt="">
                </div>

            </div>
        </div>
    </div>
</section>
@endsection