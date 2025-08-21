<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mosque extends Model
{
    protected $guarded = [];

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
}
