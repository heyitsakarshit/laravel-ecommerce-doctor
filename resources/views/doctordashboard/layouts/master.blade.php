<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Social Vaidya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dropzone.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $(".header").load("header.html");
            $(".footer").load("footer.html");
        });
    </script>

    <!--Jquery End-->

</head>
<body>

@include('doctordashboard.layouts.header')
@include('doctordashboard.layouts.sidebar')
@yield('content')
<!-- Main Wrapper -->

</div>
</div>
</div>
</div>

<!-- /Main Wrapper -->

@yield('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js">
      </script>
      
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
 
     
   
   <script>
       
       // Add remove fields dynamically
     $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div style="display:flex;"><input type="time" id="starttime" name="starttime[]" class="form-control mx-3 my-3"placeholder="start time" required /><input type="time" id="endtime" name="endtime[]" class="form-control mx-3 my-3" placeholder="endtime" required /><a href="javascript:void(0);" class="btn btn-success remove_button mx-3 my-3">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
   </script>
   
   
    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

    <!-- Select2 JS -->
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- Dropzone JS -->
    <script src="{{asset('assets/plugins/dropzone/dropzone.min.js')}}"></script>

    <!-- Bootstrap Tagsinput JS -->
    <script src="{{asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>

    <!-- Profile Settings JS -->
    <script src="{{asset('assets/js/profile-settings.js')}}"></script>

    <!-- Custom JS -->
    <script src="{{asset('assets/js/script.js')}}"></script>

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

                                                
</body>

</html>