<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewOnlyTable extends Model
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
}
