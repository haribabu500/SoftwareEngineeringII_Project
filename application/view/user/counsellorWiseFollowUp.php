<div id="page-wrapper">
	<h3>Counsellor :<?php echo $counsellor->user_firstname." ".$counsellor->user_middlename." ".$counsellor->user_lastname?></h3>
	 <table class="table table-striped table-hovered">
            <thead>
            <tr>
                <th>Lead Id</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($leads as $lead) { ?>
                <tr>
                    <td><?php if (isset($lead->lead_id)) echo htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->lead_firstname)) echo htmlspecialchars($lead->lead_firstname." ".$lead->lead_middlename." ".$lead->lead_lastname, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->status)) echo htmlspecialchars($lead->status, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>
	
</div>