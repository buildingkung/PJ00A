<?php
class Common
{
    //Pro
    public function getAllProRecords($connection) {
        $query = "SELECT * FROM pro";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }

    public function deleteProRecordById($connection,$recordId) {
        $query = "DELETE FROM pro WHERE Id_pro='$recordId'";
        $result = $connection->query($query) or die("Error in query2".$connection->error);
        return $result;
    }

    


    //Rec
    public function getAllRecRecords($connection) {
        $query = "SELECT * FROM recommend";
        $result = $connection->query($query) or die("Error in query3".$connection->error);
        return $result;
    }

    public function deleteRecRecordById($connection,$recordId) {
        $query = "DELETE FROM recommend WHERE Id_recommend='$recordId'";
        $result = $connection->query($query) or die("Error in query4".$connection->error);
        return $result;
    }

    //Menu
    public function getAllMenuRecords($connection) {
        $query = "SELECT * FROM food";
        $result = $connection->query($query) or die("Error in query5".$connection->error);
        return $result;
    }

    public function deleteMenuRecordById($connection,$recordId) {
        $query = "DELETE FROM food WHERE Id_food='$recordId'";
        $result = $connection->query($query) or die("Error in query6".$connection->error);
        return $result;
    }

    public function soldoutMenuRecordById($connection,$recordId) {
        $query = "UPDATE food SET status = 0  WHERE Id_food='$recordId'";
        $result = $connection->query($query) or die("Error in query6".$connection->error);
        return $result;
    }

    public function instockMenuRecordById($connection,$recordId) {
        $query = "UPDATE food SET status = 1  WHERE Id_food='$recordId'";
        $result = $connection->query($query) or die("Error in query6".$connection->error);
        return $result;
    }





    //data_food
    public function getAllDatafoodRecords($connection) {
        $query = "SELECT * FROM data_food";
        $result = $connection->query($query) or die("Error in query5".$connection->error);
        return $result;
    }


}