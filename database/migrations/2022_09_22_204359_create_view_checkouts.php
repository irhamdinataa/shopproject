<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewCheckouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement($this->createView());
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement($this->dropView());
    }
   /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        return <<<SQL
            CREATE VIEW view_checkouts AS
            SELECT checkouts.id_checkout AS id_checkout, items.product_name AS product_name, items.price AS price, items.picture AS picture, detail_checkouts.total AS total, users.name AS name, checkouts.id_user AS id_user FROM (((detail_checkouts JOIN checkouts ON ((detail_checkouts.id_checkout = checkouts.id_checkout))) JOIN users ON ((checkouts.id_user = users.id_user))) JOIN items ON ((detail_checkouts.id_item = items.id_item))) 
SQL;
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `view_checkouts`;
            SQL;
    }
}
