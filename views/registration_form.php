<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/CI3/register/SaveData/" method="post">
        <table cellspacing="25">
            <tr>
                <th>Name</th>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr>
                <th>Age</th>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="staddress"></td>
            </tr>
            <tr>
                <th>Email Id</th>
                <td> <input type="mail" name="email">
                </td>
            </tr>
            <tr>
                <th>Mobile no</th>
                <td><input type="text" maxlength="10"    name="studentmobileno"></td>
                <tr>
                <th><input type="submit" value="Register" ></th>
                </tr>
            </tr>
        </table>
    </form>
    
</body>
</html>