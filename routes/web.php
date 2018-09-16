<?php

use Jxlwqq\Calendar\Http\Controllers\CalendarController;

Route::get('calendar', CalendarController::class.'@index');