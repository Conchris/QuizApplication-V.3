<?php
include('server.php')
 ?>
<link rel="stylesheet" href="register.css">
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="middletable">

    <h3>REGISTRATION FORM</h3>
    <hr>
    <form action="register.php" method="post">

      <table >
        <tr>
          <td>
            <label for="username">Username </label>
          </td>
          <td>
            <input type="text" name="username" required>
          </td>
        </tr>

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
            <label for="password">Confirm Password </label>
          </td>
          <td>
            <input type="password" name="password_2" required>
          </td>
        </tr>
        <tr>
          <td>
            <button type="button" name="button"> <a href="login.php">Login</a></button>
          </td>
          <td>
            <input type="submit" name="submit" value="Register">
          </td>

        </tr>


      </table>

    </form>
  </div>
  </body>
</html>
