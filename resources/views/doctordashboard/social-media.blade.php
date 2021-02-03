@extends('doctordashboard.layouts.master')
@section('content')
<body>


                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                            @if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_error') !!}</strong>
            </div>
            @endif

            @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif
                                <!-- Social Form -->
                                <form method="post" enctype="multipart/form-data"action="{{url('/doctor-dashboard/social-media')}}">
                                {{ csrf_field() }}
                                @foreach($social as $so)
                                <input type="hidden" name="emailid" class="form-control" value="{{$so->id}}">
                                            
                                  @endforeach
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="form-group">
                                                <label>Facebook URL</label>
                                                <input type="text" name="facebook_url" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="form-group">
                                                <label>Twitter URL</label>
                                                <input type="text" name="twitter_url" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="form-group">
                                                <label>Instagram URL</label>
                                                <input type="text" name="instagram_url" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="form-group">
                                                <label>Pinterest URL</label>
                                                <input type="text" name="pinterest_url" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="form-group">
                                                <label>Linkedin URL</label>
                                                <input type="text" name="linkedin_url"  class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="form-group">
                                                <label>Youtube URL</label>
                                                <input type="text" name="youtube_url" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                                <!-- /Social Form -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Main Wrapper -->

</body>

@endsection