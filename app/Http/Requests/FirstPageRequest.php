<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class FirstPageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'countrycode'   => 'required',
            'phone' => 'required|numeric',
            'opt1'=>'required',
            'opt2'=>'required',
            'opt3'=>'required',
            'opt4'=>'required',
        ];
    }


    public function messages()
      {
        return [
        'countrycode.required' => 'يحب إختيار كود الدولة ',
        'phone.required' => 'يحب إدخال رقم الهاتف  ',
        'phone.numeric' => 'يحب إدخال أرقام فقط    ',
        'opt1.required' => 'opt يحب إدخال أول محرف من  ',
        'opt2.required' => 'opt يحب إدخال ثاني محرف من  ',
        'opt3.required' => 'opt يحب إدخال ثالث محرف من  ',
        'opt4.required' => 'opt يحب إدخال رابع محرف من  ',


        ];
     }


     public function failedValidation(Validator $validator)

     {

      //return $validator->errors();
         throw new HttpResponseException(response()->json([

             'code'=>401,
             'success'=> false,
             'message'=> $validator->errors()

         ]));

     }
}
