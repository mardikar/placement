<?php

//echo 'alllaka';

if(isset($_POST["id"]) && !empty($_POST["id"])){
require_once ("config.php");
$db_handle = new ConfigController();

$allRows = mysql_query("SELECT COUNT(*) as num_rows FROM experience WHERE pid < ".$_POST['id']." ORDER BY pid DESC");
$allRows = mysql_fetch_array($allRows);
$allRows = $allRows["num_rows"];

$showLimit = 3;

//get rows query
$query = mysql_query("SELECT * FROM experience WHERE pid < ".$_POST['id']." ORDER BY pid DESC LIMIT ".$showLimit);

//number of rows
$rowCount = mysql_num_rows($query);

if($rowCount > 0){ 
    while($row = mysql_fetch_array($query)){ 
        $tutorial_id = $row["pid"]; ?>
        <div class="post-preview">
						<a href="#" onclick="loadmore(<?php echo $row["pid"]; ?>)"> <h2 id="title-<?php echo $row["pid"]; ?>" class="post-title"> <?php echo $row["company"]; ?> </h2> <h3 class="post-subtitle"> <?php echo $row["name"]; ?></h3> </a>
						<p class="post-meta">
							Posted on <?php echo $row["timee"]; ?>
						</p>
						
					</div>
					<hr>
<?php } ?>
<?php if($allRows > $showLimit){ ?>
    <div class="show_more_main" id="show_more_main<?php echo $tutorial_id; ?>">
        
		       <a id="<?php echo $tutorial_id; ?>"  class="show_more" title="Load more posts">Older Posts</a>
		     
        <span class="loding" style="display: none;"><span class="loding_txt">Loading….</span></span>
    </div>
<?php } ?>  
<?php
}
}
?>