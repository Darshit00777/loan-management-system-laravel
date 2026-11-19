<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\loan;
use App\Models\emi;

class payment extends Model
{
    protected $fillable = [
        'loan_id',
        'emi_id',
        'duedate',
        'pdate',
        'lday',
        'lfee'
    ];

    public function loan(){
        return $this->belongsTo(loan::class);

    }

    public function emi(){
        return $this->belongsTo(emi::class);
    }
}
