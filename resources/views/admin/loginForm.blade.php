<!DOCTYPE html>
<html>

@include('admin.layouts.head')

<body class="auth-bg">
    <!-- Pre Loader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--/Pre Loader -->
    <!-- Color Changer -->
    <div class="theme-settings" id="switcher">
        <span class="theme-click">
            <span class="ti-settings"></span>
        </span>
        <span class="theme-color theme-default theme-active" data-color="green"></span>
        <span class="theme-color theme-blue" data-color="blue"></span>
        <span class="theme-color theme-red" data-color="red"></span>
        <span class="theme-color theme-violet" data-color="violet"></span>
        <span class="theme-color theme-yellow" data-color="yellow"></span>
    </div>
    <!-- /Color Changer -->
    <div class="wrapper">
        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid">
                @if (Session::has('warning'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('warning') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-6 auth-box">
                        <div class="proclinic-box-shadow">
                            <h3 class="widget-title">Login</h3>
                            <form class="widget-form" action="{{route('admin.auth')}}" method="post">@csrf
                                <!-- form-group -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" name="email" placeholder="Email" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <!-- form-group -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" placeholder="Password" name="password"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <!-- Check Box -->
                                <div class="form-check row">
                                    <div class="col-sm-12 text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="ex-check-2" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="ex-check-2">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Check Box -->
                                <!-- Login Button -->
                                <div class="button-btn-block">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                </div>
                                <!-- /Login Button -->
                                <!-- Links -->
                                <div class="auth-footer-text">
                                    <small>New User,
                                        <a href="{{ route('admin.register') }}">Sign Up</a> Here</small>
                                </div>
                                <!-- /Links -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content  -->
    </div>
    @include('admin.layouts.script')
</body>

</html>
