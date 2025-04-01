<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = 'complaints';

    protected $fillable = [
        'resident',
        'description',
        'urgent',
        'status',
        'reported_at'
    ];

    protected $casts = [
        'urgent' => 'boolean',
        'reported_at' => 'datetime'
    ];
}