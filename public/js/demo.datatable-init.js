$(function() {
    "use strict";
    // Basic
    $("#basic-datatable").DataTable({
        keys: !0,
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        }
    });
    // Button
    var a = $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: ["copy", "print"],
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            },
            search: "Tìm ",
            zeroRecords: "Không có dữ liệu",
            info: "Hiển thị _START_ đến _END_ trong _TOTAL_ dòng dữ liệu",
            infoEmpty: "",
            lengthMenu: "Hiển thị _MENU_ dữ liệu",
            infoFiltered: "(Tìm kiếm từ _MAX_ dòng dữ liệu)"
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        }
    });
    // Seletion
    $("#selection-datatable").DataTable({
        select: { style: "multi" },
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass(
                "pagination-rounded"
            );
        }
    }),
        a
            .buttons()
            .container()
            .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $("#alternative-page-datatable").DataTable({
            pagingType: "full_numbers",
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            }
        }),
        $("#scroll-vertical-datatable").DataTable({
            scrollY: "350px",
            scrollCollapse: !0,
            paging: !1,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            }
        }),
        // Default
        $("#scroll-horizontal-datatable").DataTable({
            scrollX: !0,
            order: [ 0, 'desc' ],
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                },
                search: "Tìm ",
                zeroRecords: "Không có dữ liệu",
                info: "Hiển thị _START_ đến _END_ trong _TOTAL_ dòng dữ liệu",
                infoEmpty: "",
                lengthMenu: "Hiển thị _MENU_ dữ liệu",
                infoFiltered: "(Tìm kiếm từ _MAX_ dòng dữ liệu)"
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            }
        }),
        $("#complex-header-datatable").DataTable({
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
            columnDefs: [{ visible: !1, targets: -1 }]
        }),
        $("#row-callback-datatable").DataTable({
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            },
            createdRow: function(a, e, t) {
                15e4 < +e[5].replace(/[\$,]/g, "") &&
                    $("td", a)
                        .eq(5)
                        .addClass("text-danger");
            }
        }),
        $("#state-saving-datatable").DataTable({
            stateSave: !0,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            }
        }),
        $(".dataTables_length select").addClass("form-select form-select-sm"),
        $(".dataTables_length label").addClass("form-label");
});
