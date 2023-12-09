<?php
    class User {
        private $conn;
        private $email;
        private $password;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function getEmail() {
            return $this->email;
        }
        public function getPassword() {
            return $this->password;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function setPassword($password) {
            $this->password = $password;
        }

        public function login() {
            $query = 'select * from cms_user where email = :email';
            $data = [
                'email' => $this->email,
                'password' => $this->password
            ];
            try {
                $stm = $this->conn->prepare($query);
                $stm->execute($data);
                $user = $stm->fetch();
                if ($user && password_verify($this->password, $user['password'])) {
                    return $user;
                }
                return [];
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>