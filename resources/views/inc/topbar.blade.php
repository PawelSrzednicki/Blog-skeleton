<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="offCanvas"></button>
    <div class="title-bar-title">
        <a href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
</div>

<nav class="top-bar" id="example-menu">
    <span class="title-bar-title">
        <a href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </span>
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
        </ul>
    </div>
</nav>