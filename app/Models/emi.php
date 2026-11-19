<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\loan;

class emi extends Model
{
    protected $fillable = [
        'loan_id',
        'month',
        // 'duedate',
        'emi',
        'i_component',
        'p_component',
        'r_principal'
    ];

    public function loan(){
        return $this->belongsTo(loan::class);
    }
}
