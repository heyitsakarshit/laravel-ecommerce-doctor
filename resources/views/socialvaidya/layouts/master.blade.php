<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Social Vaidya</title>

    <!-- Favicons -->
    <link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">

    <!--Jquery End-->
<!-- Favicons -->
<link href="{{asset('assets/img/favicon.png')}}" rel="icon">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $(".header").load("header.html");
        $(".footer").load("footer.html");
    });
</script>

</head>

<body>
@include('socialvaidya.layouts.header')
@yield('content')
@include('socialvaidya.layouts.footer')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Slick JS -->
    <script src="{{asset('assets/js/slick.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    
    <script src="{{asset('assets/assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('assets/js/map.js')}}"></script>
    <!-- ask-question script -->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
	
	<script>
	    
	    
var telInput = $("#phone"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");

// initialise plugin
telInput.intlTelInput({

  allowExtensions: true,
  formatOnDisplay: true,
  autoFormat: true,
  autoHideDialCode: true,
  autoPlaceholder: true,
  defaultCountry: "auto",
  ipinfoToken: "yolo",

  nationalMode: false,
  numberType: "MOBILE",
  //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
  preventInvalidNumbers: true,
  separateDialCode: true,
  initialCountry: "auto",
  geoIpLookup: function(callback) {
  $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    var countryCode = (resp && resp.country) ? resp.country : "";
    callback(countryCode);
  });
},
   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});

var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);



	</script>

<script>
                                                            function readURL(input) {
                                                                if (input.files && input.files[0]) {
                                                                    var reader = new FileReader();

                                                                    reader.onload = function (e) {
                                                                        $('#img-tag').attr('src', e.target.result);
                                                                    }

                                                                    reader.readAsDataURL(input.files[0]);
                                                                }
                                                            }

                                                            $("#image").change(function(){
                                                                readURL(this);
                                                            });
                                                </script>

</body></html>
