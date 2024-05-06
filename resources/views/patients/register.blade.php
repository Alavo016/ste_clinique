
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


    <div class="sign-up-area ptb-100">
        <div class="container">
            <div class="section-title-one">
                <h2>Create an account!</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium
                    quas cumque iste veniam id dolorem.
                </p>
            </div>
            <div class="sign-up-form">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="first_name" placeholder="First name" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="last_name" placeholder="Last name" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" placeholder="Enter your Username" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email Address" required/>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                            <input type="tel" class="form-control" id="tel" placeholder="Telephone" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group ">
                               <input type="date" class="form-control" id="date" placeholder="Date de naissance" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="Confirm_password"
                            placeholder="Confirm Password" required/>
                    </div>
                    <div class="form-group form-check text-center">

                    </div>
                    <div class="text-center">
                        <button type="submit" class="default-btn">
                            Inscription<span></span>
                        </button>
                        <p class="account-decs">
                            Avez-vous déja un compte ? <a href="sign-in.html">Connexion</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection









