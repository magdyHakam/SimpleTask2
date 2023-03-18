<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // No Timestamps
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'assigned_to_id',
        'assigned_by_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the Admin that assign the task.
     */
    public function admin()
    {
        return $this->belongsTo(User::class, 'assigned_by_id');
    }

    /**
     * Get the Admin that own the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }
}
