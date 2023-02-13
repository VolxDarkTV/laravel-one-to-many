<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {

            $table -> bigInteger('person_id') -> unsigned();

            // Connect
            $table -> foreign('person_id')
                    -> references('id')
                    -> on('people');

        });

        Schema::table('person_details', function (Blueprint $table) {

            $table -> primary('person_id');


            $table -> foreign('person_id')
                    -> references('id')
                    -> on('people');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
