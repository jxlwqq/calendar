<?php

namespace Jxlwqq\Calendar;

use Encore\Admin\Admin;
use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(CalendarExtension $extension)
    {
        if (! CalendarExtension::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'calendar');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/calendar')],
                'laravel-admin-calendar'
            );
        }

        $this->app->booted(function () {
            CalendarExtension::routes(__DIR__.'/../routes/web.php');
        });

        $path = '/vendor/laravel-admin-ext/calendar/';
        $css = [$path.'css/tui-time-picker.css', $path.'css/tui-date-picker.css',$path. 'css/tui-calendar.css', $path.'css/default.css', $path.'css/icons.css'];
        Admin::css($css);
        $js = [$path.'js/tui-code-snippet.min.js', $path.'js/tui-time-picker.min.js', $path.'js/tui-date-picker.min.js', $path.'js/moment.min.js', $path.'js/chance.min.js', $path.'js/tui-calendar.js', $path.'js/data/calendars.js',$path. 'js/data/schedules.js', $path.'js/theme/dooray.js',$path. 'js/default.js'];
        Admin::js($js);
    }
}
