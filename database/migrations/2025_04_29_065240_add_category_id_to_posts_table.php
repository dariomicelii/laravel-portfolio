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
        Schema::table('posts', function (Blueprint $table) {
            //rimuoviamo la colonna 'category'
            $table->dropColumn('category');

            //aggiungiamo la colonna 'category_id' e la constain
            $table->foreignId('category_id')->default(1)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //ricreiamo la coloona 'category'
            $table->string('category');

            //eliminiamo la constrain
            $table->dropForeign('posts_category_id_foreign');

            //eliminiamo la colonna 'category_id'
            $table->dropColumn('category_id');
        });
    }
};
