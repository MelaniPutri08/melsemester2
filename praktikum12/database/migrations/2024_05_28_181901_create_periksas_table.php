use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('paramedik_id');
            $table->date('tanggal_periksa');
            $table->text('keluhan')->nullable();
            $table->text('diagnosa')->nullable();
            $table->text('tindakan')->nullable();
            $table->text('resep_obat')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();

            $table->foreign('pasien_id')->references('id')->on('pasien')->onDelete('cascade');
            $table->foreign('paramedik_id')->references('id')->on('paramedik')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periksa');
    }
}
