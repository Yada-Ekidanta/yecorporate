<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tracker_languages', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('preference')->index();
        //     $table->string('language-range')->index();
        //     $table->unique(['preference', 'language-range']);
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_paths', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('path')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_queries', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('query')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_query_arguments', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('query_id')->unsigned()->index();
        //     $table->foreign('query_id')
        //     ->references('id')
        //     ->on('tracker_queries')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->string('argument')->index();
        //     $table->string('value')->nullable();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_routes', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name')->index();
        //     $table->string('action')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_route_paths', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('route_id')->unsigned()->index();
        //     $table->foreign('route_id')
        //     ->references('id')
        //     ->on('tracker_routes')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->string('path')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_route_path_parameters', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->unique('id', 'tracker_agents_name_unique');
        //     $table->bigInteger('route_path_id')->unsigned()->index();
        //     $table->foreign('route_path_id')
        //     ->references('id')
        //     ->on('tracker_route_paths')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->string('parameter')->index();
        //     $table->string('value')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_agents', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->mediumText('name');
        //     $table->string('name_hash', 65)->unique();
        //     $table->string('browser')->index();
        //     $table->string('browser_version');
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_cookies', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->longText('uuid');
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_devices', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('kind', 16)->index();
        //     $table->string('model', 64)->index();
        //     $table->string('platform', 64)->index();
        //     $table->string('platform_version', 16)->index();
        //     $table->boolean('is_mobile');
        //     $table->unique(['kind', 'model', 'platform', 'platform_version']);
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_domains', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_referers', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('domain_id')->unsigned()->index();
        //     $table->foreign('domain_id')
        //     ->references('id')
        //     ->on('tracker_domains')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('referer_id')->unsigned()->index()->nullable();
        //     $table->foreign('referer_id', 'tracker_referers_referer_id_fk')
        //     ->references('id')
        //     ->on('tracker_referers')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->string('url')->index();
        //     $table->string('host');
        //     $table->string('medium')->nullable()->index();
        //     $table->string('source')->nullable()->index();
        //     $table->string('search_terms_hash')->nullable()->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_geoip', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->double('latitude')->nullable()->index();
        //     $table->double('longitude')->nullable()->index();
        //     $table->string('country_code', 2)->nullable()->index();
        //     $table->string('country_code3', 3)->nullable()->index();
        //     $table->string('country_name')->nullable()->index();
        //     $table->string('region', 2)->nullable();
        //     $table->string('city', 50)->nullable()->index();
        //     $table->string('postal_code', 20)->nullable();
        //     $table->bigInteger('area_code')->nullable();
        //     $table->double('dma_code')->nullable();
        //     $table->double('metro_code')->nullable();
        //     $table->string('continent_code', 2)->nullable();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_sessions', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('uuid')->unique()->index();
        //     $table->bigInteger('user_id')->unsigned()->nullable()->index();
        //     $table->bigInteger('device_id')->unsigned()->index();
        //     $table->foreign('device_id')
        //     ->references('id')
        //     ->on('tracker_devices')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('agent_id')->unsigned()->index();
        //     $table->foreign('agent_id')
        //     ->references('id')
        //     ->on('tracker_agents')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->string('client_ip')->index();
        //     $table->bigInteger('referer_id')->unsigned()->index()->nullable();
        //     $table->foreign('referer_id')
        //     ->references('id')
        //     ->on('tracker_referers')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('cookie_id')->unsigned()->index();
        //     $table->foreign('cookie_id')
        //     ->references('id')
        //     ->on('tracker_cookies')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('geoip_id')->unsigned()->index()->nullable();
        //     $table->foreign('geoip_id')
        //     ->references('id')
        //     ->on('tracker_geoip')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('language_id')->unsigned()->index();
        //     $table->foreign('language_id')
        //     ->references('id')
        //     ->on('tracker_languages')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->boolean('is_robot');
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_errors', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('code')->nullable();
        //     $table->longText('message');
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_system_classes', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_log', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('session_id')->unsigned()->index();
        //     $table->foreign('session_id')
        //     ->references('id')
        //     ->on('tracker_sessions')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('path_id')->unsigned()->index();
        //     $table->foreign('path_id')
        //     ->references('id')
        //     ->on('tracker_paths')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('query_id')->unsigned()->index()->nullable();
        //     $table->foreign('query_id')
        //     ->references('id')
        //     ->on('tracker_queries')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->string('method', 10)->index();
        //     $table->bigInteger('route_path_id')->unsigned()->index()->nullable();
        //     $table->foreign('route_path_id')
        //     ->references('id')
        //     ->on('tracker_route_paths')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->boolean('is_ajax');
        //     $table->boolean('is_secure');
        //     $table->boolean('is_json');
        //     $table->boolean('wants_json');
        //     $table->bigInteger('error_id')->unsigned()->index()->nullable();
        //     $table->foreign('error_id')
        //     ->references('id')
        //     ->on('tracker_errors')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->integer('referer_id')->unsigned()->nullable()->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_events', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_events_log', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('event_id')->unsigned()->index();
        //     $table->foreign('event_id')
        //     ->references('id')
        //     ->on('tracker_events')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('class_id')->unsigned()->index();
        //     $table->foreign('class_id')
        //     ->references('id')
        //     ->on('tracker_system_classes')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('log_id')->unsigned()->index();
        //     $table->foreign('log_id')
        //     ->references('id')
        //     ->on('tracker_log')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_sql_queries', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('sha1', 40)->index();
        //     $table->text('statement');
        //     $table->double('time')->index();
        //     $table->integer('connection_id')->unsigned();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_sql_query_bindings', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('sha1', 40)->index();
        //     $table->text('serialized');
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_sql_query_bindings_parameters', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('sql_query_bindings_id')->unsigned()->nullable();
        //     $table->foreign('sql_query_bindings_id', 'tracker_sqlqb_parameters')
        //     ->references('id')
        //     ->on('tracker_sql_query_bindings')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->string('name')->nullable()->index();
        //     $table->text('value')->nullable();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_sql_queries_log', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('log_id')->unsigned()->index();
        //     $table->foreign('log_id')
        //     ->references('id')
        //     ->on('tracker_log')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->bigInteger('sql_query_id')->unsigned()->index();
        //     $table->foreign('sql_query_id')
        //     ->references('id')
        //     ->on('tracker_sql_queries')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_connections', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
        // Schema::create('tracker_referers_search_terms', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('referer_id')->unsigned()->index();
        //     $table->string('search_term')->index();
        //     $table->timestamps();
        //     $table->index('created_at');
        //     $table->index('updated_at');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('tracker_languages');
        // Schema::dropIfExists('tracker_paths');
        // Schema::dropIfExists('tracker_queries');
        // Schema::dropIfExists('tracker_query_arguments');
        // Schema::dropIfExists('tracker_routes');
        // Schema::dropIfExists('tracker_route_paths');
        // Schema::dropIfExists('tracker_route_path_parameters');
        // Schema::dropIfExists('tracker_agents');
        // Schema::dropIfExists('tracker_cookies');
        // Schema::dropIfExists('tracker_devices');
        // Schema::dropIfExists('tracker_domains');
        // Schema::dropIfExists('tracker_referers');
        // Schema::dropIfExists('tracker_geoip');
        // Schema::dropIfExists('tracker_sessions');
        // Schema::dropIfExists('tracker_errors');
        // Schema::dropIfExists('tracker_system_classes');
        // Schema::dropIfExists('tracker_log');
        // Schema::dropIfExists('tracker_events');
        // Schema::dropIfExists('tracker_events_log');
        // Schema::dropIfExists('tracker_sql_queries');
        // Schema::dropIfExists('tracker_sql_query_bindings');
        // Schema::dropIfExists('tracker_sql_query_bindings_parameters');
        // Schema::dropIfExists('tracker_sql_queries_log');
        // Schema::dropIfExists('tracker_connections');
        // Schema::dropIfExists('tracker_referers_search_terms');
    }
};
