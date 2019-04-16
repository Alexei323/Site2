<?php

	class Admin {

		 public static function getPublic()
            {
                               
            $db = Db::getConnection();            
            $publics = array();

            $result = $db->query("SELECT id, header, square, price, outside,
                                home, nomer, content, contact, date FROM apartments "
                    . "WHERE status = '0' "
                    . "ORDER BY id ASC ");

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

            $result = $db->query("UPDATE apartments SET status='1' WHERE id='$str'");
    	}  

    	public static function getDel($str)
    	{
    		$db = Db::getConnection();     

            $result = $db->query("DELETE FROM apartments WHERE id='$str' ");
    	}  

	}