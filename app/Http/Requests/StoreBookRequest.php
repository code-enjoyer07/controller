<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'kode_buku' => 'required|string|max:4',
            'nama_buku' => 'required|string|min:10|max:40',
            'penerbit_buku' => 'required|string|min:10|max:40',
            'tahun_terbit' => 'nullable|integer|digits:4',
            'penulis_buku' => 'required|string|min:10|max:40',
        ];
    }

    /**
     * Get the custom validation messages for the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'kode_buku.required' => 'Kode buku wajib diisi.',
            'kode_buku.max' => 'Kode buku maksimal 4 huruf.',
            'nama_buku.required' => 'Nama buku wajib diisi.',
            'nama_buku.min' => 'Nama buku minimal berisi 10 huruf.',
            'nama_buku.max' => 'Nama buku maksimal berisi 40 huruf.',
            'penerbit_buku.required' => 'Penerbit buku wajib diisi.',
            'penerbit_buku.min' => 'Penerbit buku minimal berisi 10 huruf.',
            'penerbit_buku.max' => 'Penerbit buku maksimal berisi 40 huruf.',
            'tahun_terbit.digits' => 'Tahun terbit maksimal berisi 4 angka.',
            'penulis_buku.required' => 'Penulis buku wajib diisi.',
            'penulis_buku.min' => 'Penulis buku minimal berisi 10 huruf.',
            'penulis_buku.max' => 'Penulis buku maksimal berisi 40 huruf.',
        ];
    }
}
