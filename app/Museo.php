<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Museo extends Model
{
    // Con $fillable se indican explícitamente los campos de la tabla
    // que se podrán modificar programáticamente.
    //  protected $fillable = ['content', 'author', 'image'];
    // Con $guarded se indican explícitamente los campos de la tabla
    // que NO se podrán modificar programáticamente.
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user(){
        // Muestra el autor del museo.
        return $this->belongsTo(User::class);
    }
}