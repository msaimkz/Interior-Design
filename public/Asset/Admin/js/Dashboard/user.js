function SessionChart() {
    const ctx = document.getElementById("SessionChart");

    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                    label: "Click",
                    data: [10, 20, 30, 40, 20, 67, 30, 90, 50, 60, 100, 32,20],
                    borderColor: "rgba(84, 109, 254, 1)",
                    backgroundColor: "rgba(84, 109, 254, 0.2)",
                    borderWidth: 2,
                    fill: true,
                    lineTension: 0.3,
                    pointRadius: 0,
                    pointHoverRadius: 5,
                },
                {
                    label: "Action",
                    data: [20, 25, 18, 30, 28, 35, 22, 77, 84, 90, 21, 90],
                    borderColor: "rgba(231, 176, 250, 1)",
                    backgroundColor: "rgba(231, 176, 250, 0.2)",
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

function WeekChart() {
    const ctx = document.getElementById("WeekChart");

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

SessionChart();
WeekChart();
