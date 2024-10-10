<?php
$errname="";
if(isset($_POST["save"]))
{
    if(empty($_POST['name'])){
        $errname="Name is required";
    }
    else{
        echo "the name is : ",$_POST['name'];
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>

    <form method="POST" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Username: <input type="text" name="name"> 
        <span style="color:red">*<?php echo $errname;?></span><br>
        <input type="submit" name="save">
    </form>

</body>
</html>
