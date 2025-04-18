<?php
    class user {
        public $id;
        public $name;
        public $email;

        public $phone;
        public $address;

        public $username;
        public $password;

        public $role_id;

        function __construct($id, $name, $email, $phone, $address, $username, $password, $role_id) {
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->address = $address;
            $this->username = $username;
            $this->password = $password;
            $this->role_id = $role_id;
        }


        public static function login($username, $password) {
            $db = DB::getInstance();
            // select a particular user by id
            $stmt = $db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
            $stmt->execute([$username, $password]);
            $user = $stmt->fetch();
            if($user) {
                return new User($user['id'], $user['name'], $user['email'], $user['phone'], $user['address'], $user['username'], $user['password'], $user['role_id']);
            }else {
                return null;
            }
        }

        public static function signup($username, $email, $password) {
            try {
                $db = DB::getInstance();
                // select a particular user by id
                $stmt = $db->prepare("INSERT INTO user(username, email, password) VALUES (?, ?, ?) ");
                $stmt->execute([$username, $email, $password]);
                return true;
            } catch (PDOException $ex) {
                return false;
            }

        }

        public static function getUserById($userId) {
            try {
                // Lấy mật khẩu hiện tại từ CSDL để kiểm tra chính xác
                $db = DB::getInstance();
                $stmt = $db->prepare("SELECT * FROM user WHERE id = ?");
                $stmt->execute([$userId]);

                $user = $stmt->fetch();
                if (!$user) return null;
                return new User($user['id'], $user['name'], $user['email'], $user['phone'], $user['address'], $user['username'], $user['password'], $user['role_id']);
            } catch (PDOException $ex) {
                return null;
            }
        }

        public static function changePassword($userId, $newPassword) {
            try {
                // Lấy mật khẩu hiện tại từ CSDL để kiểm tra chính xác
                $db = DB::getInstance();
                $stmt = $db->prepare("UPDATE user SET password = ? WHERE id = ?");
                $stmt->execute([$newPassword, $userId]);
                return true;
            } catch (PDOException $ex) {
                return false;
            }
        }
    }


