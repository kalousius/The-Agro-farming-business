<?php

// database/migrations/xxxx_xx_xx_modify_user_id_in_orders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUserIdInOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // Check if column exists before attempting to modify it
            if (Schema::hasColumn('orders', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->change();
            } else {
                $table->unsignedBigInteger('user_id');
            }
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            // Rollback the changes by making the column not nullable
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
        });
    }
}
