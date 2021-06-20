<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    public function departments()
    {
        return $this->hasOne('App\Models\Departments', 'id', 'department_id');
    }
}
