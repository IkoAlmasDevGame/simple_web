<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center><h1>Simple Website</h1></center>
        <div class="LoginContainer">
            <form method="POST" action="login.php">
                <fieldset>
                    <legend>Login Home</legend>
                        <center><table>
                            <tr>
                                <td>E-mail :</td>
                                <td>
                                    <input type="text" name="email" placeholder="masukan email anda" class="input_email">
                                </td>
                            </tr>
                            <tr>
                                <td>Password :</td>
                                <td>
                                    <input type="password" name="password" placeholder="masukan password anda" class="input_pass">
                                </td>
                            </tr>
                        </table>
                        <br>
                </fieldset>
                <center>
                    <input type="submit" value="Login Home" name="submit">
                </center>
            </form>
            <br>
            <center>
                <a href="index_reg.php"><input type="submit" value="Register" name="register"></a>
            </center>
        </div>
        <br>
        <center>
            <br>
            <div class="info-class">
            <fieldset>
                <legend>INFORMATION</legend>
                Silahkan diisi apapun dibawah ini.
            </fieldset>
            </div>
        </center>
    </body>
</html>