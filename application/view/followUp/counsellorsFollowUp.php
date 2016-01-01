        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <h3>Leads to be followed</h3>
			        <table class="table table-striped">
			            <thead>
			            <tr>
			                <th>Id</th>
			                <th>Counsellor Id</th>
			                <th>Name</th>
			                <th>Email</th>
			                <th>Contact</th>
			                <th>Address</th>
			                <th>Qualication</th>
			                <th>Stream</th>
			                <th>Follow Up Date</th>
			                <th>Status</th>
			                <th>Follow Up</th>
			            </tr>
			            </thead>
			            <tbody>
			            <?php foreach ($leads as $lead) { ?>
			                <tr>
			                    <td><?php if (isset($lead->lead_id)) echo htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->user_id)) echo htmlspecialchars($lead->user_id, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->lead_firstname)) echo htmlspecialchars($lead->lead_firstname." ".$lead->lead_middlename." ".$lead->lead_lastname, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->email)) echo htmlspecialchars($lead->email, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->contact)) echo htmlspecialchars($lead->contact, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->address)) echo htmlspecialchars($lead->address, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->qualification)) echo htmlspecialchars($lead->qualification, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->stream)) echo htmlspecialchars($lead->stream, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td><?php if (isset($lead->nextfollowupDate)) echo htmlspecialchars($lead->nextfollowupDate, ENT_QUOTES, 'UTF-8'); ?></td>
			                    <td class="lead-<?php echo $lead->status;?>"><?php if (isset($lead->status)) echo htmlspecialchars($lead->status, ENT_QUOTES, 'UTF-8'); ?></td>
			                    
			                    <td><button class="btn btn-primary followUp" id="<?php echo URL . 'followUp/addFollowUp/' . htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?>">Follow up</button></td>
			                </tr>
			            <?php } ?>
			            </tbody>
			        </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <script>
			$(".followUp").click(function(){
				location.href=$(this).attr("id");
			});
        </script>
