(function ($) {
    "use strict"; // Start of use strict
    //line Morris
    var lineMorris = new Morris.Line({
        element: 'lineMorris',
        resize: true,
        data: app,
        xkey: 'y',
        ykeys: ['Appointments'],
        labels: ['Appointments'],
        gridLineColor: '#eef0f2',
        lineColors: ['#E57498'],
        lineWidth: 2,
        hideHover: 'auto'
    });
    //barmorris
    var ctx = document.getElementById("barMorris");
    if (ctx === null) return;

    // Prepare data for Morris chart
    var chartData = [];
    appData.forEach(function (item) {
        var year = item.created_at.substring(0, 4);
        if (!appData[year]) {
            appData[year] = 0;
        }
        appData[year]++;
    });
    var chartData = [];
    for (var year in appData) {
        chartData.push({ y: year, a: appData[year] });
    }

    // Initialize chart
    var chart = Morris.Bar({
        element: 'barMorris',
        data: chartData,
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Patients'],
        barColors: ['#FF7D00'],
        barOpacity: 1,
        barSizeRatio: 0.5,
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
    // morris donut charts
    if ($("#donutMorris").length == 1) {
        var $donutData = [
            { label: "Pending", value: data['pending'] },
            { label: "Active", value: data['active'] },
            { label: "Visited", value: data['visited'] },
            { label: "Cancelled", value: data['canceled'] }
        ];
        Morris.Donut({
            element: 'donutMorris',
            data: $donutData,
            barSize: 0.1,
            labelColor: '#3e5569',
            resize: true, //defaulted to true
            colors: ['#FFAA2A', '#B24592','#22c6ab', '#ef6e6e']
        });
    }

    // visit chart
    if ($("#visitMorris").length == 1) {
        var chart = Morris.Area({
            element: 'visitMorris',
            data: [{
                period: '2010',
                SiteA: 0,
                SiteB: 0,

            }, {
                period: '2011',
                SiteA: 130,
                SiteB: 100,

            }, {
                period: '2012',
                SiteA: 60,
                SiteB: 80,

            }, {
                period: '2013',
                SiteA: 180,
                SiteB: 200,

            }, {
                period: '2014',
                SiteA: 280,
                SiteB: 100,

            }, {
                period: '2015',
                SiteA: 170,
                SiteB: 150,
            },
            {
                period: '2016',
                SiteA: 200,
                SiteB: 80,

            }, {
                period: '2017',
                SiteA: 0,
                SiteB: 0,

            }],
            xkey: 'period',
            ykeys: ['SiteA', 'SiteB'],
            labels: ['Site A', 'Site B'],
            pointSize: 0,
            fillOpacity: 1,
            pointStrokeColors: ['#5867c3', '#00c5dc'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineWidth: 0,
            smooth: false,
            hideHover: 'auto',
            lineColors: ['#5867c3', '#00c5dc'],
            resize: true
        });
    }

})(jQuery);
