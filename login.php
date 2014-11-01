<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header.php';


$missing_credential= '';
$credential_error ='';

if (isConnected()) {
    header('Location: index.php');
}

if (isset($_POST['loginSubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $missing_credential = true;
    } else {
        $connection = connection($link, $username, $password);
        if ($connection) {
            header('Location: index.php');
        } else {
            $credential_error = true;
        }
    }
}

echo $twig->render('login.html.twig', [
    'missing_credential' => $missing_credential,
    'credential_error' => $credential_error,
]);

require __DIR__.'/_footer.php';
