@extends('master')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">UserName</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <small id="password" class="form-text text-muted">We'll never share your password with anyone else.</small>
                    
                </div>
            
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>


@endsection
