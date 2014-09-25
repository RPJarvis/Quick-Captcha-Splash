<?php
    require_once('recaptchalib.php');
    $fail_response = "";
    $privatekey = "6LeWQfMSAAAAAHAt9SV0ejTViEMGRqiXZ0LNNNwE";
    $resp = recaptcha_check_answer ($privatekey,
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["recaptcha_challenge_field"],
                                    $_POST["recaptcha_response_field"]);
    if($resp->is_valid){header('Location: http://pwreset-qual.qual.ad.cnm.edu');
    }
    else
    {
        $fail_response = "The reCAPTCHA wasn't entered correctly."
                                      . "<a href='/index.php'>Go back</a> and try it again, "
                                      . "or call the ITS Service Desk at (505)-224-4357";
    }
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="author" content="Ryan Jarvis RJarvis1@cnm.edu">
</head>
<body>
    <div class="container-fluid">
        <div id="super-header" class="container-fluid">
        </div>
        <div id="sub-header" class="container-fluid">
            <img id="logo" src="/Fim-Captcha/images/CNM-SL-rgb-bluetxt.png">
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 content">
                <?php
                    echo $fail_response;
                ?>
            </div>
        </div>
        <div>
            <div class="links container-fluid">
                <hr>
                <br />
                <a href="http://www.cnm.edu/depts/its/accounts/windows/Networkidpassphrases.html">
                    Users are required to change their passwords every 125 days.
                </a>
                <br />
                <br />
                <a href="http://www.cnm.edu">CNM Home</a>
                <a href="http://www.cnm.edu/depts/ssa/documents/mycnmfaq.pdf">FAQs</a>
                <a href="http://www.cnm.edu/depts/its/it">ITS Service Desk</a>
            </div>
         </div>
    </div>
    <footer class="container-fluid">
        <p>
            © 2014 Central New Mexico Community College - 525 Buena Vista Dr. SE, Albuquerque, NM 87106 - (505) 224-3000
        </p>
    </footer>
</body>
