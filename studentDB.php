<?php
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'test');

if(isset($_POST['submit'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $fatherName=$_POST['fatherName'];
    $motherName=$_POST['motherName'];
    $dob=$_POST['dob'];
    $phoneNo=$_POST['phoneNo'];
    $gender=$_POST['gender'];
    $bloodgroup=$_POST['bloodgroup'];
    $regno=$_POST['regno'];
    $medium=$_POST['medium'];
    $addmissionType=$_POST['addmissionType'];
    $quota=$_POST['quota'];
    $nationality=$_POST['nationality'];
    $mt=$_POST['mt'];
    $CommunicationAddress=$_POST['CommunicationAddress'];
    $permanentAddress=$_POST['permanentAddress'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $pincode=$_POST['pincode'];
    $postoffice=$_POST['postoffice'];
    $fO=$_POST['fO'];
    $annualincome=$_POST['annualincome'];
    $MO=$_POST['MO'];
    $Motherannualincome=$_POST['Motherannualincome'];
    $nationalitys=$_POST['nationality'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
    $community=$_POST['community'];
    $tenth=$_POST['tenth'];
    $tboard=$_POST['tboard'];
    $twelve=$_POST['twelve'];
    $Tboard=$_POST['Tboard'];    
    $YOP10=$_POST['YOP10'];
    $YOP12=$_POST['YOP12'];
    $mark10=$_POST['mark10'];
    $mark12=$_POST['mark12'];
    $perct10=$_POST['perct10'];
    $perct12=$_POST['perct12'];
    $id=rand(1000,10000);
    $result=mysqli_query($link, "insert into student_dbs(firstName,lastName,fatherName,motherName,dob,phoneNo,gender,bloodgroup,regno,medium,addmissionType,quota,nationality,mt,CommunicationAddress,permanentAddress,state,district,pincode,postoffice,fO,annualincome,MO,Motherannualincome,Nationalitys,religion,caste,community,tenth,tboard,twelve,Tboards,YOP10,YOP12,mark10,mark12,perct10,perct12,applicationId) values('$firstName','$lastName','$fatherName','$motherName','$dob','$phoneNo','$gender','$bloodgroup',' $regno','$medium','$addmissionType','$quota','$nationality','$mt','$CommunicationAddress','$permanentAddress','$state','$district','$pincode','$postoffice','$fO','$annualincome','$MO','$Motherannualincome','$nationalitys',' $religion','$caste','$community','$tenth','$tboard','$twelve','$Tboard','$YOP10','$YOP12',' $mark10',' $mark12','$perct10','$perct12','$id')");
    
    if($result){
       echo '<script>alert("Register successfully...\nNote your application ID to verify your details...\n Your Application ID = '.$id.'");</script>';
       include'index2.php';
      
    }
       else{
        echo "unable to insert!!!";
    }
    
  
}
?>
