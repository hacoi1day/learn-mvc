<h2>NEWS</h2>

<h2>
    <?php
        echo $data['likes'][1];
        echo $data['member'];
    ?>
</h2>

<?php
    while ($row = mysqli_fetch_array($data['students']))
    {
        echo $row['name'] . ' ';
    }
?>