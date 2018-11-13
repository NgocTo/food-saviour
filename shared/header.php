<?php
\define('ROOT_URI', '/webdev/food-saviour/');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= ROOT_URI ?>css/base.css">
        <title>Food Saviour</title>
    </head>
    <body>
        <header>
            <form action="" method="post">
                <label for="search">Search: </label>
                <span class="fas fa-search"></span>
                <input type="text" id="search" name="search" placeholder="Type in to search" />
            </form>
            <ul>
                <li><a href="#">
                        <i class="fas fa-home" title="Home"></i>
                        <span class="hidden">Home</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-cog" title="Settings"></i>
                    <span class="hidden">Settings</span>
                </a></li>
            </ul>
        </header>
