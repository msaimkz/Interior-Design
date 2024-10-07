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
            labels: ["Mon", "Tue", "Wed","Thurs","Fri","Sat","Sun"],
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

SaleChart();
CityChart();
