<?php

namespace ZhMead\ECharts;

use Encore\Admin\Extension;

class ECharts extends Extension
{
    public $name = 'echarts';

    public $views = __DIR__ . '/../resources/views';

    public $assets = __DIR__ . '/../resources/assets';

    public static function content($id = '', $options = [], $width = false, $height = 400)
    {
        $time = $id . '_' . time();
        $width = $width ? $width . 'px' : '100%';
        $height = $height ? $height . 'px' : '100%';
        if (is_array($options)) $options = json_encode($options);
            $html = <<<EOF
		<div id="{$time}" style="width: {$width};height:{$height};">加载中....</div>
EOF;

        return view('echarts::echarts', ['chart' => $time, 'chart_html' => $html, 'options' => $options]);
    }
}

