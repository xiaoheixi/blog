
       <ul class="nav flex-column col-md-2">


    @foreach($sideNavContent as $sideNav)

    <li class="sideNavItem">


        <a class="nav-link @if($loop->first) active @endif"
            href="{!!$sideNav->sideNavLink!!}">{!!$sideNav->sideNavName!!}</a>
    </li>
    @endforeach
</ul>
