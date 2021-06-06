<nav class="top-bar">
    <div class="container-fluid-w">
        <div class="top-bar__menu" id="my-top-nav">
            @guest()
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                    </a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="{{ request()->is('register') ? 'active' : '' }}">
                        <i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up
                    </a>
                @endif
            @else
                @if (Route::has('home'))
                    <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active' : '' }}">
                        <i class="fa fa-home" aria-hidden="true"></i> Home
                    </a>
                @endif
                {{-- admin --}}
                @can('viewAny', App\Models\User::class)
                    @if(Route::has('admin.user.list'))
                        <a href="{{ route('admin.user.list') }}"
                           class="{{ request()->is('admin/user/list*') ? 'active' : '' }}">
                            <i class="fa fa-users" aria-hidden="true"></i> Manage users
                        </a>
                    @endif
                    @if(Route::has('admin.product.list'))
                        <a href="{{ route('admin.product.list') }}"
                           class="{{ request()->is('admin/product/list*') ? 'active' : '' }}">
                            <i class="fa fa-product-hunt" aria-hidden="true"></i> Manage products
                        </a>
                    @endif
                @endcan
                {{-- end admin --}}
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Log out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
            <a href="javascript:void(0);" class="icon" id="menu">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</nav>
