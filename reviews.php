	
<form action ="reviewcode.php" method="post" enctype="multipart/form-data">
	
	<div class="star-rating" >
	 <h2>Thanks for your feedback:</h2><br>
            
            <div class="star-input">
                <input type="radio" name="reviewRating" id="rating-5" value="5">

                <label for="rating-5" class="fas fa-star"></label>
                <input type="radio" name="reviewRating" id="rating-4" value="4">
                <label for="rating-4" class="fas fa-star"></label>
                <input type="radio" name="reviewRating" id="rating-3" value="3">
                <label for="rating-3" class="fas fa-star"></label>
                <input type="radio" name="reviewRating" id="rating-2" value="2">
                <label for="rating-2" class="fas fa-star"></label>
                <input type="radio" name="reviewRating" id="rating-1" value="1">
                <label for="rating-1" class="fas fa-star"></label>

                <!-- Rating Submit Form -->
                
                    <span class="rating-reaction"></span>
				
                
            </div>
	</div>
	<p>
	<label for="reviewComment">Movie Comment</label><br />
	<textarea id="reviewComment" name="reviewComment" rows="4" cols="50"><?=$reviewComment;?></textarea>
	</p>
	 
	<p>
	
	</p>

	<input type="hidden" name="reviewMovieID" id="reviewMovieID" value="<?=$uniqueID;?>"/>
	
	
	<p>
	<label for="reviewName">Review Name</label><br />
	<input type="text" name="reviewName" id="reviewNamer" value="<?=$reviewName;?>"/>
	</p>
	
		
	<P><input type="submit" value="Insert"/></P>
	</form>
	
