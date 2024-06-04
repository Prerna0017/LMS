<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Responsive Sidebar Menu -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style9.css')); ?>" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style10.css"> -->
    <link href="<?php echo e(asset('css/style11.css')); ?>" rel="stylesheet">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


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
                <a href="/Adashboard">
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
                <a href="/client_show">
                    <i class='bx bx-user-plus bx-lg'></i>
                    <span class="links_name">Add Client</span>
                </a>
                <span class="tooltip">Add Client</span>
            </li>
            <li class="list">
                <a href="/case_show">
                    <i class='bx bx-folder-open bx-lg'></i>
                    <span class="links_name">Add Case</span>
                </a>
                <span class="tooltip">Add Case</span>
            </li>
            <li class="list">
                <a href="/bill_show">
                    <i class='bx bx-receipt bx-lg'></i>
                    <span class="links_name">Bills</span>
                </a>
                <span class="tooltip">Bills</span>
            </li>
            <!-- <li class="list">
                <a href="/invoice_show">
                    <i class='bx bx-food-menu bx-lg'></i>
                    <span class="links_name">Invoice</span>
                </a>
                <span class="tooltip">Invoice</span>
            </li> -->
            <li class="list">
                <a href="/financial_year_show">
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
        <br>
        <br>
        <br>

        <div class="container">
            <div class="title">CLIENT DETAILS</div>
            <div class="content">
                <form>
                    <div class="user-details">

                        <div class="input-box">
                            <span class="details">Client ID</span>
                            <input type="number" name="client_id" class="input" value="<?php echo e($caseArr[0]->id); ?>" 
                                required>
                            <br><br>
                        </div>
                        <div class="input-box">
                            <span class="details">Date Of Client Registration</span>
                            <input id="dt" type="datetime" name="created_at" class="input"
                                value="<?php echo e($caseArr[0]->created_at); ?>" readonly required>
                            <script>
                                var dte = document.getElementById("dt").value;

                                document.getElementById("dt").value = dte.substr(0, 10);

                            </script>
                            <br><br>

                        </div>
                        <div class="input-box">
                            <span class="details">Client</span>
                            <input type="text" name="name" class="input" value="<?php echo e($caseArr[0]->name); ?>" readonly
                                required>
                            <br><br>

                        </div>
                        <div class="input-box">
                            <span class="details">Co-ordinator</span>
                            <input id="cn" type="text" name="coordinator_name" class="input"
                                value="<?php echo e($caseArr[0]->coordinator_name); ?>" readonly required />
                            <script>
                                if (document.getElementById("cn").value.length == 0) {
                                    document.getElementById("cn").value = "Not Applicable";
                                }
                            </script>
                            <br><br>

                        </div>
                        <div class="input-box">
                            <span class="details">Email-ID</span>
                            <input type="email" name="email" class="input" value="<?php echo e($caseArr[0]->email); ?>" readonly
                                required>
                            <br><br>

                        </div>
                        <div class="input-box">
                            <span class="details">Date Of Birth</span>
                            <input type="date" name="dob" class="input" value="<?php echo e($caseArr[0]->dob); ?>" readonly required>
                            <br><br>

                        </div>
                        <div class="input-box">
                            <span class="details">Contact</span>
                            <input type="number" name="contact" class="input" value="<?php echo e($caseArr[0]->contact); ?>" readonly
                                required>
                            <br><br>

                        </div>
                        <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text" name="address" class="input" value="<?php echo e($caseArr[0]->address); ?>" readonly
                                required>
                            <br>
                            <!-- <span style="color:red"><?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> -->
                            <br>
                        </div>

                    </div>
                </form>
            </div>


            <div class="title">CASE REGISTRATION</div>
            <div class="content">
                <form class="form" method="post" action="<?php echo e(route('case.store',[$caseArr[0]->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="user-details">
                        <div style="display:none;" class="input-box">
                            <span style="display:none;" class="details">Client ID</span>
                            <input style="display:none;" type="number" name="client_id" class="input" value="<?php echo e($caseArr[0]->id); ?>" 
                                required>
                            <br><br>
                        </div>
                        <div class="input-box">
                            <span class="details">Case Subject</span>
                            <input type="text" name="case_subject" class="input" placeholder="Enter Case Subject here" 
                                required>
                            <br><br>
                        </div>
                        <div class="input-box">
                            <span class="details">Case Type</span>
                            <select required name="case_type">
                                <option value="">Select</option>
                                <option value="Non-litigation">Non-litigation</option>
                                <option value="Litigation">Litigation</option>
                            </select>
                            <br>
                            <br>
                        </div>
                        <!-- <div class="input-box">
                            <span class="details">Fixed Amount</span>
                            <input type="number" name="amount" class="input" required />
                            <br>
                            <br>
                        </div> -->
                        <div class="input-box">
                            <span class="details">Case Description</span>
                            <textarea style="outline: none;
                                            font-size: 16px;
                                            border-radius: 5px;
                                            padding-top: 15px;
                                            padding-left: 15px;
                                            border: 1px solid #ccc;
                                            transition:0.1s ;
                                            min-width:208%;
                                            max-width:208%;
                                            max-height:150px;
                                            min-height:55px;" 
                                type="text" name="case_desc" class="input" required></textarea>
                            
                        </div>

                    </div>
                    <div style="display:inline-flex;">
                        <div class="button" style="justify-content:center;">
                            <a href="/client_show">
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
        <br>
        <br>
        <!--footer-->
        <div style="color:white; 
            bottom: 0; 
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
        // let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
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
    <!-- <script src="./script.js"></script> -->
    <!-- Script for icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!--Script for Sweet Alerts-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>

</html><?php /**PATH C:\xampp\htdocs\test3\resources\views/create_case.blade.php ENDPATH**/ ?>