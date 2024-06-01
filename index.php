<?php



require 'app/controller/user_controller.php';



foreach (User_controller::find_all() as $user) {
    var_dump($user);
    echo "<br>";
}

