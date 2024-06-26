@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <main class="form-signin w-100 m-auto">
        <form data-np-autofill-form-type="login" data-np-checked="1" data-np-watching="1">
            <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" data-np-autofill-field-type="username" data-np-uid="6e575343-c987-4429-991f-d7a0459d18d4">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" data-np-autofill-field-type="password" data-np-uid="25870188-2a26-4e67-ba33-c77a1b7dfa10">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">© 2017–{{ date('Y') }}</p>
        </form>
    </main>
@endsection
