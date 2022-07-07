<?php
session_start();
$path = ($_SESSION['type'] == 'Admin') ? "./" : "../";
?>
<form action= "<?php echo $path ?>Upload/UploadProcess.php" method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1"
cellspacing="1" class="box">
<tr>
<td>Please Select a file</td>
</tr>
<tr><td></td></tr>
<tr>
<td>    
<input type="hidden" name="MAX_FILE_SIZE"value="16000000">
<form id="L" method="post">
   <select name="Title">
   <option value="Bio data in ABET standard">Bio data in ABET standard</option>
    <option value="Educational marksheets and certificates">Educational marksheets and certificates</option>
    <option value="Membership of Professional Bodies">Membership of Professional Bodies</option>
    <option value="Ordors and Approvals">Ordors and Approvals</option>
    <option value="Conference Paper Publications">COnference Paper Publications</option>
    <option value="Journal Paper Publication">Journal Paper Publication</option>
    <option value="Patent Publication">Patent Publication</option>
    <option value="Conference/ Workship/ Seminar Attended">Conference/ Workship/ Seminar Attended</option>
    <option value="Conference/ Workship/ Seminar Organised">Conference/ Workship/ Seminar Organised</option>
    <option value="Moocs Attended">Moocs Attended</option>
    <option value="FDP attended">FDP attended</option>
    <option value="Project Guided (EDAI, SDP, CP, MP)">Project Guided (EDAI, SDP, CP, MP)</option>
    <option value="Interaction Outside World">Interaction Outside World</option>
    <option value="Syallabus">Syallabus</option>
    <option value="Timetable">Timetable</option>
    <option value="Course Material">Course Material</option>
    <option value="Lab Manual">Lab Manual</option>
  </select>
</form>
<br>
<hr>
<input name="userfile" type="file" id="userfile"> 
</td>
<td><input name="upload"type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>
