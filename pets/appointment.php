<?php
    session_start();
    include('conn.php');
    // Check connection
    global $conn;

    if ($conn==false) {
    die("Connection failed: " . mysqli_connect_error());
    }
    //pet details
    $n=$_POST['pn'];
    
    $t=$_POST['type'];
    $s=$_POST['sex'];
    $d=$_POST['dt'];
    $sl=$_POST['slot'];
    $tm=$_POST['tym'];
    $r=$_POST['re'];
    //pet parent details
    $cr=$_POST['Confirmation'];
    $p=$_POST['ph'];
    $e=$_POST['em'];
    $pfn=$_POST['fname'];
    $_SESSION['sna']=$pfn;
    $pln=$_POST['lname'];
    //payment details
    $cn=$_POST['cno'];
    $ed=$_POST['expdt'];
    $cvv=$_POST['cvv'];
    $ch=$_POST['cholder'];
    $sql1 = "INSERT INTO appointment VALUES ('$n','$t','$s','$d','$sl','$tm','$r','$pfn','$pln')";
    $sql2 = "INSERT INTO petparent VALUES ('$cr','$p','$e','$pfn','$pln')";
    $sql3 = "INSERT INTO payment VALUES ('$cn','$ed','$cvv','$ch','$pfn','$pln')";
    if(mysqli_query($conn, $sql1)) 
    {
      // echo "Records inserted successfully.";
       //header("Location: new.php");
       
    } 
    if(mysqli_query($conn, $sql2)) 
    {
       //"Records inserted successfully.";
        //header("Location: new.php");
        
    } 
    if(mysqli_query($conn, $sql3)) 
    {
       //echo "Records inserted successfully.";
       // header("Location: new.php");
    } 
    else
    {
        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        header("Location: new.php");
    }
    mysqli_close($conn);
?>

