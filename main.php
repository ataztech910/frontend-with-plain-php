<?php
require "form.php";
function Main () {
    $form = Form();
    return <<<HTML
        <main>
            <h1>This is a PHP experiments</h1>
            {$form}
        </main>
    HTML;
};
?>