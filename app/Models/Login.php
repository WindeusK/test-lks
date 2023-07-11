<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

// Import Model
use App\Models\Society;

class Login extends Model
{
    public static function LoginResponse (int $id_card_number)
    {
        $society = Society::where('id_card_number', '=', md5($id_card_number));
        $response = [
            'name' => $society->name,
            'born_date' => $society->born_date,
            'gender' => $society->gender,
            'address' => $society->address,
            'token' => $society->token,
            'regional' => [
                'id' => $society->regional_id,
                'province' => $society->province,
                'district' => $society->district
            ]
        ];

        return $response;
    }
}
