<?php

require 'vendor/autoload.php';

use App\Invoice\Invoice;
use App\Invoice\InvoiceLine;

$list = [];
$faker = \Faker\Factory::create();

for($i = 0; $i < 10; $i++) {
    $lines = [];
    $nb = $faker->numberBetween(2, 8);
    for ($j = 0; $j < $nb; $j++) {
        $lines[] = new InvoiceLine($faker->numberBetween(5, 20), $faker->text(60), 20);
    }

    $list[] = new Invoice($lines);
}

foreach ($list as $key => $invoice) {
    echo "Facture $key :\n";
    echo $invoice;
}
