<nav id="sidebar" class="proclinic-bg">
    <div class="sidebar-header">
        <a href=""><img src="{{ asset('assets/admin/images/logo.png') }}" class="logo"
                alt="logo"></a>
    </div>
    <ul class="list-unstyled components">
        <li class="">
            <a href="">
                <span class="ti-home"></span> Dashboard
            </a>
                <li>
                    <a href="{{route('service.index')}}">Services </a>
                </li>
               

            </ul>
        </li>
    </ul>
    <div class="nav-help animated fadeIn">
        <h5><span class="ti-comments"></span> Need Help</h5>
        <h6>
            <span class="ti-mobile"></span> +8801616657585
        </h6>
        <h6>
            <span class="ti-email"></span> adeveloper.info
        </h6>
        <p class="copyright-text">Copy rights &copy; {{ date('Y') }}</p>
    </div>
</nav>
