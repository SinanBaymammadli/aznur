<nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
          <a class="nav-link" href="/contact">@lang('header.contact')</a>
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
</nav>
