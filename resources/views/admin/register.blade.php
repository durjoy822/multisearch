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
                <div class="row">
                    <div class="col-sm-6 auth-box">
                        <div class="proclinic-box-shadow">
                            <h3 class="widget-title">Register</h3>
                            <form class="widget-form w-50 m-auto" action="{{route('admin.new')}}" method="post">@csrf
                                <!-- form-group -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}"
                                            required>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}"
                                            required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <!-- form-group -->
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" placeholder="Password" name="password" value="{{ old('password') }}"
                                            class="form-control" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.form-group -->

                                <!-- Login Button -->
                                <div class="button-btn-block">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                </div>
                                <!-- /Login Button -->
                                <!-- Links -->
                                <div class="auth-footer-text">
                                    <small>Already a User,
                                        <a href="{{ route('admin.login') }}">Sign In</a> Here</small>
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
