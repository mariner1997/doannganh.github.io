@extends('master') @section('content')
<section class="banner_area ">
		<div class="banner_inner overlay d-flex align-items-center">
			<div class="container">
				<div class="banner_content">
					<div class="page_link">
						<a href="{{route('trang-chu')}}">Trang chủ</a>
						<a href="">Đăng ký</a>
					</div>
					<h2>Đăng Ký</h2>
				</div>
			</div>
		</div>
</section>

<div class="site-section bg-light">
    <div class="container" style="width: 600px;">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('signup')}}" method="post" class="p-5">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="col-sm-3"></div>
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err) {{$err}} @endforeach
                    </div>
                    @endif @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif
                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Email*</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Fullname*</label>
                            <input type="text" name="fullname" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Address*</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Phone*</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Password*</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Re-password*</label>
                            <input type="password" name="re_password" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Đăng Ký" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>


<!-- .container -->
@endsection