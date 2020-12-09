<?php
$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'test');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
    <link rel="stylesheet" href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <title>REGISTRATION FORM</title>
    <script>
        $(document).ready(function() {

            $('#d1').show();
            $('#d2').hide();
            $('#d3').hide();
            $('#d4').hide();
            $('#n1').click(function() {
                $('#d1').show();
                $('#d2').hide();
                $('#d3').hide();
                $('#d4').hide();
                var clickedForm = $('#d1');
                if (clickedForm.find("[name='firstName']").val() == '') {

                    alert("Required name!!");
                    return false;
                }
                if (clickedForm.find("[name='lastName']").val() == '') {
                    alert("Required last name!!");
                    return false;
                }
                if (clickedForm.find("[name='fatherName']").val() == '') {
                    alert("Required Father name!!");
                    return false;
                }
                if (clickedForm.find("[name='motherName']").val() == '') {
                    alert("Required Mother Name");
                    return false;
                }
                if (clickedForm.find("[name='dob']").val() == '') {
                    alert("Required Date of birth!!!");
                    return false;
                }
                if (clickedForm.find("[name='phoneNo']").val() == '') {

                    alert("Required Phone number!!!");
                    return false;
                }

                if (clickedForm.find("[name='gender']").val() == '') {
                    alert("Required Gender");
                    return false;
                }
                if (clickedForm.find("[name='bloodgroup']").val() == '') {
                    alert("Required bloodgroup");
                    return false;
                }
                if (clickedForm.find("[name='regno']").val() == '') {
                    alert("Required register number");
                    return false;
                }
                if (clickedForm.find("[name='medium']").val() == '') {
                    alert("Required");
                    return false;
                }
                if (clickedForm.find("[name='addmissionType']").val() == '') {
                    alert("Required Addmission Type");
                    return false;
                }
                if (clickedForm.find("[name='quota']").val() == '') {
                    alert("Required Quota Type ");
                    return false;
                }
                if (clickedForm.find("[name='nationality']").val() == '') {
                    alert("Required Nationality");
                    return false;
                }
                if (clickedForm.find("[name='mt']").val() == '') {
                    alert("Required Mother tongue");
                    return false;
                } else {
                    document.getElementById("changetopic").innerHTML = "Communication Details"
                    $('#d1').hide();
                    $('#d2').show();
                    $('#d3').hide();
                    $('#d4').hide();
                }
            });

            $('#b1').click(function() {
                document.getElementById("changetopic").innerHTML = "Personal Details"
                $('#d1').show();
                $('#d2').hide();
                $('#d3').hide();
                $('#d4').hide();
            });
            $('#n2').click(function() {

                $('#d1').hide();
                $('#d2').show();
                $('#d3').hide();
                $('#d4').hide();
                var clickedForm2 = $('#d2');
                if (clickedForm2.find("[name='CommunicationAddress']").val() == '') {

                    alert("Required Communication Address!! ");
                    return false;
                }
                if (clickedForm2.find("[name='permanentAddress']").val() == '') {
                    alert("Required Permanent Address!!");
                    return false;
                }
                if (clickedForm2.find("[name='state']").val() == '') {
                    alert("Required State!!");
                    return false;
                }
                if (clickedForm2.find("[name='district']").val() == '') {
                    alert("Required District");
                    return false;
                }
                if (clickedForm2.find("[name='pincode']").val() == '') {
                    alert("Required Pincode!!!");
                    return false;
                }
                if (clickedForm2.find("[name='postoffice']").val() == '') {

                    alert("Required Post Office address!!!");
                    return false;
                } else {
                    document.getElementById("changetopic").innerHTML = "Parent's Occupation and Income"
                    $('#d1').hide();
                    $('#d2').hide();
                    $('#d3').show();
                    $('#d4').hide();
                }

            });
            $('#b2').click(function() {
                document.getElementById("changetopic").innerHTML = "Communication Details"
                $('#d1').hide();
                $('#d2').show();
                $('#d3').hide();
                $('#d4').hide();
            });

            $('#n3').click(function() {
                $('#d1').hide();
                $('#d2').hide();
                $('#d3').show();
                $('#d4').hide();
                var clickedForm3 = $('#d3');
                if (clickedForm3.find("[name='fO']").val() == '') {
                    alert("Required Father occupation!!");
                    return false;
                }
                if (clickedForm3.find("[name='annualincome']").val() == '') {
                    alert("Required Father occupation!!");
                    return false;
                }
                if (clickedForm3.find("[name='MO']").val() == '') {
                    alert("Required Mother occupation!!");
                    return false;
                }
                if (clickedForm3.find("[name='Motherannualincome']").val() == '') {
                    alert("Required Mother annual income!!");
                    return false;
                }
                if (clickedForm3.find("[name='nationality']").val() == '') {
                    alert("Required Nationality!!");
                    return false;
                }
                if (clickedForm3.find("[name='religion']").val() == '') {
                    alert("Required Religion!!");
                    return false;
                }
                if (clickedForm3.find("[name='caste']").val() == '') {
                    alert("Required your caste!!");
                    return false;
                }
                if (clickedForm3.find("[name='community']").val() == '') {
                    alert("Required Father Community!!");
                    return false;
                } else {

                    document.getElementById("changetopic").innerHTML = "Education Details"
                    $('#d1').hide();
                    $('#d2').hide();
                    $('#d3').hide();
                    $('#d4').show();
                }
            });

            $('#b3').click(function() {
                document.getElementById("changetopic").innerHTML = "Parent's Occupation and Income"
                $('#d1').hide();
                $('#d2').hide();
                $('#d3').show();
                $('#d4').hide();
            });

            $('#register').click(function() {
                var clickedForm4 = $('#d4');

                if (clickedForm4.find("[name='tenth']").val() == '') {
                    alert("Required!!");
                    return false;
                }
                if (clickedForm4.find("[name='tboard']").val() == '') {
                    alert("Required Board/University!!");
                    return false;
                }
                if (clickedForm4.find("[name='twelve']").val() == '') {
                    alert("Required!!");
                    return false;
                }
                if (clickedForm4.find("[name='Tboard']").val() == '') {
                    alert("Required Board/University!!");
                    return false;
                }
                if (clickedForm4.find("[name='YOP10']").val() == '') {
                    alert("Requiredyear and month passed in 10th!!");
                    return false;
                }
                if (clickedForm4.find("[name='YOP12']").val() == '') {
                    alert("Required year and month passed in 12th!!");
                    return false;
                }
                if (clickedForm4.find("[name='mark10']").val() == '') {
                    alert("Required total 10th mark!!");
                    return false;
                }
                if (clickedForm4.find("[name='mark12']").val() == '') {
                    alert("Required total 12th mark!!");
                    return false;
                }
                if (clickedForm4.find("[name='perct10']").val() == '') {
                    alert("Required 10th percentage!!");
                    return false;
                }
                if (clickedForm4.find("[name='perct12']").val() == '') {
                    alert("Required 12th percentage!!");
                    return false;
                }
            });

        });

    </script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">STUDENT RECORD SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">FORM <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index2.php">VERIFY YOUR DETAILS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" id="search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>

            </form>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card my-9">
                    <div class="card-body">
                        <div class="wrapper">
                            <div class="company-info">
                                <h3 id="para"> <em>Please fill your details carefully and click on the next button to proceed . If finally it was not submitted then something your done a mistake while filling the form, so don't worry try again and fill your details correctly...</em></h3>
                                <ul>
                                    <li id="personal" align="center">
                                        <h4 id="changetopic">Personal details</h4>
                                    </li>

                                </ul>
                            </div>
                            <div class="contact">
                                <form id="needs-validation" action="studentDB.php" method="post">
                                    <div id="d1">
                                        <p>
                                            <lable>First Name : </lable>
                                            <input type="text" name="firstName" pattern="[A-Za-z\s]{1,30}" title="Only characters are allowed!!..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Last Name : </lable>
                                            <input type="text" name="lastName" pattern="[A-Za-z\s]{1,30}" title="Only characters are allowed!!..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Father Name : </lable>
                                            <input type="text" name="fatherName" pattern="[A-Za-z\s]{1,30}" title="Only characters are allowed!!..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Mother Name : </lable>
                                            <input type="text" name="motherName" pattern="[A-Za-z\s]{1,30}" title="Only characters are allowed!!..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Date of Birth : </lable>
                                            <input type="date" name="dob" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Phone Number : </lable>
                                            <input type="text" name="phoneNo" pattern="\d{10}" title="only numbers are allowed!!" maxlength="10" required>
                                           <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Gender: </lable>
                                            <select id="bloodgroup" name="gender" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </p>
                                        <p>
                                            <lable>Blood Group : </lable>
                                            <select id="bloodgroup" name="bloodgroup" required>
                                                <option value="O+ve">O+ve</option>
                                                <option value="O-ve">O-ve</option>
                                                <option value="AB+ve">AB+ve</option>
                                                <option value="AB-ve">AB-ve</option>
                                                <option value="B+ve">B+ve</option>
                                                <option value="B-ve">B-ve</option>
                                                <option value="A+ve">A+ve</option>
                                                <option value="A-ve">A-ve</option>
                                            </select>
                                        </p>
                                        <p>
                                            <lable>Register Number : </lable>
                                            <input type="text" name="regno" pattern="\d{7}" maxlength="7" title="Only numbers allowed!!" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Medium : </lable>
                                            <select id="bloodgroup" name="medium" required>
                                                <option value="English">English</option>
                                                <option value="Tamil">Tamil</option>
                                            </select>
                                        </p>
                                        <p>
                                            <lable>Addmission type : </lable>
                                            <input type="text" name="addmissionType" pattern="[A-Za-z\s]{1,15}" title="Only characters are allowed!!..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Quota : </lable>
                                            <select id="bloodgroup" name="quota" required>
                                                <option value="MANAGEMENT">MANAGEMENT</option>
                                                <option value="GOVERNMENT">GOVERNMENT</option>
                                            </select>
                                        </p>
                                        <p>
                                            <lable>Nationality: </lable>
                                            <select id="bloodgroup" name="nationality" required>
                                                <option value="Indian">Indian</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </p>

                                        <p>
                                            <lable>Mother Tongue : </lable>
                                            <select id="bloodgroup" name="mt" required>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </p>

                                        <br>

                                        <p align="center">

                                            <button type="button" class="btn btn-success" id="n1" name="next">NEXT<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                        </p>
                                    </div>

                                    <div id="d2">
                                        <p class="full">
                                            <lable>Communication Address : </lable>
                                            <textarea name="CommunicationAddress" rows="5" required></textarea>

                                        </p>
                                        <p class="full">
                                            <lable>Permanent Address : </lable>
                                            <textarea name="permanentAddress" rows="5" required></textarea>

                                        </p>
                                        <p>
                                            <lable>State : </lable>
                                            <input type="text" name="state" pattern="[A-Za-z\s]{1,15}" title="Only character allowed..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>District : </lable>
                                            <input type="text" name="district" pattern="[A-Za-z\s]{1,15}" title="Only character allowed..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Pin code : </lable>
                                            <input type="text" name="pincode" pattern="\d{6}" maxlength="6" title="only numbers allowed!!" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Post office : </lable>
                                            <input type="text" name="postoffice" pattern="[A-Za-z\s]{1,15}" title="Only character allowed..." required>
                                            <span class="validity"></span>
                                        </p><br>

                                        <p align="center">
                                            <button type="button" id="b1" class="btn btn-danger" name="back1">PREV</button>
                                            <button type="button" id="n2" class="btn btn-success" name="next">NEXT<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                        </p>

                                    </div>

                                    <div id="d3">
                                        <p>
                                            <lable>Father Occupation : </lable>
                                            <input type="text" name="fO" pattern="[A-Za-z\s]{1,15}" title="Only characters are allowed..." required>
                                           <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Father Annual Income : </lable>
                                            <input type="number" name="annualincome" title="Only numbers are allowed!!" placeholder="eg: 50000" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Mother Occupation : </lable>
                                            <input type="text" name="MO" title="Only characters are allowed!..."  required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Mother Annual Income: </lable>
                                            <input type="number" name="Motherannualincome" title="Only numbers are allowed!!" placeholder="eg: 50000/0" required>
                                           <span class="validity"></span>
                                        </p>
                                        <p class="full">
                                            <lable>Nationality : </lable>
                                            <input type="text" name="nationality" pattern="[A-Za-z\s]{1,15}" title="Only characters allowed!!..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p class="full">
                                            <lable>Religion : </lable>
                                            <input type="text" name="religion" pattern="[A-Za-z\s]{1,15}" title="Only characters allowed!..." required>
                                           <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Caste: </lable>
                                            <input type="text" name="caste" pattern="[A-Za-z\s]{1,15}" title="Only character allowed..." required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Community: </lable>
                                            <input type="text" name="community" pattern="[A-Za-z\s]{1,15}" title="Only character allowed..." required>
                                            <span class="validity"></span>
                                        </p><br />

                                        <p align="center">
                                            <button type="button" id="b2" class="btn btn-danger" name="submit">PREV</button>
                                            <button type="button" id="n3" class="btn btn-success" value="NEXT" name="next">NEXT<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                        </p>

                                    </div>

                                    <div id="d4">
                                        <p>
                                            <lable>10th STD/SSLC : </lable>
                                            <input type="text" name="tenth" placeholder=" SSLC/others " required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Board/University : </lable>
                                            <input type="text" name="tboard" placeholder=" eg: state board" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>12th STD/HSC : </lable>
                                            <input type="text" name="twelve" placeholder="eg: HSC" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>Board/University: </lable>
                                            <input type="text" name="Tboard" placeholder="eg: state board" required>
                                           <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>10th Month and Year of Passed: </lable>
                                            <input type="text" name="YOP10" placeholder="eg: march,2016" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>12th Month and Year of Pased : </lable>
                                            <input type="text" name="YOP12" placeholder="eg: April,2018" required>
                                             <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>10th Mark Secured: </lable>
                                            <input type="text" name="mark10" pattern="\d{3}" placeholder="eg: 498" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>12th Mark Secured: </lable>
                                            <input type="text" name="mark12" pattern="\d{0,6}" placeholder="eg: 1180" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>10th %: </lable>
                                            <input type="text" name="perct10" placeholder="eg: 95.6" required>
                                            <span class="validity"></span>
                                        </p>
                                        <p>
                                            <lable>12th %: </lable>
                                            <input type="text" name="perct12" placeholder="eg: 93.5" required>

                                        </p><br>
                                        <p>
                                            <button type="button" id="b3" class="btn btn-danger" name="submit">PREV</button>
                                        </p>

                                        <p class="full">

                                            <input type="submit" id="register" class="btn btn-success" value="REGISTER" name="submit">
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
