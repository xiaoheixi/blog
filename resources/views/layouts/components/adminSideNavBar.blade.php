<ul class="adminNav flex-column col-md-2">
    @foreach($adminSideNavContent as $adminSideNav)
    <li class="nav-item">
        <a class="nav-link @if($loop->first) active @endif"
            href="{!!$adminSideNav->adminSideNavLink!!}">{!!$adminSideNav->adminSideNavName!!}</a>
    </li>
    @endforeach
</ul>
