<?php

use ZhMead\ECharts\Http\Controllers\EChartsController;

Route::get('echarts', EChartsController::class.'@index');