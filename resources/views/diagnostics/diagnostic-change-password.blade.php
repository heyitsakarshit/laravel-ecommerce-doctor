@extends('diagnostics.layouts.master')
@section('content')
<body>

        
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
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
                                        <!-- Change Password Form -->
                                        <form method="post"  action="{{url('diagnostic/diagnostic-change-password')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="new_password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                            </div>
                                            <div class="submit-section">
                                                <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                            </div>
                                        </form>
                                        <!-- /Change Password Form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    
    </div>
    <!-- /Main Wrapper -->

 
</body>
@endsection