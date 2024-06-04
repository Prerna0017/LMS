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

    <title>Dashboard</title>
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
            <li class="list">
                <a href="/invoice_show">
                    <i class='bx bx-food-menu bx-lg'></i>
                    <span class="links_name">Invoice</span>
                </a>
                <span class="tooltip">Invoice</span>
            </li>
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
            <div style="display:flex;justify-content:left;">
                <div class="title">CLIENT DETAILS</div>
                <div>
                    <button style="cursor:pointer;
                                background-color:#00b4d800;
                                border:none;
                                padding-top:8px;
                                padding-left:3px;">
                        <i style="font-size:27px" class='bx bxs-down-arrow'>
                        </i>
                    </button>
                </div>
            </div>
            <div class="content">
                <form action="<?php echo e($clientArr[0]->id); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Client</span>
                            <input type="text" name="name" class="input" value="<?php echo e($clientArr[0]->name); ?>" readonly required>
                            <br>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">Co-ordinator</span>
                            <input type="text" name="coordiantor_name" class="input" value="<?php echo e($clientArr[0]->coordinator_name); ?>" readonly required>
                            <br>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">Email-ID</span>
                            <input type="email" name="email" class="input" value="<?php echo e($clientArr[0]->email); ?>" readonly required>
                            <br>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">D.O.B</span>
                            <input type="date" name="dob" class="input" value="<?php echo e($clientArr[0]->dob); ?>" readonly required>
                            <br>
                            <br>
                        </div>
                        <div class="input-box">
                            <span class="details">Contact</span>
                            <input type="text" name="contact" class="input" value="<?php echo e($clientArr[0]->contact); ?>" readonly required>
                        </div>
                        <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text" name="address" class="input" value="<?php echo e($clientArr[0]->address); ?>" readonly required>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
       

        <div class="container">
            <div style="display:flex;justify-content:left;">
                <div class="title">CASE DETAILS</div>
                <div>
                    <button style="cursor:pointer;
                                background-color:#00b4d800;
                                border:none;
                                padding-top:8px;
                                padding-left:3px;">
                        <i style="font-size:27px" class='bx bxs-down-arrow'>
                        </i>
                    </button>
                </div>
            </div>
            <div class="content">
                <form action="<?php echo e($caseArr[0]->id); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Case ID</span>
                            <input type="text" name="case_type" class="input" value="<?php echo e($caseArr[0]->id); ?>" readonly required>
                            <br>
                            <!-- <span style="color:red"><?php $__errorArgs = ['name'];
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
                            <span class="details">Case Type</span>
                            <input type="text" name="case_type" class="input" value="<?php echo e($caseArr[0]->case_type); ?>" readonly required>
                            <br>
                            <!-- <span style="color:red"><?php $__errorArgs = ['name'];
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
                            <span class="details">Case Description</span>
                            <textarea style="outline: none;
                                            font-size: 16px;
                                            border-radius: 5px;
                                            padding-top: 15px;
                                            padding-left: 15px;
                                            border: 1px solid #ccc;
                                            transition:0.1s ;
                                            min-width:209%;
                                            max-width:209%;
                                            max-height:150px;
                                            min-height:55px;"

                    type="text" id="myTextarea" name="case_desc" class="input" readonly required>
                    <?php echo e($caseArr[0]->case_desc); ?></textarea>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="title">BILL GENERATION</div>
            <div class="content"> 
                <form class="form" method="post" action="<?php echo e(route('bill.store',[$caseArr[0]->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="user-details">
                        <div class="input-box" style="display:none;">
                            <span class="details">Case ID</span>
                            <input type="number" name="case_id" class="input" value="<?php echo e($caseArr[0]->id); ?>" required>
                            <br>
                            <!-- <span style="color:red"><?php $__errorArgs = ['name'];
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
                            <span class="details">Bill ID</span>
                            <input type="text" name="bill_id" class="input" placeholder="Bill ID" required>
                            <br>
                            <!-- <span style="color:red"><?php $__errorArgs = ['name'];
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
                            <span class="details">Subject</span>
                            <select required name="subject">
                                <option value="">Select</option>
                                <option value="Bill for advance">Bill for advance</option>
                                <option value="Interim Bill">Interim Bill</option>
                                <option value="Bill for professional fee">Bill for professional fee</option>
                                <option value="Bill for expenses">Bill for expenses</option>
                                <option value="Bill for professional fees and expenses">Bill for professional fees and
                                    expenses</option>
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
                            <span class="details">Payment Mode</span>
                            <select name="payment_mode" required>
                                <option value="">Select</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Cash">Cash</option>
                                <option value="UPI">UPI</option>
                                <option value="Credit Card">Credit card</option>
                                <option value="Debit Card">Debit Card</option>
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
                            <span class="details">Payment Details</span>
                            <input type="text" name="payment_details" class="input"
                                placeholder="Enter the Transaction details or any other description" required>
                            <br>
                            <!-- <span style="color:red"><?php $__errorArgs = ['name'];
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
                            <span class="details">Total Amount</span>
                            <table class="amount_table">
                                <thead>
                                    <th>Serial No.</th>
                                    <th>Particulars</th>
                                    <th>Amount</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Professional fees</td>
                                        <td><input onblur="findTotal()" type="number" name="pro_fees"
                                                class="input amount" id="pro_fees"
                                                placeholder="Enter Professional fees here" /></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Expenses Incurred</td>
                                        <td><input onblur="findTotal()" type="number" name="expenses"
                                                class="input amount" id="expenses"
                                                placeholder="Enter Expenses incurred here" /></td>
                                    </tr>
                                    <script>
                                        function findTotal() {
                                            var arr = document.getElementsByClassName('amount');
                                            var tot = 0;
                                            for (var i = 0; i < arr.length; i++) {
                                                if (parseFloat(arr[i].value))
                                                    tot += parseFloat(arr[i].value);
                                            }
                                            document.getElementById('total').value = tot;
                                        }
                                    </script>
                                    <tr>
                                        <td>Total Amount</td>
                                        <td><input
                                                style="align:center;background-color:aliceblue;font-size:large;border:none;width:60px;height:40px;border-radius:6px;"
                                                value="GO" readonly disabled></td>
                                        <td><input id="total" type="number" name="total" class="input" id="total"
                                                placeholder="Total Amount" readonly/></td>
                                    </tr>
                                </tbody>
                            </table>
 
                        </div>

                        <div style="display:inline-flex;">
                            <div class="button" style="justify-content:center;">
                                <a href="/case_details/<?php echo e($clientArr[0]->id); ?>">
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
        </div>
        <style>
            .amount_table {
                border-collapse: collapse;
                margin: 25px 0;
                text-align: center;
                width: 200%;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .amount_table thead tr {

                background-color: #030027;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
                font-size: larger;
            }

            .amount_table th,
            .amount_table td {
                text-align: center;
                padding: 12px 15px;
            }

            .amount_table tbody tr {
                border-bottom: 1px solid #dddddd;
                font-size: large;
            }

            .amount_table tbody tr:nth-of-type(even) {
                background-color: aliceblue;
            }

            .amount_table tbody tr:last-of-type {
                border-bottom: 2px solid #030027;
            }

            .amount_table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
            }

            .user-details .input-box input:focus,
            .user-details .input-box input:valid {
                border-color: #ccc;
            }
        </style>


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

</html><?php /**PATH C:\xampp\htdocs\test3\resources\views/create_bill.blade.php ENDPATH**/ ?>