<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   
        <link rel="stylesheet" href="css/style5.css">


<!--Responsive Sidebar Menu -->
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="trila/style0.css"> -->
<link rel="stylesheet" href="css/style8.css">
<link rel="stylesheet" href="css/style9.css">
<link rel="stylesheet" href="css/style10.css">


<!-- <link rel="stylesheet" href="finalCss.css"> -->


<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<!--Tailwind CSS-->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

 
<!-- Boxicons CDN Link -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Data</title>

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
                <a href="SAdashboard">
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
                <a href="handleAdminData(SA)">
                    <i class='bx bx-user-plus bx-lg'></i>
                    <span class="links_name">Add Admin</span>
                </a>
                <span class="tooltip">Add Admin</span>
            </li>
            <li class="list">
                <a href="financial_year_show(SA)">
                    <i class='bx bx-folder-open bx-lg'></i>
                    <span class="links_name">Add Financial Year</span>
                </a>
                <span class="tooltip">Add Financial Year</span>
            </li>
            <li class="list">
                <a href="AuditLog(SA)">
                    <i class='bx bx-receipt bx-lg'></i>
                    <span class="links_name">Audit Log</span>
                </a>
                <span class="tooltip">Audit Log</span>
            </li>
            <!-- <li class="list">
                <a href="#">
                    <i class='bx bx-food-menu bx-lg'></i>
                    <span class="links_name">Invoice</span>
                </a>
                <span class="tooltip">Invoice</span>
            </li>
            <li class="list">
                <a href="#">
                    <i class='bx bx-calendar bx-lg'></i>
                    <span class="links_name">Financial Year</span>
                </a>
                <span class="tooltip">Financial Year</span>
            </li> 
             <li>
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
    <a  href = "addAdmin">
        <button class="btn">
        ADD NEW ADMIN
    </button>
    </a>
</div>


    <div class="container" my-5>
        <table  style="width:100%; text-align:center" class="content-table" id=myTable>
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Name</th>
                    <!-- <th>dob</th>
                    <th>pan</th>
                    <th>Phone No.</th>
                    <th>adhaar</th> -->
                    <th>email</th>
                    <!-- <th>address</th> -->
                    <th>password</th>
                    <!-- <th>createdAt</th>
                    <th>updatedAt</th> -->
                    <th>Actions</th>
                </tr>


                <?php $__currentLoopData = $addArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addAdmin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            </thead> 
                <tr>
                    <td><?php echo e($addAdmin->id); ?></td>
                    <td><?php echo e($addAdmin->name); ?></td>
                    <!-- <td><?php echo e($addAdmin->dob); ?></td> -->
                    <!-- <td><?php echo e($addAdmin->pan); ?></td> -->
                    <!-- <td><?php echo e($addAdmin->phone); ?></td> -->
                    <!-- <td><?php echo e($addAdmin->aadhar); ?></td> -->
                    <td><?php echo e($addAdmin->email); ?></td>
                    <!-- <td><?php echo e($addAdmin->address); ?></td> -->
                    <td><?php echo e($addAdmin->password_admin); ?></td>
                    <!-- <td><?php echo e($addAdmin->created_at); ?></td>
                    <td><?php echo e($addAdmin->updated_at); ?></td> -->
                    <td>
                            <a href = "addAdmin_delete/<?php echo e($addAdmin->id); ?>"><button class="btn1"><i style="color: #ce3333;" class='del bx bx-trash'></i></button></a>
                            <a href = "editAdmin/<?php echo e($addAdmin->id); ?>"><button class="btn1"><i style="color: #023e8a;" class='edit bx bx-edit'></i></button></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </table>
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
        <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

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
    <script src="./script.js"></script>
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

</blade.php><?php /**PATH C:\xampp\htdocs\test3\resources\views/handleAdminData(SA).blade.php ENDPATH**/ ?>