<?php

namespace App\Model;

use App\Models\UserRole;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    #region CONSTANTS ROLES
    public const ADMIN = 1;
    public const CONTENT_MANAGER = 2;
    public const CONTENT_EDITOR = 3;
    public const CUSTOMER = 4;
    public const SUBSCRIBER = 5;
    public const UNDEFINED = 6;
    #endregion

    #region CLASS PROPERTIES
    protected $table = 'roles';
    protected $guarded = [];
    #endregion

    #region MAIN METHODS
    #endregion

    #region SCOPE METHODS
    #endregion

    #region RELATION METHODS
    public function users()
    {
        return $this->belongsToMany(User::class)->using(UserRole::class)
            ->withPivot([
                'created_by',
                'updated_by'
            ]);
    }
    #endregion
}
