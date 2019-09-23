<nav class="top-bar">
    <div class="top-bar-left">
        <a href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="menu-icon hide-for-medium" type="button" data-toggle="offCanvas"></button>
    </div>
    <ul class="dropdown menu icons  show-for-large" data-dropdown-menu>
        @if (Auth::check())
        <li>
            <a href="#">
                {{ Auth::user()->name }}
                <i class="material-icons">
                    keyboard_arrow_down
                </i>
            </a>
            <ul class="menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </li>
        @endif
    </ul>
</nav>