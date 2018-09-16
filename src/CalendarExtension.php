<?php

namespace Jxlwqq\Calendar;

use Encore\Admin\Extension;

class CalendarExtension extends Extension
{
    public $name = 'calendar';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Calendar',
        'path'  => 'calendar',
        'icon'  => 'fa-gears',
    ];
}