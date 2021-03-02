<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'visit';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id')->first();
    }

    public function practitioner()
    {
        return $this->belongsTo(Practitioner::class, 'practitioner_id')->first();
    }

    public function report()
    {
        return $this->hasMany(VisitReport::class, 'visit_id')->first();
    }
}
