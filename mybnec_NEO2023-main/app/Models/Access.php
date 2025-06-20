<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    use HasFactory;

    protected $table = 'accesses';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function accessControls()
    {
        return $this->hasMany(AccessControl::class);
    }
}
