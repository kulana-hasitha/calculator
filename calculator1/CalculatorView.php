<!DOCTYPE html>

<head>
    <title>Simple Calculator </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">

    <!-- <script>
        showResult = () => {
            alert(<?php echo $result ?>);
        }
    </script> -->

</head>

<?php

require 'Calculator.php';

$cal = new Cal();
$result = 0;

if (isset($_POST['operator'])) {
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result = '';



    if (is_numeric($first_num) && is_numeric($second_num)) {


        switch ($operator) {
            case "Add":

                $result = $cal->add($first_num, $second_num);
                echo '<script type="text/JavaScript"> 
           alert("' . "Result is " . $result . '");
     </script>';
                break;

            case "Subtract":

                $result = $cal->sub($first_num, $second_num);
                echo '<script type="text/JavaScript"> 
            alert("' . "Result is " . $result . '");
      </script>';
                break;
            case "Multiply":

                $result = $cal->mul($first_num, $second_num);
                echo '<script type="text/JavaScript"> 
            alert("' . "Result is " . $result . '");
      </script>';
                break;
            case "Divide":

                $result = $cal->div($first_num, $second_num);
                echo '<script type="text/JavaScript"> 
            alert("' . "Result is " . $result . '");
      </script>';

            case "Modulas":

                $result = $cal->mod($first_num, $second_num);
                echo '<script type="text/JavaScript"> 
        alert("' . "Result is " . $result . '");
  </script>';
        }
    }
}
?>

<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 style="text-align: center;" style="font-family: 'Mochiy Pop P One', sans-serif;">Calculator </h1>
                <form action="" method="post" id="quiz-form" style="margin-top: 50px;">
                    <p>
                        <input class="form-control" type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
                    </p>
                    <p>
                        <input class="form-control" type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
                    </p>
                    <p>
                        <input class="form-control" readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
                    </p>
                    <div style="text-align: center;"><input class="btn btn-primary" type="submit" name="operator" value="Add" />
                        <input class="btn btn-primary" type="submit" name="operator" value="Subtract" />
                        <input class="btn btn-primary" type="submit" name="operator" value="Multiply" />
                        <input class="btn btn-primary" type="submit" name="operator" value="Divide" />
                        <input class="btn btn-primary" type="submit" name="operator" value="Modulas" />

                    </div>

                </form>
            </div>
        </div>

    </div>
</body>

</html>