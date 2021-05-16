@if (Auth::user())

@extends('layouts.app')
@section('content')


  
      </br>  </br>  </br>

      <div class="form-design">
        <form class="" action="{{ route('update.index') }}" method="post" enctype="multipart/form-data">
            <div class="container">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                
                 @if (Session::has("Updateed_Acount"))
                    <div class="alert alert-success" role="alert">
                      {{ Session::get("Updateed_Acount") }}
                    </div>
                  @endif
                  
                  @csrf
                  <label> Web </label>
                  <input type="hidden" name="id" value="{{ $count->id }}" />                  
                  <input type="text" name="web" value="{{ $count->web }}" />                  
                  <label> Ios </label>
                  <input type="text" name="ios" value="{{ $count->ios }}" />                  
                  <label> Android </label>
                  <input type="text" name="android" value="{{ $count->android }}" />                  
                  <label> Live </label>
                  <input type="text" name="live" value="{{ $count->live }}" />                  
                  <label> Projects </label>
                  <input type="text" name="projects" value="{{ $count->projects }}" />                  
                  <label> Clients </label>
                  <input type="text" name="clients" value="{{ $count->clients }}" />
                  <label> Meetings </label>
                  <input type="text" name="meetings" value="{{ $count->meetings }}" />   
                  <input type="submit" class="btn btn-primary" name="update" value="Save">
                </div>
            </div>
          </div>
        </form>
      </div>
  
  
  @endsection

@else
    غير مصرح لك بالدخول هنا
@endif

