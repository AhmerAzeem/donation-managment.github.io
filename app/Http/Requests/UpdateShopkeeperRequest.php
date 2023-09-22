<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\ShopkeeperStatus;
use Illuminate\Validation\Rule;


class UpdateShopkeeperRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string'],
            'phone' => ['string'],
            'cnic' => ['string'],
            'shop_no' => ['string'],
            'address' => ['string'],
            'home_address' => ['string'],
            'status'      => ['string', Rule::in(array_column(ShopkeeperStatus::cases(), 'value'))],
        ];
    }
}
