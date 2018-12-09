
<?php 

$form_id = '1zkjmA4iPDoj86aiMabWrUsI0THEx-6u1p2sNJWee0so';

$url = "https://docs.google.com/forms/d/" . $form_id . "/formResponse?ifq";

$ch = curl_init($url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,0);
curl_setopt($ch,CURLOPT_TIMEOUT,10);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, array(
    "entry.23929217"=>htmlspecialchars($_GET["email"]), // Email
    "entry.248976093"=>htmlspecialchars($_GET["name"]), // Name
    "entry.1164732528"=>htmlspecialchars($_GET["desc"]), // Item Description
    "entry.1120075950"=>htmlspecialchars($_GET["price"]), // Item Price
    "entry.1888990601"=>htmlspecialchars($_GET["date_from"]), // Date to start publishing
    "entry.224135653"=>htmlspecialchars($_GET["date_to"]), // Date to end publishing
    "entry.1249784057"=>htmlspecialchars($_GET["condition"]), // Condition of the item
    "entry.1596994035"=>htmlspecialchars($_GET["picture_url"]), // Picture URL
    "entry.2036451129"=>htmlspecialchars($_GET["yandex_money"]), // Yandex Money Wallet ID
    "entry.132795468"=>htmlspecialchars($_GET["btc"]), // BTC Wallet
    "entry.2028797193"=>htmlspecialchars($_GET["ltc"]), // LTC Wallet
    "entry.1174155525"=>htmlspecialchars($_GET["eth"]), // ETH Wallet
    "submit" => "Submit"
));

$result = curl_exec($ch);
$error = curl_error($ch);

print_r($error);

curl_close($ch);

echo "Thank you for adding an item. You can now refresh the page.";

?>
