<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();                                     //ФИО
            $table->string('email')->unique();                                      //email
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                                             //Пароль
            $table->float('price')->nullable();                                     //Цена за час
            $table->text('skills','255')->nullable();                       //Специализация
            $table->text('avatar','255')->nullable();                       //Путь к аватарке
            $table->text('description','1000')->nullable();                 //Обо мне
            $table->boolean('isspec')->nullable();                                  //Специалист или нет
            $table->text('country','50')->nullable();                       //Страна
            $table->text('sity','50')->nullable();                          //Город
            $table->text('gender','10')->nullable();                        //Пол
            $table->float('rating', 2, 2)->nullable();                  //Рейтинг
            $table->unsignedInteger('clients')->nullable();              //Кол-во клиентов
            $table->unsignedInteger('conferences')->nullable();       //Кол-во вебконференций
            $table->rememberToken();
            $table->timestamps();

        });
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
}
