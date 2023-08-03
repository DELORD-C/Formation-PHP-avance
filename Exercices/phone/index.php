<?php

if (
    isset($_POST['tel']) &&
    !empty($_POST['tel']) &&
    isset($_POST['country']) &&
    !empty($_POST['country'])
) {
    require('vendor/autoload.php');
    $phoneNumberUtil = \libphonenumber\PhoneNumberUtil::getInstance();
    $geoCoder = \libphonenumber\geocoding\PhoneNumberOfflineGeocoder::getInstance();
    $parsedNumber = $phoneNumberUtil->parse($_POST['tel'], $_POST['country']);
    echo $phoneNumberUtil->getRegionCodeForNumber($parsedNumber);
    echo '<br>';
    echo $geoCoder->getDescriptionForNumber($parsedNumber, 'fr');
}

?>

<form method="POST">
    <select name="country">
        <option value="FR">France</option>
        <option value="GB">England</option>
        <option value="US">United States</option>
    </select>
    <input type="tel" name="tel" placeholder="Phone">
    <input type="submit" value="Validate">
</form>