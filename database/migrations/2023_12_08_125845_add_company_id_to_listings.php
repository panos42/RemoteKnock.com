<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyIdToListings extends Migration
{
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->foreignId('company_id')->nullable()->constrained();
        });
    }

    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
            $table->dropColumn('company_id');
        });
    }
}
