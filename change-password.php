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
    <title ><?=$domain_titleINIT?></title>
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
            <h3 ><?=$domain_titleINIT?></h3>
        </div>

        <div class="login_block1">

            <a href="#" class="login">← Go back </a>


        </div>

    </header>
    <main class="login_main">

        <section class="login_section">
            <h1>Reset password</h1>
            <p class="details mb-5">Please enter your details</p>
            <form action="" id="login_form" method="post">
                <div class="login_content" novalidate>
                    <input type="password" id="pass1" minlength="5" name="new_password" class="inpt" placeholder="Enter your new password">
                    <input type="password"  id="pass2" minlength="5" name="repeat_password" class="inpt" placeholder="Repeat password">

                    <button type="submit" class="btn">Change</button>
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

        const value_pass1 = document.getElementById('pass1').value;

        const value_pass2 = document.getElementById('pass2').value;

        if (valid && value_pass1 === value_pass2) {
            const formData = new FormData(form);
            formData.append("user_id", "<?=$_GET['user_id']?>")

            $.ajax({
                url: '/api/ajax/change_password.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data + "2")
                    if (data.status === 'success') {
                        new Notify({
                            title: 'Success',
                            text: 'Password changed successfully',
                            status: 'success',
                            autoclose: true,
                            autotimeout: 3000
                        })
                        setTimeout(() => {
                            window.location.href = '/login'
                        }, 1000)
                    } else {
                        new Notify({
                            title: 'Error',
                            text: 'Error',
                            status: 'error',
                            autoclose: true,
                            autotimeout: 3000
                        })
                    }
                },
                error: function(data) {
                    console.log(data)
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