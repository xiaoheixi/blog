<!-- <nav class="navbar fixed-top navbar-expand-lg"> -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/">
        <img class="navBarLogo" src="/images/Marketing_4_Growth_Logo.jpg" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @foreach($navContent as $nav)
            @if($nav->navName=="Members Login")
            <li>
                <a class="navBarLinks" href="{!!$nav->navLink!!}" target="_blank">{!!$nav->navName!!}</a>
            </li>
            @elseif($nav->navName=="Customer Support")
            <li>
                <a class="navBarLinks" href="{!!$nav->navLink!!}" target="_blank">{!!$nav->navName!!}</a>
            </li>
            @else
            <li class="nav-item">
                <a class="navBarLinks" href="{!!$nav->navLink!!}">{!!$nav->navName!!}</a>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</nav>
