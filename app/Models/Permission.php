<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    
    protected $guarded = [];

      protected $casts = [
        'name' => 'array',
    ];

    protected $fillable = [
        'id', 'module_id', 'action_id'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class)->where('status', 1);
    }

    public function action()
    {
        return $this->belongsTo(Action::class)->where('status', 1);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissions');
    } 
}
