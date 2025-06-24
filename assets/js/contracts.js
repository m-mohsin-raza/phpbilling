// Contract management functionality - Pure JavaScript and jQuery
$(document).ready(() => {
  // Set default dates
  const today = new Date().toISOString().split("T")[0]
  $("#contractStartDate").val(today)

  const endDate = new Date()
  endDate.setMonth(endDate.getMonth() + 6)
  $("#contractEndDate").val(endDate.toISOString().split("T")[0])

  // Add new milestone
  $("#addMilestone").click(() => {
    const newRow = `
            <tr>
                <td><input type="text" class="form-control form-control-sm" placeholder="Milestone description"></td>
                <td><input type="date" class="form-control form-control-sm"></td>
                <td><input type="number" class="form-control form-control-sm" placeholder="0.00" min="0" step="0.01"></td>
                <td>
                    <select class="form-select form-select-sm">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </td>
                <td><button type="button" class="btn btn-sm btn-outline-danger remove-milestone"><i class="bi bi-trash"></i></button></td>
            </tr>
        `
    $("#milestonesTable tbody").append(newRow)
  })

  // Remove milestone
  $(document).on("click", ".remove-milestone", function () {
    $(this).closest("tr").remove()
  })

  // Contract form submission
  $("#addContractForm").on("submit", (e) => {
    e.preventDefault()
    showNotification("Contract created successfully!", "success")
    $("#addContractModal").modal("hide")
  })
})

function showNotification(message, type) {
  // Use the global notification function
  if (window.BixiTech && window.BixiTech.showNotification) {
    window.BixiTech.showNotification(message, type)
  } else {
    alert(message) // Fallback
  }
}
