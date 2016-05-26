<?php
$client = new SoapClient("http://pisio.etfbl.net/~goranp/lab7/prostorija/servis", array('cache_wsdl' => WSDL_CACHE_NONE));
echo "Naziv prostorije 1 je : " . $client->getProstorijaNaziv(1) . "\n";
//echo "Naziv prostorije 2 je : " . $client->getProstorijaNaziv(2) . "\n";
//echo "Naziv prostorije 3 je : " . $client->getProstorijaNaziv(3) . "\n";
//echo "\n\n";


print_r($client->getProstorijePoNazivuIZgradi());

