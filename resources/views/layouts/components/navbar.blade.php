<div class="navBarTop">
    <ul>
        <li>
            <a class="navBarLinks" href="/"><img class="navBarLogo" src="/images/Marketing_4_Growth_Logo.jpg"></a>
        </li>
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
        <li>
            <a class="navBarLinks" href="{!!$nav->navLink!!}">{!!$nav->navName!!}</a>
        </li>
        @endif
        @endforeach
    </ul>
</div>
