<?php 
function Page($head, $contacts, $tableData) {
    $table = Table($tableData);
    return <<<HTML
        <html lang="en">
            {$head}
            <body>
                {$table}
                    BLOG
                {$contacts}
            </body>
        </html>
    HTML;
}
?>