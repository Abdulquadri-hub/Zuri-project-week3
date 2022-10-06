<?php

/**
 * Submit form using post method
 */

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    /*
     * Store files
     */

    if (file_exists("userdata.csv")) {
        
        $file_name = fopen("userdata.csv", "w+");
        if ($file_name) {
            $form_data = [
                'name' => $name,
                'email' => $email,
                'date' => $date,
                'gender' => $gender,
                'country' => $country,
            ];

            if($f = fputcsv($file_name, $form_data)){
                header("location: register.php");
            }
            fclose($file_name);
        }
    }
}