<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatRequest extends FormRequest
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
            'kode' => 'required|unique:obats,kode',
            'nama' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'satuan_id' => 'required|exists:satuans,id',
            'harga' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'kode.required' => 'Kode harus diisi',
            'kode.unique' => 'Kode telah digunakan',
            'nama.required' => 'Nama harus diisi',
            'harga.required' => 'Harga harus diisi',
            'harga.integer' => 'Harga harus angka',
        ];
    }
}
