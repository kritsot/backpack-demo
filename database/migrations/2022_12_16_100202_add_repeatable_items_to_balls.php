<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balls', function (Blueprint $table) {
            $table->jsonb('repeatable_items')->default('[]');
        });
    }

    public function down()
    {
        Schema::table('balls', function (Blueprint $table) {
            $table->dropColumn('repeatable_items');
        });
    }
};
