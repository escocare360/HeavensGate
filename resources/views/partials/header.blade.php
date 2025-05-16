<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fixed Layout with Scrollable Main</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
     <!--Navbar font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

 <style>
    .dm-sans-font {
        font-family: "DM Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        color:black;
    }
    html, body {
      height: 100%;
      margin: 0;
      overflow: hidden; /* Prevent body scroll */
    }

    .top-navbar {
      height: 3rem;
      background-color: #313a46;
      color: white;
      display: flex;
      align-items: center;
      padding-left: 1rem;
      
    }

    .layout {
      display: flex;
      height: calc(100% - 3rem - 0rem); /* subtract navbar and footer height */
      background-color: #f9fafd;
      
    }

    .sidebar {
      width: 250px;
      background-color:white;
      padding: 1rem;
      overflow-y: auto; /* Enable vertical scrolling */
      border-right: 1px solid #ddd; /* light gray right border */
    overflow-x: hidden;  
      flex-shrink: 0;        /* Stop it from shrinking in flex */
    }
    .card {
        width: 100%;
    }
    .main-content {
      flex: 1;
      overflow-y: auto;
      padding: 1rem;
      background-color: #ffffff;
    }

    .footer {
      height: 3rem;
     background-color: #313a46;
      text-align: center;
      line-height: 3rem;
    }
    a:hover {
        text-decoration: none;
        color: #313a46;
    }
    .text-secondary{
        font-size: 15px;
    }
    .text-secondary:hover{
         color: #313a46;
    }
    .spinner-grow{
        animation-duration: 2s !important;
        box-shadow: 0 0 12px rgba(72, 239, 160, 0.6); /* Add glow */
        width: 1rem;
        height: 1rem;
    }
  </style>
</head>
<body>

  <!-- Top Navbar -->
  <div class="top-navbar">
    <span class="h4 mb-0">Logo</span>
    <span class="ml-5">Home</span>
    <span class="ml-4">Foot</span>
    <span class="ml-4">Sample</span>
  </div>

  <!-- Main Layout: Sidebar + Content -->
  <div class="layout">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="row">
            <div class="col-12">            
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>
        <hr>
        <ul class="nav flex-column p-3" style="width: 250px; border-radius: 8px;">
            <li class="nav-item py-2 pl-2" style="color: white;">
                <a class="dm-sans-font d-flex align-items-center toggle-collapse " id="gettingStarted" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"style="cursor: pointer; font-weight: 600; font-size: 1.1rem; font-size: 15px;">
                  <i class="fas fa-chevron-right mr-1"></i>  Getting Started
                </a>
                    <div class="collapse ml-4 mt-2" id="collapseExample">
                    <ul class="nav flex-column">
                        <li class="nav-item py-1">
                        <a id="Dashboard" href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                            Dashboard
                        </a>
                        </li>
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                           Reports
                        </a>
                        </li>
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                            Manage
                        </a>
                        </li>
                    </ul>
                    </div>
            </li>
            <li class="nav-item py-2 pl-2">
                <a class="dm-sans-font d-flex align-items-center  " data-toggle="collapse" href="#customize" role="button" aria-expanded="false" aria-controls="collapseExample"style="cursor: pointer; font-weight: 600; font-size: 1.1rem;font-size: 15px;">
                  <i class="fas fa-chevron-right mr-1"></i>   Customize
                </a>
                    <div class="collapse ml-4 mt-2" id="customize">
                    <ul class="nav flex-column">
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                            Burial Lot
                        </a>
                        </li>
                    </ul>
                    </div>
            </li>
            <li class="nav-item py-2 pl-2">
                <a class="dm-sans-font d-flex align-items-center  " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"style="cursor: pointer; font-weight: 600; font-size: 1.1rem;font-size: 15px;">
                   <i class="fas fa-chevron-right mr-1"></i>  Layout
                </a>
                    <div class="collapse ml-4 mt-2" id="collapseEfxample">
                    <ul class="nav flex-column">
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                            Analytics
                        </a>
                        </li>
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                           Sample Test
                        </a>
                        </li>
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                            Manage
                        </a>
                        </li>
                    </ul>
                    </div>
            </li>
            <li class="nav-item py-2 pl-2">
                <a class="dm-sans-font d-flex align-items-center  " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"style="cursor: pointer; font-weight: 600; font-size: 1.1rem;font-size: 15px;">
                  <i class="fas fa-chevron-right mr-1"></i>   Content
                </a>
                    <div class="collapse ml-4 mt-2" id="collapseEgxample">
                    <ul class="nav flex-column">
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                            Analytics
                        </a>
                        </li>
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                           Sample Test
                        </a>
                        </li>
                        <li class="nav-item py-1">
                        <a href="#" class="dm-sans-font text-secondary d-flex align-items-center">
                            Manage
                        </a>
                        </li>
                    </ul>
                    </div>
            </li>
        </ul>
    </div>