<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
       <!-- show app name -->
       {{ config('app.name') }}
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
       <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        {{-- Show Language --}}
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="language" href="#" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
             @switch(app() -> getLocale())
                 @case('my')
                    <i class="flag-icon flag-icon-my"></i>
                     @break
                 @case('en')
                    <i class="flag-icon flag-icon-gb"></i>
                     @break
                 @default

             @endswitch
            {{ strtoupper(app() -> getLocale()) }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="language">
             <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'my']) }}">
                {{ trans('localization.my') }}
            </a>
             <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'en']) }}">
                {{ trans('localization.en') }}
            </a>
          </div>
       </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-user fa-fw"></i>
             <!-- show username -->
             {{ Auth::user() -> name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            {{-- link:profile --}}
             <a class="dropdown-item" href="#">
                {{ trans('dashboard.link.profile') }}
             </a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{-- link:logout --}}
                    {{ trans('dashboard.link.logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
       </li>
    </ul>
 </nav>
