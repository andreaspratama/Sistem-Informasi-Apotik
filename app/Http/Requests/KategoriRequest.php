<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriRequest extends FormRequest
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
            'kode' => 'required|unique:kategoris,kode',
            'nama' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kode.required' => 'Kode harus diisi',
            'kode.unique' => 'Kode telah digunakan',
            'nama.required' => 'Nama kategori harus diisi',
        ];
    }
}
