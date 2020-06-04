<?php
	 require "connect.php";
		 
	 
	 $query ="SELECT * FROM comment";
				$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($link)); 
				if($result)
					{
					    $rows = mysqli_num_rows($result); 
					    for ($y = 0 ; $y < $rows ; ++$y)
					    {
					        $row = mysqli_fetch_row($result);
					            for ($u= 1 ; $u < 4 ; ++$u){
					            	$like = $_POST["likes$y"];
								if (isset($like)) { 
								$sql_1 ="UPDATE comment SET likes=likes+1 where message = '$row[$u]'";
								$prep = $mysqli -> prepare($sql_1);
								$prep -> execute();
								
							}
						}
					}
				}
			            	
		header("Location: index2.php");
		/*print_r($like);	*/
	
 ?>