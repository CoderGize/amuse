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
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
            $table->string('wedding_video');
            $table->string('wedding_title');
            $table->longText('wedding_text');
            $table->string('club_video');
            $table->string('club_title');
            $table->longText('club_text');
            $table->string('interactive_video');
            $table->string('interactive_title');
            $table->longText('interactive_text');
            $table->string('special_video');
            $table->string('special_title');
            $table->longText('special_text');
            $table->string('musical_video');
            $table->string('musical_title');
            $table->longText('musical_text');
            $table->string('kid_video');
            $table->string('kid_title');
            $table->longText('kid_text');
            $table->string('occasion_video');
            $table->string('occasion_title');
            $table->longText('occasion_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landings');
    }
};
