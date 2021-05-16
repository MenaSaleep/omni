@if (Auth::user())

@extends('layouts.app')
@section('content')


  
      </br>  </br>  </br>

      <div class="form-design">
        <form class="" action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="container">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                 @if (Session::has("Updateed_Acount"))
                    <div class="alert alert-success" role="alert">
                      {{ Session::get("Updateed_Acount") }}
                    </div>
                  @endif
                  <!--
                  <label class="upload-image" for="files">
                    <span class="lnr lnr-upload"></span>
                    <strong>  رفع الصورة </strong>
                  </label>
                  -->
                  <input id="files" type="file" name="picture" value="3">
                  <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                  <input type="text" autocomplete="off" name="name" value="{{ Auth::user()->name }}" placeholder="Username">
                  <input type="email" autocomplete="off" name="email" value="{{ Auth::user()->email }}" placeholder="Email Address">
                  <input type="text" autocomplete="off" name="phone" value="{{ Auth::user()->phone }}" placeholder="Phone Number">
                  <input type="password" autocomplete="off" name="password" value="{{ Auth::user()->password }}" placeholder="Password">
                  <input type="submit" class="btn btn-primary" name="update" value="حفــظ">
                </div>
            </div>
          </div>
        </form>
      </div>
  
  
  @endsection

@else
    غير مصرح لك بالدخول هنا
@endif

