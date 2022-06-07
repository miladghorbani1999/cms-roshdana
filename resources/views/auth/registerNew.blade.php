@extends('layouts.main')

@section('title', 'صفحه ثبت نام')

@section('content')
<div class="container register">
    <div class="row">
        <!-- Right Side Title -->
        <div class="col-12 col-md-3 register-right">

            <h3>خوش آمدید</h3>
            <p>تنها در چند ثانیه عضو شوید.</p>
            <input onclick="window.location.href='{{ route('login') }}'" type="submit" name="" value="ورود به سایت"><br>
        </div>
        <!-- /Right Side Title -->
        <!-- Left Side Forms -->
        <div class="col-12 col-md-9">
            <div class="register-left p-3">
                <div class="tab-content" id="myTabContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">ثبت نام کاربر</h3>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row register-form mx-auto">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="* {{__('Name')}}"  required autofocus >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='last_name' placeholder="* {{__('Last Name')}}" required>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="{{__('Email')}} *"  required>

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="{{__('Password')}} *" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{__('Confirm Password')}} *" required>
                                    </div>
                                    <input type="submit" class="btnRegister" value="عضویت">
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
