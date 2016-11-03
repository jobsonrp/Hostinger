<table border='0' align='center'>
    <form method='post' action="logincheck.php">
        <tr>
            <td>
                Login Name
            </td>
            <td>
                <input type="text" name="uname" size="20" maxlength="20"/>
            </td>
        </tr>
        <tr>
            <td>
                Password
            </td>
            <td>
                <input type="password" name="upassword" size="20" maxlength="20"/>
            </td>
        </tr>
        
        <tr>
            <td colspan="2" align='center'>
                <input type="submit" value="Login" name="submit" />
                 
                 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Clear" />
            </td>
        </tr>
        <tr>
            <td colspan="2" align='center'>
                <?php
                    if(isset($_REQUEST["err"]))
                        echo "Invalid Username or Password";
                ?>
            </td>
        </tr>
    </form>
</table>