// Calculation functions for invoices, estimates, etc.
$(document).ready(() => {
  // Invoice calculations
  function calculateInvoiceTotal() {
    let subtotal = 0
    $("#invoiceItemsTable tbody tr").each(function () {
      const qty = Number.parseFloat($(this).find('input[type="number"]').eq(0).val()) || 0
      const rate = Number.parseFloat($(this).find('input[type="number"]').eq(1).val()) || 0
      const amount = qty * rate
      $(this)
        .find("input[readonly]")
        .val("$" + amount.toFixed(2))
      subtotal += amount
    })

    const taxRate = Number.parseFloat($("#invoiceTaxRate").val()) || 0
    const tax = subtotal * (taxRate / 100)
    const total = subtotal + tax

    $("#invoiceSubtotal").text("$" + subtotal.toFixed(2))
    $("#invoiceTax").text("$" + tax.toFixed(2))
    $("#invoiceTotal").text("$" + total.toFixed(2))
  }

  // Estimate calculations
  function calculateEstimateTotal() {
    let subtotal = 0
    $("#estimateItemsTable tbody tr").each(function () {
      const qty = Number.parseFloat($(this).find('input[type="number"]').eq(0).val()) || 0
      const rate = Number.parseFloat($(this).find('input[type="number"]').eq(1).val()) || 0
      const amount = qty * rate
      $(this)
        .find("input[readonly]")
        .val("$" + amount.toFixed(2))
      subtotal += amount
    })

    const taxRate = Number.parseFloat($("#estimateTaxRate").val()) || 0
    const tax = subtotal * (taxRate / 100)
    const total = subtotal + tax

    $("#estimateSubtotal").text("$" + subtotal.toFixed(2))
    $("#estimateTax").text("$" + tax.toFixed(2))
    $("#estimateTotal").text("$" + total.toFixed(2))
  }

  // Payment net amount calculation
  $("#paymentAmount, #paymentWireFee").on("input", () => {
    const amount = Number.parseFloat($("#paymentAmount").val()) || 0
    const wireFee = Number.parseFloat($("#paymentWireFee").val()) || 0
    const netAmount = amount - wireFee
    $("#paymentNetAmount").val(netAmount.toFixed(2))
  })

  // Bind calculation events
  $(document).on("input", "#invoiceItemsTable input, #invoiceTaxRate", calculateInvoiceTotal)
  $(document).on("input", "#estimateItemsTable input, #estimateTaxRate", calculateEstimateTotal)

  // Add new invoice item
  $("#addInvoiceItem").click(() => {
    const newRow = `
            <tr>
                <td><input type="text" class="form-control form-control-sm" placeholder="Item description"></td>
                <td><input type="number" class="form-control form-control-sm" value="1" min="0.25" step="0.25"></td>
                <td><input type="number" class="form-control form-control-sm" value="100" min="0" step="1"></td>
                <td><input type="text" class="form-control form-control-sm" value="$100.00" readonly></td>
                <td><button type="button" class="btn btn-sm btn-outline-danger remove-item"><i class="bi bi-trash"></i></button></td>
            </tr>
        `
    $("#invoiceItemsTable tbody").append(newRow)
    calculateInvoiceTotal()
  })

  // Add new estimate item
  $("#addEstimateItem").click(() => {
    const newRow = `
            <tr>
                <td><input type="text" class="form-control form-control-sm" placeholder="Item description"></td>
                <td><input type="number" class="form-control form-control-sm" value="1" min="0.25" step="0.25"></td>
                <td><input type="number" class="form-control form-control-sm" value="100" min="0" step="1"></td>
                <td><input type="text" class="form-control form-control-sm" value="$100.00" readonly></td>
                <td><button type="button" class="btn btn-sm btn-outline-danger remove-item"><i class="bi bi-trash"></i></button></td>
            </tr>
        `
    $("#estimateItemsTable tbody").append(newRow)
    calculateEstimateTotal()
  })

  // Remove item
  $(document).on("click", ".remove-item", function () {
    $(this).closest("tr").remove()
    calculateInvoiceTotal()
    calculateEstimateTotal()
  })
})
