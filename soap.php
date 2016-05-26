<?php
$client = new SoapClient("http://pisio.etfbl.net/~goranp/lab7/servis");
echo "Web service kaze: " . $client->getTemperatura("Prnjavor") . "\n";