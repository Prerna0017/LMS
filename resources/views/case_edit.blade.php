<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!--Responsive Sidebar Menu -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
    <link  href="{{ asset('css/style9.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style10.css"> -->
    <link href="{{ asset('css/style11.css') }}" rel="stylesheet" >

    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">
   
    <title>Edit Case Details</title>
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
                            <li class="sub-item"><a href="{{ route('logout') }}">LogOut</a></li>
                            <!-- <form method="POST" action="{{ route('logout') }}">
                          @csrf
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
<br>

        <div class="container">
            <div class="title">EDIT CASE DETAILS</div>
            <div class="content">
                <form class="form" method="post" action="{{route('case.update',$caseArr[0]->id)}}">
                    @csrf
                    <div class="user-details">
                        
                        <div class="input-box">
                            <span class="details">Client ID</span>
                            <input type="number" name="client_id" class="input" value="{{$caseArr[0]->client_id}}"  required>
                            <br>
                            <br>
                        </div> 

                        <div class="input-box">
                            <span class="details">Case ID</span>
                            <input type="number" name="case_id" class="input" value="{{$caseArr[0]->id}}"  required>
                            <br>
                            <br>
                        </div> 
                        <div class="input-box">
                            <span class="details">Case Subject</span>
                            <input type="text" name="case_subject" class="input" value="{{$caseArr[0]->case_subject}}" 
                                required>
                            <br><br>
                        </div>
                        <div class="input-box">
                            <span class="details">Case Type</span>
                            <select required name="case_type">
                                <option value="{{$caseArr[0]->case_type}}">{{$caseArr[0]->case_type}}</option>
                                <option value="Non-litigation">Non-litigation</option>
                                <option value="Litigation">Litigation</option>
                            </select>
                            <!-- <input type="text" name="case_type"  class="input" required> -->
                            <br>
                            <!-- <span style="color:red">@error('dob'){{$message}}@enderror</span> -->
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
                                            min-width:208%;
                                            max-width:208%;
                                            max-height:150px;
                                            min-height:55px;"

                    type="text" id="myTextarea" name="case_desc" class="input"  required>
                    {{$caseArr[0]->case_desc}}</textarea>
                            
                            <br>
                            <!-- <span style="color:red">@error('coordinator_name'){{$message}}@enderror</span> -->
                            <br>
                        </div>
                    </div>
                    
                    <div style="display:inline-flex;">
                        <div class="button" style="justify-content:center;">
                            <a href="/case_details/{{$caseArr[0]->client_id}}">
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




        <!-- </div> -->
    </div>

</body>

</html>