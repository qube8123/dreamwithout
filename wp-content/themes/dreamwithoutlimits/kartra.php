<?php 
/*Template Name: Kartra*/ 
?>
<?php 
    $postdata = file_get_contents("php://input"); 
    
    // the data comes as an json so you will need to decode it 
    $postdata_decoded = json_decode($postdata); 
    // after this you can use the info passed from kartra in your own scripts. 
    // Ex: $postdata_decoded->lead contains the lead details that triggered the action
?>