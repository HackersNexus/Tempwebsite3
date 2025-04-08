<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['data'])) {
    $data = $_POST['data'];
    file_put_contents('message.txt', $data . PHP_EOL, FILE_APPEND);
    echo "Message saved successfully!";
} else {
    echo "No data received.";
}
?>
