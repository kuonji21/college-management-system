<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = ['college_name', 'college_code', 'is_active'];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
