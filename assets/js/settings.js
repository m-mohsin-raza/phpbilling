// Settings page functionality - Pure JavaScript and jQuery
$(document).ready(() => {
  // Settings navigation
  $("#settingsNav .nav-link, #settingsNav a").click(function (e) {
    e.preventDefault()

    $("#settingsNav .nav-link, #settingsNav a").removeClass("active")
    $(".settings-section").removeClass("active")

    $(this).addClass("active")

    var sectionId = $(this).data("section")
    $("#" + sectionId).addClass("active")
  })

  // Color picker functionality
  $(".color-preview").click(function () {
    var colorInput = $(this).siblings('input[type="color"]')
    colorInput.click()
  })

  $('input[type="color"]').change(function () {
    var colorValue = $(this).val()
    $(this).siblings(".color-preview").css("background-color", colorValue)
    $(this).siblings('input[type="text"]').val(colorValue)
  })

  // Save all settings
  $("#saveAllSettings").click(() => {
    showNotification("Settings saved successfully!")
  })

  // Logo upload preview
  $("#companyLogo").change((e) => {
    var file = e.target.files[0]
    if (file) {
      var reader = new FileReader()
      reader.onload = (e) => {
        $(".logo-preview img").attr("src", e.target.result)
      }
      reader.readAsDataURL(file)
    }
  })
})

function showNotification(message) {
  alert(message) // Replace with a more sophisticated notification system if needed
}
