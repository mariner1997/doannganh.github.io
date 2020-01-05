<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route('trang-chu')}}"><img class="img-fluid" src="source/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						
					</button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('trang-chu')}}">Trang chủ</a></li>

                        <li class="nav-item submenu dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour</a>
                            <ul class="dropdown-menu">
                                @foreach($loai_sp as $loai)
                                <li class="nav-item"><a class="nav-link" href="{{route('loaitour',$loai->id)}}">{{$loai->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('gioithieu')}}">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('lienhe')}}">Liên hệ</a></li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">

                        <li class="nav-item">
                            <button type="button" class="search nav-link">
									<i class="lnr lnr-magnifier" id="search"></i>
								</button>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="lnr lnr-cart"> @if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif</span></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="container">
                                    <table id="cart" class="table table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th style="width:10%">Tour</th>
                                                <th style="width:30%">Giá</th>
                                                <th style="width:8%"></th>
                                                <th style="width:42%">Giá thành</th>
                                                <th style="width:10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(Session::has('cart')) @foreach($product_cart as $product)
                                            <tr>
                                                <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-sm-2 hidden-xs"><img src="source/image/product/{{$product['item']['image']}}" alt="..." style="height: 100px;" /></div>
                                                        <div class="col-sm-10">

                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Price">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} VNĐ @else {{number_format($product['item']['promotion_price'])}} VNĐ @endif </td>
                                    <td data-th="Quantity">
        
                                    </td>
                                    <td data-th="Subtotal" class="">@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} VNĐ @else {{number_format($product['item']['promotion_price'])}} VNĐ @endif </td>
                                    <td class="actions" data-th="">
                                        <a class="btn btn-danger btn-sm" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
        
                                </tbody>
                                @endforeach
                                <tfoot>
                                    <tr>
                                        <td><strong>Tổng: @if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} VNĐ @else {{number_format($product['item']['promotion_price'])}} VNĐ @endif </strong></td>
                                        <td colspan="2" class="hidden-xs"></td>
                                        <td class="hidden-xs"></td>
                                        <td><a  class="btn btn-success btn-block text-white">Book tour</a></td>
                                    </tr>
                                </tfoot>
                                @endif
                                </table>
                            </div>
                            </div>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="lnr lnr-user"></i></a>
                            <ul class="dropdown-menu">
                                @if(Auth::check())
                                <li class="nav-item"><a class="nav-link" href="">Chào bạn, {{Auth::user()->full_name}}</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Đăng xuất</a></li>
                                @else
                                <li class="nav-item"><a class="nav-link" href="{{route('signup')}}">Đăng kí</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Đăng nhập</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="search_input" id="search_input_box">
            <div class="container">
                <form role="search" method="get" id="searchform" action="{{route('search')}}" class="d-flex justify-content-between">
                    <input type="text" class="form-control" name="key" id="s" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                                                    </form>
                                </div>
                            </div>

                </div>
</header>