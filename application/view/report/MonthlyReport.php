<div id="page-wrapper">
        <h3>Monthly Report of Leads Added</h3>
       
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Month</th>
                <th>Number of Leads</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($leads as $lead) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($lead->month, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($lead->leads, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>