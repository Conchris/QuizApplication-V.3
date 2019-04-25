<?php include('Slogin.php'); ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <div class="middletable">
      <i class="fas fa-user"></i>
      <br><br>
<hr>
    <form action="login.php" method="post">
      <table>

        <tr>
          <td>
            <label for="email">E-mail </label>
          </td>
          <td>
            <input type="email" name="email" required>
          </td>
        </tr>
        <tr>
          <td>
            <label for="password">Password </label>
          </td>
          <td>
            <input type="password" name="password" required>
          </td>
        </tr>



        <tr>

            <td>
              <button type="button" name="button"> <a href="register.php">Register</a> </button>
            </td>

          <td>
            <input type="submit" name="login" value="Login">
          </td>
        </tr>


      </table>

    </form>
    </div>
  </body>
</html>
