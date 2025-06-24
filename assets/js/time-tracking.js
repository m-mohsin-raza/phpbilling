// Time tracking functionality - Pure JavaScript and jQuery
$(document).ready(() => {
  var timerInterval
  var startTime
  var elapsedTime = 0
  var isRunning = false

  function updateDisplay() {
    var totalSeconds = Math.floor(elapsedTime / 1000)
    var hours = Math.floor(totalSeconds / 3600)
    var minutes = Math.floor((totalSeconds % 3600) / 60)
    var seconds = totalSeconds % 60

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

  function showNotification(message) {
    alert(message) // Replace with a more sophisticated notification system if needed
  }

  $("#stopTimer").click(() => {
    clearInterval(timerInterval)
    isRunning = false
    elapsedTime = 0
    updateDisplay()

    $("#startTimer").prop("disabled", false)
    $("#pauseTimer, #stopTimer").prop("disabled", true)

    if ($("#timerProject").val() && $("#timerDescription").val()) {
      showNotification("Time entry saved successfully!")
      $("#timerProject").val("")
      $("#timerDescription").val("")
    }
  })

  // Calculate task amount
  $("#taskHours, #taskRate").on("input", () => {
    var hours = Number.parseFloat($("#taskHours").val()) || 0
    var rate = Number.parseFloat($("#taskRate").val()) || 0
    var amount = hours * rate
    $("#taskAmount").val("$" + amount.toFixed(2))
  })
})
