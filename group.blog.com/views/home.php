<div class="blog_Section_column">
	<ul>
		<li id="title">Sections</li>
        <li><a href="?page=home">all</a></li>
		<li><a href="?page=home&section=Technology">technology</a></li>
		<li><a href="?page=home&section=Sports">sports</a></li>
		<li><a href="?page=home&section=Music">music</a></li>
		<li><a href="?page=home&section=Miscellanous">miscellanous</a></li>
	</ul>
    
    <?php
    if ($_SESSION['loggedin'] == 'true')
    {
        echo '<div id="add_button">
            <a href="?page=createblog">
                Add Entry
            </a>
            <a href="?page=userpage">
                Modify Entry
            </a>
        </div>';
    }
    ?>
</div>