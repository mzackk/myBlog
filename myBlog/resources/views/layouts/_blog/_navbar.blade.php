<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
       <a class="navbar-brand" href="{{ route('blog.home') }}">
        {{ config('app.name') }}
       </a>
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- Search for post:start -->
          <form class="input-group my-1" action="{{ route('blog.search') }}" method="GET">
             <input name="keyword" value="{{ request()->get('keyword') }}" type="search" class="form-control" placeholder="{{ trans('blog.form_control.input.search.placeholder') }}">
             <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                   <i class="fas fa-search"></i>
                </button>
             </div>
          </form>
          <!-- Search for post:end -->
          <ul class="navbar-nav ml-auto">
             <!-- nav-home:start -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('blog.home') }}">
                   {{ trans('blog.menu.home') }}
                </a>
             </li>
             <!-- nav-home:end -->
             <!-- nav-categories:start -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('blog.categories') }}">
                   {{ trans('blog.menu.categories') }}
                </a>
             </li>
             {{-- !-- nav-categories:end --> --}}
             <!-- nav-categories:tags -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('blog.tags') }}">
                   {{ trans('blog.menu.tags') }}
                </a>
             </li>
             <!-- nav-tags:end -->
             <!-- Auth:start -->
             @auth
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                   {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                   <a class="dropdown-item" href="{{ route('dashboard.index') }}">
                      {{ trans('blog.menu.dashboard') }}
                   </a>
                   <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      Logout
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      <!-- csrf -->
                      @csrf
                   </form>
                </div>
             </li>

             @else
            <!-- Auth:else -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                   Login
                </a>
             </li>
             @endauth

             <!-- Auth:end -->
             <!-- lang:start -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                   @switch(app()->getLocale())
                       @case('my')
                        <i class="flag-icon flag-icon-my"></i>
                           @break
                       @case('en')
                       <i class="flag-icon flag-icon-gb"></i>
                           @break
                   @endswitch
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                   <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'my']) }}">
                      {{ trans('localization.my') }}
                   </a>
                   <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'en']) }}">
                      {{ trans('localization.en') }}
                   </a>
                </div>
             </li>
             <!-- lang:end -->
          </ul>
       </div>
    </div>
 </nav>
