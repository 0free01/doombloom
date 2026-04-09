<?php

function createContentBlock($content) {
    $paragraphs = preg_split('/\R{2,}/', trim($content));
    $formattedParagraphs = '';

    foreach ($paragraphs as $paragraph) {
        $formattedParagraphs .= "<p>" . nl2br(trim($paragraph)) . "</p>";
    }

    return "<div class='content-block'>$formattedParagraphs</div>";
}

function createSection($title, $content) {
    return "
    <div class='section'>
        <div class='section-header'>
            <h2>$title</h2>
        </div>
        $content
    </div>";
}
?>
