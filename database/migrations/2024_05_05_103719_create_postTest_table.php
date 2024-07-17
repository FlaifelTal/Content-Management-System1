<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('postTest', function (Blueprint $table) {
        //     //column creation 
        //     $table->id();
        //     $table->string('title');//varchar only 255  less can be specified  $table->string('title',100); only 100 
        //     $table->text('description');
        //     $table->boolean('status');
        //     $table->timestamps();//two columns -> creates_at and updated_at 
        //     //extra datatypes
        //     // $table->date('date');
        //     // $table->dataTime('date_time');
        //     // $table->time('time');

        //     // $table->decimal('amount')->default(0);//default val of 0 //->nullable();//can be nullable 
        //     // $table->double('double');
        //     // $table->float('float');
        //     // $table->integer('integer');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
