<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public function report()
    {
        return $this->belongsTo(Reports::class, 'report_id', 'id');
    }
}
