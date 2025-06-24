// Form handling and validation utilities - Pure JavaScript and jQuery
$(document).ready(() => {
  // Enhanced form validation
  $("form").on("submit", function (e) {
    var isValid = true
    var form = $(this)

    // Clear previous validation states
    form.find(".is-invalid").removeClass("is-invalid")
    form.find(".invalid-feedback").remove()

    // Validate required fields
    form.find("[required]").each(function () {
      var field = $(this)
      var value = field.val().trim()

      if (!value) {
        field.addClass("is-invalid")
        field.after('<div class="invalid-feedback">This field is required.</div>')
        isValid = false
      }
    })

    // Validate email fields
    form.find('input[type="email"]').each(function () {
      var field = $(this)
      var value = field.val().trim()

      if (value && !validateEmail(value)) {
        field.addClass("is-invalid")
        field.after('<div class="invalid-feedback">Please enter a valid email address.</div>')
        isValid = false
      }
    })

    // Validate phone fields
    form.find('input[type="tel"]').each(function () {
      var field = $(this)
      var value = field.val().trim()

      if (value && !validatePhone(value)) {
        field.addClass("is-invalid")
        field.after('<div class="invalid-feedback">Please enter a valid phone number.</div>')
        isValid = false
      }
    })

    if (!isValid) {
      e.preventDefault()
      showNotification("Please correct the errors in the form.", "error")
    }
  })

  // Auto-calculate totals in invoice/estimate forms
  $(document).on("input", ".calculate-total", () => {
    calculateFormTotal()
  })

  // Add/remove item rows
  $(document).on("click", ".add-item-row", () => {
    addItemRow()
  })

  $(document).on("click", ".remove-item-row", function () {
    $(this).closest("tr").remove()
    calculateFormTotal()
  })
})

function calculateFormTotal() {
  var subtotal = 0

  $(".item-row").each(function () {
    var qty = Number.parseFloat($(this).find(".qty-input").val()) || 0
    var rate = Number.parseFloat($(this).find(".rate-input").val()) || 0
    var amount = qty * rate

    $(this)
      .find(".amount-display")
      .val("$" + amount.toFixed(2))
    subtotal += amount
  })

  var taxRate = Number.parseFloat($(".tax-rate-input").val()) || 0
  var tax = subtotal * (taxRate / 100)
  var total = subtotal + tax

  $(".subtotal-display").text("$" + subtotal.toFixed(2))
  $(".tax-display").text("$" + tax.toFixed(2))
  $(".total-display").text("$" + total.toFixed(2))
}

function addItemRow() {
  var newRow =
    '<tr class="item-row">' +
    '<td><input type="text" class="form-control form-control-sm" placeholder="Item description"></td>' +
    '<td><input type="number" class="form-control form-control-sm qty-input" value="1" min="0.25" step="0.25"></td>' +
    '<td><input type="number" class="form-control form-control-sm rate-input" value="100" min="0" step="1"></td>' +
    '<td><input type="text" class="form-control form-control-sm amount-display" value="$100.00" readonly></td>' +
    '<td><button type="button" class="btn btn-sm btn-outline-danger remove-item-row"><i class="bi bi-trash"></i></button></td>' +
    "</tr>"
  $(".items-table tbody").append(newRow)
  calculateFormTotal()
}

function validateEmail(email) {
  var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return re.test(email)
}

function validatePhone(phone) {
  var re = /^\d{10}$/ // Basic 10-digit phone number validation
  return re.test(phone)
}

function showNotification(message, type) {
  // Implement your notification logic here.  This is a placeholder.
  alert(type.toUpperCase() + ": " + message)
}
