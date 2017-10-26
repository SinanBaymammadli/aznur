<header class="header">
  <div class="container-fluid h-100">
    <div class="header-inner">
      <div class="header-left">
        <a class="header-logo header-link" href="/">
          Aznur Kabel
        </a>
      </div>

      <div class="header-right">
        <nav class="main-nav js-main-nav">
          <a class="header-link {{ Nav::hasSegment(NULL, 2) }}" href="/">
            @lang('header.home')
          </a>
          <a class="header-link {{ Nav::hasSegment('about', 2) }}" href="/about">
            @lang('header.about')
          </a>
          <a class="header-link {{ Nav::isResource('products') }}" href="/products">
            @lang('header.products')
          </a>
          <a class="header-link {{ Nav::hasSegment('contact', 2) }}" href="/contact">
            @lang('header.contact')
          </a>

          <div class="dropdown lang-dropdown">
            <button class="dropdown-toggle" type="button" id="langunage-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ strtoupper(app()->getLocale()) }}
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="langunage-dropdown">
              <a class="dropdown-item" href="{{ url('az/' . $url_without_locale) }}">AZ</a>
              <a class="dropdown-item" href="{{ url('en/' . $url_without_locale) }}">EN</a>
            </div>
          </div>

          <div class="lang-links">
            <a class="header-link" href="{{ url('az/' . $url_without_locale) }}">AZ</a>
            <a class="header-link" href="{{ url('en/' . $url_without_locale) }}">EN</a>
          </div>

          @auth

            <div class="dropdown">
              <button class="dropdown-toggle" type="button" id="logout-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="logout-dropdown">
                <a class="dropdown-item"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </div>

            <a class="header-link {{ Nav::hasSegment('register', 1) }}" href="/register">
              Register
            </a>

          @endauth

        </nav>

        <span class="nav-toggle-btn js-nav-toggle-btn">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
              <path fill="#000000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
          </svg>
        </span>
      </div>
    </div>
  </div>
</header>

<!-- <nav class="navbar fixed-top navbar-expand-md navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      Aznur Kabel
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Nav::hasSegment(NULL, 2) }}">
          <a class="nav-link" href="/">@lang('header.home')</a>
        </li>

        <li class="nav-item {{ Nav::hasSegment('about', 2) }}">
          <a class="nav-link" href="/about">@lang('header.about')</a>
        </li>

        <li class="nav-item {{ Nav::isResource('products') }}">
          <a class="nav-link" href="/products">@lang('header.products')</a>
        </li>

        <li class="nav-item {{ Nav::hasSegment('contact', 2) }}">

        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ strtoupper(app()->getLocale()) }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ url('az/' . $url_without_locale) }}">AZ</a>
            <a class="dropdown-item" href="{{ url('en/' . $url_without_locale) }}">EN</a>
          </div>
        </li>

        @auth
          <li class="nav-item {{ Nav::hasSegment('register', 1) }}">
            <a class="nav-link" href="/register">Register</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav> -->
