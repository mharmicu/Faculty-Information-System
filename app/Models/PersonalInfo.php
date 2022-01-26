<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $table = "personal_infos";

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'contact_num',
        'department',
        'subject',
        'section',
        'schedule',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salary()
    {
        return $this->hasOne('App\Models\Salary');
    }
}
