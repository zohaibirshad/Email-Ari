<?php
    require "config/connection.php";
    require "config/config.php";

    class Email{
        var $link;

        public function __construct(){
            $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
            $this->link = $conn->connect();
        }


        public function insert()
        {
            $qry = "insert into email_letters (subject,body) values('Email Template Subject', 'Email Template Body')";
            $res = mysqli_query($this->link, $qry);
        }

        public function stepOne()
        {
            print_r($_POST);
            exit();
        }

        public function viewEmail($sr_no)
        {
            // $qry = "select * from email_letters where sr_no = ".$sr_no;
            // $res = mysqli_query($this->link, $qry);
            // $data = mysqli_fetch_assoc($res);
            
            header("Location: view_email.php?sr_no=".$sr_no);
        }
    }


    $obj = new Email();
     
    // $obj->insert();

    if(isset($_GET['fun']))
    {
        if($_GET['fun'] == 'insert')
        {
            $obj->stepOne();          
        }
    }
?>