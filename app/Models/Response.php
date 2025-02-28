<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function option() {
        return $this->belongsTo(Option::class);
    }
}
