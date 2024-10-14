<?php
         include('includes/connect.php');
         
         $january=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month1 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'January' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $one=mysqli_fetch_array($january);
         $jan = $one["_month1"];
         
         $february=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month2 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'February' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $two=mysqli_fetch_array($february);
         $feb = $two["_month2"];
         
         $march=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month3 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'March' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $three=mysqli_fetch_array($march);
         $mar = $three["_month3"];
         
         $april=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month4 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'April' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $four=mysqli_fetch_array($april);
         $apr = $four["_month4"];
         
         $may=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month5 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'May' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $five=mysqli_fetch_array($may);
         $mays = $five["_month5"];
         
         $june=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month6 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'June' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $six=mysqli_fetch_array($june);
         $jun = $six["_month6"];
         
         $july=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month7 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'July' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $seven=mysqli_fetch_array($july);
         $jul = $seven["_month7"];
         
         $august=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month8 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'August' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $eight=mysqli_fetch_array($august);
         $aug = $eight["_month8"];
         
         $september=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month9 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'September' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $nine=mysqli_fetch_array($september);
         $sep = $nine["_month9"];
         
         $october=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month10 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'October' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $ten=mysqli_fetch_array($october);
         $oct = $ten["_month10"];
         
         $november=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month11 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'November' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $eleven=mysqli_fetch_array($november);
         $nov = $eleven["_month11"];
         
         $december=mysqli_query($conn,"SELECT SUM(`donation_amount`) AS _month12 FROM `monetary_donation_info` WHERE MONTHNAME(donation_date)= 'December' AND YEAR(donation_date)=YEAR(CURDATE()) AND donation_status = 'Donated'");
         $twelve=mysqli_fetch_array($december);
         $dec = $twelve["_month12"];
         ?>