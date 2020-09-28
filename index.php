<?php 
    $pageTittle ="PHP and MYSQL";
        require_once "includes/header.php";
        require_once "includes/connection.php";
        $dbc = db_connect();

        //form submittion code
        if(isset($_POST['submit'])){

            $error =[];
        
            if(empty($_POST['Full name'])){
                $_errors[] = "Name is not  empty";
            }
            else{
            $name =trim($_POST['Full name']);
            }

            if(empty($_POST['email'])){
                $_errors[] = "email is not empty";
            }
            else{
            $email =trim($_POST['email']);
            }
            if(empty($_POST['username'])){
                $_errors[] = "username is not  empty";
            }
            else{
                $username =trim($_POST['username']);
            }

            if(empty($_POST['phone number'])){
                $_errors[] = "phone number is not  empty";
            }
            else{
                $phonenumber =$_POST['phone number'];
            }


            if(empty($_POST['present address'])){
                $_errors[] = "present address is not  empty";
            }
            else{
                $presentaddress =trim($_POST['present address']);
            }

            if(empty($_POST['CNIC'])){
                $_errors[] = "CNIC is not  empty";
            }
            else{
                $CNIC =$_POST['CNIC'];
            }

            if(empty($_POST['DOB'])){
                $_errors[] = "DOB is not  empty";
            }
            else{
                $DOB =trim($_POST['DOB']);
            }

            if(empty($errors)){
            $dbc =db_connect();
            $sql = "INSERT INTO users VALUES('$name','$email','$username','$phonenumber','$presentaddress','$parmanentaddress','$CNIC','$DOB')";                    $result = mysqli_query($dbc,$sql);
            if($result){
                        echo "<div class = 'alert alert-success'> Data is  successfully Entered </div>";
                    }
        else{
            echo "<div class = 'alert alert-danger'> Data cannot be Entered  due to some  error </div>";
            }
            db_close($dbc);
        }

    else
        foreach($errors as $error){
    echo "<div class 'alert alert-danger'>$error</div>";
        }

    }
    else{
        echo "<div class = 'alert alert-danger'>form is not submitted </div>";
    }
?>



    ?>
    <body>
    <div class="container">
        <div class="row ">
                <div class="col-sm-12">
                 <h1 class="text-center">Register Form </h1>
                </div>
        </div>
        <div class ="row justify-content-center">
        <div class="col-sm-6">
     <form action ="" method= "post">
       
     <div class="form-group">
            <label for="name"> Name: </label>
            <input type ="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email"> Email: </label>
            <input type ="email" name="eamil" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="Password"> Password: </label>
            <input type ="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="name"> Username: </label>
            <input type ="Username" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="PhoneNumber"> PhoneNumber: </label>
            <input type ="PhoneNumber" name="PhoneNumber" id="PhoneNumber" class="form-control">
        </div>
        <div class="form-group">
            <label for="presentaddress"> Presentaddress: </label>
            <input type ="Presentaddress" name="presentaddress" id="presentaddress" class="form-control">
        </div>
        <div class="form-group">
            <label for="CNC"> CNIC: </label>
            <input type ="CNIC" name="CNIC" id="CNIC" class="form-control">
        </div>
        <div class="form-group">
            <label for="DOB"> Date Of Birth: </label>
            <input type ="date" name="dob" id="dob" class="form-control">
        </div>
         <input type="submit" value="Register" class= "btn btn-success">"
    </form>
     </div>


        </div>

        
    </div>

    <?php require_once "includes/footer.php" ; ?>
    </boby>
    </html>