<?php

require($_SERVER['DOCUMENT_ROOT'] . '/api/init.php');
if (isset($_GET['code']) && isset($_GET['user_id'])) {
    if(!check_code($_GET['code'],"reset_password", $_GET['user_id'])){
       header("Location: /login?error=Invalid_code"); 
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-title>.</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/output.css">
    <link rel="stylesheet" href="assets/styles/checkbox.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/notify/simple-notify.min.css" />
    <script src="assets/notify/simple-notify.min.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="assets/images/logo.svg" class="logo_img" alt="logo">
            <h3 data-title></h3>
        </div>

        <div class="login_block1">

            <a href="#" class="login">← Go back </a>


        </div>

    </header>
    <main class="login_main">

        <section class="login_section">
            <h1>Sign in</h1>
            <p class="details mb-5">Welcome! Please enter your details</p>
            <form action="" id="login_form" method="post">
                <div class="login_content" novalidate>
                    <input type="email" minlength="5" name="email" class="inpt" placeholder="Enter your Email">


                    <button type="submit" class="btn">Reset password</button>
                    <p>Remembered your password? <a href="register">Sign in now</a></p>
                </div>
            </form>
        </section>
        <section class="login_image">
            <img src="assets/images/phone_image.svg" alt="">
        </section>
    </main>

</body>
<script src="assets/scripts/main.js"></script>
<script src="assets/Pristine/pristine.js" type="text/javascript"></script>
<script>
    const form = document.getElementById('login_form');
    var pristine = new Pristine(form);
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        var valid = pristine.validate();
        console.log(valid)
        if (valid) {
            const formData = new FormData(form);

            $.ajax({
                url: '/api/ajax/auth.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data)
                    if (data.status === 'success') {
                        new Notify({
                            title: 'Success',
                            text: 'Authorization was successful',
                            status: 'success',
                            autoclose: true,
                            autotimeout: 3000
                        })
                    } else {
                        new Notify({
                            title: 'Error',
                            text: 'No user with this data was found',
                            status: 'error',
                            autoclose: true,
                            autotimeout: 3000
                        })
                    }
                }
            })
        } else {
            new Notify({
                title: 'Error',
                text: 'Check that the data is correct',
                status: 'error',
                autoclose: true,
                autotimeout: 3000
            })
        }
    })
</script>

</html>