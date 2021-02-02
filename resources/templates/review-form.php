<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '#submitReview'); ?>" onsubmit="return validate()" name="submitReview" id="submitReview">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <label for="username">Your Name</label>
            <input type="text" name="username" id="username" required placeholder="Your Name" />
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <label>How did you Rate Us?</label>
            <input type="radio" id="rating1" name="rating" value="1">
            <label for="rating1">1</label>
            <input type="radio" id="rating2" name="rating" value="2">
            <label for="rating2">2</label>
            <input type="radio" id="rating3" name="rating" value="3">
            <label for="rating3">3</label>
            <input type="radio" id="rating4" name="rating" value="4">
            <label for="rating4">4</label>
            <input type="radio" id="rating5" name="rating" value="5" required>
            <label for="rating5">5</label>
        </div>
        <div class="large-12 cell">
            <label for="title">Review Title</label>
            <input type="text" name="title" id="title" required placeholder="Review Title" />
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <label for="review">Message</label>
            <textarea rows="4" name="review" id="review" minlength="30" required></textarea>
        </div>
    </div>
    <input type="submit" name="reviewSubmit" id="reviewSubmit">
</form>
<?php
if (isset($review_success)) {
    echo $review_success;
}
?>