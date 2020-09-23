<ul>
    @foreach($navContent as $nav)
    <li>
        <a class="navBarLinks" href="{!!$nav->navLink!!}">{!!$nav->navName!!}</a>
    </li>
    @endforeach
</ul>
