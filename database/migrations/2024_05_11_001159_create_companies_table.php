<?php

use App\Models\Adress;
use App\Models\User;
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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->string('document');
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Adress::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
