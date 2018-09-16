<?php

namespace Jxlwqq\Calendar\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class CalendarController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Calendar')
            ->description('Calendar')
            ->body(view('calendar::index'));
    }
}
