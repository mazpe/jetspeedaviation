<?php namespace Mesadev\Inventory\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('mesadev_inventory_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('serial')->index();
            $table->string('year')->index();
            $table->string('make')->index();
            $table->string('model')->index();
            $table->string('registration')->index();
            $table->text('description')->nullable();
            $table->text('log')->nullable();
            $table->text('engine')->nullable();
            $table->text('avionics')->nullable();
            $table->text('features')->nullable();
            $table->text('interior')->nullable();
            $table->text('exterior')->nullable();
            $table->text('maintenance')->nullable();
            $table->text('inspections')->nullable();
            $table->text('comments')->nullable();
            $table->text('price')->nullable();
            $table->decimal('price',n,2)->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('mesadev_inventory_items');
    }
}