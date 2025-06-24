// Main JavaScript functionality
$(document).ready(() => {
  // Sidebar toggle functionality
  $("#sidebarToggle").click(() => {
    $(".sidebar").toggleClass("active")
    $(".main-content").toggleClass("active")
  })

  // Initialize tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl))

  // Initialize popovers
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map((popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl))

  // Auto-hide alerts after 5 seconds
  $(".alert").delay(5000).fadeOut()

  // Confirm delete actions
  $('.btn-danger[title="Delete"], .btn-outline-danger[title="Delete"]').click((e) => {
    if (!confirm("Are you sure you want to delete this item?")) {
      e.preventDefault()
    }
  })

  // Format currency inputs
  $(".currency-input").on("input", function () {
    const value = $(this)
      .val()
      .replace(/[^\d.]/g, "")
    if (value) {
      $(this).val("$" + Number.parseFloat(value).toFixed(2))
    }
  })

  // Auto-resize textareas
  $("textarea")
    .each(function () {
      this.setAttribute("style", "height:" + this.scrollHeight + "px;overflow-y:hidden;")
    })
    .on("input", function () {
      this.style.height = "auto"
      this.style.height = this.scrollHeight + "px"
    })
})

// Common utility functions
function formatCurrency(amount, currency = "USD") {
  return new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: currency,
  }).format(amount)
}

function formatDate(date, format = "MM/DD/YYYY") {
  const d = new Date(date)
  const month = String(d.getMonth() + 1).padStart(2, "0")
  const day = String(d.getDate()).padStart(2, "0")
  const year = d.getFullYear()

  switch (format) {
    case "DD/MM/YYYY":
      return `${day}/${month}/${year}`
    case "YYYY-MM-DD":
      return `${year}-${month}-${day}`
    default:
      return `${month}/${day}/${year}`
  }
}

function showNotification(message, type = "success") {
  const alertClass =
    type === "success"
      ? "alert-success"
      : type === "error"
        ? "alert-danger"
        : type === "warning"
          ? "alert-warning"
          : "alert-info"

  const alert = $(`
        <div class="alert ${alertClass} alert-dismissible fade show position-fixed" 
             style="top: 80px; right: 20px; z-index: 9999; min-width: 300px;">
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    `)

  $("body").append(alert)
  setTimeout(() => alert.fadeOut(), 5000)
}

function validateEmail(email) {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return re.test(email)
}

function validatePhone(phone) {
  const re = /^\+?[\d\s\-$$$$]+$/
  return re.test(phone)
}

// Export functions for use in other files
window.BixiTech = {
  formatCurrency,
  formatDate,
  showNotification,
  validateEmail,
  validatePhone,
}
