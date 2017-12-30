<?php

/**
 * Copyright (c) 2017 - present, DocsPen, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_terms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('term', 200);
            $table->string('entity_type', 100);
            $table->integer('entity_id');
            $table->integer('score');

            $table->index('term');
            $table->index('entity_type');
            $table->index(['entity_type', 'entity_id']);
            $table->index('score');
        });

        // Drop search indexes
        Schema::table('pages', function (Blueprint $table) {
            $table->dropIndex('search');
            $table->dropIndex('name_search');
        });
        Schema::table('books', function (Blueprint $table) {
            $table->dropIndex('search');
            $table->dropIndex('name_search');
        });
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropIndex('search');
            $table->dropIndex('name_search');
        });

        app(\DocsPen\Services\SearchService::class)->indexAllEntities();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}pages ADD FULLTEXT search(name, text)");
        DB::statement("ALTER TABLE {$prefix}books ADD FULLTEXT search(name, description)");
        DB::statement("ALTER TABLE {$prefix}chapters ADD FULLTEXT search(name, description)");
        DB::statement("ALTER TABLE {$prefix}pages ADD FULLTEXT name_search(name)");
        DB::statement("ALTER TABLE {$prefix}books ADD FULLTEXT name_search(name)");
        DB::statement("ALTER TABLE {$prefix}chapters ADD FULLTEXT name_search(name)");

        Schema::dropIfExists('search_terms');
    }
}
