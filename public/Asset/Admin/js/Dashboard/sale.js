function SaleChart() {
    const ctx = document.getElementById("SaleChart");

    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
            datasets: [
                {
                    label: "Profit",
                    data: [10, 15, 8, 12, 18, 20, 11],
                    borderColor: "rgb(215, 124, 247)",
                    borderWidth: 1,
                    fill: false,
                    lineTension: 0.3,
                },
                {
                    label: "Revenue",
                    data: [20, 25, 18, 30, 28, 35, 22],
                    borderColor: "rgb(12, 215, 177)",
                    borderWidth: 1,
                    fill: false,
                    lineTension: 0.3,
                },
                {
                    label: "Sales",
                    data: [15, 22, 20, 25, 30, 35, 90],
                    borderColor: "rgb(84, 109, 254)",
                    borderWidth: 1,
                    fill: false,
                    lineTension: 0.3,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    ticks: {
                        autoSkip: true,
                    }
                }
            },
            plugins: {
                tooltip: {
                    enabled: true,
                    mode: "index",
                    intersect: false,
                    callbacks: {
                        label: function (tooltipItem) {
                            const label = tooltipItem.dataset.label || "";
                            const value = tooltipItem.raw;

                            if (label === "Profit" || label === "Revenue") {
                                return `${label}: $${value.toFixed(2)}`; // Formatting as currency
                            }

                            // Return sales as normal
                            return `${label}: ${value}`;
                        },
                    },
                },
            },

            layout: {
                padding: 20
            },

        },
    });
}

function CityChart() {
    const ctx = document.getElementById("CityChart");

    new Chart(ctx, {
        type: "radar",
        data: {
            labels: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
            datasets: [
                {
                    label: "Karachi",
                    data: [65, 59, 90, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: "rgb(215, 124, 247,0.45)",
                    borderColor: "rgb(215, 124, 247)",
                    pointBackgroundColor: "rgb(215, 124, 247)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgb(215, 124, 247)",
                },
                {
                    label: "Lahore",
                    data: [28, 48, 40, 19, 96, 27, 100],
                    fill: true,
                    backgroundColor: "rgb(12, 215, 177,0.25)",
                    borderColor: "rgb(12, 215, 177)",
                    pointBackgroundColor: "rgb(12, 215, 177)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgb(12, 215, 177)",
                },
                {
                    label: "Islamabad",
                    data: [58, 28, 46, 21, 16, 67, 100],
                    fill: true,
                    backgroundColor: "rgb(84, 109, 254,0.55)",
                    borderColor: "rgb(84, 109, 254)",
                    pointBackgroundColor: "rgb(84, 109, 254)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgb(84, 109, 254)",
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    ticks: {
                        autoSkip: true,
                    }
                }
            },
            layout: {
                padding: 20
            },
            elements: {
                line: {
                    borderWidth: 3,
                },
            },
            scales: {
                r: {
                    ticks: {
                        min: 0,
                        max: 100,
                        stepSize: 100,

                    },
                },
            },
        },
    });
}

function OrderChart() {
    const ctx = document.getElementById("OrderChart");

    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "Paid",
                    type:"bar",
                    data: [10, 20, 30, 40, 20, 67, 30, 90, 50, 60, 100, 32,20],
                    backgroundColor: "rgb(84,109,254)",
                    borderColor: "rgb(84,109,254)",
                    borderWidth: 1,
                    borderRadius: 10, 
                    barThickness: 8, 
                },
                {
                    label: "Action",
                    data: [20, 25, 18, 30, 28, 35, 22, 77, 84, 90, 21, 90],
                    borderColor: "rgb(231, 176, 250)",
                    backgroundColor: "rgb(231, 176, 250)",
                    borderDash:[5,5],
                    borderWidth: 2,
                    fill: false,
                    lineTension: 0.3,
                    pointRadius: 0,
                    pointHoverRadius: 5,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                mode: "index",
                intersect: false,
            },
            plugins: {
                tooltip: {
                    enabled: true,
                    mode: "index",
                    intersect: false,
                    callbacks: {
                        label: function (tooltipItem) {
                            const label = tooltipItem.dataset.label || "";
                            const value = tooltipItem.raw;
                            return `${label}: ${value}`;
                        },
                    },
                },
            },
            layout: {
                padding: 20,
            },
            scales: {
                x: {
                    grid: {
                        display: false, 
                        drawBorder: false, 
                    },
                    ticks: {
                        color: "rgba(0,0,0,0.8)", 
                    },
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        display: false, 
                        drawBorder: false, 
                    },
                    ticks: {
                        color: "rgba(0,0,0,0.8)", 
                    },
                },
            },
        },
    });
    
}

function RecentOrderChart() {
    const ctx = document.getElementById("RecentOrderChart").getContext("2d");

    new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Delivered", "Pending", "Cancelled"],
            datasets: [
                {
                    label: "Orders",
                    data: [65, 59, 90],
                    backgroundColor: [
                        "rgb(255, 99, 132)",
                        "rgb(54, 162, 235)",
                        "rgb(255, 205, 86)",
                    ],
                    hoverOffset: 4,
                    
                 
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Allows custom canvas size
            layout: {
                padding: 10,
            },
            plugins: {
                tooltip: {
                    enabled: true,
                },
                legend: {
                    display: true, // Shows the legend
                    position: "bottom",
                },
                // Custom plugin for center text
                centerText: {
                    display: true,
                    text: "Total: 214", // Default text
                },
            },
        },
        plugins: [
            {
                id: "centerText",
                beforeDraw(chart) {
                    const { width } = chart;
                    const { top, bottom } = chart.chartArea;
                    const ctx = chart.ctx;
                    const total = 2000;
    
                    
                    ctx.save();
                    ctx.font = "bold 20px Arial";
                    ctx.textAlign = "center";
                    ctx.fillStyle = "#333";
                    ctx.fillText(`Total: ${total}`, width / 2, (top + bottom) / 2);
                    ctx.restore();
                },
            },
        ],
    });
    
}

SaleChart();
OrderChart();
CityChart();
RecentOrderChart();