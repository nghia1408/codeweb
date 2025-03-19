<?php
    include_once('controllers/BaseController.php');

    class AccountController extends BaseController {
        public function __construct() {
            $this->folder = 'account';
        }

        public function login() {
            $this->render('login');
        }
    }