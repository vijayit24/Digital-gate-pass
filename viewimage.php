<?php
      /*
       * Error : MySQL: Error Code: 1118 Row size too large (> 8126). Changing some columns to TEXT or BLOB Occured do the following steps
       * Solution :
       * 1. set you image data type as longtext (it is optional)
       * 2. change the values following statements in my.cnf file
       *    innodb_log_file_size = 512M
       *    innodb_lock_wait_timeout = 600
            wait_timeout = 1600
            innodb_file_per_table=1
            innodb_file_format=Barracuda
            innodb_file_format_check = ON
            innodb_strict_mode = 0
            max_allowed_packet = 299M
       */
        //$conn = mysqli_connect("localhost", "root", "","imagestor");                
        
/*
        $sql = "select * from images where id='12'";
        $sth = $conn->query($sql);
        $result=mysqli_fetch_array($sth);
        header( "Content-type: image"); 
        echo '<img src="data:image;base64,'.($result['image']).'"/>';
	echo $result;
	*/

	
        
       //$result = mysqli_query($conn,"select * from images");
        
        
       /* while($row=mysqli_fetch_array($result)){        
            echo "<br>".$row[0]." ".$row[1]."<br>";
           // echo "<img height='300' width='300' src='data:image;based64,".$row[2]."' />";
           //echo "<img height='300' width='300' src='data:image/png;based64,".base64_encode($row[2])."' />";            
            //echo '<img height="300" width="300" src="data:image;based64,'.base64_encode($row[2]).'" />';            
            // echo '<img id="my" height="150" width="320" src="data:image;base64,'.$row[2].' "> '; //working statmene
            //echo '<img id="my" height="150" width="320" src="data:image;base64,'.base64_encode($row["image"]).' "> ';
            echo '<img id="my" height="150" width="320" border="1px" src="data:image;base64,'.$row[2].' "> ';

        }
		*/
        
          
        
        //mysqli_close($conn);	
		$conn = mysql_connect("localhost", "root", "");
        mysql_select_db("imagestor");
        $qry = "select * from images";
        $result = mysql_query($qry,$conn);
		echo $result;
		//$row=mysql_fetch_array($result);
		//echo '<img src="data:image;base64,'.$row[1].' "> ';
		
		
        while($row=mysql_fetch_array($result)){
            //echo "2";
            //echo "<img height='300' width='300' src='data:image;based64,".$row[2]."' />";
			echo '<img src="data:image;base64,'.$row[1].' "> ';  
            //echo "2.1";
            //echo $i++;
        }
		//echo '<img id="12" src="data:image;base64,'.$row[2].' "> ';
        //echo "3";
        //Echo "End Potion";
?>
