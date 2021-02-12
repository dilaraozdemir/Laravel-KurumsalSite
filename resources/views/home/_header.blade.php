@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()

@endphp
@php
    $seting = \App\Http\Controllers\HomeController::getseting()

@endphp

<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> {{$seting->phone}}</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> {{$seting->email}}</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
                                @if($seting->facebook!=null)
								    <li><a href="{{$seting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                @endif
                                @if($seting->twitter!=null)
								    <li><a href="{{$seting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @if($seting->instagram!=null)
                                    <li><a href="{{$seting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                @endif

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="{{route('home')}}"><img src="{{ asset('assets')}}/images/home/owl.png" alt="" width="80" height="80"/></a>
						</div>

					</div>
					<div class="col-md-8 clearfix">


						<div class="shop-menu clearfix pull-right">


                            <ul class="nav navbar-nav">
                                @if (Auth::check())


                                    @php
                                        $userRoles = Auth::user()->roles->pluck('name');
                                    @endphp

                                    <li><a href=""><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>Role: {{ Auth::user()->roles->pluck('name') }} </li>
                                    <li><a href="{{ route('myprofile') }}"><i class="fa fa-user"></i> My User Account</a></li>
                                    <li><a href="{{ route('admin_logout') }}"><i class="fa fa-unlock"></i> Logout</a></li>


                                @else
                                    <li><a href="{{ route('admin_login') }}"><i class="fa fa-lock"></i> Login</a></li>
                                    <li><a href="/register"><i class="fa fa-lock"></i> Join</a></li>
                                @endif




							</ul>

                            <ul class="nav navbar-nav">

                            </ul>
						</div>


					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{route('home')}}" >Home</a></li>
                                <li><a href="{{route('home_aboutus')}}" >About Us</a></li>
                                <li><a href="{{route('home_references')}}" >References</a></li>
                                <li><a href="{{route('home_contact')}}" >Contact</a></li>
                                <li><a href="{{route('home_faq')}}" >FAQ</a></li>
								<li class="dropdown" ><a href="#" >Categories<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($parentCategories as $rs)
                                            <li class="dropdown"> <a href="#">{{$rs->title}}</a>
                                                    <li class="dropdown">
                                                <ul role="menu" class="submenu">

                                                    @if(count($rs->children))
                                                        @include('home.categorytree',['children' => $rs->children])
                                                    @endif
                                                </ul>


                                                    </li>


                                            </li>
                                        @endforeach
                                    </ul>
                                </li>



							</ul>
						</div>
					</div>
                    <div class="col-sm-3">
                        <form action="{{route('getcontent')}}" method="post">
                            @csrf
                            <div class="search_box pull-right">
                                @livewire('search')
                        </form>
                        @livewireScripts
                    </div>
                </div>

            </div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

