<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $fillable = [
        'department_id',
        'name',
        'email',
        'phone'
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
