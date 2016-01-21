
<div id="page-wrapper">
        <h3>Number of Students</h3>
        <div>
            <?php echo $num_of_students; ?>
        </div>
       
        <h3>List of Students</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
<!--                 <th>Counsellor Id</th> -->
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Qualication</th>
                <th>Stream</th>
                <th>Semester</th>
<!--                 <th>Follow Up Date</th> -->
<!--                 <th>Status</th> -->
<!--                 <th></th> -->
<!--                 <th>Edit</th> -->
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $lead) { ?>
                <tr>
                    <td><?php if (isset($lead->lead_id)) echo htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <!--<td><?php /*if (isset($lead->user_id)) echo htmlspecialchars($lead->user_id, ENT_QUOTES, 'UTF-8'); */?></td>-->
                    <td><?php if (isset($lead->lead_firstname)) echo htmlspecialchars($lead->lead_firstname." ".$lead->lead_middlename." ".$lead->lead_lastname, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->email)) echo htmlspecialchars($lead->email, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->contact)) echo htmlspecialchars($lead->contact, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->address)) echo htmlspecialchars($lead->address, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->qualification)) echo htmlspecialchars($lead->qualification, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->stream)) echo htmlspecialchars($lead->stream, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($lead->semester)) echo htmlspecialchars($lead->semester, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>