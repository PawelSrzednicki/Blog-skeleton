@extends('layouts.auth')

@section('content')
<section class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="cell large-6">
            <div class="card">
                <div class="card-divider">{{ __('Login') }}</div>
                <div class="card-section">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div>
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="grid-x grid-margin-x align-center">
                            <button type="submit" class="button small cell small-5">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                            <a class="cell" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>

                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection