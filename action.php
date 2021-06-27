<?php
    require_once 'db_connect.php';
    include 'functions.php';
    printHeaderAndMakeTabActive('action');
?>
<img class="top-image" src="imgs/2.jpg" />
<div class="body-action">
    <b><h3 class="top-text heavy-text">TAKE ACTION</h3></b><br/>
    <div class="info">
        <h5 style="text-align: left">
            Interested in any of our <a href="/zahra/projects">projects</a> or have other questions? <br><br>we'll like 
            to hear from you, send us a message below, <br><br>call us on <a href="tel:+2348035303010">+234 803 530 3010</a></br><a href="tel:+2348038866452">+234 803 886 6452</a>
            or <br><br>send us a mail at <a href="mailto:foundationafrican@gmail.com">foundationafrican@gmail.com</a>
        </h5>
        <form method="post" name="sendmessage" id="sendmessage">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="inquiry">Inquiry:</label><br>
            <textarea id="inquiry" name="inquiry" rows="4" cols="45">
            </textarea><br>
            <input type="button" id="messagebtn" name="messagebtn" class="btn btn-small btn-success" value="Send">
            <small id="messagesuccess"><b></b></small>
            <small id="messagefail"><b></b></small>
            <!--<input type="submit" class="btn btn-info" value="Submit" />-->
        </form>
    </div>
</div>

<br><hr class="colored-hr"><br><br>

<div class="info" style="text-align: center;">
    <h4>
        <b>Put a smile on faces today<!-- <a href="/zahra/donate" class="donate-text">donation</a>: --></b><br>
        <a href="donate">
            <button class="btn btn-danger"  id="donate-btn" name="donate-btn">
                <b>Donate</b><span class="glyphicon glyphicon-heart-empty" id="donate-icon"></span>
            </button>
        </a>
    </h4>
</div><br><br>


<?php
    print_footer();
?>