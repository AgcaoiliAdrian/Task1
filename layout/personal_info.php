<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <script src="./script/sidebar.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
        <i class="bi bi-filter-left px-2 bg-dark-blue rounded-md"></i>
      </span>
      <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 w-[300px] overflow-y-auto text-center bg-dark-blue shadow h-screen">
        <div class="text-gray-100 text-xl">
          <div class="p-2.5 mt-1 flex items-center rounded-md">
            <h1 class="text-[15px] text-xl text-gray-200 font-bold">Distance Learning</h1>
            <i class="bi bi-x relative ml-24 cursor-pointer lg:hidden" onclick="Openbar()"></i>
          </div>
          <hr class="my-2 text-gray-600">
    
          <div>
            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
              <i class="bi bi-person-badge-fill"></i>
              <a href="./index.html" class="text-[15px] ml-4 text-gray-200">Profile</a>
            </div>
            <!-- <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
              <i class="bi bi-bookmark-fill"></i>
              <span class="text-[15px] ml-4 text-gray-200">Bookmark</span>
            </div> -->
            <hr class="my-4 text-gray-600">
            <!-- <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
              <i class="bi bi-envelope-fill"></i>
              <span class="text-[15px] ml-4 text-gray-200">Messages</span>
            </div> -->
    
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
              <i class="bi bi-box-arrow-in-right"></i>
              <span class="text-[15px] ml-4 text-gray-200">Logout</span>
            </div>    
          </div>
        </div>
      </div>
</body>
</html>