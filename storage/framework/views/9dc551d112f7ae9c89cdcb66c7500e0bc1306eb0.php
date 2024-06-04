<?php 
    require('C:\xampp\htdocs\test3\vendor\autoload.php');
    // {{$clientArr}} {{$caseArr}} {{$billArr}}

    $html="
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    
    <table style='border:0px !important; width:100%;'>
        <tr>
            <td style='border: 0px;  width:30%;text-align:left;'>
                <p style='text-align:center;color:#ed3338;font-weight: bold;font-style: oblique;'>
                    <img style='width:100px;' src='victorious-chess_logo.jpg'>
                </p>
            </td>
            <td style='border: 0px;  width:30%;text-align:left; vertical-align:bottom;' class='mt-130'>
                TAX INVOICE
            </td>
            <td style='border: 0px;  width:40%;text-align:left;'>
                <h3>
                    <b>
                        Victorious Chess Academy
                    </b>
                </h3>
                <p>
                    Sr. no. 8/6, lane no. 4, <br>Marne building, near ashwin clinic,
                    <br> karvenagar, Pune 411052
                </p>
                <p>Email: 
                        <a href='mailto:acc.section.vca@gmail.com'>
                            acc.section.vca@gmail.com
                        </a> 
                    Website: 
                        <a href='mailto:victoriouschess@gmail.com'>
                            victoriouschess@gmail.com
                        </a>
                </p>
            </td>
        </tr>
    </table>";
    

$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->output($file,'D');
?><?php /**PATH C:\xampp\htdocs\test3\resources\views/print_bill.blade.php ENDPATH**/ ?>