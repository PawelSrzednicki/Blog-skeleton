<ul class="accordion vertical menu" data-accordion data-allow-all-closed="true">
    @if (Auth::check())
    <li class="hide-for-medium accordion-item" data-accordion-item>
        <a href="#" class="accordion-title">
            {{ Auth::user()->name }}<i class="material-icons">
                keyboard_arrow_down
            </i>
        </a>
        <ul class="vertical menu accordion-content" data-tab-content>
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
    <li><a href="">link</a></li>
</ul>