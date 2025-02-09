<?php

include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $givename = $_POST['givename'];
    $email = $_POST['email'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $dream = $_POST['dream'];
    $birthday = $_POST['birthday'];
    $workplace = $_POST['workplace'];
    $achiavements = $_POST['achiavements'];
    $experience = $_POST['experience'];
    $smoking = $_POST['smoking'];
    $family = $_POST['family'];
    $skills = $_POST['skills'];



    
   
    $sql = "INSERT INTO itadori (givename, lastname, email, country, dream, birthday, workplace, achiavements, experience, smoking, family, skills)
     VALUES 
    ('$givename', '$lastname', '$email', '$country', '$dream', '$birthday', '$workplace', '$achiavements', '$experience', '$smoking', '$family', '$skills')";


    
    if ($conn->query($sql) === TRUE) {
        echo "Ma'lumotlar muvaffaqiyatli qo'shildi";
    } else {
        echo "Xatolik: " . $sql . "<br>" . $conn->error;
    }
    
    
    $conn->close();
}

?>