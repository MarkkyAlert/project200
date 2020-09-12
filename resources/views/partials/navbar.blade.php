<nav class="mb-1 navbar navbar-expand-lg navbar-light rgba(255, 255, 255, 0.3) rgba-white-light">
    <a class="navbar-brand" href="home">
        <img src="https://uppic.cc/d/5V3J" height="100" alt="mdb logo" class="animated bounceInDown" alt="Transparent MDB Logo" id="animated-img1">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-home"></i>หน้าแรก</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{route('categories.index')}}" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-dog"></i>สินค้าทั้งหมด</a>
                </li>


            <li class="nav-item">
                @role('admin')
            <a class="nav-link" href="{{route('dashboard.dashboard')}}" aria-haspopup="true" aria-expanded="false"><i class="fas fa-store"></i>Dashboard </a>
            </li>

                @endrole

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>Cart</a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item" href="{{route('product.showcart')}}">ตะกร้าสินค้า</a>
                    <a class="dropdown-item" href="{{route('myAccount.myorder')}}">รายการสั่งซื้อ</a>
                    <a class="dropdown-item" href="{{route('transactions.index')}}">แจ้งชำระเงิน</a>
                    <a class="dropdown-item" href="{{route('payment.orderstatus')}}">ติดตามสถานะการสั่งซื้อ</a>
                </div>
            </li>
            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="far fa-user"></i>{{ Auth::user()->username }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('myAccount.myaccount')}}">My account</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
    </div>

</nav>
