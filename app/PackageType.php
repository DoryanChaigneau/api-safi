<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    protected $table = "packageType";

    protected $fillable = [
        'id', 'amount', 'name'
    ];

    public $incrementing = true;
    public $timestamps = false;
}
