@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('username') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control " name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-end">{{ __('phonenumber') }}</label>
                            <div class="col-md-6">
                                <input id="phonenumber" type="tel" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" required>
                                <input type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
