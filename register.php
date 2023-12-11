<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/init.php';
$auth_token = $_COOKIE['auth_token'];
if(get_user_info($auth_token)){
    header("Location: /wallet");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title ><?=$domain_titleINIT?></title>


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

            <a href="/" class="login">← Go back </a>


        </div>

    </header>
    <main class="login_main">

        <section class="login_section">
            <h1>Create new account</h1>
            <p class="details mb-5">Welcome! Please enter your details</p>
            <form method="post" novalidate  id="register_form">
                <div class="login_content">

                    <input type="text" minlength="6"  required name="username" class="inpt" placeholder="Enter your login">
                    <input type="email" name="email" required class="inpt" placeholder="Enter your email">
                    <input type="password" required id="form2-password" name="password" class="inpt" placeholder="Enter your password">
                    <input type="password" data-pristine-equals="#form2-password"  required class="inpt" placeholder="Repeat your password">
                    <div class="checkbox_block">
                        <div>

                            <input type="checkbox"  id="checkbox_rules">
                            <label for="checkbox_rules">I agree with <a style="color: #30ACFF" href="">Terms of service</a></label>
                        </div>

                    </div>
                    <button type="submit" id="btn_submit" class="btn">Create account </button>

                    <p>Already have an account? <a href="login">Sign in now</a></p>
                </div>
            </form>
        </section>
        <section class="login_image">
            <img src="assets/images/phone_image.svg" alt="">
        </section>
    </main>

</body>
<script src="assets/scripts/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/Pristine/pristine.js"  type="text/javascript"></script>
<script>
    const form = document.getElementById('register_form');
    var pristine = new Pristine(form);
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const checkbox_rules = document.getElementById("checkbox_rules").checked;

        if(checkbox_rules !== true){
            new Notify({
                        title: 'Error',
                        text: 'You must agree to the terms of service',
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
            return false;
        }
        const btn_submit = document.getElementById('btn_submit');
        btn_submit.setAttribute("disbaled", true);
        btn_submit.innerHTML = "<span class='loader'></span>";
        btn_submit.setAttribute("type", "button");

        var valid = pristine.validate();
        const formData = new FormData(form);
        if(valid){
            $.ajax({
            url: '/api/ajax/register.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data)
                btn_submit.setAttribute("disbaled", false);
                btn_submit.innerHTML = "Register";
                btn_submit.setAttribute("type", "submit");

                if (data.status === 'success') {
                    window.location.href = '/login?register=success';
                } else {
                    new Notify({
                        title: 'Error',
                        text: 'Registration is unavailable, this user may already exist',
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
                }
            },
                error: function (data) {
                    console.log(data);
                    btn_submit.setAttribute("disbaled", false);
                    btn_submit.innerHTML = "Register";
                    btn_submit.setAttribute("type", "submit");
                    new Notify({
                        title: 'Error',
                        text: 'Registration is unavailable, this user may already exist',
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
                }

        });
        }
        else{
            new Notify({
                        title: 'Error',
                        text: 'Check that the data entered is correct',
                        status: 'error',
                        autoclose: true,
                        autotimeout: 3000
                    })
            btn_submit.setAttribute("disbaled", false);
            btn_submit.innerHTML = "Register";
        }

    });
</script>


</html>