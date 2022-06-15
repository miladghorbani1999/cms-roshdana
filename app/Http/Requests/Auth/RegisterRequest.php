<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use App\Enums\User as UserEnum;
class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            UserEnum::FirstName      => ['bail','required', 'string', 'max:255'],
            UserEnum::LAST_NAME => ['bail','required', 'string', 'max:255'],
            UserEnum::EMAIL     => ['bail','required', 'string', 'email', 'max:255', 'unique:users'],
            UserEnum::PASSWORD  => ['bail','required', 'confirmed', Rules\Password::defaults()],
        ];
    }
    public function messages(){
        return [

            UserEnum::FirstName.'.max'           => __('auth.main.max'        ,["text"=>'نام']),
            UserEnum::LAST_NAME.'.required' => __('auth.main.required'   ,['text'=>'نام خانوادگی']),
            UserEnum::LAST_NAME.'.max'      => __('auth.main.max'        ,["text"=>'نام خانوادگی']),
            UserEnum::EMAIL.'.required'     => __('auth.main.required'   ,['text'=>'ایمیل']),
            UserEnum::EMAIL.'.email'        => __('auth.main.required'   ,['text'=>'ایمیل']),
            UserEnum::EMAIL.'.unique:users' => __('auth.main.unique'     ,['text'=>'ایمیل']),
            UserEnum::PASSWORD.'.required'  => __('auth.main.required'   ,['text'=>'پسورد']),
            UserEnum::FirstName.'.required'      => __('auth.main.required'   ,['text'=>'نام']),
        ];
    }
}
