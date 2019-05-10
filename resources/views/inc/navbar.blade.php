<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="height:20%;">
    <a class="navbar-brand text-white" href="/">Aston<span class="text-danger">Books</span></a>
    <form action="/search" method="GET" style="display: inline; margin: 0;">
        <div class="input-group">
            <input type="search" name="search" placeholder="Title, Author, ISBN" class="form-control">
            <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active ">
          <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/books"><i class="fas fa-book"></i> Books</a>
          </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right ml-auto">
            
            @guest
            <li class="nav-item">
                <a class="nav-link text-white" href="/shoppingCart"><i class="fas fa-shopping-cart"></i> Shopping Cart <span class="badge badge-light">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
        </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
            <li class="nav-item">
                <a class="nav-link text-white" href="/shoppingCart"><i class="fas fa-shopping-cart"></i> Shopping Cart <span class="badge badge-light">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
        </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/books/create"><i class="fas fa-book"></i> Add Book</a>
            </li>
          
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a class="dropdown-item" href="/dashboard">
                            My Dashboard
                        </a>
                        <a class="dropdown-item" href="/orders">
                            My Orders
                        </a>
                        <a class="dropdown-item" href="/admin">
                            My Admin Panel
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