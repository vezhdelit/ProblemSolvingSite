<?php
    session_start();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
<div class="container mt-5 shadow p-3 mb-5 bg-body rounded" style="width: 25%;">

    <form action="problem_solve.php" method="post" >
        <h4 class="text-center">Hi, <?php echo$_SESSION['username']?> !</h4>
        <h4 class="text-center">Please, Choose the problem</h4>
        <p>
            <div class="form-check form-switch">
                <input class="form-check-input" type="radio" name="problem" value="1">
                <label class="form-check-label" for="flexCheckDefault"> Reverse string </label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="radio" name ="problem" value="2" checked>
                <label class="form-check-label" for="flexCheckChecked"> Sort Numbers </label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="radio" name ="problem" value="3" checked>
                <label class="form-check-label" for="flexCheckChecked"> Twice as old </label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="radio" name ="problem" value="4" checked>
                <label class="form-check-label" for="flexCheckChecked"> Integers from 0 to n </label>
            </div>
        </p>
        <div class="text-center">
            <input type="submit" value="    Solve it    " class="btn btn-primary " >
        </div>
    </form>
</div>
