<?php
    function getdata($email,$password){
        $conn = connectdb();
        $stmt = $conn->prepare("select * from users where Email = ? and password = ?");
        $stmt->execute([$email,$password]);
        $result =$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }

    function insertdata($username,$email,$password){
        $kq = getdata($email,$password);
        if(count($kq) < 1){
            $conn = connectdb();
            $stmt = $conn->prepare("insert into users (username,Email,password) values (?,?,?)");
            $stmt->execute([$username,$email,$password]);
            $result = 'insert_successful';
            return $result;
        }
        else{
            $result = 'email_failed';
            return $result;
        }

    }

?>