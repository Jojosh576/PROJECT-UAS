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
    // Relationships
    // Hubungan antara User dan Post (One-to-Many)
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Hubungan antara User dan Comment (One-to-Many)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Hubungan antara User dan Role (Many-to-Many)
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // Mutators and Accessors
    // Mutator untuk atribut password, meng-hash password setiap kali diatur
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Accessor untuk atribut name, mengubah huruf pertama menjadi kapital
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    // Scopes
    // Scope untuk mendapatkan pengguna yang aktif (active = 1)
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    // Scope untuk mendapatkan pengguna yang email-nya sudah diverifikasi
    public function scopeVerified($query)
    {
        return $query->whereNotNull('email_verified_at');
    }

    // Notifications
    // Mengirim notifikasi kustom ke pengguna
    public function sendCustomNotification($message)
    {
        $this->notify(new CustomNotification($message));
    }

}
