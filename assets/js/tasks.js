$(document).ready(() => {
  // Calculate task amount
  $("#taskHours, #taskRate").on("input", () => {
    const hours = Number.parseFloat($("#taskHours").val()) || 0
    const rate = Number.parseFloat($("#taskRate").val()) || 0
    const amount = hours * rate
    $("#taskAmount").val("$" + amount.toFixed(2))
  })

  // Auto-calculate hours from time range
  $("#taskStartTime, #taskEndTime").on("change", () => {
    const startTime = $("#taskStartTime").val()
    const endTime = $("#taskEndTime").val()

    if (startTime && endTime) {
      const start = new Date("2000-01-01 " + startTime)
      const end = new Date("2000-01-01 " + endTime)

      if (end > start) {
        const diffMs = end - start
        const diffHours = diffMs / (1000 * 60 * 60)
        $("#taskHours").val(diffHours.toFixed(2))

        // Trigger amount calculation
        $("#taskHours").trigger("input")
      }
    }
  })
})
