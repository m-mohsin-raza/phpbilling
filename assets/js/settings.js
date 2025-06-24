// Settings page functionality
$(document).ready(() => {
  // Settings navigation
  $("#settingsNav a").click(function (e) {
    e.preventDefault()

    // Remove active class from all nav links and sections
    $("#settingsNav a").removeClass("active")
    $(".settings-section").removeClass("active")

    // Add active class to clicked nav link
    $(this).addClass("active")

    // Show corresponding section
    const section = $(this).data("section")
    $("#" + section).addClass("active")
  })

  // Color picker functionality
  $("#primaryColorPicker").change(function () {
    const color = $(this).val()
    $("#primaryColor").val(color)
    $(".color-preview").first().css("background-color", color)
  })

  $("#secondaryColorPicker").change(function () {
    const color = $(this).val()
    $("#secondaryColor").val(color)
    $(".color-preview").last().css("background-color", color)
  })

  // Save all settings
  $("#saveAllSettings").click(() => {
    // Here you would typically make an AJAX call to save all settings
    if (typeof BixiTech !== "undefined") {
      BixiTech.showNotification("Settings saved successfully!")
    } else {
      alert("Settings saved successfully!") // Fallback if BixiTech is not defined
    }
  })

  // Logo upload preview
  $("#companyLogo").change((e) => {
    const file = e.target.files[0]
    if (file) {
      const reader = new FileReader()
      reader.onload = (e) => {
        $(".logo-preview img").attr("src", e.target.result)
      }
      reader.readAsDataURL(file)
    }
  })
})
