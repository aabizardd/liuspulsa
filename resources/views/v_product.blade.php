@extends('template.v_template')

@section('content')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Semua Produk Kami</h2>
                        <p>Beranda <span>-</span> Produk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Kategori Barang</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="/product"
                                        style="<?=(request()->segment(2)) == "" ? "color: red;" : ""?>">Semua
                                        Produk</a>
                                    <span
                                        style="<?=(request()->segment(2)) == "" ? "color: red;" : ""?>">({{ $count_barang }})</span>
                                </li>
                                @foreach ($kategori_produk as $kp)

                                <li>
                                    <a href="/product/{{$kp->id_produk}}"
                                        style="<?=(request()->segment(2)) == $kp->id_produk ? "color: red;" : ""?>">{{$kp->nama_produk}}</a>
                                    <span
                                        style="<?=(request()->segment(2)) == $kp->id_produk ? "color: red;" : ""?>">({{ $kp->total }})</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>

                </div>
            </div>
            <div class="col-lg-9">
                @if ($message = Session::get('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Maaf!</strong> {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif


                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu">
                                <p><span>{{ count($products) }} </span> Barang Terdaftar {!! $keterangan_produk !!}</p>
                            </div>
                            <form method="GET" action="/product">
                                <div class=" single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari"
                                            aria-describedby="inputGroupPrepend" name="barang" autocomplete="off">
                                        <div class="input-group-prepend">

                                            <button type="submit" class="input-group-text" id="inputGroupPrepend"><i
                                                    class="fas fa-search"></i></button>

                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>


                <div class="row align-items-center latest_product_inner">

                    @if (count($products) > 0)
                    @foreach ($products as $pr)
                    <div class="col-lg-4 col-sm-6 col-6">
                        <div class="single_product_item">
                            <img src='{!! asset("assets/img/barang/$pr->gambar_barang") !!}' alt="">
                            <div class="single_product_text">
                                <h4>{{ $pr->nama_barang }}</h4>
                                <h3>Rp. {{$pr->harga_barang}}</h3>
                                <a href="#" class="add_cart" data-toggle="modal" data-target="#modalBuy">beli
                                    sekarang<i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-lg-12 col-sm-12">
                        <center>
                            <img alt="" src="{!! asset('assets/img/file-not-found.jpg') !!}">
                            <div class="single_product_text">

                                <h4>Data Produk Belum Tersedia</h4>


                            </div>
                        </center>

                    </div>

                    @endif


                    <!-- <div class="col-lg-12">
                        <div class="pageination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="product_list best_seller">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
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





@endsection
