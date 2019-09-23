@extends('layouts.auth')

@section('content')
<section class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="cell large-6">
            <div class="card">
                <div class="card-divider">{{ __('Register') }}</div>
                <div class="card-section">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div>
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group row">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection