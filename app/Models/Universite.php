<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory;
    protected $table = 'universites';
     
    public function notes()
    {
        return $this->hasMany(Note::class, 'id_universite');
    }

    /**
     * Calcule la moyenne des notes attribuées à cette université.
     *
     * @return float|null
     */
    public function moyenneNotes()
    {
        $totalNotes = $this->notes()->count();
        if ($totalNotes === 0) {
            return null;
        }

        $sommeNotes = $this->notes()->sum('value');
        return number_format($sommeNotes / $totalNotes,2) ;
    }
}
