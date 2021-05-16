@if (Auth::user())

@extends('layouts.app')
@section('content')
<br><br><br>
  <div class="profile">
      <div class="container">
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                  <div class="user">

                  <span>My Name's :</span> <strong>   <b>{{ Auth::user()->name }}</b>  </strong> <br>
                  <span>My Email :</span> <strong>   <b>{{ Auth::user()->email }}</b>  </strong> <br>
                  <a class="btn btn-primary" href="edit.profile/{{ Auth::user()->id }}"> Edit Profile </a>
  
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection

@else
    غير مصرح لك بالدخول هنا
@endif

