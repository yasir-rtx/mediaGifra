<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $noWa = $_POST['noWa'];

        header("location:https://api.whatsapp.com/send?phone=6281240125792&text=Nama:%20$name%20%0aEmail:%20$email%20%0aPesan:%20$message");
    } else {
        echo "
            <script>
                window.location=history.go(-1);
            </script>
        ";
    }
?>