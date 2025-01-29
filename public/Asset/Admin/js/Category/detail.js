
function CategorySummaryChart() {
    const ctx = document.getElementById("CategorySummary");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
            datasets: [
                {
                    label: "This Week",
                    data: [65, 59, 90, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: "rgb(84,109,254)",
                    borderColor: "rgb(84,109,254)",
                    borderWidth: 1,
                    borderRadius: 10, 
                    barThickness: 8, 
                   
                },
                {
                    label: "Last Week",
                    data: [28, 48, 40, 19, 96, 27, 100],
                    fill: true,
                    backgroundColor: "rgb(215,124,247)",
                    borderColor: "rgb(215,124,247)",
                    borderWidth: 1,
                    borderRadius: 10, 
                    barThickness: 8, 
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: 20,
            },
            scales: {
                x: {
                    categoryPercentage: 2, 
                    barPercentage: 0.9, 
                    ticks: {
                        autoSkip: true,
                    },
                    grid: {
                        display: false, // Removes gridlines
                    },
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 20, // Adjust y-axis step size
                    },
                    grid: {
                        display: false,
                        drawBorder: false,
                    },
                },
            },
            plugins: {
                tooltip: {
                    enabled: true,
                },
            },
        },
    });  
}

function TopSellingSubCaregory(){
    const ctx = document.getElementById("TopSellingSubCaregory");

    new Chart(ctx, {
        type: "radar",
        data: {
            labels: ["Mon", "Tue", "Wed", "Thurs", "Fri", "Sat", "Sun"],
            datasets: [
                {
                    label: "Chair",
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
                    label: "Sofa",
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
                    label: "Table",
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

CategorySummaryChart()
TopSellingSubCaregory()