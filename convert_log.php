<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



$inputFilePath = 'C:\LSSPI-B2B-ORDER\storage\logs\customdata.log';
$outputFilePath = 'output.txt';

$inputFile = fopen($inputFilePath, 'r');
$outputFile = fopen($outputFilePath, 'w');

if ($inputFile && $outputFile) {
    while (($line = fgets($inputFile)) !== false) {
        // Use regular expression to extract values
        if (preg_match('/local\.INFO: (.+)$/', $line, $matches)) {
            $logData = $matches[1];

            // Write values to the output file
            fwrite($outputFile, "$logData" . PHP_EOL);
        }
    }

    fclose($inputFile);
    fclose($outputFile);

    echo "Conversion successful. Values written to $outputFilePath\n";
} else {
    echo "Error opening files\n";
}

?>