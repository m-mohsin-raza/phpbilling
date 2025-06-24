import { Chart } from "@/components/ui/chart"
// Chart initialization - Using Chart.js CDN (no imports needed)
function initializeReportsCharts() {
  // Revenue Trend Chart
  var revenueCtx = document.getElementById("revenueChart")
  if (revenueCtx) {
    new Chart(revenueCtx.getContext("2d"), {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
        datasets: [
          {
            label: "Revenue",
            data: [12000, 15000, 18000, 14000, 22000, 25000, 28000, 24000, 30000, 32000],
            borderColor: "#4361ee",
            backgroundColor: "rgba(67, 97, 238, 0.1)",
            tension: 0.4,
            fill: true,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              callback: (value) => "$" + value.toLocaleString(),
            },
          },
        },
      },
    })
  }
}

// Date range utilities for reports
function setDateRange(days) {
  var endDate = new Date()
  var startDate = new Date()
  startDate.setDate(startDate.getDate() - days)

  $("#startDate").val(startDate.toISOString().split("T")[0])
  $("#endDate").val(endDate.toISOString().split("T")[0])
}

function updateReports() {
  console.log("Updating reports for date range:", $("#startDate").val(), "to", $("#endDate").val())
  showNotification("Reports updated for selected date range!", "success")
}

// Mock implementation for $ and showNotification to avoid errors.  These should be defined elsewhere in the application.
var $ = $ || {}
$.prototype.val = () => {}

function showNotification(message, type) {
  console.log("Notification:", message, "Type:", type)
}
