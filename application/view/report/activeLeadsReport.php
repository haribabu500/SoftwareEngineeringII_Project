<div id="page-wrapper">
        <h3>List of Active Leads</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Semester</th>
                <th>No. of Leads</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $user) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($user->semester, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($user->leads, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($user->status, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>