<?php
function Table($result) {
    $tr = "";
    foreach ($result as $value) {
        $tr .= "<tr><td>".$value."</td></tr>";
    }
    return <<<HTML
        <table border=1>
            {$tr}
        </table>
    HTML;
}
?>