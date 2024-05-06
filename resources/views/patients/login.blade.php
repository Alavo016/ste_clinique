
@extends('layout.master')

@section('title', 'Acceuil')

@section('content')

    {{-- <div class="page-banner-area bg-6">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Sign In</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Sign In</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="sign-in-area ptb-100">
        <div class="container">
            <div class="section-title-one">
                <h2>Sign in to your account!</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium quas cumque iste veniam id
                    dolorem deserunt ratione error voluptas.</p>
            </div>
            <div class="sign-in-form">
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder=" Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group form-check text-center">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn default-btn">Sign In <span></span></button>
                        <p class="account-decs">
                            Not a member? <a href="{{ route('regpat') }}">Sign Up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection









