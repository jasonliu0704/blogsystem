<?php
return "<form method='post' action='admin.php?page=images' name='file_rename'>
        <label>Please rename the file you want to upload
        because there is another file with the same name
        exists</label><br>
        New name:<input type='text' name='rename_file_name' />
        <input type='submit' name='rename_submit' />";
