<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $device_id = $_POST['device_id']; // Get the fingerprint
    $key = $_POST['key']; // Optional: Include a key for verification

    if (!empty($device_id)) {
        // Save to a text file (you can use a database instead)
        file_put_contents("fingerprints.txt", "$device_id\n", FILE_APPEND);
        echo "Fingerprint Saved";
    } else {
        echo "Invalid Device ID";
    }
} else {
    echo "Invalid Request";
}
?>