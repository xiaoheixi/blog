<!DOCTYPE html>
<html>
    <head>
    </head>
    <nav>
    @foreach($navContent as $nav)
    <a href="{!!$nav->navLink!!}">{!!nav-navName!!}</a>
    @endforeach        
    </nav>
    <body>
        {!!$pageContent->pageContent!!}
    </body>
</html>