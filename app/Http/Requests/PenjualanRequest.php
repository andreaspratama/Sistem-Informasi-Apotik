<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
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
            'obat_id' => 'required|exists:obats,id',
            'kategori_id' => 'required|exists:kategoris,id',
            'satuan_id' => 'required|exists:satuans,id',
            'jumlah' => 'required|integer',
            'tanggal' => 'required',
            'harga_sat' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'jumlah.required' => 'Jumlah barang harus diisi',
            'jumlah.integer' => 'Jumlah barang harus angka',
            'harga_sat.integer' => 'Harga satuan harus angka',
            'tanggal.required' => 'Tanggal harus diisi',
            'harga_sat.required' => 'Harga satuan harus diisi',
        ];
    }
}
