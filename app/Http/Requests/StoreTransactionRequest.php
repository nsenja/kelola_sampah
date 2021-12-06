<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class StoreTransactionRequest extends FormRequest
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
            'tanggal_transaksi'=>'required | date',
            'jumlah'=> 'required',
            'description'=>'required',
        ];
    }
}
