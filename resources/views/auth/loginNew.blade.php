@extends('layouts.main')

@section('title', 'صفحه ورود')

@section('content')
@component('components.authentication')
    @slot('url')
    {{ route('register') }}
    @endslot
    @slot('type')
     ثبت نام در
    @endslot
    @slot('text_main')
    <h3 class="register-heading">صفحه ورود کاربر‍</h3>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="row register-form mx-auto">

            <div class="col-12 col-md-12">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="پست الکترونیکی *"  required>

                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="رمز *" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        فراموشی رمز عبور >
                    </a>
                </div>
                <input type="submit" class="btnRegister mt-2 col-12" value="ورود">
            </div>
        </div>
    </form>
    @endslot
@endcomponent
@endsection
