<!-- plugins:js -->
<script src="{{asset('backend/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('backend/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('backend/js/off-canvas.js')}}"></script>
<script src="{{asset('backend/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('backend/js/dashboard.js')}}"></script>
<script src="{{asset('backend/js/toastr.js')}}"></script>
<!-- End custom js for this page-->
@stack('script')