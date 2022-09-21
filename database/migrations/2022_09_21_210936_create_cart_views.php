<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartViews extends Migration
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
            CREATE VIEW view_carts AS
            SELECT carts.id_cart AS id_cart, users.name AS name, items.product_name AS product_name, items.price AS price, items.picture AS picture, carts.total AS total FROM ((carts JOIN items ON ((carts.id_item = items.id_item))) JOIN users ON ((carts.id_user = users.id_user))) 
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

            DROP VIEW IF EXISTS `view_carts`;
            SQL;
    }
}
