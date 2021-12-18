<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Validation\Rule as ValidationRule;

class StoreSavingRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'category_id'=> [
                'required',
                ValidationRule::exists('categories','id')->where('user_id', auth()->id())
            ],
            'tanggal'=>'required | date',
            'jumlah_sampah_yang_dihasilkan'=>'required',
        ];
    }
}
