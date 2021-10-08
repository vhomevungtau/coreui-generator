$("#timepicker").timepicker({
    showSeconds: !1,
    icons: { up: "mdi mdi-chevron-up", down: "mdi mdi-chevron-down" },
    appendWidgetTo: "#timepicker-input-group1"
}),
    $("#timepicker2").timepicker({
        showSeconds: !1,
        showMeridian: !1,
        icons: { up: "mdi mdi-chevron-up", down: "mdi mdi-chevron-down" },
        appendWidgetTo: "#timepicker-input-group2"
    }),
    $("#timepicker3").timepicker({
        showSeconds: !1,
        minuteStep: 30,
        icons: { up: "mdi mdi-chevron-up", down: "mdi mdi-chevron-down" },
        appendWidgetTo: "#timepicker-input-group3"
    });
