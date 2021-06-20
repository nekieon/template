<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            <h2 class="text-gray-700">Sales</h2>

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
            <canvas id="graph" class="mt-8 w-56">
                Your browser does not support the canvas element.
            </canvas>
        </div>
        <!------------------- CONTENT END  --------------------->
    </main>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>