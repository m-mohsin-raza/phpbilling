// DataTables configuration and initialization
$(document).ready(() => {
  // Default DataTables configuration
  $.extend(true, $.fn.dataTable.defaults, {
    responsive: true,
    pageLength: 25,
    lengthMenu: [
      [10, 25, 50, 100, -1],
      [10, 25, 50, 100, "All"],
    ],
    dom: '<"top"fB>rt<"bottom"lip><"clear">',
    buttons: [
      {
        extend: "copy",
        className: "btn btn-sm btn-outline-secondary",
        text: '<i class="bi bi-clipboard"></i> Copy',
      },
      {
        extend: "csv",
        className: "btn btn-sm btn-outline-secondary",
        text: '<i class="bi bi-file-earmark-csv"></i> CSV',
      },
      {
        extend: "excel",
        className: "btn btn-sm btn-outline-secondary",
        text: '<i class="bi bi-file-earmark-excel"></i> Excel',
      },
      {
        extend: "pdf",
        className: "btn btn-sm btn-outline-secondary",
        text: '<i class="bi bi-file-earmark-pdf"></i> PDF',
      },
      {
        extend: "print",
        className: "btn btn-sm btn-outline-secondary",
        text: '<i class="bi bi-printer"></i> Print',
      },
    ],
    language: {
      search: "Search:",
      lengthMenu: "Show _MENU_ entries",
      info: "Showing _START_ to _END_ of _TOTAL_ entries",
      infoEmpty: "Showing 0 to 0 of 0 entries",
      infoFiltered: "(filtered from _MAX_ total entries)",
      paginate: {
        first: "First",
        last: "Last",
        next: "Next",
        previous: "Previous",
      },
    },
  })

  // Initialize all tables with class 'data-table'
  $(".data-table").DataTable()
})

// Function to reinitialize DataTables after AJAX content load
function reinitializeDataTables() {
  $(".data-table").DataTable().destroy()
  $(".data-table").DataTable()
}
