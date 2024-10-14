<?php
    include('includes/connect.php');

    $total=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _total FROM `request_info` WHERE request_status = 'Pending'");
    $total_official=mysqli_fetch_array($total);
    $total_run = $total_official["_total"];
    
    $cadulawan=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count1 FROM `request_info` WHERE requester_barangay = 'Cadulawan' AND request_status = 'Pending'");
    $one=mysqli_fetch_array($cadulawan);
    $cadulawan_run = $one["_count1"];
    
    $calajo_an=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count2 FROM `request_info` WHERE requester_barangay = 'Calajo-an' AND request_status = 'Pending'");
    $two=mysqli_fetch_array($calajo_an);
    $calajo_an_run = $two["_count2"];
    
    $camp_7=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count3 FROM `request_info` WHERE requester_barangay = 'Camp 7' AND request_status = 'Pending'");
    $three=mysqli_fetch_array($camp_7);
    $camp_7_run = $three["_count3"];
    
    $camp_8=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count4 FROM `request_info` WHERE requester_barangay = 'Camp 8' AND request_status = 'Pending'");
    $four=mysqli_fetch_array($camp_8);
    $camp_8_run = $four["_count4"];
    
    $cuanos=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count5 FROM `request_info` WHERE requester_barangay = 'Cuanos' AND request_status = 'Pending'");
    $five=mysqli_fetch_array($cuanos);
    $cuanos_run = $five["_count5"];
    
    $guindaruhan=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count6 FROM `request_info` WHERE requester_barangay = 'Guindaruhan' AND request_status = 'Pending'");
    $six=mysqli_fetch_array($guindaruhan);
    $guindaruhan_run = $six["_count6"];
    
    $linao_lipata=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count7 FROM `request_info` WHERE requester_barangay = 'Linao-Lipata' AND request_status = 'Pending'");
    $seven=mysqli_fetch_array($linao_lipata);
    $linao_lipata_run = $seven["_count7"];
    
    $manduang=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count8 FROM `request_info` WHERE requester_barangay = 'Manduang' AND request_status = 'Pending'");
    $eight=mysqli_fetch_array($manduang);
    $manduang_run = $eight["_count8"];
    
    $pakigne=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count9 FROM `request_info` WHERE requester_barangay = 'Pakigne' AND request_status = 'Pending'");
    $nine=mysqli_fetch_array($pakigne);
    $pakigne_run = $nine["_count9"];
    
    $ward_1=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count10 FROM `request_info` WHERE requester_barangay = 'Poblacion Ward I' AND request_status = 'Pending'");
    $ten=mysqli_fetch_array($ward_1);
    $ward_1_run = $ten["_count10"];
    
    $ward_2=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count11 FROM `request_info` WHERE requester_barangay = 'Poblacion Ward II' AND request_status = 'Pending'");
    $eleven=mysqli_fetch_array($ward_2);
    $ward_2_run = $eleven["_count11"];
    
    $ward_3=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count12 FROM `request_info` WHERE requester_barangay = 'Poblacion Ward III' AND request_status = 'Pending'");
    $twelve=mysqli_fetch_array($ward_3);
    $ward_3_run = $twelve["_count12"];

    $ward_4=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count13 FROM `request_info` WHERE requester_barangay = 'Poblacion Ward IV' AND request_status = 'Pending'");
    $thirteen=mysqli_fetch_array($ward_4);
    $ward_4_run = $thirteen["_count13"];
    
    $tubod=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count14 FROM `request_info` WHERE requester_barangay = 'Tubod' AND request_status = 'Pending'");
    $fourteen=mysqli_fetch_array($tubod);
    $tubod_run = $fourteen["_count14"];
    
    $tulay=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count15 FROM `request_info` WHERE requester_barangay = 'Tulay' AND request_status = 'Pending'");
    $fifteen=mysqli_fetch_array($tulay);
    $tulay_run = $fifteen["_count15"];
    
    $tunghaan=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count16 FROM `request_info` WHERE requester_barangay = 'Tunghaan' AND request_status = 'Pending'");
    $sixteen=mysqli_fetch_array($tunghaan);
    $tunghaan_run = $sixteen["_count16"];
    
    $tungkil=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count17 FROM `request_info` WHERE requester_barangay = 'Tungkil' AND request_status = 'Pending'");
    $seventeen=mysqli_fetch_array($tungkil);
    $tungkil_run = $seventeen["_count17"];
    
    $tungkop=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count18 FROM `request_info` WHERE requester_barangay = 'Tungkop' AND request_status = 'Pending'");
    $eighteen=mysqli_fetch_array($tungkop);
    $tungkop_run = $eighteen["_count18"];
    
    $vito=mysqli_query($conn,"SELECT COUNT(`request_id`) AS _count19 FROM `request_info` WHERE requester_barangay = 'Vito' AND request_status = 'Pending'");
    $nineteen=mysqli_fetch_array($vito);
    $vito_run = $nineteen["_count19"];
?>