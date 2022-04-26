<?php

if (isset($_POST['submit']) && $_POST['submit'] != "") {
    $name = $_POST['name'];
    $number = $_POST['phone'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subcat1 = $_POST['subcategory-one'];
    $subcat2 = $_POST['subcategory-two'];

    // Mailfunction
    if (isset($_POST['category']) && $_POST['category']) $category = ($_POST['category']);

    require_once('db_conn.php');


    $query = " INSERT INTO `messages` (`name` , `email`, `number`, `category`, `description`, `timestamp`) VALUES ('$name', '$mailFrom', '$number', '$category: ($subcat1$subcat2)', '$message', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $query);

    switch ($category) {
        case 'goederen':
            echo "<script>alert('goederen')</script>";
            $mailTo = "210549@student.glu.nl";
            break;
        case 'diensten':
            echo "<script>alert('diensten')</script>";
            $mailTo = "210549@student.glu.nl";
            break;
    }

    $subject = "Aanmelding hulp Oekraine";
    $headers = "From: " . $mailFrom;
    $txt = "U heeft een e-mail ontvangen van \n" . "emailadres: " . $mailFrom .

        $number = (($number != "") ?  "\ntelefoonnummer: $number" : "")

        .  "\n\n"  . "categorie: $category ($subcat1$subcat2)" . "\n" . "Bericht: \n $message";

    mail($mailTo, $subject, $txt, $headers);
    // Mailfunction End

    print("<script>
alert('Bedankt voor uw interesse. Wij nemen zo spoedig mogelijk contact met u op.');
window.location.href = 'index.php';
</script>");
}
