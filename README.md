# laravel-admin-echarts 图表
> 本项目是 Laravel-Admin 的扩展插件，主要是集成*百度 EChaert 图表*
## 安装

* 安装依赖包
~~~bash
$ composer require zh-mead/laravel-admin-echarts
~~~

* 发布文件
~~~bash
$ php artisan vendor:publish --provider=ZhMead\ECharts\EChartsServiceProvider
~~~

## 使用说明

~~~php
ECharts::content(参数一,参数二,参数三,参数四);
~~~

| 位置 | 类型 | 是否必填 | 默认值 | 名称 | 
| ------- | -------- | -------- | --------- | -------- |
| 参数一 | 字符串（唯一） | 必填 | NULL | 唯一标识 |
| 参数二 | 数组 | 必填 | [] | 配置项 |
| 参数一 | 数字 | 否必填 | false(100%) | 宽(px) |
| 参数一 | 数字 | 否必填 | 500 | 高（px） |

## 案例

* 方式一
~~~php
new Box('方式一', ECharts::content('index', [
    'tooltip' => [
        'trigger' => 'axis'
    ],
    'xAxis' => [
        'type' => 'category',
        'data' => ['星期一','星期二','星期三','星期四','星期五','星期六','星期日'],
    ],
    'yAxis' => [
        'type' => 'value',
    ],
    'series' => [
        [
            'data' => [100,200,300,200,100,150,80],
            'type' => 'line'
        ]
    ]
]))
~~~

* 方式二
~~~php
$options = <<<EOP
 {
    xAxis: {
        type: 'category',
        data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
    },
    yAxis: {
        type: 'value'
    },
    series: [{
        data: [820, 932, 901, 934, 1290, 1330, 1320],
        type: 'line'
    }]
}
EOP;
......
new Box('方式一', ECharts::content('index', $options))
~~~

> 我已经创建好一个案例，你可以访问http://XXx/admin/echarts

