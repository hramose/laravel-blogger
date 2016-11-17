<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->hasRole('admin');

    }

    public function rules()
    {
        return [

        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function getValidRequest()
    {
        return [
            'email' => $this->email,
            // 'password' => bcrypt($this->password),
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'display_name' => $this->display_name,
            'address' => $this->address,
            'postcode' => $this->postcode,
            'town' => $this->town,
            'country' => $this->country,
            'phone' => $this->phone,
            'bio' => $this->bio,
            'job' => $this->job,
            // 'date_of_birth' => $this->date_of_birth,
            'facebook_name' => $this->facebook_name,
            'twitter_name' => $this->twitter_name,
            'linked_in_name' => $this->linked_in_name,
            'github_name' => $this->github_name,
            'website_url' => $this->website_url,
        ];
    }
}
