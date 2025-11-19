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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('lastname', 255);
            $table->string('iin', 12)->unique();

            // соответствуют bigint(20) unsigned
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('firm_id');

            $table->string('image', 255)->default('no-image.png');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            // Индексы как в дампе (НЕ FOREIGN KEY!)
            $table->index('course_id', 'students_course_id_foreign');
            $table->index('firm_id', 'students_firm_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
