<div id="page-wrapper">
        <h3>Weekly Report of Leads Added</h3>
       
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Date</th>
                <th>Number of Leads</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($leads as $lead) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($lead->createdDate, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($lead->leads, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>