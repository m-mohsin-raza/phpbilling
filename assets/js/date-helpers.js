// Date helper functions
$(document).ready(() => {
  // Set default dates for various forms
  function setDefaultDates() {
    const today = new Date().toISOString().split("T")[0]

    // Set today's date for various date inputs
    $("#invoiceDate, #estimateDate, #paymentDate, #expenseDate, #taskDate, #contractStartDate, #memberStartDate").val(
      today,
    )

    // Set due dates (15 days from today)
    const dueDate = new Date()
    dueDate.setDate(dueDate.getDate() + 15)
    $("#invoiceDueDate").val(dueDate.toISOString().split("T")[0])

    // Set estimate valid until (30 days from today)
    const validUntil = new Date()
    validUntil.setDate(validUntil.getDate() + 30)
    $("#estimateValidUntil").val(validUntil.toISOString().split("T")[0])

    // Set contract end date (6 months from today)
    const contractEndDate = new Date()
    contractEndDate.setMonth(contractEndDate.getMonth() + 6)
    $("#contractEndDate").val(contractEndDate.toISOString().split("T")[0])
  }

  // Date range functions for reports
  window.setDateRange = (days) => {
    const endDate = new Date()
    const startDate = new Date()
    startDate.setDate(startDate.getDate() - days)

    $("#startDate").val(startDate.toISOString().split("T")[0])
    $("#endDate").val(endDate.toISOString().split("T")[0])
  }

  // Initialize default dates
  setDefaultDates()

  // Legacy date setters for backward compatibility
  const today = new Date().toISOString().split("T")[0]
  $("#taskDate").val(today)
  $("#projectStartDate").val(today)
  $("#estimateDate").val(today)

  const validUntil = new Date()
  validUntil.setDate(validUntil.getDate() + 30)
  $("#estimateValidUntil").val(validUntil.toISOString().split("T")[0])

  $("#invoiceDate").val(today)
  const dueDate = new Date()
  dueDate.setDate(dueDate.getDate() + 15)
  $("#invoiceDueDate").val(dueDate.toISOString().split("T")[0])

  $("#contractStartDate").val(today)
  const endDate = new Date()
  endDate.setMonth(endDate.getMonth() + 6)
  $("#contractEndDate").val(endDate.toISOString().split("T")[0])
})
