<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'useremail' => 'required | email',
            'userage' => 'required | numeric | min:18 | max:60 | between:18,60',
            'userpass' => 'required | alpha_num | min:6',
            'usercity' => 'required'
        ];
    }

    // public function messages()
    // {
    //     return [
    //         "username.required" =>':attribute is required!',
    //         "useremail.required" => 'User Email is required!',
    //         "userpass.required" =>'User Password is required!',
    //         "useremail.email" => 'Enter the correct email address.',
    //         "userage.required" => 'User age is required.',
    //         "userage.numeric" => 'User age must be numeric.',
    //         "usercity.required" => 'user city is required'
    //     ];
    // }

    public function attributes()
    {
        return [
            'username' => 'Tera name',
            'useremail' => 'User Email',
            'userage' => 'User Age',
            'userpass' => 'User Password',
            'usercity' => 'User City'
        ];
    }

    protected function prepareForValidation():void
    {
            $this->merge([
                'username' =>strtoupper($this->username),
                'username' => Str::slug($this->username),
            ]);
    }

    // protected $stopOnFirstFailure = true;
}
