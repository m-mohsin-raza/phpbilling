// Form handling and validation
$(document).ready(() => {
  // Form validation
  $("form").on("submit", function (e) {
    let isValid = true
    const form = $(this)

    // Clear previous validation states
    form.find(".is-invalid").removeClass("is-invalid")
    form.find(".invalid-feedback").remove()

    // Validate required fields
    form.find("[required]").each(function () {
      const field = $(this)
      const value = field.val().trim()

      if (!value) {
        field.addClass("is-invalid")
        field.after('<div class="invalid-feedback">This field is required.</div>')
        isValid = false
      }
    })

    // Validate email fields
    form.find('input[type="email"]').each(function () {
      const field = $(this)
      const value = field.val().trim()

      if (value && !BixiTech.validateEmail(value)) {
        field.addClass("is-invalid")
        field.after('<div class="invalid-feedback">Please enter a valid email address.</div>')
        isValid = false
      }
    })

    // Validate phone fields
    form.find('input[type="tel"]').each(function () {
      const field = $(this)
      const value = field.val().trim()

      if (value && !BixiTech.validatePhone(value)) {
        field.addClass("is-invalid")
        field.after('<div class="invalid-feedback">Please enter a valid phone number.</div>')
        isValid = false
      }
    })

    if (!isValid) {
      e.preventDefault()
      BixiTech.showNotification("Please correct the errors in the form.", "error")
    }
  })

  // Auto-save form data to localStorage
  $("form[data-autosave]").each(function () {
    const form = $(this)
    const formId = form.attr("id") || "form_" + Math.random().toString(36).substr(2, 9)

    // Load saved data
    const savedData = localStorage.getItem("form_" + formId)
    if (savedData) {
      const data = JSON.parse(savedData)
      Object.keys(data).forEach((key) => {
        const field = form.find(`[name="${key}"]`)
        if (field.length) {
          field.val(data[key])
        }
      })
    }

    // Save data on change
    form.on("change input", () => {
      const formData = {}
      form.find("input, select, textarea").each(function () {
        const field = $(this)
        if (field.attr("name")) {
          formData[field.attr("name")] = field.val()
        }
      })
      localStorage.setItem("form_" + formId, JSON.stringify(formData))
    })

    // Clear saved data on successful submit
    form.on("submit", () => {
      localStorage.removeItem("form_" + formId)
    })
  })
})
