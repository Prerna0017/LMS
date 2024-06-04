<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Responsive Sidebar Menu -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style9.css">
    <!-- <link rel="stylesheet" href="css/style10.css"> -->
    <link rel="stylesheet" href="css/style11.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Style sheet-->
    <!-- <link rel="stylesheet" type="text/css" href="css\style7.css"> -->
    <title>Register Client</title>
</head>

<body style="display:flex;">

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
            <li class="list">
                <a href="invoice_show">
                    <i class='bx bx-food-menu bx-lg'></i>
                    <span class="links_name">Invoice</span>
                </a>
                <span class="tooltip">Invoice</span>
            </li>
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

    <section class="home-section">
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

        <div class="container">
            <div class="title">CLIENT REGISTRATION</div>
            <div class="content">
                <form class="form" method="post" action="client_submit">
                    <?php echo csrf_field(); ?>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Client Type</span>
                            <select id="ddlModels" required name="client_type" onchange="EnableDisableTextBox(this)">
                                <option value="">Select</option>
                                <option value="Individual">Individual</option>
                                <option value="Company">Company</option>
                            </select>
                            <br>
                            <!-- <span style = "color:red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> -->
                            <br>
                        </div>
                        <div class="input-box">
                            <!--for blank space-->
                        </div>
                        <div class="input-box">
                            <span class="details">Individual/Company Name</span>
                            <input type="text" name="name" class="input" value="<?php echo e(old('name')); ?>"
                                placeholder="Enter the Client Name here" required>
                            <br>
                            <span style="color:red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">Coordinator</span>
                            <input type="text" name="coordinator_name" class="input" id="txtAnother"
                                value="<?php echo e(old('coordinator_name')); ?>" placeholder="Enter Company Co-ordiantor here" />
                            <br>
                            <span style="color:red"><?php $__errorArgs = ['coordinator_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">Date Of Birth</span>
                            <input type="date" name="dob" class="input" value="<?php echo e(old('dob')); ?>"
                                placeholder="Enter the Date of Birth here" required>
                            <br>
                            <span style="color:red"><?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="email" name="email" class="input" value="<?php echo e(old('email')); ?>"
                                placeholder="Enter the Email-Id here" required />
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="number" name="contact" class="input" value="<?php echo e(old('contact')); ?>"
                                placeholder="Enter the Contact number here" required>
                            <br>
                            <span style="color:red"><?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text" name="address" class="input" value="<?php echo e(old('address')); ?>"
                                placeholder="Enter the Address here" required />
                        </div>

                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1">
                        <input type="radio" name="gender" id="dot-2">
                        <input type="radio" name="gender" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                           <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    <div style="display:inline-flex;">
                        <div class="button" style="justify-content:center;">
                            <a href="client_show">
                                <input type="button" value="BACK">
                            </a>
                        </div>
                        <div class="button">
                            <input type="submit" value="SUBMIT">
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>

        <br>
        <br>
        <br>

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




    <script type="text/javascript">
        function EnableDisableTextBox(ddlModels) {
            var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
            // var txtOther = document.getElementById("txtOther");
            var txtAnother = document.getElementById("txtAnother");
            // txtOther.disabled = selectedValue == 1 ? false : true;
            txtAnother.disabled = selectedValue == "Company" ? false : true;
            if (!txtAnother.disabled) {
                txtAnother.focus();
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


</body>

</html><?php /**PATH C:\xampp\htdocs\test3\resources\views/create_client.blade.php ENDPATH**/ ?>