<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impacts extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function report()
    {
        return $this->hasOne(ReportsDiarios::class, 'id', 'report_id');
    }
}
