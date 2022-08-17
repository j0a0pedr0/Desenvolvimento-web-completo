<?php
    session_start();

    include('./facebook-php-sdk/autoload.php');
    use Facebook\Facebook;
    use Facebook\Exceptions\FacebookResponseException;
    use Facebook\Exceptions\FacebookSDKException;

    $appId = '3269589913263618';
    $appSecret = '9048c96de1ae54b6ea0cacb02c31db2b';
    $urlRedirect = 'http://localhost/Desenvolvimento_Web_completo/Web-Service-e-API/login-facebook-php/';
    $fbPermission = array('email');

    $fb = new Facebook(array(
        'app_id' => $appId,
        'app_secret'=> $appSecret,
        'default_graph_version' => 'v2.2',

    ));

    $helper = $fb->getRedirectLoginHelper();

    try{
        if(isset($_SESSION['facebook_access_token'])){
            $accessToken = $_SESSION['facebook_access_token'];
        }else{
            $accessToken = $helper->getAccessToken();
        }
        
    }catch(FacebookResponseException $e){}


?>