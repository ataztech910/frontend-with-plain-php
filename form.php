<?php
// require "table.php";
function Form() {
    $post = $_POST;
    $formStatus = "not sent";
    $result = ['apple'];
    if ($_SERVER['REQUEST_METHOD'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $formStatus = "sent";
        $result = ['apple '.$_POST['name'], 'orange', 'pieaple'];
    } else {
        $post['name'] = "";
    }
    $table = Table($result);
    return <<<HTML
        form status: {$formStatus}
        <form method="post">
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name" value="{$post['name']}" />    
            <input type="submit" value="OK" />
        </form>
        {$table}
    HTML;
};
?>