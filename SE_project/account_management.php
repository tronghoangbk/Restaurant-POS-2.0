<?php
require_once('dbhelp.php');

if(!empty($_POST['info'])){
    $_username = $_name = $_gender = $_id_card = $_phone = $_email = $_address = '';
    if (isset($_POST['username'])){
        $_username = $_POST['username'];
    }
    if (isset($_POST['name'])){
        $_name = $_POST['name'];
    }
    if (isset($_POST['gender'])){
        $_gender = $_POST['gender'];
    }
    if (isset($_POST['id_card'])){
        $_id_card = $_POST['id_card'];
    }
    if (isset($_POST['phone'])){
        $_phone = $_POST['phone'];
    }
    if (isset($_POST['email'])){
        $_email = $_POST['email'];
    }
    if (isset($_POST['address'])){
        $_address = $_POST['address'];
    }
    if ($_username != ''){
        $sql="update account set name = '$_name', gender = '$_gender', `identity card` = '$_id_card', `phone number` = '$_phone', email = '$_email', address = '$_address' where username = '$_username'";
    }
    execute($sql);
}
if(!empty($_POST['login'])){
    $_username = $_password = $_position = '';
    if (isset($_POST['username'])){
        $_username = $_POST['username'];
    }
    if (isset($_POST['password'])){
        $_password = $_POST['password'];
    }
    if (isset($_POST['position'])){
        $_position = $_POST['position'];
    }
    if ($_username != ''){
        $sql="update account set password = '$_password', position = '$_position' where username = '$_username'";
    }
    execute($sql);
}
if(!empty($_POST['delete'])){
    $_username = '';
    if (isset($_POST['username'])){
        $_username = $_POST['username'];
    }
    if ($_username != ''){
        $sql="delete from account where username = '$_username'";
    }
    execute($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tea Station || Account Manager</title>
    <!-- font-awesome -->
    
    <!-- custom css -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/account_manager.css"/>

    <link rel="stylesheet" href="./css/h_f.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body style="top:80px;">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top py-3 header">
            <div><a href="mainPage.php" class="navbar-brand text-uppercase font-weight-bold">Nova Restaurant</a>
                <!-- <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button> -->
                <div id="navbarSupportedContent" class="navbar-collapse" style="position: fixed;right:20px;top:10px">
                    <button class="btn btn-info ml-auto">????ng xu???t</button>
                </div>
            </div>
        </nav>
    </div>
    <div class="btn-group" role="group" style="width:100%">
        <button type="button" class="btn btn-secondary active">Qu???n l?? t??i kho???n</button>
        <div class="dropup">
        <button class="dropbtn">Qu???n l?? nh?? h??ng</button>
        <div class="dropup-content">
            <a href="managermenu.php">Qu???n l?? menu</a>
            <a href="table_management.php">Qu???n l?? b??n</a>
            <a href="../OrderManager/om.php">Qu???n l?? h??a ????n</a>
        </div>
        </div>        
        <button type="button" class="btn btn-secondary" onclick="window.open('employeePage.php','_self')">Th??ng tin t??i kho???n</button>
    </div>

    <div class="btn-group" role="group" style="width:100%">
        <button class="tablink btn btn-info active" onclick="filterSelection('all')" id="defaultOpen">T???t c???</button>
        <button class="tablink btn btn-info" onclick="filterSelection('staff')">Nh??n vi??n</button>
        <button class="tablink btn btn-info" onclick="filterSelection('manage')">Qu???n l??</button>
        <button class="tablink btn btn-info" onclick="window.open('add_account.php','_self')">Th??m nh??n vi??n</button>
        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    </div>  

    <div class="account" >
        <div class="container" id="myMenu">
            <?php
            $sql = 'select * from account';
            $accountList = executeResult($sql);
            foreach($accountList as $std){
                echo '
                <form method="post" onsubmit="return confirm(\'B???n mu???n x??a t??i kho???n n??y\');">
                <div class="filterDiv '.$std['position'].'"> 
                    <input name="username" style="display:none" value="'.$std['username'].'">
                    <li><a onclick="openCity(event, \''.$std['username'].'\')">'.$std['name'].'</a>
                    <input type="submit" name="delete" value="X??a">
                    </li>
                </div>
                </form>
                ';
            }
            ?>    
        </div>

        <div class="info ">
            <?php
            $sql = 'select * from account';
            $accountList = executeResult($sql);
            foreach($accountList as $std){
                $male = "";
                $female = "";
                $manage = "";
                $staff = "";
                if ($std['position'] == "manage"){
                    $manage = "checked";
                }
                else {
                    $staff = "checked";
                }
                if ($std['gender'] == "male"){
                    $male = "checked";
                }
                else {
                    $female = "checked";
                }
                echo '
            <div id='.$std['username'].' class="tabcontent">
                <h2>Th??ng tin c?? nh??n</h2>
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="images/logo.png" alt="Avatar" style="width:150px;">
                    </div>
                    <div class="col-7" style="background-color:#ddd;">
                        <form method="post" onsubmit="return confirm(\'Th??ng tin t??i kho???n s??? ???????c thay ?????i?\');">
                            <input name="username" style="display:none" value="'.$std['username'].'">
                            <label>H??? v?? t??n:</label><br>
                            <input type="text" class="form-control" name="name" value="'.$std['name'].'">
                            Gi???i t??nh: <br>
                            <input type="radio"  name="gender" value="male" '.$male.'>
                            <label for="male">Male</label>
                            <input type="radio" name="gender" value="female" '.$female.'>
                            <label for="female">Female</label><br>

                            <label>CMND:</label><br>
                            <input type="text" class="form-control" name="id_card" value="'.$std['identity card'].'">

                            <label>S??? ??i???n tho???i:</label><br>
                            <input type="tel" class="form-control" name="phone" placeholder="10 s???" pattern="[0]{1}[0-9]{9}" value="'.$std['phone number'].'">

                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" value="'.$std['email'].'">
                            <label>?????a ch???:</label>
                            <input type="text" class="form-control" name="address" value="'.$std['address'].'"><br>
                            <input type="submit" name="info" class="btn-success" value="Submit">
                            <input type="reset" class="btn-default" value="Reset">
                        </form>
                    </div>
                </div>
                <h2>Th??ng tin ????ng nh???p</h2><br>
                <form method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Username</span>
                        </div>
                        <input type="text" class="form-control" name="username" value="'.$std['username'].'">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                        </div>
                        <input type="password" class="form-control" name="password" value="'.$std['password'].'">
                    </div>
                    Ch???c v???:<br>
                    <input type="radio" name="position" value="manage" '.$manage.'>
                    <label for="manage">Qu???n l??</label>
                    <input type="radio" name="position" value="staff" '.$staff.'>
                    <label for="staff">Nh??n vi??n</label><br><br>
                    <input type="submit" name="login" class="btn-success" value="Submit">
                </form>
            </div>
              
                ';
                }
            ?>  
        </div>
    </div>
    <footer class="text-center text-lg-start bg-light text-muted" style="top:800px">
        
        <!-- Section: Links  -->
        <section class="p-1">
        <div class="text-left text-md-start mt-1">
            <!-- Grid row -->
            <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h4 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-utensils"></i>Nova Restaurant
                </h4>
                <p>
                We are the best choice for you
                
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Contact
                </h6>
                <p><i class="fas fa-home me-3"></i> ?????i H???c B??ch Khoa TP.HCM</p>
                <p>
                <i class="fas fa-envelope me-3"></i>
                novateam@gmail.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        </section>
        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        ?? 2021 Copyright:
        <a class="text-reset fw-bold" href="#">NovaRestaurant.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- H??m ????? scroll -->
    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 10 ) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/account_manager.js"></script>
    <script src="js/search_account.js"></script>    
    <script src="js/delete_account.js"></script>   
</body>

</html>
    <!-- end of header -->
    

    <!-- About section -->
   