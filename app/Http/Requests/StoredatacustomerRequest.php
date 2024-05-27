<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredatacustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullname' => 'required',
            'emailaddress' => 'required|email|unique:datacustomer,emailaddress',
            'phone' => 'required|numeric',
            'tanggal_booking' => 'required',
            'jam_booking' => 'required',
            'paket' => 'required',
            'rincian' => 'required',
            'pembayaran' => 'required',
        ];
    }
}
