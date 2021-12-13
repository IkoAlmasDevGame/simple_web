<!DOCTYPE html>
<html>
    <head>
        <title>
            REGISTER SIMPLE WEBSITE
        </title>
    </head>
    <body>
        <center><fieldset>
            REGISTERATION ACCOUNT
            <form method="POST" action="register.php">
                <center><table>
                    <tr>
                        <td>E-Mailing :</td>
                        <td>
                        <input type="text" name="email" placeholder="masukan email anda">
                        </td>
                    </tr>
                    <tr>
                        <td>Password  :</td>
                        <td>
                            <input type="password" name="password" placeholder="masukan password">
                        </td>
                    </tr>
                    <tr>
                        <td>RePassword :</td>
                        <td>
                            <input type="password" name="repassword" placeholder="masukan ulang password">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin :</td>
                        <td>
                            <input type="radio" name="jeniskelamin" value="laki">Laki-Laki
                            <input type="radio" name="jeniskelamin" value="perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Date Birthday :</td>
                        <td>
                            <input type="date" name="datebirth" value="datebirth">
                        </td>
                    </tr>
                </table>
                <br>
                <center>
                    <input type="submit" value="CLICK HERE" name="submit">
                </center>
            </form>
        </fieldset>
    </body>
</html>