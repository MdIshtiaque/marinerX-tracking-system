<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestOrder extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'bl_no' => 'required|string',
            'booking_no' => 'required|string',
            'starting_port' => 'required|string',
            'second_port' => 'nullable|string',
            'third_port' => 'nullable|string',
            'destination' => 'required|string',
            'vessel_voy_no' => 'required|string',
            'no_of_packages' => 'required|string',
            'on_board_date' => 'required|date',
            'gross_cargo_weight' => 'required|string',
            'no_of_containers' => 'required|string',
            'measurement' => 'required|string',
            'service_requirement' => 'required|string',
            'container_no' => 'required|string',
            'size' => 'required|string',
            'type' => 'required|string',
            'seal_no' => 'required|string',
            'move_type' => 'required|string',
            'latest_event' => 'required|string',
            'place' => 'required|string',
            'vgm' => 'required|string'
        ];
    }
}
