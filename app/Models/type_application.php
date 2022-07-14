<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_application extends Model
{
    use HasFactory;

     public const TYPE_SELECT = [
        'S' => 'Site web',
        'A' => 'Application Web',
        'M' => 'Application Mobile',
        'F' => 'Flyer',
    ];

    protected $fillable = ['type'];

    public function rubriques(){
        return $this->belongsToMany(Rubrique::class);
    }
}
