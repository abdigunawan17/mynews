@extends('frontend.home_dashboard')

@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-wrpp">
                        <figure class="authorPage-image">
                            <img alt="" src="{{ (!empty($get_user_data->photo) ? url('upload/user_images/'.$get_user_data->photo) : url('upload/no_image.jpg')) }}
                            " class="avatar avatar-96 photo" height="96" width="96" loading="lazy"> 
                        </figure>
                        <h1 class="authorPage-name">
                            <a href=" "> {{ $get_user_data->name }} </a>
                        </h1>
                        <h6 class="authorPage-name">{{ $get_user_data->email }}</h6>
                
                        <ul>
                            <li><a href=""><b>🟢 Your Profile </b></a> </li>
                            <li> <a href=""> <b>🔵 Change Password </b> </a> </li> 
                            <li> <a href=""> <b>🟠 Read Later List </b> </a> </li> 
                            <li> <a href="{{ route('user.logout') }}"> <b>🟠 Logout</b> </a> </li> 
                        </ul>
                
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-wrpp">
                        <h4 class="contactAddess-title text-center">User Account </h4>
                        <div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                            <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data" data-status="init">
                                    @csrf

                                    @if (session('status'))
                                        
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>

                                    @elseif (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                <div style="display: none;">
                                </div>
            
                                <div class="main_section">
                                            <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="contact-title ">User Name *</div>
                                                                <div class="contact-form">
                                                                    <span class="wpcf7-form-control-wrap sub_title"><input type="text" name="username" value="{{ $get_user_data->username }}" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="contact-title ">Name *</div>
                                                                <div class="contact-form">
                                                                    <span class="wpcf7-form-control-wrap sub_title"><input type="text" name="name" value="{{ $get_user_data->name }}" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="contact-title ">Email *</div>
                                                                <div class="contact-form">
                                                                    <span class="wpcf7-form-control-wrap sub_title"><input type="email" name="email" value="{{ $get_user_data->email }}" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" ></span>
                                                                </div>
                                                        </div>
                                            
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="contact-title ">Phone *</div>
                                                                <div class="contact-form">
                                                                    <span class="wpcf7-form-control-wrap sub_title"><input type="text" name="phone" value="{{ $get_user_data->phone }}" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" ></span>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="contact-title ">Photo *</div>
                                                                <div class="contact-form">
                                                                    <span class="wpcf7-form-control-wrap sub_title"><input type="file" name="photo" size="40" id="image" class="wpcf7-form-control wpcf7-text" aria-invalid="false"  ></span>
                                                                </div>
                                                            <div class="contact-title "></div>
                                                                <div class="contact-form">
                                                                    <span class="wpcf7-form-control-wrap sub_title">
                                                                        <img alt="" src="{{ (!empty($get_user_data->photo) ? url('upload/user_images/'.$get_user_data->photo) : url('upload/no_image.jpg')) }}
                                                                        " id="show_image" class="rounded-circle avatar-lg photo" height="110" width="110" loading="lazy"> 
                                                                    </span>
                                                                </div>
                                                        </div>
                                            </div>
                    
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-btn">
                                                        <input type="submit" value="Save Changes" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            let reader = new FileReader();
            reader.onload = function(e){
                $('#show_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


@endsection