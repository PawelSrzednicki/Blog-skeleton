@extends('layouts.auth')

@section('content')
<section class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="cell large-6">
            <div class="card">
                <div class="card-divider">{{ __('Reset Password') }}</div>

                <div class="card-section">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div>
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div>
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>

                <div>
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required
                        autocomplete="new-password">
                </div>

                <div>
                    <button type="submit" class="button">
                        {{ __('Reset Password') }}
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection