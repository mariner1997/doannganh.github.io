@extends('master') @section('content')
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="{{route('trang-chu')}}">Trang chủ</a>
                    <a href="">{{$loai_sp->name}}</a>
                </div>
                <h2>{{$loai_sp->name}}</h2>
            </div>
        </div>
    </div>
</section>
<!-- <div class="site-section">
    <div class="container">
        <div class="row">
            @foreach($sp_theoloai as $sp)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <a href="{{route('chitiettour',$sp->id)}}" class="unit-1 text-center">
                    <img src="source/image/product/{{$sp->image}}" alt="Image" class="img-fluid" style="height: 250px;">
                    <div class="unit-1-text">
                            @if($sp->promotion_price==0)
                        <strong class="text-primary mb-2 d-block">{{number_format($sp->unit_price)}} VNĐ</strong>
                        @else
                        <strong class="mb-2 d-block"><del class=>{{number_format($sp->unit_price)}} VNĐ</del></strong>
                        <strong class="text-primary mb-2 d-block">{{number_format($sp->promotion_price)}} VNĐ</strong>
                        @endif
                        <h3 class="unit-1-heading">{{$sp->name}}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div> -->
<section class="team_area section_gap_top">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <p>We’re Offering these Trip Packages</p>
                    <h1>{{$loai_sp->name}}</h1>
                    <span class="title-widget-bg"></span>
                </div>
            </div>
        </div>
        <div class="row team_inner">
            @foreach($sp_theoloai as $sp)
            <div class="col-lg-3 col-md-6">
                <div class="team_item ">
                    <a href="{{route('chitiettour',$sp->id)}}">
                        <div class="team_img">
                            <img class="img-fluid w-100" src="source/image/product/{{$sp->image}}" alt="" style="height: 350px;">
                            <div class="hover">
                                <h4>{{$sp->name}}</h4>
                                @if($sp->promotion_price==0)
                                <strong class="text-primary mb-2 d-block">{{number_format($sp->unit_price)}} VNĐ</strong> @else
                                <div class="row">
                                    <div class="col-5"><strong class="mb-2 d-block"><del>{{number_format($sp->unit_price)}} VNĐ</del></strong></div>
                                    <div class="col"><strong class="text-primary mb-2 d-block">{{number_format($sp->promotion_price)}} VNĐ</strong> </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="site-section">
    <div class="container mb-4">
        <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary "><i class="lnr lnr-map-marker" style="font-size: 40px;"></i></span></div>
                    <div>
                        <h3 class="py-3">Tour</h3>
                        <p>Đa dạng, chất lượng</p>
                        <p>Đạt chất lượng tốt nhất</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary"><i class="lnr lnr-chart-bars" style="font-size: 40px;"></i></span></div>
                    <div>
                        <h3 class="py-3">Giá Cả</h3>
                        <p>Luôn có mức giá tốt nhất</p>
                        <p>Bảo đảm giá tốt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><span class="text-primary"><i class="lnr lnr-file-empty" style="font-size: 40px;"></i></span></div>
                    <div>
                        <h3 class="py-3">Đặt Tour</h3>
                        <p>Dễ dàng và nhanh chóng</p>
                        <p>Đặt tour chỉ với 3 bước</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection