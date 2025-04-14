<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level';
    protected $fillable = [];

    public function users(){
        return $this->hasMany(UserModel::class, 'level_id','level_id');
    }
}