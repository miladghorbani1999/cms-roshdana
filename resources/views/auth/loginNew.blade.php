@extends('layouts.main')

@section('title', 'صفحه ورود')

@section('content')
<div class="container register">
    <div class="row">
        <!-- Right Side Title -->
        <div class="col-12 col-md-3 register-right">

            <h3>{{__('main.welcome')}} </h3>
            <p>{{__('main.quick_register')}}</p>
            <input onclick="window.location.href='{{ route('register') }}'" type="submit" name="" value="{{__('main.login_or_register',['text'=>'ثبت نام'])}}"><br>
        </div>
        <!-- /Right Side Title -->
        <!-- Left Side Forms -->
        <div class="col-12 col-md-9">
            <div class="register-left p-3">
                <div class="tab-content" id="myTabContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
