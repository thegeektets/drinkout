


    <!-- main javascript library -->
     <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/waypoints.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/waypoints.min.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/preloader-script.js");?>"></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/foundation.min.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/foundation/foundation.#111111.js");?>"></script>
    <!-- main edumix javascript -->
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/slimscroll/jquery.slimscroll.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/slicknav/jquery.slicknav.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/sliding-menu.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/scriptbreaker-multiple-accordion-1.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/number/jquery.counterup.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/circle-progress/jquery.circliful.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/app.js");?>"></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/number-progress-bar/jquery.velocity.min.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/number-progress-bar/number-pb.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/loader/loader.js");?>"></script>
    <script type='text/javascript' src="<?php echo base_url("assets/dashboard/js/loader/demo.js");?>"></script>
    <!-- FLOT CHARTS -->
    <script src="<?php echo base_url("assets/dashboard/js/flot/jquery.flot.js");?>" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="<?php echo base_url("assets/dashboard/js/flot/jquery.flot.resize.min.js");?>" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="<?php echo base_url("assets/dashboard/js/flot/jquery.flot.pie.min.js");?>" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="<?php echo base_url("assets/dashboard/js/flot/jquery.flot.categories.min.js");?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/skycons/skycons.js");?>"></script>

    <script type="text/javascript">
    $(function() {
        "use strict";


        //weather icons
        var icons = new Skycons({
                "stroke": 0.06,
                "color": "Gray",
                "cloudColor": "#666666",
                "sunColor": "#92cd18",
                "moonColor": "DodgerBlue",
                "rainColor": "RoyalBlue",
                "snowColor": "LightGray",
                "windColor": "LightSteelBlue",
                "fogColor": "#65C3DF"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play()

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var line_data1 = [
            [1, 800],
            [2, 1500],
            [3, 900],
            [4, 1900],
            [5, 4000],
            [6, 2800],
            [7, 2500],
            [8, 700],
            [9, 1500],
            [10, 1000],
            [11, 2000],
            [12, 4300],
            [13, 1756],
            [14, 2000],
            [15, 1500],
            [16, 1900],
            [17, 1200],
            [18, 2800],
            [19, 3200],
            [20, 2190]
        ];
        var line_data2 = [
            [1, 1800],
            [2, 2900],
            [3, 1950],
            [4, 3450],
            [5, 7000],
            [6, 5300],
            [7, 4890],
            [8, 2300],
            [9, 3900],
            [10, 2900],
            [11, 4500],
            [12, 2200],
            [13, 1120],
            [14, 1459],
            [15, 1100],
            [16, 1189],
            [17, 300],
            [18, 1250],
            [19, 1705],
            [20, 959]

        ];


        $.plot("#line-chart", [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: "#E2E6EE",
                borderWidth: 1,
                tickColor: "#E2E6EE"
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            colors: ["#333333", "#cccccc"],
            lines: {
                fill: true,
            },
            yaxis: {
                show: false,
            },
            xaxis: {
                show: true
            }
        });
        //Initialize tooltip on hover
        $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
            position: "absolute",
            background: "#333333",
            padding: "3px 10px",
            color: "#ffffff",
            display: "none",
            opacity: 0.9
        }).appendTo("body");
        $("#line-chart").bind("plothover", function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200);
            } else {
                $("#line-chart-tooltip").hide();
            }

        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ];
        $.plot("#area-chart", [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#00c0ef"
            },
            lines: {
                fill: true //Converts the line chart to area chart                        
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        });

        /* END AREA CHART */

    });

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    </script>


    <script>
    $(document).foundation();
    </script>
