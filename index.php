<?php ?>
<html>

<head>
    <title>Sign in form</title>

    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/index.css">

    <!-- for font awesome icons -->
    <script src="https://kit.fontawesome.com/0a964c491f.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="signup-form">
        <form id="signin" onsubmit="return false">
            <h2 class="text-center">Sign Up!</h2>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" id="usernamebox" required>
                <span class="error-indicator" id="usernameWarning"><i class="far fa-circle"></i></span>
            </div>
            
            
            <div class="form-group">
                <input type="text" name="fullname" class="form-control" placeholder="Full name" id="fullnamebox" required>
                <span class="error-indicator" id="nameWarning"><i class="far fa-circle"></i></span>
            </div>
            <div class="form-group">
                <input type="number" name="age" class="form-control" placeholder="Your age" id="agebox" required>
                <span class="error-indicator" id="ageWarning"><i class="far fa-circle"></i></span>
            </div>

            <span>Gender :</span><br>
            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
            <label class="form-check-label" for="genderMale">
                Male
            </label>

            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
            <label class="form-check-label" for="genderFemale">
                Female
            </label>

            <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other" checked>
            <label class="form-check-label" for="genderOther">
                Other
            </label>

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" id="emailbox" required>
                <span class="error-indicator" id="emailWarning"><i class="far fa-circle"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="phnumber" class="form-control" placeholder="Mobile number" id="phnumberbox" required>
                <span class="error-indicator" id="phnumberWarning"><i class="far fa-circle"></i></span>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" id="passwordbox" required>
                <span class="error-indicator"><i class="far fa-circle"></i></span>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" id="cpasswordbox" required>
                <span class="error-indicator" id="cpassWarning"><i class="far fa-circle"></i></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg" id="submitButton" disabled="false">Sign up</button>
            </div>
        </form>
    </div>
    <script src="js/index.js"></script>
</body>

</html>