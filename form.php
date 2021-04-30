<html>
    <head>
        <title>form</title>
    </head>
    <body>
        <form action="data.php" method="POST">
            <fieldset>
                <legend>Registration Form</legend>
            <input type="text" name="name" placeholder="Enter your name" required><br> <br>
            <input type="text" name="num" placeholder="Enter your mobile" required><br><br>
            <input type="radio" name="gender" value="male" required>Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="others">others<br><br>
            <input type="email" name="mail" placeholder="Enter your Email" required><br><br>
            <textarea name="address" id="" cols="30" rows="10" placeholder="Enter your address" required></textarea><br><br>
            <input type="checkbox" name="hobby" value="sports">sports
            <input type="checkbox" name="hobby" value="arts">arts
            <input type="checkbox" name="hobby" value="others">others<br><br><br>
    <input type="submit" value="submit">
    <input type="reset" value="clear">
            </fieldset>
        </form>
    </body>
</html>