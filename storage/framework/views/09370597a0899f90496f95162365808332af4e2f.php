<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!--Responsive Sidebar Menu -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="trila/style0.css"> -->
    <link rel="stylesheet" href="css/style8.css">
    <link rel="stylesheet" href="css/style9.css">
    <link rel="stylesheet" href="css/style5.css">

    <!--Tailwind CSS-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

 
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CASE DETAILS</title>

</head>

<body>
<div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-library icon bx-lg'></i>
            <div class="logo_name">LMS</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <!-- <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li> -->
            <li class="list">
                <a href="Adashboard">
                    <i class='bx bx-grid-alt bx-lg'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li class="list">
                <a href="#">
                    <i class='bx bx-user bx-lg'></i>
                    <span class="links_name">User Profile</span>
                </a>
                <span class="tooltip">User Profile</span>
            </li>
            <li class="list">
                <a href="client_show">
                    <i class='bx bx-user-plus bx-lg'></i>
                    <span class="links_name">Add Client</span>
                </a>
                <span class="tooltip">Add Client</span>
            </li>
            <li class="list">
                <a href="case_show">
                    <i class='bx bx-folder-open bx-lg'></i>
                    <span class="links_name">Add Case</span>
                </a>
                <span class="tooltip">Add Case</span>
            </li>
            <li class="list">
                <a href="bill_show">
                    <i class='bx bx-receipt bx-lg'></i>
                    <span class="links_name">Bills</span>
                </a>
                <span class="tooltip">Bills</span>
            </li>
            <!-- <li class="list">
                <a href="invoice_show">
                    <i class='bx bx-food-menu bx-lg'></i>
                    <span class="links_name">Invoice</span>
                </a>
                <span class="tooltip">Invoice</span>
            </li> -->
            <li class="list">
                <a href="financial_year_show">
                    <i class='bx bx-calendar bx-lg'></i>
                    <span class="links_name">Financial Year</span>
                </a>
                <span class="tooltip">Financial Year</span>
            </li>
            <!-- <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li> -->
        </ul>
    </div>
    
    <section class="home-section" style="background-color:#F2F6F8;">
        <header class="try" style="background-color: #11101D;">
            <div style="color: #fff; font-size:x-large;">
                Lawyer Management System
            </div>
            <div class="navi">
                <ul class="menu">
                    <div class="close-btn"></div>
                    <li class="menu-item"><a href="#">Home</a></li>
                    <li class="menu-item">
                        <a class="sub-btn" href="#">
                            <ion-icon name="person-remove-outline"
                                style="width: 50px; font-size: 20px; justify-content:left;">
                            </ion-icon>
                        </a>
                        <ul class="sub-menu">
                            <li class="sub-item"><a href="<?php echo e(route('logout')); ?>">LogOut</a></li>
                            <!-- <form method="POST" action="<?php echo e(route('logout')); ?>">
                          <?php echo csrf_field(); ?>
                          <button type="button" class="btn btn-primary">Logout</button>
                      </form> -->
                        </ul>
                    </li>
                    <li class="menu-item">
                </ul>
                </li>
                </ul>
                </li>
                </ul>
            </div>
            <div class="menu-btn"></div>
        </header>
  
<br>
<br> 
<br><br>
<!--THIS IS BUTTON-->
<div class="inputfield">
    <a  href = "#">
        <input type="submit" value="CASE DATATABLES" class="btn">
    </a>
</div>

<div style="text-align: center;">
    <?php echo e(session('msg')); ?>

</div>
<?php $number=1; ?>
    <div class="container">
        <table style="width:95%;" class="content-table" id=myTable >
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Client id</th>
                    <th>Client name</th>
                    <th>Case Subject</th>
                    <th>Case Description</th>
                    <th>Case Type</th>
                    <!-- <th>Created At</th>
                    <th>Updated At</th> --> 
                    <th>Action</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $caseArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="display:none;">
            <?php echo e($clientArr= DB::table('client')->where('id',$case->client_id)->where('delete_status', 0)->get()); ?>

            </div>
            <?php $__currentLoopData = $clientArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                    <td style="text-align:center;"><?php echo e($number++); ?></td>
                    <td><?php echo e($case->client_id); ?></td>
                    <td><?php echo e($client->name); ?></td>
                    <td><?php echo e($case->case_subject); ?></td>
                    <td><?php echo e($case->case_desc); ?></td>
                    <td><?php echo e($case->case_type); ?></td>
                    <!-- <td><?php echo e($case->created_at); ?></td>
                    <td><?php echo e($case->updated_at); ?></td> -->
                    <td style="text-align:center;">
                        <a href="case_delete/<?php echo e($case->id); ?>"><i style="color: #ce3333;" class='del bx bx-trash'></i></a>
                        <a href="case_edit/<?php echo e($case->id); ?>"><i style="color: #023e8a;" class='edit bx bx-edit'></i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            </div>

    <!--footer-->
    <div style="color:white; 
            bottom: 0px; 
            margin-bottom: 0px;
            background-color: #11101D; 
            height: 60px; 
            margin-left: 7px;
            font-size: larger;
            padding-top: 10px;
            padding-left: 15px;">
        Nexa Software |
        <small>
            © 2021Nexa Software — <a href="https://nexasoftware.com/">@nexa_software</a>
        </small>

    </div>

 
    </section>



    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });

        // searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
        //     sidebar.classList.toggle("open");
        //     menuBtnChange(); //calling the function(optional)
        // });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
            }
        }
    </script>




    <!-- partial -->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <!-- <script src="./script.js"></script> -->
    <!-- Script for icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--Script for Sweet Alerts-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    
</body>

</html><?php /**PATH C:\xampp\htdocs\test3\resources\views/case.blade.php ENDPATH**/ ?>