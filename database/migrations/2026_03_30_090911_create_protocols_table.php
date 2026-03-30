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
    Schema::create('protocols', function (Blueprint $table) {
        $table->id();
        $table->string('protocol_number')->unique(); // Číslo protokolu (např. 2026-001)
        $table->string('customer_name');             // Jméno zákazníka
        $table->string('customer_phone')->nullable(); // Telefon
        $table->string('device');                    // Co se opravovalo (např. TV Samsung)
        $table->text('description');                 // Popis závady a provedené práce
        $table->integer('price')->nullable();        // Cena opravy (v celých Kč)
        $table->timestamps();                        // Automaticky uloží datum vytvoření
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protocols');
    }
};
