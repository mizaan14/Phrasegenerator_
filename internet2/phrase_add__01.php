 <?php 
if (isset($_GET['btn-save'])) {

$text = "\nI Say Yes To\n" . $_GET['phrase'];
$filename = include('config.php');
$fname =  $_GET['fname'];
$text = $_GET['phrase'];
$text = urldecode($text);
$link = mysqli_connect("localhost", "root", "", "i218s_phrase_live");
$sql = "INSERT INTO phrases (phrase,recipient)
VALUES ('$text', '$fname')";

if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
header('Location: phrase_read.php');

}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Add phrase</title>
    <meta charset="UTF-8"></meta>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style type="text/css">
      .container div {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
 

          <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-3">I say YES! to ...</h1> 
  <form method="get">
   <select  name="phrase">
      <pre><option value="ChickenNuggets">  Chicken Nuggets  </option></pre>"\n"
      <option value="Ketchup"> <pre>Ketchup</pre> </option>"\n
      <option value="HdM"> <pre>HdM</pre> </option>
      <option value="Koalabär"> <pre>Koalabär</pre> </option>
    </select>
    <input type="text" name="fname"></input>
   <button type="submit" name="btn-save" id="btn-save" value="1">Heho</button>
   </form>
          </div>


        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    </body>
  </body>
</html>
