<?php
    session_start();

    if(isset($_POST['problem']))
    {
        $_SESSION['problem'] = intval($_POST['problem']);
    }
    $problemId = $_SESSION['problem'];
    $title = array(
        1 =>"Reverse",
        2 =>"Sort Numbers",
        3 =>"Twice as old",
        4 =>"Integers from 0 to n"
    );
    $explain = array(
        1 =>"Enter string, we would reverse it",
        2 =>"Enter numbers, we would sort them",
        3 =>"Enter age of dad and son<br>
    We would calculate how many years ago the father was twice as old as his son <br>
    (or in how many years he will be twice as old).",
        4 =>"Enter number n, we would make a series from 0 to n"
    );
    function reverse($str){
        $str = iconv('utf-8', 'windows-1251', $str);
        $str = strrev($str);
        $str = iconv('windows-1251', 'utf-8', $str);
        return $str;
    }
    function sort_nums($str) {
        $nums = explode(' ', $str);
        sort($nums);
        return implode(' ', $nums);
    }
    function twice_as_old($str) {
        $nums = explode(' ', $str);
        $dad = intval($nums[0]);
        $son = intval($nums[1]);
        return abs($son * 2 - $dad);

    }
    function generate_integers($str) {
        $n = intval($str);
        $result = [];
        for($i = 0;$i<=$n;$i++){
            array_push($result,$i);
        }
        return implode(' ', $result);
    }
    function get_result($str)
    {
        switch ($_SESSION['problem']){
            case 1:
                return reverse($str);
                break;
            case 2:
                return sort_nums($str);
                break;
            case 3:
                return twice_as_old($str);
                break;
            case 4:
                return generate_integers($str);
                break;
            default:
                return NULL;
                break;
        }
    }
?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
    <div class="container mt-5 shadow p-3 mb-5 bg-body rounded col text-center" style="width: 33%;">
        <form action="" method="post">
            <h3><?php echo $title[$problemId]?></h3>
            <h5 class="text-muted"><?php echo $explain[$problemId] ?></h5>
            <input type="text" name="textToSolve" placeholder="Enter value" class="form-control" autocomplete="off"><br>
            <input type="submit" value="    Solve it    " class="btn btn-primary ">
        </form>
    </div>
    <?php
    if(isset($_POST['textToSolve']) && $_POST['textToSolve'] != '')
    {
        $textToSolve = $_POST['textToSolve'];
        $res = get_result($textToSolve);
        echo "
            <div class='container mt-5 shadow p-3 mb-5 bg-body rounded col text-center' style='width: 33%;'>
                <form action='problem_choice.php'>
                    <h3>The result is:</h3>
                    <h4 class='text-muted'>$res</h4>
                    <input type='submit' value='    Back to problem choice    ' class='btn btn-primary'>
                </form>
            </div>
        ";
    }
    ?>



