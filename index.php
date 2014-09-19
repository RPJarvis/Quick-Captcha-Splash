<html>
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
                <form method="post" action="verify.php">
                    <h4>Prove your humanity:</h4>
                    <hr />
                    <?php
                        require_once('recaptchalib.php');
                        $publickey = "6LeWQfMSAAAAAH6ctkfZY2GmTuQGjLmGykm8GV3c";
                        echo recaptcha_get_html($publickey);
                    ?>
                    <hr />
                    <input type="submit" />
                </form>
            </div>
        </div>
        <div>
            <div class="links container-fluid">
                <hr>
                <br />
                <a href="http://www.cnm.edu/depts/its/accounts/windows/Networkidpassphrases.html">Users are required to change their passwords every 125 days.</a>
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
</html>
        <!--6LeWQfMSAAAAAH6ctkfZY2GmTuQGjLmGykm8GV3c-->
        <!--6LeWQfMSAAAAAHAt9SV0ejTViEMGRqiXZ0LNNNwE-->