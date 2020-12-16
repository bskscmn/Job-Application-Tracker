<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'platform_name',
        'link',
        'email',
        'username',
        'note',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
