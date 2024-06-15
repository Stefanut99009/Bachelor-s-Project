@php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToLogareTable extends Migration
{
public function up()
{
Schema::table('logare', function (Blueprint $table) {
$table->timestamps();
});
}

public function down()
{
Schema::table('logare', function (Blueprint $table) {
$table->dropTimestamps();
});
}
}