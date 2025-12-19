document.addEventListener("DOMContentLoaded", function () {

    // color
    const colors = {
        deep: "#2C5565",
        medium: "#4E9C94",
        soft: "#82BEAA",
        light: "#A6D7C8",
        dark: "#23424E"
    };

  // grafik langkah mingguan
    new Chart(document.getElementById("stepsChart"), {
        type: "line",
        data: {
            labels: ["1-7", "8-14", "15-21", "22-28"],
            datasets: [{
                label: "Langkah",
                data: [10000, 12000, 8000, 11000],
                borderColor: colors.deep,
                backgroundColor: colors.light,
                borderWidth: 3,
                tension: 0.3,
                pointBackgroundColor: colors.medium,
                pointBorderColor: "#fff",
                pointBorderWidth: 2,
                pointRadius: 6
            }]
        },
        options: { responsive: true }
    });

//grafik kalori 
    new Chart(document.getElementById("calorieChart"), {
        type: "bar",
        data: {
            labels: ["Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min"],
            datasets: [{
                label: "Kalori (Kkal)",
                data: [420, 380, 450, 500, 480, 600, 350],
                backgroundColor: [
                    colors.soft,
                    colors.medium,
                    colors.deep,
                    colors.light,
                    colors.medium,
                    colors.deep,
                    colors.soft
                ],
                borderRadius: 8
            }]
        },
        options: { responsive: true }
    });

//grafik durasi olahraga
    new Chart(document.getElementById("exerciseChart"), {
        type: "line",
        data: {
            labels: ["Sep", "Okt", "Nov", "Des"],
            datasets: [{
                label: "Durasi (Menit)",
                data: [120, 150, 180, 300],
                borderColor: colors.medium,
                backgroundColor: colors.soft + "55",
                borderWidth: 4,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: colors.deep,
                pointRadius: 7
            }]
        },
        options: { responsive: true }
    });

    /* pie chart */
    new Chart(document.getElementById("stressChartPie"), {
        type: "pie",
        data: {
            labels: ["Minggu 1-7", "8-14", "15-21", "22-28"],
            datasets: [{
                data: [6, 5, 4, 5],
                backgroundColor: [
                    colors.deep,
                    colors.medium,
                    colors.soft,
                    colors.light
                ],
                borderWidth: 2,
                borderColor: "#fff"
            }]
        },
        options: { responsive: true }
    });

});
