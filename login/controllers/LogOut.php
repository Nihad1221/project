<?php
session_abort();
if (isset($_SESSION['login'])){
unset($_SESSION['login']);
}

header('Location:/');