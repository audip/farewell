<?php
require_once('facebook.php');

$facebook = new Facebook(array(
  'appId' => '217734268424889',
  'secret' => '6c785ba606ee50a7a29c171733ae911d',
  'cookie' => true,	
));

try{
	$me=$facebook->api('/me');
	}
catch (FacebookApiException $e){
	error_log($e);
}
$user_profile = $facebook->api('/me','GET');
function getFacebookImageFromURL($url)
{
  $headers = get_headers($url, 1);
  if (isset($headers['Location']))
  {
    return $headers['Location'];
  }
}
$i=1;
//print_r($me);
if($facebook->getUser())
{
$fbid=$me['id'];
$url = "https://graph.facebook.com/$fbid/picture?type=large&redirect=true";
$imageURL = getFacebookImageFromURL($url);
//echo $imageURL.$me['id'];
$fbname=$me['first_name'].' '.$me['last_name'];
//echo $fbname;
$fbemail=$me['email'];
$fbusername=strtolower($me['first_name']).'.'.strtolower($me['last_name']);
//echo $fbusername;
$fbgender=ucfirst($me['gender']);
$i++;
}
?>
      