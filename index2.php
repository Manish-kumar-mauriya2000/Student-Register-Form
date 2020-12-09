<?php

$link=mysqli_connect('localhost','root','');
$db=mysqli_select_db($link,'test');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js">

    </script>

    <title>STUDENT DB</title>
    <style>
        #country-list {
            list-style: none;
            padding: 0;
            width: 190px;
            position: absolute;
        }

        #country-list li {
            padding: 10px;
            background: #f0f0f0;
            border-bottom: #bbb9b9 1px solid;
        }

        #country-list li:hover {
            background: #ece3d2;
            cursor: pointer;
        }

/*
        #regno {
            padding: 10px;
            border: #a8d4b1 1px solid;
            border-radius: 4px;
        }
*/

    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">STUDENT RECORD SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">FORM </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index2.php">VERIFY YOUR DETAILS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
<!--
            <form class="form-inline my-2 my-lg-0" id="search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>

            </form>
-->
        </div>
    </nav>
    <br>
    <div>
        <h1 align="center" style="font-family:algerian;">SEARCH YOUR DETAILS BY USING YOUR APPLICATION ID</h1><br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" id="applicationId" type="text" name="applicationId" placeholder="Search" aria-label="Search" required>
                        <div id="suggesstion-box"></div>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-success" id="ser">SEARCH</button>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <button type="button" class="btn btn-success" id="export"><i class="fa fa-download"></i> EXPORT TO EXCEL</button>
            </div>
            <br><br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="card">
                        <div class="card-body">


                            <center><span>
                                    <h3>YOUR REGISTERED DETAILS</h3>
                                </span></center>
                            <hr>
                            <table class="table table-borderless" id="customer">
                                <tr>
                                    <th>FIRST NAME </th>
                                    <td>
                                        <p1 id="name"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>LAST NAME </th>
                                    <td>
                                        <p1 id="lname"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>FATHER NAME </th>
                                    <td>
                                        <p1 id="fname"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>MOTHER NAME </th>
                                    <td>
                                        <p1 id="mname"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>DATE OF BIRHT </th>
                                    <td>
                                        <p1 id="dob"></p1>
                                    </td>
                                </tr>

                                <tr>
                                    <th>PHONE NUMBER </th>
                                    <td>
                                        <p1 id="phoneNo"></p1>
                                    </td>
                                </tr>

                                <tr>
                                    <th>GENDER </th>
                                    <td>
                                        <p1 id="gender"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>BLOODGROUP </th>
                                    <td>
                                        <p1 id="bloodgroup1"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>REGISTER NUMBER </th>
                                    <td>
                                        <p1 id="regno"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>MEDIUM </th>
                                    <td>
                                        <p1 id="medium"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ADDMISSION TYPE </th>
                                    <td>
                                        <p1 id="addmissionType"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>QUOTA </th>
                                    <td>
                                        <p1 id="quota"></p1>
                                    </td>
                                </tr>

                                <tr>
                                    <th>NATIONALITY </th>
                                    <td>
                                        <p1 id="nationality"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>MOTHER TONGUE </th>
                                    <td>
                                        <p1 id="mt"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>COMMUNICATION ADDRESS </th>
                                    <td>
                                        <p1 id="ca"></p1>
                                    </td>
                                </tr>

                                <tr>
                                    <th>PERMANENT ADDRESS </th>
                                    <td>
                                        <p1 id="pa"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>STATE </th>
                                    <td>
                                        <p1 id="state"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>DISTRICT </th>
                                    <td>
                                        <p1 id="district"></p1>
                                    </td>
                                </tr>

                                <tr>
                                    <th>PINCODE </th>
                                    <td>
                                        <p1 id="pincode"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>POST OFFICE </th>
                                    <td>
                                        <p1 id="po"></p1>
                                    </td>
                                </tr>

                                <tr>
                                    <th>FATHER OCCUPATION </th>
                                    <td>
                                        <p1 id="fo"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>FATHER ANNUAL INCOME </th>
                                    <td>
                                        <p1 id="annualincome"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>MOTHER OCCUPATION </th>
                                    <td>
                                        <p1 id="mo"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>MOTHER ANNUAL INCOME </th>
                                    <td>
                                        <p1 id="mai"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>NATIONALITY </th>
                                    <td>
                                        <p1 id="nationalitys"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>RELIGION </th>
                                    <td>
                                        <p1 id="religion"></p1>
                                    </td>
                                </tr>

                                <tr>
                                    <th>CASTE </th>
                                    <td>
                                        <p1 id="caste"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>COMMUNITY </th>
                                    <td>
                                        <p1 id="community"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10TH/SSLC </th>
                                    <td>
                                        <p1 id="tenth"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10th BOARD</th>
                                    <td>
                                        <p1 id="teboard"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>12th/HSC </th>
                                    <td>
                                        <p1 id="twelve"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>12th BOARD </th>
                                    <td>
                                        <p1 id="Tboard"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10th MONTH AND YEAR PASSED </th>
                                    <td>
                                        <p1 id="YOP10"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>12th MONTH AND YEAR PASSED </th>
                                    <td>
                                        <p1 id="YOP12"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10th TOTAL MARK </th>
                                    <td>
                                        <p1 id="mark10"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10th TOTAL MARK </th>
                                    <td>
                                        <p1 id="mark12"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>10th PERCENTAGE% </th>
                                    <td>
                                        <p1 id="perct10"></p1>
                                    </td>
                                </tr>
                                <tr>
                                    <th>12th PERCENTAGE% </th>
                                    <td>
                                        <p1 id="perct12"></p1>
                                    </td>
                                </tr>


                            </table>
                            <br><br>
                            <center> <a href="index.php" class="btn btn-primary"><span class="fa fa-check-circle" aria-hidden="true"></span> Done</a> </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        $(document).ready(function() {
            $('#export').hide();
            $("#applicationId").keyup(function() {
                $.ajax({
                    type: "POST",
                    url: "readapplication.php",
                    data: 'keyword=' + $(this).val(),

                    success: function(data) {
                        $("#suggesstion-box").show();
                        $("#suggesstion-box").html(data);
                        $("#applicationId").css("background", "#FFF");
                    }
                });
            });



            var usersTable = $("#customer");
            $("#ser").click(function() {

                var regid = $('#applicationId').val();

                $.ajax({
                    url: 'user.php?applicationId=' + regid,
                    dataType: 'json',
                    success: function(json) {
                        
                        if (json.length > 0) {
                            $('#export').show();
                            $.each(json, function(key, user) {
                                $("#name").html(user.firstName);
                                $("#lname").html(user.lastName);
                                $("#fname").html(user.fatherName);
                                $("#mname").html(user.mothername);
                                $("#dob").html(user.dob);
                                $("#phoneNo").html(user.phoneNo);
                                $("#gender").html(user.gender);
                                $("#bloodgroup1").html(user.bloodgroup);
                                $("#regno").html(user.regno);
                                $("#medium").html(user.medium);
                                $("#addmissionType").html(user.addmissionType);
                                $("#quota").html(user.quota);
                                $("#nationality").html(user.nationality);
                                $("#mt").html(user.mt);
                                $("#ca").html(user.CommunicationAddress);
                                $("#pa").html(user.permanentAddress);
                                $("#state").html(user.state);
                                $("#district").html(user.district);
                                $("#pincode").html(user.pincode);
                                $("#po").html(user.postoffice);
                                $("#fo").html(user.fO);
                                $("#annualincome").html(user.annualincome);
                                $("#mo").html(user.MO);
                                $("#mai").html(user.Motherannualincome);
                                $("#nationalitys").html(user.Nationalitys);
                                $("#religion").html(user.religion);
                                $("#caste").html(user.caste);
                                $("#community").html(user.community);
                                $("#tenth").html(user.tenth);
                                $("#teboard").html(user.tboard);
                                $("#twelve").html(user.twelve);
                                $("#Tboard").html(user.Tboards);
                                $("#YOP10").html(user.YOP10);
                                $("#YOP12").html(user.YOP12);
                                $("#mark10").html(user.mark10);
                                $("#mark12").html(user.mark12);
                                $("#perct10").html(user.perct10);
                                $("#perct12").html(user.perct12);



                            });
                        }
                        else{
                            alert('Invalid ID...Try Again');
                        }
                    }
                });

            });
        });

        function selectCountry(val) {
            $("#applicationId").val(val);
            $("#suggesstion-box").hide();
        }

        $(document).ready(function() {
            $('#export').click(function() {
                $("#customer").table2excel({
                    filename: "Students.xls"
                });
            });

        });

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
