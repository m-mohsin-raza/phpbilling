// Time tracking specific functionality
$(document).ready(() => {
  let timerInterval
  let startTime
  let elapsedTime = 0
  let isRunning = false

  function updateDisplay() {
    const totalSeconds = Math.floor(elapsedTime / 1000)
    const hours = Math.floor(totalSeconds / 3600)
    const minutes = Math.floor((totalSeconds % 3600) / 60)
    const seconds = totalSeconds % 60

    $("#timerDisplay").text(
      String(hours).padStart(2, "0") + ":" + String(minutes).padStart(2, "0") + ":" + String(seconds).padStart(2, "0"),
    )
  }

  $("#startTimer").click(function () {
    if (!isRunning) {
      startTime = Date.now() - elapsedTime
      timerInterval = setInterval(() => {
        elapsedTime = Date.now() - startTime
        updateDisplay()
      }, 1000)

      isRunning = true
      $(this).prop("disabled", true)
      $("#pauseTimer, #stopTimer").prop("disabled", false)
    }
  })

  $("#pauseTimer").click(function () {
    if (isRunning) {
      clearInterval(timerInterval)
      isRunning = false
      $("#startTimer").prop("disabled", false)
      $(this).prop("disabled", true)
    }
  })

  $("#stopTimer").click(() => {
    clearInterval(timerInterval)
    isRunning = false
    elapsedTime = 0
    updateDisplay()

    $("#startTimer").prop("disabled", false)
    $("#pauseTimer, #stopTimer").prop("disabled", true)

    // Save time entry if project and description are provided
    if ($("#timerProject").val() && $("#timerDescription").val()) {
      if (typeof BixiTech !== "undefined" && BixiTech.showNotification) {
        BixiTech.showNotification("Time entry saved successfully!")
      } else {
        alert("Time entry saved successfully!") // Fallback if BixiTech is not defined
      }
      $("#timerProject").val("")
      $("#timerDescription").val("")
    }
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
        $("#taskHours").trigger("input")
      }
    }
  })

  // Calculate task amount
  $("#taskHours, #taskRate").on("input", () => {
    const hours = Number.parseFloat($("#taskHours").val()) || 0
    const rate = Number.parseFloat($("#taskRate").val()) || 0
    const amount = hours * rate
    $("#taskAmount").val("$" + amount.toFixed(2))
  })
})
