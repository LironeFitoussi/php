<?php 
$emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

$lines = explode("\n", $emailContent);
$foundLabel = false;
foreach ($lines as $index => $line) {
    if (trim($line) === "Quote of the Month:") {
        $foundLabel = true;
        continue;
    }
    if ($foundLabel && trim($line) !== "") {
        list($author, $quote) = explode(": ", $line, 2);
        // Save the extracted author and quote in variables
        // Reformat the line: [quote] - [author]
        $lines[$index] = $quote . " - " . $author;
        break;
    }
}

$modifiedEmailContent = implode("\n", $lines);
?>