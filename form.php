<?php
function Form() {
    $post = $_POST;
    $formStatus = "not sent";
    if ($_SERVER['REQUEST_METHOD'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $formStatus = "sent";
    } else {
        $post['name'] = "";
    }
    return <<<HTML
        form status: {$formStatus}
        <form method="post">
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name" value="{$post['name']}" />    
            <input type="submit" value="OK" />
        </form>
    HTML;
};
?>