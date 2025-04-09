<?php

$emailContent = "Dear alex  ,\n\nWe hope this message finds you well.\n\nThis month, we are focusing on personal growth and innovation. Don't miss out on our exclusive insights!\n\nBest wishes,\nYour Discovery Network Team\nP.S. Check out our latest blog post!";

// ===== Task 1: Generate Email Preview =====
$salutationEndPos = strpos($emailContent, "\n\n");
$bodyStartPos = $salutationEndPos + 2;

$previewText = substr($emailContent, $bodyStartPos, 30);
$emailPreview = $previewText . "...";

// ===== Task 2: Count Characters in Main Body =====
$bodyEndPos = strpos($emailContent, "Best wishes");
$mainBodyLength = $bodyEndPos - $bodyStartPos;

$mainBody = substr($emailContent, $bodyStartPos, $mainBodyLength);
$charCount = strlen($mainBody);

// ===== Task 3: Standardize Salutation Name =====
$nameStart = strpos($emailContent, "Dear ") + 5;
$nameEnd = strpos($emailContent, ",", $nameStart);
$name = substr($emailContent, $nameStart, $nameEnd - $nameStart);

$cleanName = ucfirst(strtolower(trim($name)));

$oldSalutation = substr($emailContent, strpos($emailContent, "Dear "), $nameEnd - strpos($emailContent, "Dear ") + 1);
$newSalutation = "Dear " . $cleanName . ",";

?>