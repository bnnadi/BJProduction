<div class="clear"></div>
<div class="blog_info_column">
	<div class="signLine">
		<h2>Blog Entry</h2>
		<div id="niceBlock"></div>
	</div>
	  <form action="#" enctype="multipart/form-data" method="post">
	  	<label>Title</label> <input type="text" name="title" value="<?php
                                                                        echo $_GET['title'];
                                                                     ?>" /><br />
      	<label>Topic</label>
        <select name="topic">
            <?php if (!empty($_GET['topic'])) {
                      echo "<option value=".$_GET['topic'].">Previous: ".$_GET['topic']."</option>";                   } ?>
            <option value="Technology">Technology</option> 
            <option value="Sports">Sports</option> 
            <option value="Music">Music</option> 
            <option value="Miscellanous">Miscellanous</option> 
        </select>
      	<label>Content</label> <textarea name="content"><?php echo $_GET['content']; ?></textarea><br />
        <?php
            if ($_GET['page'] == 'createblog') {
                $text = "add blog";
            }  
        ?>
          
      	<div>
      		<a href="?page=userpage">cancel</a>
            <?php
                if ($_GET['page'] == 'createblog') {
                    echo '<input id="submit" type="submit" value="add blog"/>';
                } 
                else if ($_GET['page'] == 'modifyblog') {
                    echo '<input id="submit" type="submit" value="modify blog"/>';
                }
             ?><br />
      	</div> 
      </form>
</div>