
$(function () {
    getMorris('area', 'area_chart');
    getMorris('donut', 'donut_chart');
});

function getMorris(type, element) {
    if (type === 'area') {
        Morris.Area({
            element: element,
            data: [{
                period: '2017 Q2',
                Sales: 3480,
                Revenue: 2102,
                Monthly: 2365
            }, {
                    period: '2010 Q3',
                    Sales: 4912,
                    Revenue: 1969,
                    Monthly: 2501
                }, {
                    period: '2011 Q3',
                    Sales: 3152,
                    Revenue: 4215,
                    Monthly: 2458
                }, {
                    period: '2012 Q4',
                    Sales: 7841,
                    Revenue: 5967,
                    Monthly: 5175
                },{
                    period: '2013 Q4',
                    Sales: 3767,
                    Revenue: 3597,
                    Monthly: 4512
                }, {
                    period: '2014 Q1',
                    Sales: 5148,
                    Revenue: 1914,
                    Monthly: 2293
                }, {
                    period: '2015 Q2',
                    Sales: 4125,
                    Revenue: 3451,
                    Monthly: 6124
                },{
                    period: '2016 Q3',
                    Sales: 2068,
                    Revenue: 4460,
                    Monthly: 2028
                }, {
                    period: '2017 Q4',
                    Sales: 6412,
                    Revenue: 5713,
                    Monthly: 3450
                }],
            xkey: 'period',
            ykeys: ['Sales', 'Revenue', 'Monthly'],
            labels: ['Sales', 'Revenue', 'Monthly'],
            pointSize: 3,
            hideHover: 'auto',
            lineColors: ['rgba(69, 229, 195,0.3)', 'rgba(25, 161, 183, 0.3)', 'rgba(134, 139, 239, 0.3)']
        });
    } else if (type === 'donut') {
        Morris.Donut({
            element: element,
            data: [{
                label: 'Crome',
                value: 25
            }, {
                    label: 'Mozila',
                    value: 40
                }, {
                    label: 'Safari',
                    value: 15
                },{
                    label: 'IE',
                    value: 20
                }, {
                    label: 'Other',
                    value: 10
                }],
            colors: ['rgb(0,189,209)', 'rgb(137,197,75)', 'rgb(27,138,207)', 'rgb(168,104,224)', 'rgb(255,200,0)'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }
}

// Customized line Index page
$('#linecustom1').sparkline('html',
{
	height: '35px', width: '100%', lineColor: '#e5d1e4', fillColor: '#f3e8f2',
	minSpotColor: true, maxSpotColor: true, spotColor: '#e2a8df', spotRadius: 3
});

$('#linecustom2').sparkline('html',
{
	height: '35px', width: '100%', lineColor: '#c9e3f4', fillColor: '#dfeefa',
	minSpotColor: true, maxSpotColor: true, spotColor: '#8dbfe0', spotRadius: 3
});

$('#linecustom3').sparkline('html',
{
	
	height: '35px', width: '100%', lineColor: '#efded3', fillColor: '#f8f0ea',
	minSpotColor: true, maxSpotColor: true, spotColor: '#e0b89d', spotRadius: 3
});