<?php
function active($currect_page) {
    $url = $_SERVER['REQUEST_URI'];
    
    if($currect_page == $url){
        echo 'opacity-100 bg-gray-800 text-white';
    }
}
?>

<div class="w-full lg:w-60 h-24 lg:h-full bg-gray-700 flex flex-row lg:flex-col flex-shrink-0 justify-between lg:justify-start">
    <!-- BRAND -->
    <a class="flex flex-row items-center space-x-4 p-4" href="#">
        <img src="./img/logo.png" alt="Logo" class="w-14 h-14 object-contain">
        <h6 class="text-white break-all">Company</h6>
    </a>
    <!-- MENU -->
    <div class="flex flex-row lg:flex-col items-center lg:mt-8 divide-y divide-gray-600">
        <a href="./" class="text-white w-full text-sm space-x-2 p-4 group opacity-70 hover:opacity-100 hover:bg-gray-800 <?php active('/');?>">
            <i class="fa fa-tachometer-alt"></i>
            <span class="hidden lg:inline-block">Dashboard</span>
        </a>
        <a href="./sales.php" class="text-white w-full text-sm space-x-2 p-4 group opacity-70 hover:opacity-100 hover:bg-gray-800 <?php active('/sales.php');?>">
            <i class="fa fa-money-bill"></i>
            <span class="hidden lg:inline-block">Sales</span>
        </a>
        <a href="#" class="text-white w-full text-sm space-x-2 p-4 group opacity-70 hover:opacity-100 hover:bg-gray-800 <?php active('/inventory.php');?>">
            <i class="fa fa-warehouse"></i>
            <span class="hidden lg:inline-block">Inventory</span>
        </a>
    </div>
</div>