<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '迟到统计表'
        },
        subtitle: {
            text: '技术支持：大神'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '迟到次数(次)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '迟到次数: <b>{point.y:.1f} 次</b>'
        },
        series: [{
            name: 'Population',
            data:<?php echo ($str); ?>,
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
</script>