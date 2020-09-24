<ul>
    <li>
        <a class="navBarLinks" href="/"><img style="height:1px, width:1px"
                src="/images/Marketing_4_Growth_Logo.jpg"></a>
    </li>
    @foreach($navContent as $nav)
    <li>
        <a class="navBarLinks" href="{!!$nav->navLink!!}">{!!$nav->navName!!}</a>
    </li>
    @endforeach
</ul>
