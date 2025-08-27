<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  App\Models\User;

class Message extends Model
{
    protected $fillable = ['from_id', 'to_id', 'message'];

    public function fromUser() {
        return $this->belongsTo(User::class, 'from_id');
    }

    public function toUser() {
        return $this->belongsTo(User::class, 'to_id');
    }
}
