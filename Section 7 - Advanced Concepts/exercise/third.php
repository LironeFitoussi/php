<?php

// Base template with placeholders
$emailTemplate = "Dear [NAME],\n\nWe're excited to share with you this week's featured article:\n\n[ARTICLE]\n\nUpcoming Events:\n[EVENTS]\n\nBest regards,\nYour Friendly Team";

// List of recipients
$recipients = [
    [
        'name' => 'Alice',
        'segment' => 'Tech Enthusiast',
        'email' => 'alice@example.com'
    ],
    [
        'name' => 'Ben',
        'segment' => 'Health Guru',
        'email' => 'ben@example.com'
    ]
];

// Segment-based articles
$segmentContent = [
    'Tech Enthusiast' => "The Latest in Tech: Top Gadgets",
    'Health Guru' => "Transform Your Lifestyle: The Best of Health and Fitness",
];

// Upcoming events
$events = [
    "Webinar on Future Tech Trends", 
    "Photography Workshop", 
    "Health and Wellness Retreat"
];

// Format events list
$formattedEvents = "- " . implode("\n- ", $events);

// Loop through each recipient
foreach ($recipients as $recipient) {
    // Step 1: Replace [NAME]
    $personalizedEmail = str_replace('[NAME]', $recipient['name'], $emailTemplate);

    // Step 2: Replace [ARTICLE]
    $article = $segmentContent[$recipient['segment']] ?? "Check out our latest articles!";
    $personalizedEmail = str_replace('[ARTICLE]', $article, $personalizedEmail);

    // Step 3: Replace [EVENTS]
    $personalizedEmail = str_replace('[EVENTS]', $formattedEvents, $personalizedEmail);

    // Output or send email (for now, just display it)
    echo "To: {$recipient['email']}\n";
    echo "-------------------------------\n";
    echo $personalizedEmail . "\n";
    echo "===============================\n\n";
}