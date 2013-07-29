<?php
/*
 * Confirm the query
 */
?>

<div class="report_section_title">Confirm</div>
<div class="report_section_description">Submit the query, or choose "Edit Query" to make changes manually.</div>

<form id="confirm_query_form" onsubmit="put_query_in_form()" action="results.php" method="post">
  <fieldset>
    <input type="hidden" id="query_field" name="query_field" value="" />
    <input type="submit" name="submit" value="Submit Query!" \>
  </fieldset>
</form>