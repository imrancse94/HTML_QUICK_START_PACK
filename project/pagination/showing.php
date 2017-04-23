<?php


function show($db,$query, $per_page = 10,$page = 1, $url = '?'){
    
    $query = "SELECT COUNT(*) as `num` FROM {$query}";
    	$row = mysqli_fetch_array(mysqli_query($db,$query));
    	$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    
        $pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<div class='pull-left result'>Showing $page of $lastpage</div>";
        }
        return $pagination;
}





?>
