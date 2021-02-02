<?php
if (!defined('SAFETORUN')) {
    die('');
}
?>

<?php
$sql = "SELECT username, rating , title , review , approved FROM $mytable";
$result = mysqli_query($dbhandle, $sql);
$string_reviews = "";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $rating = htmlspecialchars($row["rating"]);
        $starresult = "";
        $overallRating = 0;
        $totalRating = 0;
        $percentage = 0;
        $approved = htmlspecialchars($row["approved"]);
        if ($approved == 1) {
            for ($i = 1; $i <= $rating; $i++) {
                $totalRating = $totalRating + 5;
                $overallRating = $overallRating + $rating;
                $starresult = $starresult . '<i class="fas fa-star checked"></i>';
            }
            $string_reviews = $string_reviews . '<li class="is-active orbit-slide">
                <div class="docs-example-orbit-slide"><h2>' . htmlspecialchars($row["username"]) . "</h2>" .
                $starresult .
                "<p><strong>" . htmlspecialchars($row["title"]) . "</strong>" .  "<br>" . htmlspecialchars($row["review"]) . "</p>
            </div>
            </li>";
            $percentage = ($overallRating / $totalRating * 100);
        }
    }
} else {
    echo "0 results";
}

?>
