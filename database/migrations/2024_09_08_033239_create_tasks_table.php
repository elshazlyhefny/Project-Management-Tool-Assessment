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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // project_id references projects.id
            $table->foreignId('project_id')->references('id')->on('projects')->constrained();
            $table->string('name');
            $table->text('description');
            // `status` (e.g., todo, in-progress, done)
            $table->enum('status', ['todo', 'in-progress', 'done']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
