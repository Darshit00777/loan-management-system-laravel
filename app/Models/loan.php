<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    protected $fillable = [
        'cname',
        'lamount',
        'irate',
        'tenure',
        'pfees',
        'sdate',
        'pfees_amt',
        'emi'
    ];
}
