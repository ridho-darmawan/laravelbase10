<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class BarangPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kode_barang.unique' => 'Kode Barang Telah Terdaftar.',
            'kode_barang.required' => 'Kode Barang Wajib Diisi.',
            'nama_barang.required' => 'Nama barang Wajib Diisi.',
        ];
    }
}
