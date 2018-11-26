<?php

use App\Model\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    #region PROPERTIES
    private $roleNames = [
        Role::ADMIN => 'admin',
        Role::CONTENT_MANAGER => 'content-manager',
        Role::CONTENT_EDITOR => 'content-editor',
        Role::CUSTOMER => 'customer',
        Role::SUBSCRIBER => 'subscriber',
        Role::UNDEFINED => 'undefined'
    ];
    #endregion

    #region MAIN METHODS
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role', '60');
            $table->timestamps();
        });
        $this->addRoles();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
    #endregion

    #region SERVICE METHODS
    private function addRoles()
    {
        $insertRolesArray = [];
        foreach ($this->roleNames as $id => $role) {
            $insertRolesArray[] = [
                'id' => $id,
                'role' => $role,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        DB::table('roles')->insert($insertRolesArray);
    }
    #endregion
}
