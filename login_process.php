<?php                               
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '123456') {
        echo 'Login succeess.';
    } else {
        echo 'Login failed.';
    }

} else {
    echo 'Missing username or password.';
}
?>                                  