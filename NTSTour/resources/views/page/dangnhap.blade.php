@extends('master') @section('content')
<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="{{route('trang-chu')}}">Trang chủ</a>
						<a href="">Đăng nhập</a>
					</div>
					<h2>Đăng Nhập</h2>
				</div>
			</div>
		</div>
	</section>

<div class="site-section bg-light">
    <div class="container" style="width: 600px;">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('login')}}" method="post" class="p-5">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-sm-3"></div>
                    @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                    @endif
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Email address*</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label for="phone">Password*</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Đăng nhập" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<!-- .container -->
@endsection