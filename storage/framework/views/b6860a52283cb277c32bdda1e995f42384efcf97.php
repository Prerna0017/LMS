<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

    <!--vertical navbar-->
    <link rel="stylesheet" href="css/style6.css">

    <!-- <link rel="stylesheet" href="finalCss.css"> -->


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--Tailwind CSS-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<!-- 
    <style>
        body {
            background-image: url("https://www.rocketlawyer.com/blog/wp-content/uploads/2015/10/default-lawyer-2992-1571-c.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            min-height: 500px;
            margin-left: 100px;
        }
    </style> -->

    <title>Bill Details</title>
</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark header">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="snapsvg-seeklogo.com.svg" height="48px" alt=""></a>
                <a class="navbar-brand" href="#">LAWYER MANAGEMENT SYSTEM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto  mb-lg-0">
                        <!-- ms for aligning the home to right -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="nav">
        <ul>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="dashboardAdmin.html">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="adminCredentials.html">
                    <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="clientDetails.html">
                    <span class="icon">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </span>
                    <span class="title">Add Client</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="caseDetails.html">
                    <span class="icon">
                        <ion-icon name="briefcase-outline"></ion-icon>
                    </span>
                    <span class="title">Case</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="bill_Page.html">
                    <span class="icon">
                        <ion-icon name="cash-outline"></ion-icon>
                    </span>
                    <span class="title">Bill</span>
                </a>
            </li>
            <!-- <li class="list">
                <b></b>
                <b></b>
                <a href = "#">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">Profiles</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href = "#">
                    <span class="icon"><ion-icon name="finger-print-outline"></ion-icon></span>
                    <span class="title">Password</span>
                </a>
            </li> -->
            <li class="list">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="toggle">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-circle-outline" class="close"></ion-icon>
    </div>


    <div class="search">
        <div class="s_icon"></div>
        <div class="input">
            <input type="text" placeholder="Search for a Bill" id="mysearch">
        </div>
        <span class="clear" onclick="document.getElementById('mysearch').value = ''">

        </span>
    </div>
    <!--search bar-->
    <script>
        const s_icon = document.querySelector('.s_icon');
        const search = document.querySelector('.search');
        s_icon.onclick = function () {
            search.classList.toggle('active');
        }
    </script>

    <!-- <div class="button">
        <button class="btn" type="submit"> Generate a new bill</button>
    </div> -->

    <br>
    <br>

    <div class="inputfield">
        <a  href = "#">
            <input type="submit" value="BILL DATATABLES" class="btn">
        </a>
    </div>
    
<br>

<br>
<br>
<div style="text-align: center;">
    <?php echo e(session('msg')); ?>

</div>

    <div class="container" my-4>
        <table  style="width:200px;" class="content-table" id=myTable>
            <thead>
                <tr>
                    <th>Bill No.<th>
                    <th>Invoice ID<th>
                    <th>Bill ID<th>
                    <th>Client Type<th>
                    <th>Client Name<th>
                    <th>Co-oridantor<th>
                    <th>Case Type<th>
                    <th>Case Description<th>
                    <th>Email-ID<th>
                    <th>Contact No.<th>
                    <th>Refered By<th>
                    <th>Financial Year<th>
                    <th>Bill no. for the Financial Year<th>
                    <th>Subject<th>
                    <th>Amount<th>
                    <th>Payment Mode<th>
                    <th>Payment Status<th>
                    <th>Created At<th>
                    <th>Updated At<th>
                </tr>
            </thead>
            <?php $__currentLoopData = $billArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($bill->id); ?></td>
                    <td><?php echo e($bill->invoice_id); ?></td>
                    <td><?php echo e($bill->bill_id); ?></td>
                    <td><?php echo e($bill->subject); ?></td>
                    <td><?php echo e($bill->payment_mode); ?></td>
                    <td><?php echo e($bill->payment_status); ?></td>
                    <td><?php echo e($bill->amount); ?></td>
                    <td><?php echo e($bill->created_at); ?></td>
                    <td><?php echo e($bill->updated_at); ?></td>
                    <td>
                        <a href="bill_delete/<?php echo e($bill->id); ?>">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

        <footer class="text-gray-600 body-font"> 
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

                    <span class="ml-3 text-xl">LAWYER MANAGEMENT SYSTEM</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">©
                    2020 nexasoftware —
                    <a href="https://nexasoftware.com/index.php" class="text-gray-600 ml-1" rel="noopener noreferrer"
                        target="_blank">@nexasoftware</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </footer>



        <!-- Script for icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script>
            //for toggle move
            let menuToggle = document.querySelector('.toggle');
            let nav = document.querySelector('.nav')
            menuToggle.onclick = function () {
                menuToggle.classList.toggle('active');
                nav.classList.toggle('active');
            }


            //add active class in selected list item 

            let list = document.querySelectorAll('.list');
            for (let i = 0; i < list.length; i++) {
                list[i].onclick = function () {
                    let j = 0;
                    while (j < list.length) {
                        list[j++].className = 'list';

                    }
                    list[i].className = 'list active';
                }
            }
        </script>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
-->


</body>

</html><?php /**PATH C:\xampp\htdocs\test3\resources\views/bill_print.blade.php ENDPATH**/ ?>