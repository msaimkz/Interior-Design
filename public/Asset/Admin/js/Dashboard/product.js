function CategoryChart() {
    const ctx = document.getElementById("CategoryChart");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Furniture", "Kitchen", "BathRoom", "BedRoom", "StoreRoom"],
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
            indexAxis: 'y',
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

CategoryChart()