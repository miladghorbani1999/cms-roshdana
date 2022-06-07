@extends('layouts.main')

@section('title', 'صفحه ورود')

@section('content')
@component('components.authentication')
    @slot('url')
    {{ route('register') }}
    @endslot
    @slot('type')
    ثبت نام
    @endslot
    @slot('text_main')
    <h3 class="register-heading">{{__('main.login_user')}}</h3>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="row register-form mx-auto">

            <div class="col-12 col-md-12">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="{{__('auth.email')}} *"  required>

                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="{{__('auth.password')}} *" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('auth.forgot_your_password') }} >
                    </a>
                </div>
                <input type="submit" class="btnRegister mt-2 col-12" value="{{__('main.login')}}">
            </div>
        </div>
    </form>
    @endslot
@endcomponent
@endsection
