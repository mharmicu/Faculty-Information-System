<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = "salaries";

    protected $fillable = [
        'user_id',
        'name',
        'contact_num',
        'sss',
        'deductions',
        'salary',
    ];

    public function personal_info()
    {
        return $this->belongsTo('App\Models\PersonalInfo');
    }
}
