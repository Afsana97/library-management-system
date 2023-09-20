@extends('frontEnd.master')

@section('title')
 Signin Form
@endsection

@section('content')
<main>
    <section>
        <div class="shadow p-5 my-5 bg-body-tertiary rounded mx-auto" style="width: 600px;">
            <h1 class="text-success text-center">Sign in</h1>
            <form id="user-Signin" action="{{isset($guard) ? url($guard.'/login') : route('login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
                <h6 class="text-center text-warning">Not Signed in?<a href="{{route('register')}}">Sign Up</a></h6>
            </form>

        </div>
    </section>
</main>    
@endsection