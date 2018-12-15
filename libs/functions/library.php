<?php
function arab2rom($nombre_arab){
	$nb_b10=array('I','X','C','M');
	$nb_b5=array('V','L','D');
	$nbrom='';
	$nombre=$nombre_arab;
	if($nombre>=0 && $nombre<4000) {
		for($i=3; $i>=0 ; $i--) {	
			$chiffre=floor($nombre/pow(10,$i));
			if($chiffre>=1){
				$nombre=$nombre-$chiffre*pow(10,$i);
				if($chiffre<=3){
					for($j=$chiffre; $j>=1; $j--){ 
						$nbrom=$nbrom.$nb_b10[$i]; 
					}
				}elseif($chiffre==9){
					$nbrom=$nbrom.$nb_b10[$i].$nb_b10[$i+1];	
				}elseif($chiffre==4){
						$nbrom=$nbrom.$nb_b10[$i].$nb_b5[$i];
				}else{
					$nbrom=$nbrom.$nb_b5[$i];
					for($j=$chiffre-5; $j>=1; $j--){ 
						$nbrom=$nbrom.$nb_b10[$i]; 
					}	
				}
			}			
		}
	} else {
		echo 'Valeur Hors Limite';		
	}		
  	return $nbrom;
}

/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
function getIp() {
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {		// IP si internet partagé
		return $_SERVER['HTTP_CLIENT_IP'];
	} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {// IP derrière un proxy
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else { 										// Sinon : IP normale
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}
function fCrypt($private_key, $str_to_crypt) {
	$private_key = md5($private_key);
	$letter = -1;
	$new_str = '';
	$strlen = strlen($str_to_crypt);

	for ($i = 0; $i < $strlen; $i++) {
		$letter++;
		if ($letter > 31) {
			$letter = 0;
		}
		$neword = ord($str_to_crypt{$i}) + ord($private_key{$letter});
		if ($neword > 255) {
			$neword -= 256;
		}
		$new_str .= chr($neword);
	}
	return base64_encode($new_str);
}
/**
 * Géolocaliser une adresse avec GOOGLE MAPS API
 */
function getGeocodeData($address) {
    $address = urlencode($address);
    $googleMapUrl = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key=AIzaSyCXB6yLq41R_CSfl2saDa1pqqOutPwVNnI";
    $geocodeResponseData = file_get_contents($googleMapUrl);
    $responseData = json_decode($geocodeResponseData, true);
    if($responseData['status']=='OK') {
        $latitude = isset($responseData['results'][0]['geometry']['location']['lat']) ? $responseData['results'][0]['geometry']['location']['lat'] : "";
        $longitude = isset($responseData['results'][0]['geometry']['location']['lng']) ? $responseData['results'][0]['geometry']['location']['lng'] : "";
        $formattedAddress = isset($responseData['results'][0]['formatted_address']) ? $responseData['results'][0]['formatted_address'] : "";
            if($latitude && $longitude && $formattedAddress) {
                $geocodeData = array();
                array_push(
                    $geocodeData,
                    $latitude,
                    $longitude,
                    $formattedAddress
                );
                return $geocodeData;
            } else {
                return false;
            }
    } else {
        echo "ERROR: {$responseData['status']}";
        return false;
    }
}
 /* *** SYNTAX CHECKING FOR AN ADDRESS E-MAIL    *** */
 function checkAddress($email) {
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
	if(function_exists('checkdnsrr')) {
		$host = substr($email, strpos($email, '@') + 1);
		return checkdnsrr($host, 'MX');
	}
	return true;
}