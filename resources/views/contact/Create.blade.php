@extends('layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Register Form</div>
        <div class="card-body"> 
        
            <form action= "{{ route('register') }}" method="post">
             <!-- to restrict 3rd party -->
            {!! csrf_field() !!}   
            <label>Full Name</label>
            <input type="text" name="name" id="name" class ="form-control"> </br>
      
            <label>Email</label>
            <input type="email" name="email" id="email" class ="form-control"> </br>
            <label>Password</label>
            <input type="password" name="password" id="password" class ="form-control"> </br>
            <input type="submit" value="Save" class="btn btn-success"> 
            </form>


            <!-- Trigger the directLogin function -->
        <form action="{{ route('directLogin') }}" method="get">
            <label>Already have an account?</label>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
    </div>
@stop