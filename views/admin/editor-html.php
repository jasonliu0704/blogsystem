<?php
//check if the entry has alread existed
$entryDataFound = isset($entryData);
if($entryDataFound === false){
	//default value for an empty editor
	$entryData = new stdClass();
	$entryData->entry_id = 0;
	$entryData->title = "";
	$entryData->entry_text = "";
	$entryData->message = "";
	$entryData->legend = "New Submission";
}else{
	$entryData->legend = "Edit Submission";
}

return "
<form method='post' action='admin.php?page=editor' id='editor'>
	<input type='hidden' name='id' value='$entryData->entry_id'/>
	<fieldset>
		<legend>$entryData->legend</legend>
		<label>Title</label>
		<input type='text' name='title' maxlength='150' value='$entryData->title'required/>
		<p id='title-warning'></p>
		<label>Entry</label>
		<textarea name='entry'>$entryData->entry_text</textarea>

		<fieldset id='editor-buttons'>
			<input type='submit' name='action' value='save' />
			<input type='submit' name='action' value='delete' />
			<p id='editor-message'>$entryData->message</p>
		</fieldset>
	</fieldset>
</form>
";