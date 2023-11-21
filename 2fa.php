<?php
require $_SERVER['DOCUMENT_ROOT'].'/api/init.php';
$token = $_GET['token'];
if (!$token){
    header('Location: /login');
}
$info_token = get_info_token_codes($token);
if(!$info_token && $info_token['type'] !== '2fa'){
    header('Location: /login');
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
            <h3><?=$domain_titleINIT?></h3>
        </div>

        <div class="login_block1">

            <a href="#" class="login">← Go back </a>


        </div>

    </header>
    <main class="login_main">

        <section class="login_section">
            <h1>Enter code 2fa</h1>
            <p class="details mb-5">Welcome! Please enter your details</p>
            <form action="" novalidate  id="login_form" method="post">
                <div class="login_content" novalidate>
                    <input type="text" minlength="5" required data-pristine-type="email" name="code" class="inpt" placeholder="Enter your 2fa code">
               

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

        

            const formData = new FormData(form);
            formData.append('token', '<?php echo $token ?>');
            formData.append('user_id', '<?php echo $info_token['user_id'] ?>');
            $.ajax({
                url: '/api/ajax/2fa_auth.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data)
                    if (data.status === 'success') {
                        new Notify({
                            title: 'Success',
                            text: "Успешная авторизация",
                            status: 'success',
                            autoclose: true,
                            autotimeout: 3000
                        })
                        setTimeout(() => {
                            window.location.href = '/wallet'
                        }, 1000)
                    } else {
                        new Notify({
                            title: 'Error',
                            text: data.message,
                            status: 'error',
                            autoclose: true,
                            autotimeout: 3000
                        })
                    }
                },
                error: function (data) {
                    console.log(data)
                }
            })

    })

</script>

</html>