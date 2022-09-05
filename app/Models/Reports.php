<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function objectives()
    {
        return $this->hasMany(Objective::class, 'report_id', 'id');
    }

    public function goals()
    {
        return $this->hasMany(Goal::class, 'report_id', 'id');
    }
}
