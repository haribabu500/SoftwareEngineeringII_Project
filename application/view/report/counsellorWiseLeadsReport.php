<div id="page-wrapper">
        <h3>Number of counsellors</h3>
        <div>
            <?php echo $num_of_counsellors; ?>
        </div>
       
        <h3>List of Counsellors</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Stats</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php if (isset($user->user_id)) echo htmlspecialchars($user->user_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($user->user_firstname)) echo htmlspecialchars($user->user_firstname." ".$user->user_middlename." ".$user->user_lastname, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($user->email)) echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($user->contact)) echo htmlspecialchars($user->contact, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($user->address)) echo htmlspecialchars($user->address, ENT_QUOTES, 'UTF-8'); ?></td>
                    
                    
                    <td><a href="<?php echo URL . 'user/counsellorWiseLead/' . htmlspecialchars($user->user_id, ENT_QUOTES, 'UTF-8'); ?>">leads</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>