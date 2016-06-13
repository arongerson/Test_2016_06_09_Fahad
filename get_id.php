<?php

session_start();
class Feedback {
    public $session;
}
$feedback = new Feedback();
$feedback->session = $_SESSION['session_id'];
echo json_encode($feedback);
