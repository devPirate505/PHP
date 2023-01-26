<h1>Welcome to CV Wizard</h1>

<h2>Personal Information</h2>


<form action="02_academics.php" method="get">
    
    Name: <input type="text" name="name" id=""> <br/><br/>
    Father's Name: <input type="text" name="father_name" id=""><br/><br/>
    
    Gender: <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br><br>

    Profession: <input type="text" name="profession" id=""> <br/><br/>
    Date of Birth: <input type="date" name="dob" id=""><br/><br/>
    Email: <input type="email" name="email" id=""><br/><br/>
    Phone: <input type="number" name="phone" id=""><br/><br/>

    <input type="submit" value="Next">
    
</form>


<?php

session_start();

?>