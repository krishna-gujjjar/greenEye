<?php require_once '../../__constants.php'; ?>
<?php Import::getHeader(); ?>
<div class="container">
    <div class="ct-chart ct-perfect-fourth"></div>
</div>
</div>
<script src="charist/chartist.min.js"></script>
<script>
    // new Chartist.Line('.ct-chart', {
    //     labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
    //     series: [
    //         [5, 2, 4, 2, 0]
    //     ]
    // }, {
    //     fullWidth: true,
    //     height: 1000,
    //     showArea: true
    // });

    // const chart = new Chartist.Line('.ct-chart', {
    //     labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    //     series: [
    //         [0, 5, 2, 5, 4, 3]
    //     ]
    // }, {
    //     lineSmooth: Chartist.Interpolation.simple(),
    //     low: 0,
    //     showArea: true,
    //     // fullWidth: true,
    //     width: 500,
    //     height: 200
    // });


    // Widget Area Chart 1 Starts
    var lineArea = new Chartist.Line('.ct-chart', {
        labels: ["1st", "2nd", "3rd", "4th", "5th", "6th", "7th", "8th"],
        series: [
            [0, 4500, 2600, 6100, 2600, 6500, 3200, 6800],
        ]
    }, {
        low: 0,
        showPoint: false,
        showArea: true,
        fullWidth: true,
        onlyInteger: true,
        chartPadding: {
            right: 20
        },
        axisY: {
            low: 0,
            scaleMinSpace: 60,
            labelInterpolationFnc: function labelInterpolationFnc(value) {
                return value / 1000 + 'K';
            },
        },
        axisX: {
            showGrid: false
        },
        lineSmooth: Chartist.Interpolation.simple({
            divisor: 2
        }),
    });

    lineArea.on('created', function(data) {
        var defs = data.svg.elem('defs');
        defs.elem('linearGradient', {
            id: 'linear1',
            x1: 1,
            y1: 0,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(185,168,231, 1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(118,74,233, 1)'
        });
    });



    lineArea.on('draw', function(data) {
        if (data.type === 'line' || data.type === 'area') {
            data.element.animate({
                d: {
                    begin: 2000 * data.index,
                    dur: 2000,
                    from: data.path.clone().scale(0.3, 0).translate(0, data.chartRect.height()).stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }
    });
    // Create Circle
    // lineArea.on('draw', function(data) {
    //     var circleRadius = 10;
    //     if (data.type === 'point') {
    //         var circle = new Chartist.Svg('circle', {
    //             cx: data.x,
    //             cy: data.y,
    //             r: circleRadius,
    //             class: data.value.y === 0 || data.value.y === 6800 ? 'ct-circle-transperent' : 'ct-circle'
    //         });
    //         data.element.replace(circle);
    //     }
    // });
</script>
</body>

</html>