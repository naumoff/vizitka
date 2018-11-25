<?php

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    #region MAIN METHODS
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_logout')->nullable();
            $table->timestamps();
        });
        $this->addAdminUser();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
    #endregion

    #region SERVICE METHODS
    private function addAdminUser()
    {
        /** @var integer $userId */
        $userId = DB::table('users')->insertGetId([
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_MAIL'),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);

        /** @var User $user */
        $user = User::find($userId);

        event(new Registered($user));
    }
    #endregion
}
