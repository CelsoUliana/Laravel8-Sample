<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateReservationRequest extends FormRequest
{
    private $rules = [
        'room_id' => ['Integer', 'required', 'exists:App\Models\Room,id'],
        'customer_id' => ['Integer', 'required', 'exists:App\Models\Customer,id'],
        'check_in' => ['required', 'date', 'after_or_equal:today'],
        'check_out' => ['required', 'date', 'after:tomorrow']
    ];

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
        return $this->rules;
    }
}
