<?php
function cc_progress_total() {
  $campaign_total = file_get_contents('http://creativecommons.org/includes/total.txt');

  print $campaign_total;
}

?>

    <div class="sideitem">
   		<div id="campaign">  
				<div class="progress" onclick="window.location='https://support.creativecommons.org/donate';">
					<span>&nbsp;</span>
				</div>
				<div class="results">
					<a href="https://support.creativecommons.org/donate">
						<?php cc_progress_total() ?> / $500,000 by&nbsp;Dec&nbsp;31 
						<br/>
						<em>Help us reach our goal!</em>
					</a>
				</div>
   		</div>
    </div>
    