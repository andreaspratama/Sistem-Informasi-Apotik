<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuplaierRequest extends FormRequest
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
            'nama' => 'required|min:3',
            'alamat' => 'required|min:5',
            'no_tlpn' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama harus diisi',
            'nama.min' => 'Nama min 3 karakter',
            'alamat.required' => 'Alamat harus diisi',
            'alamat.min' => 'Alamat min 5 karakter',
            'no_tlpn.required' => 'No telepon harus diisi',
        ];
    }
}
