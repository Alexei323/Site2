<?php
	class Admin {

	    public static function getPublic()
            {
                               
            $db = Db::getConnection();            
            $publics = array();

    	    $sql = "SELECT id, header, square, price, outside,
		    home, nomer, content, contact, date FROM apartments "
		  . "WHERE status = 0";
                              
            $result = $db->prepare($sql);
            $result->execute();
            
            $i = 0;
            while ($row = $result->fetch()) {
                $publics[$i]['id'] = $row['id'];
                $publics[$i]['header'] = $row['header'];
                $publics[$i]['square'] = $row['square'];
                $publics[$i]['price'] = $row['price'];
                $publics[$i]['outside'] = $row['outside'];
                $publics[$i]['home'] = $row['home'];
                $publics[$i]['nomer'] = $row['nomer'];
                $publics[$i]['content'] = $row['content'];
                $publics[$i]['contact'] = $row['contact'];
                $publics[$i]['date'] = $row['date'];
                $i++;
            }
		    
                return $publics;  
    	}  

    	public static function getAdd($str)
    	{
    	    $db = Db::getConnection(); 
		
            $sql = "UPDATE apartments SET status='1' WHERE id = :id";
		
            $result = $db->prepare($sql);
            $result->bindParam(':id', $str, PDO::PARAM_INT);
            $result->execute();


    	}  

    	public static function getDel($str)
    	{
    	    $db = Db::getConnection();   
		
            $sql = "DELETE FROM apartments WHERE id = :id";
             
            $result = $db->prepare($sql);
            $result->bindParam(':id', $str, PDO::PARAM_INT);
            $result->execute();
    	}  

}
