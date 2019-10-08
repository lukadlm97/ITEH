<?php
    $proizvodi =[
        array(
            "id" => 1,
            "naziv" => "knjiga",
            "cena" => 100
        ),
        array(
            "id" => 2,
            "naziv" => "laptop",
            "cena" => 200
        ),
        array(
            "id" => 3,
            "naziv" => "monitor",
            "cena" => 300
        )
    ];

    session_start();
    if(isset($_SESSION['korpa'])){
        $_SESSION['korpa'] =array();
    }

    if(isset($_POST['submit']) && $_POST['submit'] == "Kupi"){
        $_SESSION['korpa'][] = $_POST['id'];
        header("Location: .");
        exit();
    }

    if(isset($_POST['submit']) && $_POST['submit'] == "Isprazni"){
       unset($_SESSION['korpa']);
        header("Location: ?vidi_korpu");
        exit();
    }

?>