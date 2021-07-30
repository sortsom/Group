<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{asset('/administrator')}}">
            <span class="align-middle"> Dashboards</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-item {{request()->is('administrator')?'active':''}}">
                <a class="sidebar-link" href="{{asset('/administrator')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
