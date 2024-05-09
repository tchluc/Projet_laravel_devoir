<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Vos autres attributs, relations, etc.

    /**
     * Calcule la moyenne des notes attribuées par cet utilisateur.
     *
     * @return float|null
     */
    public function moyenneNotesUser()
    {
        $totalNotes = $this->notes()->count();
        if ($totalNotes === 0) {
            return null; 
        }

        $sommeNotes = $this->notes()->sum('value');
        return $sommeNotes / $totalNotes;
    }

    /**
     * Relation avec le modèle Note.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany(Note::class, 'id_users');
    }
}
