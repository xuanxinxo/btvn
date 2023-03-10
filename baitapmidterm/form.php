<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./index.css">

<head>
    <title>Đăng nhập</title>
</head>


<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login Form
            </div>
            <div class="title signup">
                Signup Form
            </div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="#" class="signup" method='post'>
                    <div class="field">
                        <label>email</label>
                        <input type="text" name='email' placeholder="">
                    </div>
                    <div class="field">
                        <label>lastname</label>
                        <input type="text" name='lastname' placeholder="">
                    </div>
                    <div class="field">
                        <label>firstname</label>
                        <input type="text" name='firstname' placeholder="">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="" minlength="8">
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="btn" value="Login">
                    </div>
                    <?php
                    if (isset($_POST['btn'])) {
                        function checklasttname($lastname)
                        {
                            if (empty($lastname)) {
                                echo " Phải nhận Lastname  <br>";
                            } else {
                                if (is_string($lastname) === 1) { //kiểm tra chuỗi nếu hàm đúng thì trả về giá trị là 1 :
                                    echo "Họ : $lastname <br>";
                                } else {
                                    echo "Vui lầm điền tên không điền số <br>";
                                }
                            }
                        }
                        function checkfirstname($firstname)
                        {
                            if (empty($firstname)) {   // kiểm tra giá trị 
                                echo "Phải nhập Firstname  <br>";
                            } else {
                                if (is_string($firstname) === 1) {
                                    echo "Tên : $firstname <br>";
                                } else {
                                    echo "Vui lầm điền tên không điền số <br>";
                                }
                            }
                        }

                      
                        function checkEmail($email)
                        {
                            if (empty($email)) {
                                echo "Vui lầm nhập Email <br>";
                            } else {
                                echo "Email : $email <br>";
                            }
                        }
                        $email = $_POST['email'];
                        checkEmail($email);
                        $lastname = $_POST['lastname'];
                        checklasttname($lastname);
                        $firstname = $_POST['firstname'];
                        checkfirstname($firstname);
                        $pass = $_POST['pass'];
                        echo $pass;
                    }

                    ?>
</body>

</html>