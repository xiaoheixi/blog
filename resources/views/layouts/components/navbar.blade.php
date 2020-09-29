<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">
        <img class="navBarLogo" src="/images/Marketing_4_Growth_Logo.jpg" width="30px" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @foreach($navContent as $nav)
            @if($nav->navName=="Members Login")
            <li>
                <a class="navBarLinks" href="{!!$nav->navLink!!}" target="_blank"><button
                        class="btn btn-outline-success">{!!$nav->navName!!}</button></a>
            </li>
            @elseif($nav->navName=="Customer Support")
            <li>
                <a class="navBarLinks" href="{!!$nav->navLink!!}" target="_blank"><button
                        class="btn btn-outline-success">{!!$nav->navName!!}</button></a>
            </li>
            @else
            <li class="nav-item">
                <a class="navBarLinks" href="{!!$nav->navLink!!}"><button
                        class="btn btn-outline-success">{!!$nav->navName!!}</button></a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</nav>
