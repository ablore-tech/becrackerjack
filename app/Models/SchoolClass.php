<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    public $guarded = ['id', 'created_at', 'updated_at'];

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}
