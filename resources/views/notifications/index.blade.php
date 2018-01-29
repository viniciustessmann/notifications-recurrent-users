List notifications

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
        </tr>
    <?php } ?>
</table>

