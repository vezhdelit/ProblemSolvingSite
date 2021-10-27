<?php
    session_start();
    if(isset($_POST['username']) || isset($_POST['email']) || isset($_POST['password'])) {
        $users = array(
            array("first@gmail.com", "1234"),
            array("second@gmail.com", "4321"),
            array("vezhdel.vasya2001@gmail.com", "1234"),
            array("admin@gmail.com", "admin")
        );
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];

        if (trim($username) == "" || trim($email) == "" || trim($password) == "") {
            echo "<h4 class=\"text-muted\" style='text-align:center; margin-top: 1%;'>Error, fill all the fields</h4>";
        } else {
            $test_var = array($email, $password);
            if (in_array($test_var, $users)) {
                header('Location: problem_choice.php');
                exit;
            } else {
                echo "<h4 class=\"text-muted\" style='text-align:center; margin-top: 1%;'>Error, wrong email or password.</h4>";
            }
        }
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
<div class="container mt-5 shadow p-3 mb-5 bg-body rounded " style="width: 25%;">
    <form action="" method="post" class="col text-center">
        <h2>Login page</h2>
        <input type="text" name="username" placeholder="Enter username" class="form-control" autocomplete="off"><br>
        <input type="email" name="email" placeholder="Enter email" class="form-control"><br>
        <input type="password" name="password" placeholder="Enter password" class="form-control"><br>
        <input type="submit" value="  Login  " class="btn btn-primary">
    </form>
</div>
