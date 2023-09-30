<?php 
	
$uniqueID = validMySQL(base64_decode($_GET['id']));

$query = "SELECT * FROM reviews WHERE  reviewMovieID = :uniqueID ORDER BY rand()"; 
$result = $db->prepare($query);
$result->bindValue(':uniqueID', $uniqueID, PDO::PARAM_INT);
$result->execute();
$row_count = $result->rowCount();

if($row_count>0){

while($row = $result->fetch(PDO::FETCH_ASSOC)){
	$reviewRating  =$row['reviewRating'];
	$reviewComment =$row['reviewComment'];
	$reviewName  =$row['reviewName'];
	
	$reviewTotalRating = $reviewTotalRating + $reviewRating;
	$reviewAvegRating = $reviewTotalRating/$row_count;	
?>

<div class="reviewbox">
	
	<p class="star">Rating<span class="fa fa-star checked"><?=$reviewRating?></span></P>
    <p class="comment"><?=$reviewComment?></p>
    <h5 class="name"><?=$reviewName?></h5>
    

</div>

    <?
    } // end while
    ?>
<div class="rating">
   <!-- <h2> Average review<?=$reviewAvegRating?></h2>
    <h2>Average review <?=round($reviewAvegRating, 2)?></h2>
    <h2>Average review <?=round($reviewAvegRating, 1)?></h2>
    <h2>Average review <?=round($reviewAvegRating)?></h2> -->
    <h2>Average review <?=round($reviewAvegRating * 2) / 2;?></h2>
</div>
    <?
	} // end if
	
	else {
		echo "No reviews yet for this movie - why not add one??";
		
	}
?>