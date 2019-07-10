{!! $chart_html !!}
<script>
    $(function () {
        var myChart_{{$chart}} = echarts.init(document.getElementById('{{$chart}}'), null, {renderer: 'canvas'});
        myChart_{{$chart}}.setOption({!! ($options) !!});
    });
</script>