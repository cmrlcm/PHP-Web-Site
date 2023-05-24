<form method="post">
    id : <input type="text" name="name" />
    <br />
    pw : <input type="text" name="age" />
    <br /> 
     <input type="submit" />
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "name is $name, age is $age";
}
?>