@extends('layouts.main')

@section('title', 'صفحه ثبت نام')

@section('content')
<div class="container register">
    <div class="row">
        <!-- Right Side Title -->
        <div class="col-12 col-md-3 register-right">

            <h3>{{__('main.welcome')}}</h3>
            <p>{{__('main.quick_register')}}</p>
            <input onclick="window.location.href='{{ route('login') }}'" type="submit" name="" value="{{__('main.login_or_register',['text'=>'ورود'])}}"><br>
        </div>
        <!-- /Right Side Title -->
        <!-- Left Side Forms -->
        <div class="col-12 col-md-9">
            <div class="register-left p-3">
                <div class="tab-content" id="myTabContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">{{__('main.register_user')}}</h3>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row register-form mx-auto">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="* {{__('auth.name')}}"   autofocus >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='last_name' placeholder="* {{__('auth.last_name')}}" >
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="{{__('auth.email')}} *"  >

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="{{__('auth.password')}} *"  autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{__('auth.confirm_password')}} *" >
                                    </div>
                                    <input type="submit" class="btnRegister" value="{{__('main.register')}}">
                                </div>
                                <div class="col-12 mt-2">
                                    @if($errors->any())

                                        <div class="alert alert-danger col-12">

                                            @foreach($errors->all() as $key => $error)
                                                {{ $error }}<br/>
                                            @endforeach
                                        </div>
                                    @endif

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
