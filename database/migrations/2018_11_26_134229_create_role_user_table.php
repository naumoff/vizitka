<?php

use App\Model\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
    #region MAIN METHODS
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        $this->addRoleToAdmin();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
    #endregion

    #region SERVICE METHODS
    private function addRoleToAdmin(): void
    {
        DB::table('role_user')->insert([
            'role_id' => Role::ADMIN,
            'user_id' => env('ADMIN_ID', 1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
    #endregion
}
