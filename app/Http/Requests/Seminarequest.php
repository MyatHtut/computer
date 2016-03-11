<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Seminarequest extends Request
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
            'name'=>'required',
            'venue'=>'required',
            'organizer'=>'required',
            'time'=>'required',
            '_from'=>'required',
            '_to'=>'required',
//            'image_url'=>'required',
            'type'=>'required',
            'tel'=>'required',
            'deception'=>'required',
        ];
    }
}
