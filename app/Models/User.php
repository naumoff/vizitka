<?php

namespace App\Model;

use App\Models\UserRole;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    #region PROPERTIES
    /**
     * The attributes that are NO mass assignable.
     * @var array
     */
    protected $guarded = ['email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * coolumns that are transformed to Carbon
     * @var array $dates
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'last_login', 'last_logout'];

    /**
     * The attributes that should be cast to native types.
     * @var array
     */
    protected $casts = [
        'approved' => 'boolean',
    ];
    #endregion

    #region RELATION METHODS
    public function roles()
    {
        return $this->belongsToMany(Role::class)->using(UserRole::class)
            ->withPivot([
                'created_at',
                'updated_at'
            ]);
    }
    #endregion

    #region MAIN METHODS
    public function isAdmin()
    {
        return count($this->roles()->where('roles.id', '=', Role::ADMIN)->get()) == 1;
    }

    public function isContentManager()
    {
        return count($this->roles()->where('roles.id', '=', Role::CONTENT_MANAGER)->get()) == 1;
    }

    public function isContentEditor()
    {
        return count($this->roles()->where('roles.id', '=', Role::CONTENT_EDITOR)->get()) == 1;
    }
    #endregion

    #region SCOPE METHODS
    /**
     * @param Builder $builder
     * @return Builder
     */
    public function scopeApproved(Builder $builder): Builder
    {
        return $builder->where('approved', true);
    }

    /**
     * @param Builder $builder
     * @return Builder
     */
    public function scopeNotApproved(Builder $builder): Builder
    {
        return $builder->where('approved', false);
    }

    /**
     * @param Builder $builder
     * @return Builder
     */
    public function scopeVerified(Builder $builder): Builder
    {
        return $builder->whereNotNull('email_verified_at');
    }
    #endregion
}
