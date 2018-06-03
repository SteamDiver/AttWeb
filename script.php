<?php
require_once "php/Controller.php";
$alert = "";
if (isset($_POST["query"])) {
    $result = Controller::SubmitQuery($_POST["query"]);
    if (!$result) {
        $alert = "<div class=\"alert alert-danger\" role=\"alert\"><h4>Внимание</h4><hr>
        Во время выполнения запроса произошла ошибка. Проверьте запрос и повторите попытку или обратитесь к администратору
        </div>";
    } else {
        $alert = "<div class='alert alert-success' role='alert'><h4>Результат выполнения (JSON)</h4><hr>" . json_encode($result).
            "</div>";
    }
}

