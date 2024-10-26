<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function assignedUser() {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }

    public function CreatedBy() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function UpdatedBy() {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
