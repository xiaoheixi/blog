<nav>
    @slot('$navContent')
    @foreach($navContent as $nav)
    <a href="{!!$nav->navLink!!}">{!!nav-navName!!}</a>
    @endforeach
    @endslot        
</nav>