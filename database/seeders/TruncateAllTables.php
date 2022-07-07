<?php

namespace Database\Seeders;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TruncateAllTables extends Seeder {

    public function run() {

        Eloquent::unguard();

        DB::statement("SET foreign_key_checks=0");
        $databaseName = DB::getDatabaseName();
        $tables = DB::select("SELECT * FROM information_schema.tables WHERE table_schema = '$databaseName'");
        foreach ($tables as $table) {
            $name = $table->TABLE_NAME;
            if ($name == 'migrations') continue;
            DB::table($name)->truncate();
        }
        DB::statement("SET foreign_key_checks=1");

    }

}
