$(function () {
    $('#world-map-markers').vectorMap({
        map: 'world_mill_en',
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: true,
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: 'rgba(210, 214, 222, 1)',
                "fill-opacity": 1,
                stroke: 'none',
                "stroke-width": 0,
                "stroke-opacity": 1
            },
            hover: {
                "fill-opacity": 0.7,
                cursor: 'pointer'
            },
            selected: {
                fill: '#5bc0de'
            },
            selectedHover: {
                fill: '#5bc0de',
            }
        },
        markerStyle: {
            initial: {
                fill: '#5bc0de',
                stroke: 'rgba(0, 0, 0, 0.4)'
            }
        },
        markers: [
            { latLng: [36.77, 19.41], name: 'California' },
            { latLng: [43.73, 7.41], name: 'Monaco' },
            { latLng: [-0.52, 166.93], name: 'Nauru' },
            { latLng: [-8.51, 179.21], name: 'Tuvalu' },
            { latLng: [43.93, 12.46], name: 'San Marino' },
            { latLng: [47.14, 9.52], name: 'Liechtenstein' },
            { latLng: [7.11, 171.06], name: 'Marshall Islands' },
            { latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis' },
            { latLng: [3.2, 73.22], name: 'Maldives' },
            { latLng: [35.88, 14.5], name: 'Malta' },
            { latLng: [12.05, -61.75], name: 'Grenada' },
            { latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines' },
            { latLng: [13.16, -59.55], name: 'Barbados' },
            { latLng: [17.11, -61.85], name: 'Antigua and Barbuda' },
            { latLng: [-4.61, 55.45], name: 'Seychelles' },
            { latLng: [7.35, 134.46], name: 'Palau' },
            { latLng: [42.5, 1.51], name: 'Andorra' }
        ]
    });
});