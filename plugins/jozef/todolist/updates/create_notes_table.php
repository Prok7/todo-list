<?php namespace Jozef\TodoList\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('jozef_todolist_notes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer("user_id")->index();
            $table->string("text");
            $table->boolean("done")->default("false");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jozef_todolist_notes');
    }
}
