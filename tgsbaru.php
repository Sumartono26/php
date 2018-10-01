<?php
echo "<strong> Daftar </strong>";
echo "<br>";
echo '<form method="post">
        <table border="1" cellpadding="4">
          <tr>
              <td align="right" width="45%">Nama Lengkap:</td>
              <td><input type="text" name="name" size="20"></td>
          </tr>
          <tr>
              <td border="1" align="right" width="45%">User:</td>
              <td><input type="text" name="User" size="20"></td>
          </tr>
          <tr>
              <td align="right" width="45%">Password:</td>
              <td><input type="password" name="Password" size="20"></td>
          </tr>
          <tr>
              <td align="right" width="45%">Password Lagi:</td>
              <td><input type="password" name="Password" size="20"></td>
          </tr>
          <tr>
              <td width="30%"></td>
              <td><input type="submit" value="Submit">
              <input type="reset" value="Ulangi">
          </tr>
          </table>'

?>
