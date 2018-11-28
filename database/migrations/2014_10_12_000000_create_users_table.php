<?php

use App\Model\User;
use Carbon\Carbon;
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
            $table->boolean('approved')->default(false);
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
    private function addAdminUser(): void
    {
        DB::table('users')->insert([
            'id' => env('ADMIN_ID', 1),
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_MAIL'),
            'approved' => true,
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        /** @var User $user */
        $user = User::find(env('ADMIN_ID', 1));

        event(new Registered($user));
    }
    #endregion
}
