<?php
include('loginFunction.php');
session_destroy();

header('Location: login.php');