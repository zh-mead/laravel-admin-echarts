<?php

namespace ZhMead\ECharts;

use Encore\Admin\Facades\Admin;
use Illuminate\Support\ServiceProvider;

class EChartsServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ECharts $extension)
    {
        if (!ECharts::boot()) {
            return;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'echarts');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/echarts')],
                'echarts'
            );
        }

        $this->app->booted(function () {
            ECharts::routes(__DIR__ . '/../routes/web.php');
        });

        Admin::booting(function () {
            Admin::js('vendor/laravel-admin-ext/echarts/echarts.min.js');
        });
    }
}