<div class='container margin-top-20'>
    <div class="row">
        <div class="col-md-4">
            @foreach($adminSideNavContent as $adminSideNav)
                <a href="{!!$adminSideNav->adminSideNavLink!!}">{!!$adminSideNav->adminSideNavName!!}</a><br>
            @endforeach
        </div>
    </div>
</div>
