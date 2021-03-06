<?php

namespace App\Http\Requests\Pelanggan;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'nama' => 'string',
            'gambar' => 'image',
            'alamat' => 'string', 
            'nomor_ktp' => 'string',
            'tanggal_lahir' => 'date',
            'jenis_kelamin' => 'string', 
            'email' => ['email','max:255', Rule::unique('pelanggan')->ignore($this->pelanggan)],
            'telp' => ['string', 'max:12', Rule::unique('pelanggan')->ignore($this->pelanggan)],
        ];
    }
}
