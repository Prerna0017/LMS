<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!--Tailwind CSS-->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!--Style sheet-->
    <link rel="stylesheet" href="css\style7.css">

    
    <title>Create Invoice</title>
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

    <div style="text-align: center;">
    <?php echo e(session('msg')); ?>

</div>

    <div class="wrapper">
        <div class="title">
            INVOICE GENERATION
        </div>
        <!-- <div class="form"> -->
        <form class="form" method="post" action="<?php echo e(route('invoice.update',[$invoiceArr[0]->id])); ?>}">
            <?php echo csrf_field(); ?>

            <div class="inputfield">
                <label>Case ID</label>
                <input type="text" name="case_id" class="input" value="<?php echo e($invoiceArr[0]->case_id); ?>" required/>
            </div>

            <div class="inputfield">
                <label>Subject</label>
                <div class="custom_select">
                    <select name="subject" required>
                        <option value="<?php echo e($invoiceArr[0]->subject); ?>" selected><?php echo e($invoiceArr[0]->subject); ?></option>
                        <option value="Bill for advance">Bill for advance</option>
                        <option value="Interim Bill">Interim Bill</option>
                        <option value="Bill for professional fee">Bill for professional fee</option>
                        <option value="Bill for expenses">Bill for expenses</option>
                        <option value="Bill for professional fees and expenses">Bill for professional fees and expenses</option>
                    </select>
                </div>
            </div>

            <div class="inputfield">
                <label>Payment Mode</label>
                <div class="custom_select">
                    <select name="payment_mode" required>
                        <option value="<?php echo e($invoiceArr[0]->payment_mode); ?>" selected><?php echo e($invoiceArr[0]->payment_mode); ?></option>
                        <option value="Cheque">Cheque</option>
                        <option value="Cash">Cash</option>
                        <option value="UPI">UPI</option>
                        <option value="Credit card">Credit card</option>
                        <option value="Debit card">Debit card</option>
                    </select>
                </div>    
            </div>

            <div class="inputfield">
                <label>Payment Status</label>
                <div class="custom_select">
                    <select name="payment_status" required>
                        <option value="<?php echo e($invoiceArr[0]->payment_status); ?>" selected><?php echo e($invoiceArr[0]->payment_status); ?></option>
                        <option value="Pending">Pending</option>
                        <option value="Paid">Paid</option>
                    </select>
                </div>
            </div>

            <div class="inputfield">
                <label>Amount</label>
                <input type="text" name="amount" class="input" value="<?php echo e($invoiceArr[0]->amount); ?>" required/>
            </div>

            <div>
                <input type="submit" value="SUBMIT" class="btn">
            </div>

            

        </form>
        <div>
                <button style="padding: 15px;" type="submit" value="BACK" name="submit" class="btn"><a href="/invoice_show"> BACK </a> </button>
            </div>
        <!-- </div> -->
    </div>
    <script type="text/javascript">
        function EnableDisableTextBox(ddlModels) {
            var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
            // var txtOther = document.getElementById("txtOther");
            var txtAnother = document.getElementById("txtAnother");
            // txtOther.disabled = selectedValue == 1 ? false : true;
            txtAnother.disabled = selectedValue == 2 ? false : true;
            if (!txtAnother.disabled) {
                txtAnother.focus();
            }
        }
    </script>

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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap">

<style>
        body {
            background-image: url("https://www.rocketlawyer.com/blog/wp-content/uploads/2015/10/default-lawyer-2992-1571-c.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            min-height: 500px;
        }

        /* @import  url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap'); */

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
    margin-top: 100px;
  padding: 0 10px;
}
.wrapper{
  max-width: 900px;
  width: 100%;
  background: rgba(255, 255, 255, 0.664);
  margin: 20px auto;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
  padding: 30px;
}

.wrapper .title{
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #0c0c0b;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #000000;
   margin-right: 10px;
   font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #693d3d;
}


.wrapper .form .inputfield .btn{
  width: 100%;
  padding: 70px 0;
  text-align: center;
   padding: 13px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #693d3d;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #693d3dcb;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}


table {
        
    width: auto;
    
    padding: 10px; 

    color :rgb(0, 0, 0);
    font-family: arial, sans-serif;
    border-collapse: separate;

    }

td, th {
    border: 1px solid hsl(180, 100%, 99%);
    text-align: left;
    
    }

    #totalordercost{
        width: 70px;
        text-align: center;
    }
    </style>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\test3\resources\views/invoice_edit.blade.php ENDPATH**/ ?>