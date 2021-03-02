<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Supply  extends Model
{
    protected $table = "medicine";

    protected $fillable = [
        'id', 'code', 'commercialName', 'family_id', 'composition', 'effects', 'contraindication', 'orderOfPriority', 'laboratoryName', 'dose'
    ];

    public $incrementing = true;
    public $timestamps = false;
}
