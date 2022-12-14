<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public function report()
    {
        return $this->hasOne(Reports::class, 'id', 'report_id');
    }
}
