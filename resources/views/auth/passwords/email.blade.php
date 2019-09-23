@extends('layouts.auth')

@section('content')
<section class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="cell large-6">
            <div class="card">
                <div class="card-divider">{{ __('Reset Password') }}</div>

                <div class="card-section">
                    @if (session('status'))
                    <div class="callout success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div>
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="callout alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>

                <div>
                    <div>
                        <button type="submit" class="button">
                            {{ __('Send Password Reset Link') }}
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