<?php
include('server.php')
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <table>
        <tr>
          <td>
            <label for="username">Username </label>
          </td>
          <td>
            <input type="text" name="username" zrequired>
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
            <input type="submit" name="submit" value="submit">
          </td>
        </tr>


      </table>

    </form>
  </body>
</html>
