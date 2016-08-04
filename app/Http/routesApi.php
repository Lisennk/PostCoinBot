<?php

use App\Http\Controllers\Bot\Commands\SlackCommandController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| All routes defined in this file are under API middleware
|
*/

/**
 * Slack slash commands
 */
Route::post('/api/slack/command/call', 'Bot\Commands\SlackCommandController@call');

/**
 * Slack Events
 */
Route::post('/api/slack/event/fire', 'Bot\SlackSendingReactionEventListener@fire')
    ->middleware('CheckSendingReactionEvent');