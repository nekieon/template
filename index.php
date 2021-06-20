<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/tailwind.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main class="h-screen flex flex-col lg:flex-row">
        <!------------------- SIDEBAR START -------------------->
        <?php include 'sidebar.php';?>

        <!------------------- SIDEBAR END  ----------------------->

        <!------------------- CONTENT START -------------------->
        <div class="w-full bg-gray-100 px-4 py-8 h-full overflow-y-scroll">
            <!-- Title -->
            <h2 class="text-gray-700">Dashboard</h2>

            <!-- Cards -->
            <div class="flex flex-col lg:flex-row mt-4 space-y-4 lg:space-y-0 lg:space-x-4">
                <!-- Card #1 -->
                <div class="p-4 rounded-md bg-blue-500 flex justify-between items-center w-full lg:w-60 overflow-hidden relative shadow-lg">
                    <div class="text-white z-10">
                        <h6 class="text-gray-200">Likes</h6>
                        <h3>560</h3>
                    </div>
                    <!-- Icon -->
                    <i class="fa fa-thumbs-up text-blue-200 text-2xl z-10"></i>
                    <!-- Circle decoration -->
                    <div class="absolute w-24 h-24 -top-10 -right-10 bg-blue-400 rounded-full opacity-50"></div>
                </div>
                <!-- Card #2 -->
                <div class="p-4 rounded-md bg-green-500 flex justify-between items-center w-full lg:w-60 overflow-hidden relative shadow-lg">
                    <div class="text-white z-10">
                        <h6 class="text-gray-200">Views</h6>
                        <h3>250, 000</h3>
                    </div>
                    <!-- Icon -->
                    <i class="fa fa-eye text-green-200 text-2xl z-10"></i>
                    <!-- Circle decoration -->
                    <div class="absolute w-24 h-24 -top-10 -right-10 bg-green-400 rounded-full opacity-50"></div>
                </div>
                <!-- Card #3 -->
                <div class="p-4 rounded-md bg-red-500 flex justify-between items-center w-full lg:w-60 overflow-hidden relative shadow-lg">
                    <div class="text-white z-10">
                        <h6 class="text-gray-200">Comments</h6>
                        <h3>1280</h3>
                    </div>
                    <!-- Icon -->
                    <i class="fa fa-comments text-red-200 text-2xl z-10"></i>
                    <!-- Circle decoration -->
                    <div class="absolute w-24 h-24 -top-10 -right-10 bg-red-400 rounded-full opacity-50"></div>
                </div>
            </div>

            <!-- GRAPH -->
            <div  class="mt-8 w-11/12">
                <h3 class="text-gray-700 my-8">Some Nice Graph</h3>
                <canvas id="graph" width=500>
                    Your browser does not support the canvas element.
                </canvas>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    showGraph();
                });

                async function showGraph() {  
                    try {
                        const request = await fetch('./graph_data.php');
                        const data = await request.json();

                        const months = []; 
                        const hits = [];

                        for (let i in data) {
                            months.push(data[i].month);
                            hits.push(data[i].hits);
                        }

                        const chartdata = {
                            labels: months,
                            datasets: [
                                {
                                    label: 'Hits',
                                    backgroundColor: [
                                        'rgba(227,41,64, 0.4)',
                                        'rgba(255,135,24, 0.4)',
                                        'rgba(15,216,14, 0.4)',
                                        'rgba(14,17,216, 0.4)',
                                        'rgba(162,14,216, 0.4)',
                                        'rgba(216,14,145, 0.4)',
                                        'rgba(162,216,14, 0.4)',
                                        'rgba(1,195,167, 0.4)',
                                        'rgba(195,68,1, 0.4)',
                                        'rgba(1,195,58, 0.4)',
                                    ],
                                    borderColor: [
                                        'rgb(227,41,64)',
                                        'rgb(255,135,24)',
                                        'rgb(15,216,14)',
                                        'rgb(14,17,216)',
                                        'rgb(162,14,216)',
                                        'rgb(216,14,145)',
                                        'rgb(162,216,14)',
                                        'rgb(1,195,167)',
                                        'rgb(195,68,1)',
                                        'rgb(1,195,58)',
                                    ],
                                    borderWidth: 2,
                                    hoverBackgroundColor: '#a1a1a1',
                                    hoverBorderColor: '#666666',
                                    data: hits,
                                }
                            ]
                        };

                        const graphTarget = document.getElementById('graph');

                        const barGraph = new Chart(graphTarget, {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                aspectRatio: 2.5,
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },
                                scales: {
                                    y: {
                                        ticks: {
                                            font: {
                                                weight: 'bold'
                                            }
                                        }
                                    },
                                    x: {
                                        ticks: {
                                            font: {
                                                weight: 'bold'
                                            }
                                        }
                                    }
                                }
                            },
                        });
                    } catch (err) {
                        console.log(err);
                    }
                }
            </script>
        </div>
        <!------------------- CONTENT END  --------------------->
    </main>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="./js/script.js"></script> -->
</body>
</html>