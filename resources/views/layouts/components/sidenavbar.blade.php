<div class='container margin-top-20'>
    <div class="row">
        <div class="col-md-4">
            @foreach($sideNavContent as $sideNav)
                <a href="{!!$sideNav->sideNavLink!!}">{!!$sideNav->sideNavName!!}</a>
            @endforeach
        </div>
    </div>        
</div>