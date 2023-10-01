<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Groupe extends Model
{
    use HasFactory;

    /**
     * Définit la relation entre un groupe et son horaire associé.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horaire()
    {
        return $this->hasOne(Horaire::class);
    }
}
