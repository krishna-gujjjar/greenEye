/*
 * @Author: GurjarsPro
 * @Date: 2019-03-17 11:53:46
 * @Last Modified by: krishna_gujjjar
 * @Last Modified time: 2019-04-06 10:41:31
 */

(function (window, document, $) {
    "use strict";
    // Input, Select, Textarea validations except submit button
    // $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();

    $(window).on("load", function () {
        /** Pace JS */
        $(document).ajaxStart(function () {
            Pace.restart();
        });

        /** Validate #gReeneye_logiN Form */
        $("#gReeneye_logiN").find("input").not("[type=submit]").jqBootstrapValidation();

        /** Get Create & Show Admin's Data */
        if ($(document).attr("title").search("Create Admin") !== -1) {

            /** Validate #cAdmin Form */
            $("#cAdmin").find("input").not("[type=submit]").jqBootstrapValidation({
                submitSuccess: function ($form, event) {
                    $.ajax({
                        type: "POST",
                        url: $form.attr("action"),
                        cache: false,
                        data: $form.serialize(),
                        success: function (response) {
                            console.log(response);
                            Snackbar.show({ // Show Notification
                                text: response,
                                pos: "top-right",
                                actionTextColor: "var(--primary)",
                                backgroundColor: "var(--dark)"
                            });
                            $("#cAdmin").find("input").val(""); // Empty Form Value
                            getAdminData(); // Load Admin's Data
                        }
                    });
                    event.preventDefault();
                }
            });

            getAdminData();


            /** Delete Admins */
            $("#sHow_adminS").on("click", ".delAdmin", function (e) {
                e.preventDefault();

                /** Admin's Id
                 * @type {number|array} */
                let adminID;
                adminID = $(this).attr('id').split('_'); // Getting Admin's uID from id Attribute
                adminID = adminID[1]; // Set Admin's ID

                $.ajax({
                    type: "POST",
                    url: $("#cAdmin").attr("action"),
                    data: {
                        dEl_admiN: adminID
                    },
                    cache: false,
                    success: function (response) {
                        console.log(response);
                        Snackbar.show({ // Show Notification
                            text: response,
                            pos: "top-right",
                            actionTextColor: "var(--primary)",
                            backgroundColor: "var(--dark)"
                        });
                        getAdminData();
                    }
                });
            });


            /** Show Admin's Data */
            function getAdminData() {
                $.ajax({
                    type: "POST",
                    url: $("#cAdmin").attr("action"),
                    cache: false,
                    data: {
                        sHow_admiN: "admin"
                    },
                    success: function (response) {

                        /** Parsing `Ajax response`  to ResponseData
                         * @type {object} */
                        const ResponseData = JSON.parse(response);

                        /** Admin's Rows
                         * @type {object} */
                        const adminResponseData = ResponseData.data;

                        /** Admin's Total Rows Count
                         * @type {number} */
                        const adminResponseCount = ResponseData.myRows;

                        if (adminResponseData.length !== 0) { // Check adminResponseData Not Empty

                            /** Admin's Data to Show on Page
                             * @type {string} */
                            let adminShowData;

                            /** Set Length of Data to Show on Page
                             * @type {number} */
                            let htmlLenght = adminResponseCount;
                            adminResponseCount > 6 && (htmlLenght = 6);

                            for (let i = 0; i < htmlLenght; i++) { // Extract adminResponseData

                                /** Admin's Row Data
                                 * @type {object} */
                                const adminData = adminResponseData[i];

                                /** Admin's ID
                                 * @type {number} */
                                let adminDataID = adminData.gReeneye_uiD;

                                /** Admin's Name
                                 * @type {string} */
                                let adminDataName = adminData.gReeneye_unamE;

                                /** Admin's Profile Pic
                                 * @type  {string} */
                                let adminDataImg = adminData.gReeneye_upiC;

                                /** HTML Div Container */
                                let htmlContainer =
                                    '<div class="col-md-6 col-lg-4 mt-3">' +
                                    '<div class="rounded position-relative">' +
                                    '<i id="admin_';

                                /** HTML Image Container */
                                let htmlImg =
                                    '" class="fa fa-times-circle text-success fa-2x position-absolute bg-light rounded-circle" style="right:-5%; top: -5%"></i>' +
                                    '<img class="img-thumbnail" src="';

                                /** HTML Head Name Container */
                                let htmlName =
                                    '" alt="">' + '<h3 class="text-center pt-2">';

                                /** HTML Container End */
                                let htmlEnd = "</h3>" + "</div>" + "</div>";

                                adminDataImg === null && (adminDataImg = "assets/img/avatar.png"); // Default Profile Pic

                                adminShowData += // Create HTML Continer for Display
                                    htmlContainer +
                                    adminDataID +
                                    htmlImg +
                                    adminDataImg +
                                    htmlName +
                                    adminDataName +
                                    htmlEnd;
                            } // End For Loop

                            /** Show More Button Container */
                            let showMoreBtn = "";
                            adminResponseCount > 6 && // Check If Row More Than 6
                                (showMoreBtn =
                                    '<div class="col-12 mt-5 text-center">' +
                                    '<button class="btn btn-lg rounded-pill btn-block btn-secondary">Show More</button>' +
                                    "</div>");

                            /** Check `adminShowData` is not Empty */
                            (typeof (adminShowData) !== "undefined") && (adminShowData = adminShowData.replace("undefined", ""));

                            $("#sHow_adminS").html(adminShowData + showMoreBtn); // Write HTML Data in `#sHow_adminS`
                        }
                    }
                });
            }
        }

        /** Charts */
        if (typeof Chartist === "undefined") return;

        if (!$("#Widget-line-chart").length) return;

        if (!$("#Widget-line-chart1").length) return;

        if (!$("#Widget-line-chart2").length) return;

        if (!$("#line-chart").length) return;

        if (!$("#Stack-bar-chart").length) return;

        if (!$("#bar-chart").length) return;

        if (!$("#donut-dashboard-chart").length) return;

        // Widget Area Chart 1 Starts
        let widgetlineChart = new Chartist.Line(
            "#Widget-line-chart", {
                labels: [1, 2, 3, 4, 5, 6],
                series: [
                    [0, 13, 6, 30, 18, 28]
                ]
            }, {
                low: 0,
                fullWidth: true,
                showArea: true,
                onlyInteger: true,
                targetLine: {
                    value: 30,
                    class: "ct-target-line"
                },
                axisY: {
                    showGrid: false,
                    low: 0,
                    scaleMinSpace: 10,
                    showLabel: false,
                    offset: 0
                },
                axisX: {
                    showGrid: false,
                    showLabel: false,
                    offset: 0
                },
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 2
                })
            }
        );

        widgetlineChart.on("created", function (data) {
            const defs = data.svg.elem("defs");
            defs.elem("linearGradient", {
                id: "wGradient",
                x1: 0,
                y1: 1,
                x2: 0,
                y2: 0
            }).elem("stop", {
                offset: 0,
                "stop-color": "rgba(130,73,232, 1)"
            }).parent().elem("stop", {
                offset: 1,
                "stop-color": "rgba(41,123,249, 1)"
            });
            const targetLineX =
                data.chartRect.x1 + (data.chartRect.width() - data.chartRect.width() / data.bounds.step);

            data.svg.elem(
                "line", {
                    x1: targetLineX,
                    x2: targetLineX,
                    y1: data.chartRect.y1,
                    y2: data.chartRect.y2
                }, data.options.targetLine.class);
        });
        widgetlineChart.on("draw", function (data) {
            const circleRadius = 10;
            if (data.type === "point") {
                const circle = new Chartist.Svg("circle", {
                    cx: data.x,
                    cy: data.y,
                    r: circleRadius,
                    class: data.value.y === 30 ? "ct-point-circle" : "ct-point-circle-transperent"
                });
                data.element.replace(circle);
            }
        });

        widgetlineChart.on("draw", function (data) {
            if (data.type === "line" || data.type === "area") {
                data.element.animate({
                    d: {
                        begin: 2000 * data.index,
                        dur: 2000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });
        // Widget Area Chart 1 Ends

        // Widget Area Chart 2 Starts
        widgetlineChart = new Chartist.Line(
            "#Widget-line-chart1", {
                labels: [1, 2, 3, 4, 5, 6],
                series: [
                    [0, 13, 6, 30, 18, 28]
                ]
            }, {
                low: 0,
                fullWidth: true,
                showArea: true,
                onlyInteger: true,
                targetLine: {
                    value: 30,
                    class: "ct-target-line"
                },
                axisY: {
                    showGrid: false,
                    low: 0,
                    scaleMinSpace: 10,
                    showLabel: false,
                    offset: 0
                },
                axisX: {
                    showGrid: false,
                    showLabel: false,
                    offset: 0
                },
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 2
                })
            }
        );

        widgetlineChart.on("created", function (data) {
            const defs = data.svg.elem("defs");
            defs.elem("linearGradient", {
                id: "wGradient1",
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 1
            }).elem("stop", {
                offset: 0,
                "stop-color": "rgba(252,157,48, 1)"
            }).parent().elem("stop", {
                offset: 1,
                "stop-color": "rgba(250,91,76, 1)"
            });
            const targetLineX =
                data.chartRect.x1 + (data.chartRect.width() - data.chartRect.width() / data.bounds.step);

            data.svg.elem(
                "line", {
                    x1: targetLineX,
                    x2: targetLineX,
                    y1: data.chartRect.y1,
                    y2: data.chartRect.y2
                },
                data.options.targetLine.class
            );
        });
        widgetlineChart.on("draw", function (data) {
            const circleRadius = 10;
            if (data.type === "point") {
                const circle = new Chartist.Svg("circle", {
                    cx: data.x,
                    cy: data.y,
                    r: circleRadius,
                    class: data.value.y === 30 ? "ct-point-circle" : "ct-point-circle-transperent"
                });
                data.element.replace(circle);
            }
        });
        widgetlineChart.on("draw", function (data) {
            if (data.type === "line" || data.type === "area") {
                data.element.animate({
                    d: {
                        begin: 2000 * data.index,
                        dur: 2000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });
        // Widget Area Chart 2 Ends

        // Widget Area Chart 3 Starts
        widgetlineChart = new Chartist.Line(
            "#Widget-line-chart2", {
                labels: [1, 2, 3, 4, 5, 6],
                series: [
                    [0, 13, 6, 30, 18, 28]
                ]
            }, {
                low: 0,
                fullWidth: true,
                showArea: true,
                onlyInteger: true,
                targetLine: {
                    value: 30,
                    class: "ct-target-line"
                },
                axisY: {
                    showGrid: false,
                    low: 0,
                    scaleMinSpace: 10,
                    showLabel: false,
                    offset: 0
                },
                axisX: {
                    showGrid: false,
                    showLabel: false,
                    offset: 0
                },
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 2
                })
            }
        );

        widgetlineChart.on("created", function (data) {
            const defs = data.svg.elem("defs");
            defs.elem("linearGradient", {
                id: "wGradient2",
                x1: 0,
                y1: 0,
                x2: 0,
                y2: 1
            }).elem("stop", {
                offset: 0,
                "stop-color": "#55efc4"
            }).parent().elem("stop", {
                offset: 1,
                "stop-color": "#00cec9"
            });
            const targetLineX =
                data.chartRect.x1 + (data.chartRect.width() - data.chartRect.width() / data.bounds.step);

            data.svg.elem(
                "line", {
                    x1: targetLineX,
                    x2: targetLineX,
                    y1: data.chartRect.y1,
                    y2: data.chartRect.y2
                },
                data.options.targetLine.class
            );
        });
        widgetlineChart.on("draw", function (data) {
            const circleRadius = 10;
            if (data.type === "point") {
                const circle = new Chartist.Svg("circle", {
                    cx: data.x,
                    cy: data.y,
                    r: circleRadius,
                    class: data.value.y === 30 ? "ct-point-circle" : "ct-point-circle-transperent"
                });
                data.element.replace(circle);
            }
        });
        widgetlineChart.on("draw", function (data) {
            if (data.type === "line" || data.type === "area") {
                data.element.animate({
                    d: {
                        begin: 2000 * data.index,
                        dur: 2000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });
        // Widget Area Chart 3 Ends

        // Line with Area Chart Starts
        const lineArea = new Chartist.Line(
            "#line-chart", {
                labels: ["1st", "2nd", "3rd", "4th", "5th", "6th", "7th", "8th"],
                series: [
                    [0, 4500, 2600, 6100, 2600, 6500, 3200, 6800]
                ]
            }, {
                low: 0,
                fullWidth: true,
                onlyInteger: true,
                chartPadding: {
                    right: 20
                },
                axisY: {
                    low: 0,
                    scaleMinSpace: 60,
                    labelInterpolationFnc: function labelInterpolationFnc(value) {
                        return value / 1000 + "K";
                    }
                },
                axisX: {
                    showGrid: false
                },
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 2
                })
            }
        );

        lineArea.on("created", function (data) {
            const defs = data.svg.elem("defs");
            defs.elem("linearGradient", {
                id: "linear1",
                x1: 1,
                y1: 0,
                x2: 0,
                y2: 0
            }).elem("stop", {
                offset: 0,
                "stop-color": "rgba(185,168,231, 1)"
            }).parent().elem("stop", {
                offset: 1,
                "stop-color": "rgba(118,74,233, 1)"
            });
        });

        lineArea.on("draw", function (data) {
            const circleRadius = 10;
            if (data.type === "point") {
                const circle = new Chartist.Svg("circle", {
                    cx: data.x,
                    cy: data.y,
                    r: circleRadius,
                    class: data.value.y === 0 || data.value.y === 6800 ?
                        "ct-circle-transperent" : "ct-circle"
                });
                data.element.replace(circle);
            }
        });

        lineArea.on("draw", function (data) {
            if (data.type === "line" || data.type === "area") {
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
        // Line with Area Chart Ends

        // Stack bar Chart Starts
        const Stackbarchart = new Chartist.Bar(
            "#Stack-bar-chart", {
                labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
                series: [
                    [7, 4, 2, -2, -4, -7, -7, -4, -2, 2, 4, 7]
                ]
            }, {
                fullWidth: true,
                axisX: {
                    showGrid: false
                },
                axisY: {
                    showGrid: true,
                    showLabel: false,
                    offset: 0
                },
                chartPadding: 30
            }
        );

        Stackbarchart.on("created", function (data) {
            const defs = data.svg.elem("defs");
            defs.elem("linearGradient", {
                id: "StackbarGradient",
                x1: 0,
                y1: 1,
                x2: 0,
                y2: 0
            }).elem("stop", {
                offset: 0,
                "stop-color": "rgba(0, 201, 255,1)"
            }).parent().elem("stop", {
                offset: 1,
                "stop-color": "rgba(17,228,183, 1)"
            });
        });

        Stackbarchart.on("draw", function (data) {
            if (data.type === "bar") {
                data.element.attr({
                    style: "stroke-width: 5px",
                    x1: data.x1 + 0.001
                });

                data.group.append(
                    new Chartist.Svg(
                        "circle", {
                            cx: data.x2,
                            cy: data.y2,
                            r: 5
                        },
                        "ct-slice-bar"
                    )
                );
            } else if (data.type === "label") {
                data.element.attr({
                    y: 270
                });
            }
        });
        // Stack bar Chart Ends

        // Bar Chart Starts
        const barChart = new Chartist.Bar(
            "#bar-chart", {
                labels: ["Sport", "Music", "Travel", "News", "Blog"],
                series: [
                    [35, 20, 30, 45, 55]
                ]
            }, {
                axisX: {
                    showGrid: false
                },
                axisY: {
                    showGrid: false,
                    showLabel: false,
                    offset: 0
                },
                low: 0,
                high: 60
            },
            [
                ["screen and (max-width: 640px)",
                    {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function (value) {
                                return value[0];
                            }
                        }
                    }
                ]
            ]
        );

        barChart.on("created", function (data) {
            const defs = data.svg.elem("defs");
            defs.elem("linearGradient", {
                    id: "gradient4",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(238, 9, 121,1)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(255, 106, 0, 1)"
                });
            defs.elem("linearGradient", {
                    id: "gradient5",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(0, 75, 145,1)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(120, 204, 55, 1)"
                });

            defs.elem("linearGradient", {
                    id: "gradient6",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(132, 60, 247,1)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(56, 184, 242, 1)"
                });
            defs.elem("linearGradient", {
                    id: "gradient7",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(155, 60, 183,1)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(255, 57, 111, 1)"
                });
            defs.elem("linearGradient", {
                    id: "gradient8",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(0, 201, 255,1)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(17,228,183, 1)"
                });
        });
        barChart.on("draw", function (data) {
            if (data.type === "bar") {
                data.element.attr({
                    y1: 195,
                    x1: data.x1 + 0.001
                });

                data.group.append(
                    new Chartist.Svg(
                        "circle", {
                            cx: data.x2,
                            cy: data.y2,
                            r: 12
                        },
                        "ct-slice-bar"
                    )
                );
            }
        });
        //Bar Chart Ends

        // Donut Chart Starts

        const Donutdata = {
            series: [{
                    name: "done",
                    className: "ct-done",
                    value: 35
                },
                {
                    name: "progress",
                    className: "ct-progress",
                    value: 14
                },
                {
                    name: "outstanding",
                    className: "ct-outstanding",
                    value: 23
                }
            ]
        };

        const donut = new Chartist.Pie(
            "#donut-dashboard-chart", {
                series: [{
                        name: "done",
                        className: "ct-done",
                        value: 35
                    },
                    {
                        name: "progress",
                        className: "ct-progress",
                        value: 14
                    },
                    {
                        name: "outstanding",
                        className: "ct-outstanding",
                        value: 23
                    }
                ]
            }, {
                donut: true,
                startAngle: 310,
                donutSolid: true,
                donutWidth: 30,
                labelInterpolationFnc: function (value) {
                    const total = Donutdata.series.reduce(function (
                            prev,
                            series
                        ) {
                            return prev + series.value;
                        },
                        0);
                    return total + "%";
                }
            }
        );

        donut.on("created", function (data) {
            const defs = data.svg.elem("defs");
            defs.elem("linearGradient", {
                    id: "donutGradient1",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(155, 60, 183,1)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(255, 57, 111, 1)"
                });
            defs.elem("linearGradient", {
                    id: "donutGradient2",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(0, 75, 145,0.8)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(120, 204, 55, 0.8)"
                });

            defs.elem("linearGradient", {
                    id: "donutGradient3",
                    x1: 0,
                    y1: 1,
                    x2: 0,
                    y2: 0
                })
                .elem("stop", {
                    offset: 0,
                    "stop-color": "rgba(132, 60, 247,1)"
                })
                .parent()
                .elem("stop", {
                    offset: 1,
                    "stop-color": "rgba(56, 184, 242, 1)"
                });
        });

        donut.on("draw", function (data) {
            if (data.type === "label") {
                if (data.index === 0) {
                    data.element.attr({
                        dx: data.element.root().width() / 2,
                        dy: data.element.root().height() / 2
                    });
                } else {
                    data.element.remove();
                }
            }
        });
        // Donut Chart Ends
    });
})(window, document, jQuery);