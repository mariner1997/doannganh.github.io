@extends('master') @section('content')
<!doctype html>
<html lang="en">
<body>
    
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner_content">

                        <h2>NTS Tour</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->


    <!--================Team Area =================-->
    <section class="team_area section_gap_top">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p>We’re Offering these Trip Packages</p>
                        <h1>Tour Mới</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row team_inner">
                @foreach($new_product as $new)
                <div class="col-lg-3 col-md-6">
                    <div class="team_item ">
                        <a href="{{route('chitiettour',$new->id)}}">
                            <div class="team_img">
                                <img class="img-fluid w-100" src="source/image/product/{{$new->image}}" alt="" style="height: 350px;">
                                <div class="hover">
                                    <h4>{{$new->name}}</h4>
                                    @if($new->promotion_price==0)
                                    <strong class="text-primary mb-2 d-block">{{number_format($new->unit_price)}} VNĐ</strong> @else
                                    <div class="row">
                                        <div class="col-5"><strong class="mb-2 d-block"><del>{{number_format($new->unit_price)}} VNĐ</del></strong></div>
                                        <div class="col"><strong class="text-primary mb-2 d-block">{{number_format($new->promotion_price)}} VNĐ</strong> </div>
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
    <section class="team_area section_gap_top">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p>We’re Offering these Trip Packages</p>
                        <h1>Tour Khuyến Mãi</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row team_inner">
                @foreach($sanpham_khuyenmai as $spkm)
                <div class="col-lg-3 col-md-6">
                    <div class="team_item ">
                        <a href="{{route('chitiettour',$spkm->id)}}">
                            <div class="team_img">
                                <img class="img-fluid w-100" src="source/image/product/{{$spkm->image}}" alt="" style="height: 350px;">
                                <div class="hover">
                                    <h4>{{$spkm->name}}</h4>
                                    @if($spkm->promotion_price==0)
                                    <strong class="text-primary mb-2 d-block">{{number_format($spkm->unit_price)}} VNĐ</strong> @else
                                    <div class="row">
                                        <div class="col-5"><strong class="mb-2 d-block"><del>{{number_format($spkm->unit_price)}} VNĐ</del></strong></div>
                                        <div class="col"><strong class="text-primary mb-2 d-block">{{number_format($spkm->promotion_price)}} VNĐ</strong> </div>
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

</body>

</html>
@endsection