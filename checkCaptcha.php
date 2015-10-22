<?php

require_once('captcha/recaptchalib.php');
//Keys for nisumlatam.com 
//$publickey = "6LfRZvsSAAAAAHUxsh1xfoB86upXdNgMYrrSLUz2";
//$privatekey = "6LfRZvsSAAAAAAB6u0McP7e2XO4aJCOb-HEL7G_Y";

//keys for localhost
$publickey = "6LfTNg8TAAAAANrdh60kwoZ55ZI3wi4g3nrqLP8a";
$privatekey = "6LfTNg8TAAAAANy5qkvwn5Wgfrzgr7P6kRMXiNd8";

$resp = null;
$error = null;

if (isset($_POST["recaptcha_response_field"])) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "OK";
        } else {
                echo "ERROR";
        }
}
	//echo recaptcha_get_html($publickey, $error);
?>