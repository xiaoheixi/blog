<div class='container margin-top-20'>
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                @foreach($sideNavContent as $sideNav)
                    <a href="{!!$sideNav->sideNavLink!!}" class="list-group-item list-group-item-action">{!!$sideNav->sideNavName!!}</a>
                @endforeach
            </div>
        </div>
    </div>        
</div>