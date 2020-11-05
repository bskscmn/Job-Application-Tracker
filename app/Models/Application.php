<?php

namespace App\Models;

use App\Models\User;
use App\Models\Condition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
		'contactPerson',
		'email',
		'phone',
		'post_title',
		'link',
		'location',
		'description',
        'sent_files',
		'motivation_letter',
		'created_at',
		'updated_at',
		'app_date',
		'comment',
		'condition_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}
