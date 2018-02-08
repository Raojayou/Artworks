<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        // Relación [1 a n].
        return $this->belongsTo(User::class);
    }
}