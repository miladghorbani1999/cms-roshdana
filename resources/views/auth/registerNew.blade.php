@extends('layouts.main')

@section('title', 'صفحه ثبت نام')

@section('content')
@component('components.authentication')
    @slot('url')
    {{ route('login') }}
    @endslot
    @slot('type')
    ورود
    @endslot
    @slot('text_main')
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

            </div>
            <div class="col-12">
                <input type="submit" class="btnRegister col-12 mt-3" value="{{__('main.register')}}">
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
    @endslot
@endcomponent
@endsection
