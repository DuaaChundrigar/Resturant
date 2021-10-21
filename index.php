<?php

session_start();

if(!isset($_SESSION['email'])){
    header("Location:register_login.php");
}


echo "Welcome " . $_SESSION['email'];
        // echo "<br> Click here to  <a href='logout.php'> LogOut </a> " ;
        
        // // session_start();
        
        // session_destroy();
        // setcookie("email", "", time() - 3600);
        //echo "Click here to  <a href='register_login.php'> LogOut </a> " ;

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Index</title>
</head>
<body>


<div class="flex justify-between bg-blue-500">
        <img src="https://picsum.photos/50" class="m-1 rounded-full">
    <div class="mt-4 ml-auto mr-auto text-3xl text-white">
    <h1 >Resturant</h1>
    </div>
        <div class="flex flex-row-reverse ">
            <div >
                <button class="px-8 py-1 mt-4 mr-8 text-white bg-blue-400 rounded ">
                     <a  href="logout.php"> Logout</a>
                </button>
            </div>
        </div>


</div>
    
<div class="grid grid-cols-12 p-2 bg-white">
            <div class="col-span-1 p-5 bg-gray-700">
             <a href="#">   <img src="menu.png" class="rounded-full "></a>
             <a href="#">   <img src="food.png" class="mt-4 rounded-full"></a>
             <a href="#">   <img src="drink.png" class="mt-4 rounded-full"></a>
             <a href="#">   <img src="bill.png" class="mt-4 rounded-full"></a>
            
                
            </div> 

        <div class="grid col-span-5 grid-rows-3 p-5 ml-5 bg-gray-700 ">       
            <div class="grid grid-cols-3 row-span-1 p-2 m-5 bg-blue-200 rounded ">
                <div class="">
                    <button class="px-8 py-1 mt-4 mr-4 text-white bg-blue-400 rounded text-1xl">
                        Biryani
                    </button>
                </div>
                <div class="">
                    <button class="px-8 py-1 mt-4 mr-4 text-white bg-blue-400 rounded text-1xl">
                        Qorma
                    </button>
                </div>
                <div class="">
                    <button class="px-8 py-1 mt-4 mr-4 text-white bg-blue-400 rounded text-1xl">
                       Ch Tikka
                    </button>
                </div>
                <div class="">
                    <button class="px-8 py-1 mt-4 mr-4 text-white bg-blue-400 rounded text-1xl">
                        Mix Veg
                    </button>
                </div>
                <div class="">
                    <button class="px-8 py-1 mt-4 mr-4 text-white bg-blue-400 rounded text-1xl">
                        Daal
                    </button>
                </div>
      
            </div>
                
        </div>   
            <div class="col-span-6 ml-5 bg-blue-200 ">
              <div class="m-5 "><p class="text-2xl text-center text-white bg-red-400">Order Details:</p>
                
                  
                <table class="flex justify-center">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Item Name </th>
                            <th> Quantity </th>
                            <th> Unit </th>
                            <th> Price </th>
                            <th> Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mutton Karhai</td>
                            <td>
                                <button class="px-3 py-1 ml-2 text-white bg-blue-400 rounded ">+</button>
                                1 
                                <button class="px-3 py-1 text-white bg-blue-400 rounded ">-</button>
                            </td>
                            <td>Plate </td>
                            <td>1200</td>
                            <td> <a href="#">   <img src="trash.png" class="w-10 h-10 rounded-full"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>      

        
</body>
</html>






 