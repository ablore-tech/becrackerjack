<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    public $guarded = ['id', 'created_at', 'updated_at'];

    public function vertical()
    {
        return $this->belongsTo(Vertical::class);
    }

    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    public function collegeSubject()
    {
        return $this->belongsTo(CollegeSubject::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
