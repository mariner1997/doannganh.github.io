@extends('master') @section('content')
<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="{{route('trang-chu')}}">Trang chủ</a>
						<a href="">Chi tiết tour</a>
					</div>
					<h2>Chi Tiết Tour</h2>
				</div>
			</div>
		</div>
</section>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="p-4 mb-3">
                    <img src="source/image/product/{{$sanpham->image}}" alt="Image" class="img-fluid mb-4 rounded">
                    <h3 class="h5 text-black mb-3">{{$sanpham->name}}</h3>
                    @if($sanpham->promotion_price==0)
                    <strong class="text-primary mb-2 d-block">{{number_format($sanpham->unit_price)}} VNĐ</strong> @else
                    <strong class="mb-2 d-block"><del class=>{{number_format($sanpham->unit_price)}} VNĐ</del></strong>
                    <strong class="text-primary mb-2 d-block">{{number_format($sanpham->promotion_price)}} VNĐ</strong> @endif
                    <p><a href="{{route('themgiohang',$sanpham->id)}}" class="btn btn-primary px-4 py-2 text-white"><i class="lnr lnr-cart"></i> Thêm Vào Giỏ Hàng</a></p>
                </div>

            </div>
            <div class="col-md-6 mb-5">
                <div class="p-4 mb-3">
                    <h3 class="h5 text-black mb-3">MÔ TẢ</h3>
                    <p>{{$sanpham->description}}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection