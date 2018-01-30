<h3>List notifications</h3>
<small><a href="<?php echo $urlToAddNotification; ?>">Add new</a></small>
<table>
    <tr>
        <th>
            Name
        </th>
        <th>
            month
        </th>
        <th>
            Date
        </th>
        <th>
            Status
        </th>
    </tr>

    <?php foreach ($notifications as $notification) { ?>
        <tr>
            <td>
                <?php echo $notification['name']; ?>
            </td>
            <td>
                <?php echo $notification['repeat']; ?>
            </td>
            <td>
                <?php echo $notification['date']; ?>
            </td>
            <td>
                <?php 
                    if($notification['status'] == 0) {
                        echo 'Pendente';
                    } else {
                        echo 'Notificado';
                    }
                ?>
            </td>
        </tr>
    <?php } ?>
</table>

