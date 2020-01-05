@extends('master') @section('content')

<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="{{route('trang-chu')}}">Trang chủ</a>
						<a href="">Tìm kiếm</a>
					</div>
					<h2>Tìm Kiếm</h2>
				</div>
			</div>
		</div>
</section>

<section class="team_area section_gap_top">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        
                        <h1>Tìm thấy {{count($product)}}</h1>
                        <span class="title-widget-bg"></span>
                    </div>
                </div>
            </div>
            <div class="row team_inner">
            @foreach($product as $new)
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

@endsection