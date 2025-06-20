<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
