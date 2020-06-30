<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Register SanberBook</title>
</head>
<body>
    <!-- Headings -->
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <!-- Form Register -->
    <form action="http://localhost/phpmvc/public/welcome">
        <!-- Name -->
        <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
        <br>
        <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>

        <!-- Gender -->
        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
        <input type="radio" id="Other" name="gender" value="other">
            <label for="other">Other</label><br>

        <!-- Nationality -->
        <p>Nationality:</p>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="australian">Australian</option>
            <option value="mexican">Mexican</option>
        </select><br>

        <!-- Languge Spoken -->
        <p>Language Spoken:</p>
        <input type="checkbox" id="bahasa_indonesia" name="language_spoken" value="bahasa Indonesia">
            <label for="bahasa_indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language_spoken" value="english">
            <label for="english">English</label><br>
        <input type="checkbox" id="other" name="language_spoken" value="other">
            <label for="other">Other</label><br>

        <!-- Bio -->
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        
        <!-- Sign Up Button -->
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>