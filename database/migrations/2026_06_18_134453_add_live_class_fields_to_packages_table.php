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
        Schema::table('packages', function (Blueprint $table) {
            $table->dateTime('event_date')->nullable()->after('preview_link');
            $table->string('speaker_name')->nullable()->after('event_date');
            $table->text('speaker_profile')->nullable()->after('speaker_name');
            $table->text('background_info')->nullable()->after('speaker_profile');
            $table->text('benefits')->nullable()->after('background_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn(['event_date', 'speaker_name', 'speaker_profile', 'background_info', 'benefits']);
        });
    }
};
