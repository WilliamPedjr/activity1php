<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="cont">
        <h1>Registration Form</h1>  
        <form action="" method="post">

            <div class="form">
                <label for="firstname">First Name</label><br>
                <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" required><br>

                <label for="lastname">Last Name</label><br>
                <input type="text" placeholder="Enter Lastname" name="lastname" id="lastname" required><br>

                <label for="email">Email</label><br>
                <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

                <label for="pass">Password</label><br>
                <input type="password" name="pass" placeholder="***" id="pass" required><br>

                <label for="gender">Sex :</label>
                <label for="male">Male</label>
                <input type="radio" name="sex" id="male" value="male" required>
                <label for="female">Female</label>
                <input type="radio" name="sex" id="female" value="female" required><br><br>

                <input type="submit" name="action" value="Submit" id="submit">
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentL  oaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = {
                    firstname: document.getElementById('firstname').value,
                    lastname: document.getElementById('lastname').value,
                    email: document.getElementById('email').value,
                    sex: document.querySelector('input[name="sex"]:checked').value
                };
                localStorage.setItem('formData', JSON.stringify(formData));
                alert('Form data has been saved to local storage');
            });
        });
    </script>
</body>

</html>
