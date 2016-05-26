<?php

echo "Naziv racunara: " . $model->naziv;
echo "<br/>Prostorija u kojoj se nalazi: " . $model->prostorija->naziv;
foreach($model->ipadresas as $ip) {
    echo "<li>IP: " . $ip->dd . "</li>\n";
}