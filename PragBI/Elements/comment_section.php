<div class="size">
    <div class="container comment">
<link rel="stylesheet" type="text/css" href="Elements/common.css" />



<?php
if ( isset( $_POST["sendComment"] ) ) {
    echo "<pre>";
    print_r($_POST);
    echo"</pre>";
    //displays the input data, after pressing the 'Post comment' button
  processForm();
} else {
  displayForm();
}


function processForm(){
      $commId=$_POST['visitorName'].'_'.$_POST['city'];//creates an Id made of the vistor name and his/her city, which will be the name of the .txt file that saves the input data 
      $commId= preg_replace( '/[^_a-zA-Z0-9]/', '', $commId );
        
        $myfile = fopen('comment_'.$commId.".txt", "a") or die("Unable to open file!");
        $txt = '<article>';
        $txt .= '<p>';
        $txt .= preg_replace( '/[^a-zA-Z0-9]/', '', $_POST['visitorName']);//preg_replace cahnges with a blank space anything that is not from a to z, A to Z or 0 to 9
        $txt .= ', ';
        $txt .= preg_replace( '/[^_@.-a-zA-Z0-9]/', '',$_POST['email']);
        $txt .= ', ';
        $txt .= preg_replace( '/[^a-zA-Z0-9]/', '',$_POST['city']);
        $txt .= ', ';
        $txt .= preg_replace( '/[^a-zA-Z0-9]/', '',$_POST['comment']);
        $txt .= '</p></article>';
        fwrite($myfile, $txt);
        fclose($myfile);
      
        displayThanks();
}

                            

function displayForm() {
?>
    <h1>Comments</h1>

    <p>Please write your comment and enter your details</p>

    <form action="comment_section.php" method="post" enctype="multipart/form-data">
      <div style="width: 30em;">
        <input type="hidden" name="MAX_FILE_SIZE" value="150000000" />

        <label for="visitorName">Your name</label>
        <input type="text" name="visitorName" id="visitorName" value="" />
        
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="" />
            
        <label for="city">City</label>
        <input type="text" name="city" id="city" value="" />
        <div style="textarea: 20em">
        <label for="comment">Your comment</label>
        <input type="text" name="comment" id="comment" value="" style="height: 20em;"/>
        </div>
        <div style="clear: both;">
        <input type="submit" name="sendComment" value="Post comment" />
        </div>
        <!--the actual form fields are created by the code above-->
      </div>
    </form>
<?php
}
 
                             
function displayThanks() {
?>
    <h1>Thank You</h1>
    <p>Thanks for your comment<?php if ( $_POST["visitorName"] ) echo ", " . $_POST["visitorName"] ?>!</p><!--Mesagge displayed after finalising the comment form-->
<?php
}
?>
        
    </div>
</div>
