<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Employee extends Model
{
    protected $table = "employee";

    protected $hidden = [
        'password',
    ];

    public function generate_api_token() {
        $this->token = Utils::random_string();
        $this->save();
        return $this->token;
    }

    public function visits_fromTimestamp($timestamp)
    {
        $date = date('Y-m-d', $timestamp);
        return $this->hasMany(Visit::class, 'employee_id')->whereDate('date', '=', $date)->get();
    }
}
