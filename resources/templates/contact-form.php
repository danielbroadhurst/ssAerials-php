<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '#contactForm'); ?>" onsubmit="return validate()" name="contactForm" id="contactForm">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <label for="fullname">Your Name</label>
            <input type="text" name="fullname" id="fullname" required placeholder="Your Name" />
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <label for="email">E-Mail Address</label>
            <input type="email" name="email" id="email" required placeholder="E-Mail Address" />
        </div>
        <div class="large-12 cell">
            <label for="telephone">Contact Number</label>
            <input type="tel" name="telephone" id="telephone" required placeholder="Contact Number" />
        </div>
    </div>
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <label for="comments">Message</label>
            <textarea rows="4" name="comments" id="comments" required placeholder="Enter Your Message Here..."></textarea>
        </div>
    </div>
    <input type="submit" name="contactSubmit" id="contactSubmit">
</form>

<?php
if (isset($contact_success)) {
    echo $contact_success;
}
?>