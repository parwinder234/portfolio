<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $class = $_POST['userclass'];

    echo "<div style='color: green;' 'text:align-center';>";
    echo "<h3>Submitted Data:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Class: " . $class;
    echo "</div><hr>";
}
?>
   <form action="" method="POST">
  <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="username" placeholder="Enter your name" required>
        </div>
        <br>
        <div>
            <label for="class">Class:</label>
            <input type="text" id="class" name="userclass" placeholder="Enter your class" required>
        </div>
        <br>
<button type="submit" name="submit">Submit</button>
    </form>




<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>



</body>
</html>