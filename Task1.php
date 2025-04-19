<!-- 
Q. Create a HTML form and accept the user name and display the name on the same page. -->


<!DOCTYPE html>
<html>

<body>
  
   <form method='POST'>
      <h2>Please input your name:</h2>
    
      <input type="text" name="name">
    
      <input type="submit" value="Submit Name">
   </form>
   <?php
 
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
   
      $name = $_POST['name'];
      
      echo "<h3> Hello $name </h3>";
   }
   ?>
</body>
</html>
