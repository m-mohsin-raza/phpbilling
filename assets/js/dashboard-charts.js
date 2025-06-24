import { Chart } from "chart.js/auto"
// Dashboard charts initialization
$(document).ready(() => {
  // Revenue Chart
  const revenueCtx = document.getElementById("revenueChart").getContext("2d")
  new Chart(revenueCtx, {
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
})
