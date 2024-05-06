{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('include.master')

@section('title', 'Inscription')

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
                <h2>Créer un compte!</h2>
                <p>
Rejoignez notre communauté dès aujourd'hui et bénéficiez d'un accès exclusif à nos services de santé personnalisés pour vous et votre famille.                </p>
            </div>
            <div class="sign-up-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name" class="form-label"><strong>Nom <span
                                            class="text-danger">*</span></strong> </label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="first_name" placeholder="Nom" name="name" value="{{ old('name') }}" required />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="prenom" class="form-label"><strong>Prénom <span
                                            class="text-danger">*</span></strong> </label>
                                <input type="text" class="form-control @error('prenom') is-invalid @enderror"
                                    id="last_name" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}"
                                    required />
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pseudo" class="form-label"><strong>Pseudo <span class="text-danger">*</span></strong>
                        </label>
                        <input type="text" class="form-control @error('pseudo') is-invalid @enderror"
                            placeholder="Nom d'utilisateur" name="pseudo" value="{{ old('pseudo') }}" required />
                        @error('pseudo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label"><strong>Email <span class="text-danger">*</span></strong>
                        </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            id="username" placeholder="Email" name="email" value="{{ old('email') }}" required />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password" class="form-label"><strong>Mot de passe <span
                                            class="text-danger">*</span></strong></label>
                                <input type="tel" class="form-control @error('telephone') is-invalid @enderror"
                                    name="telephone" id="telephone" placeholder="Telephone" value="{{ old('telephone') }}"
                                    required />
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date"><strong>Date de naissance <span
                                            class="text-danger">*</span></strong></label>
                                <input type="date" class="form-control @error('date_naissance') is-invalid @enderror"
                                    name="date_naissance" id="date" placeholder="Date de naissance"
                                    value="{{ old('date_naissance') }}" required />
                                @error('date_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label"><strong>Mot de passe <span
                                    class="text-danger">*</span></strong></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" placeholder="Password" required />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="Confirm_password" placeholder="Confirm Password"
                            name="password_confirmation" required />
                    </div>
                    <div class="form-group form-check text-center">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="default-btn">Inscription<span></span></button>
                        <p class="account-decs">Avez-vous déjà un compte ? <a href="{{ route('login') }}">Connexion</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>





@endsection
