	<?php 
	
$uniqueratingID = $uniqueID;
//echo "uid".$uniqueratingID;
$queryrating = "SELECT * FROM reviews WHERE  reviewMovieID = :uniqueratingID ORDER BY rand()"; 
$resultrating = $db->prepare($queryrating);
$resultrating->bindValue(':uniqueratingID', $uniqueratingID, PDO::PARAM_INT);
$resultrating->execute();
$row_countrating = $resultrating->rowCount();


$reviewAvegRating=0;
if($row_countrating>0){
$reviewTotalRatingrating=0;

while($rowrating = $resultrating->fetch(PDO::FETCH_ASSOC)){
	
	$reviewRatingrating  =$rowrating['reviewRating'];

	//echo "review rating".$reviewRatingrating ;
	$reviewTotalRatingrating = $reviewTotalRatingrating + $reviewRatingrating;
	//echo "review rating count". $row_countrating ;
	$reviewAvegRating = $reviewTotalRatingrating/$row_countrating;	
	//echo "review avg rating". $reviewAvegRating ;
?>



    <?
    } // end while
    ?>

    <?
	} // end if
	
?>