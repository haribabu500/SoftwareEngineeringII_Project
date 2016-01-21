<div id="page-wrapper">
        <h3>List of Feedbacks</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Lead Id</th>
                <th>Name</th>
                <th>Status</th>
                <th>Feedback</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($followUps as $followUp) { ?>
                <tr>
                	<td><?php if (isset($followUp->followUp_id)) echo htmlspecialchars($followUp->followUp_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($followUp->lead_id)) echo htmlspecialchars($followUp->lead_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($followUp->name)) echo htmlspecialchars($followUp->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td class="lead-<?php echo $followUp->status;?>"><?php if (isset($followUp->status)) echo htmlspecialchars($followUp->status, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($followUp->feedback)) echo htmlspecialchars($followUp->feedback, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    <td><a href="<?php echo URL . 'followUp/editFollowUp/' . htmlspecialchars($followUp->followUp_id, ENT_QUOTES, 'UTF-8'); ?>"><i class="fa fa-edit"></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>