<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <img  src="{{asset('img/FInal_Logo.png')}}" alt="">
            <span class="align-middle">ORT Dashboard</span>
        </a>

        <ul class="sidebar-nav">
            <!--					<li class="sidebar-header">-->
            <!--						Pages-->
            <!--					</li>-->

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{url('/')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <!--					<li class="sidebar-item">-->
            <!--						<a class="sidebar-link" href="pages-profile.html">-->
            <!--              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>-->
            <!--            </a>-->
            <!--					</li>-->

            <!--					<li class="sidebar-item">-->
            <!--						<a class="sidebar-link" href="pages-sign-in.html">-->
            <!--              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>-->
            <!--            </a>-->
            <!--					</li>-->

            <!--					<li class="sidebar-item">-->
            <!--						<a class="sidebar-link" href="pages-sign-up.html">-->
            <!--              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>-->
            <!--            </a>-->
            <!--					</li>-->

            <!--					<li class="sidebar-item">-->
            <!--						<a class="sidebar-link" href="pages-blank.html">-->
            <!--              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>-->
            <!--            </a>-->
            <!--					</li>-->


            <li class="sidebar-header">
                TMS
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('carriers')}}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Carrier</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('trucks')}}">
                    <i class="align-middle" data-feather="truck"></i> <span class="align-middle">Trucks</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('drivers')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Drivers</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('loads')}}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Loads</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('Settlement')}}">
                    <i class="align-middle" data-feather="server"></i> <span class="align-middle">Settlement</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('Shipper')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Shipper</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('Dispatcher')}}">
                    <i class="align-middle" data-feather="package"></i> <span class="align-middle">Dispatcher</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('profit_calculator')}}">
                    <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Profit Calculator</span>
                </a>
            </li>










            <li class="sidebar-header">
                Tools & Components
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-forms.html">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-cards.html">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-typography.html">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                </a>
            </li>







            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <div class="d-grid">
                    <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>
</nav>
