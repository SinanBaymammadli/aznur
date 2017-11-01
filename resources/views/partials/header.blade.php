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
          <a class="header-link {{ Nav::isResource('products') }}" href="{{ route('products.index', app()->getLocale()) }}">
            @lang('header.products')
          </a>
          <a class="header-link {{ Nav::hasSegment('contact', 2) }}" href="/contact">
            @lang('header.contact')
          </a>

          @auth
            <div class="dropdown admin-dropdown">
              <button class="dropdown-toggle" type="button" id="logout-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </button>
              <div class="dropdown-menu" aria-labelledby="logout-dropdown">
                <a class="dropdown-item {{ Nav::hasSegment('register', 1) }}" href="/register">
                  Register new user
                </a>

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
          @endauth

          <div class="dropdown lang-dropdown">
            <button class="dropdown-toggle" type="button" id="langunage-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ strtoupper(app()->getLocale()) }}
            </button>
            <div class="dropdown-menu" aria-labelledby="langunage-dropdown">
              <a class="dropdown-item" href="{{ url('az/' . $url_without_locale) }}">AZ</a>
              <a class="dropdown-item" href="{{ url('en/' . $url_without_locale) }}">EN</a>
            </div>
          </div>

          <div class="lang-links">
            <a class="header-link" href="{{ url('az/' . $url_without_locale) }}">AZ</a>
            <a class="header-link" href="{{ url('en/' . $url_without_locale) }}">EN</a>
          </div>

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
