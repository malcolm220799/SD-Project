<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="container">
            <div class="card mt-5 w-50 mx-auto shadow">
                <form method="post" action="register.php" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Please enter email here..." required>
                    </div>                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Please enter username here..." required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="text" name="password" placeholder="Please enter password here..." required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    <?php 
    if (isset($_POST['submit'])) {
        require($_SERVER['DOCUMENT_ROOT'].'/Assignments/SoftwareProject/phpmailer/PHPMailerAutoload.php');            

        require ('connect.php');

        $uname = trim(mysqli_real_escape_string($conn, $_POST['username']));
        $pws = sha1(trim(mysqli_real_escape_string($conn, $_POST['password'])));
        $email = trim(mysqli_real_escape_string($conn, $_POST['email']));

        //phpmailer code
        $mail = new PHPMailer();                                        //creates a new instance of PHPMailer class
        $mail->isSMTP();                                                //enables SMTP mode transfer
        $mail->isHTML(true);                                            //uses text/html instead of text/plain
        $mail->Host = "smtp.gmail.com";                                 //SMTP server       smtp.office365.com
        $mail->Port = 587;                                              //GMAIL SMTP port
        $mail->SMTPSecure = "tls";                                      //encryption technique
        $mail->SMTPAuth = true;                                         //using authentication with username and password
        //email sever credentials and email composition
        $mail->Username = 'softwareprojectshop@gmail.com';                           //username
        $mail->Password = 'MCAST1234';                                   //password
        $mail->setFrom("softwareprojectshop@gmail.com", "swd42a@gmail.com");      //who is sending the email
        $mail->addAddress($email);                                      //the email of the user
        $mail->Subject = "Registration Info";                           //subject
        $mail->Body = "test";                                           //body

        //debug info
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';

        if(!$mail->Send()) {
            echo "Message was not send:".$mail->ErrorInfo;
        }
        else {
            $psw = sha1($psw);    //encode our password

            $query = "INSERT INTO tbl_users (username, password, userType) VALUES ('$uname', '$psw', 'user')";

            $result = mysqli_query($conn, $query) or die("Error in query". mysqli_error($conn));
            echo "<div class='alert alert-success'>>".mysqli_affected_rows($conn)."rows inseted!</div>";
            echo "<div class='text-center'><a class'btn btn-info' href='login.php'>Check your email and go to the login page</a></div>";
        }
    }
    ?>

    <script>
        $('#img').on('change', function() {        
            var filename = $(this).val().replace('C:\\fakepath\\','');
            $(this).next('.custom-file-label').html(filename);
        });
    </script>

</html>