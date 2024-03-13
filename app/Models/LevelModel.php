<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Monolog\Level;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'm_level';

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'level_id', 'level_id');
    }
}