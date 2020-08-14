<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            "fname" => 'required',
            "mname" => 'required',
            "lname" => 'required',
            "gender" => 'required',
            "birthdate" => 'required|date',
            "civil_status" => 'required',
            "extname" => 'sometimes',
            "occupation" => 'sometimes',
            "referral" => 'sometimes',
            "address" => 'required',
            "contact_no" => 'required',
            "local_address" => 'required',
            "local_street_number" => 'required',
            "local_subdivision" => 'required',
            "local_city" => 'required',
            "local_country" => 'required',
            "local_postal_code" => 'sometimes',
            "local_telephone_number" => 'sometimes',
            "local_fax_number" => 'sometimes',
            "local_email" => 'required|email',
            "foreign_address" => 'sometimes',
            "foreign_street_number" => 'sometimes',
            "foreign_subdivision" => 'sometimes',
            "foreign_city" => 'sometimes',
            "foreign_country" => 'sometimes',
            "foreign_postal_code" => 'sometimes',
            "foreign_telephone_number" => 'sometimes',
            "foreign_fax_number" => 'sometimes',
            "foreign_email" => 'sometimes',
            "emergency_contact_person" => 'required',
            "emergency_contact_number" => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fname.required' => 'The first name field is required',
            'mname.required' => 'The middle name field is required',
            'lname.required' => 'The last name field is required',
        ];
    }
}

