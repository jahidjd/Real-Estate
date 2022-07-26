<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Registrer Page</title>
</head>
<body>
    <div class="container">
        <h1>Register as a new mamber</h1>
        <form action="r_save.php" method="post">
            <table class="table table-bordered">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" class="form-control"></td>
                </tr>
             
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Save" class="btn btn-info btn-block"></td>
                </tr>
                
            </table>
        </form>
    </div>
    
</body>
</html>
