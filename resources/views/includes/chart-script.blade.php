<script>
    $(function() {
        let labels = [];
        let dataHardware = [];
        let dataAP = [];
        let dataSwitch = [];

        @foreach ($total_aset_per_month as $item)
            labels.push("{{ $item['month'] }}");
            dataHardware.push("{{ $item['total_hardware'] }}");
            dataAP.push("{{ $item['total_access_point'] }}");
            dataSwitch.push("{{ $item['total_switch'] }}");
        @endforeach

        var areaChartData = {
            labels: labels,
            datasets: [{
                    label: 'Hardware',
                    backgroundColor: '#28a745',
                    borderColor: '#28a745',
                    pointRadius: false,
                    pointColor: '#28a745',
                    pointStrokeColor: '#28a745',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: '#28a745',
                    data: dataHardware
                },
                {
                    label: 'Access Point',
                    backgroundColor: '#ffc107',
                    borderColor: '#ffc107',
                    pointRadius: false,
                    pointColor: '#ffc107',
                    pointStrokeColor: '#ffc107',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: '#ffc107',
                    data: dataAP
                },
                {
                    label: 'Switch',
                    backgroundColor: '#17a2b8',
                    borderColor: '#17a2b8',
                    pointRadius: false,
                    pointColor: '#17a2b8',
                    pointStrokeColor: '#17a2b8',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: '#17a2b8',
                    data: dataSwitch
                },
            ]
        }


        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)

        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        var temp2 = areaChartData.datasets[2]

        barChartData.datasets[0] = temp0
        barChartData.datasets[1] = temp1
        barChartData.datasets[2] = temp2

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
    })
</script>
