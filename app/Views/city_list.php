<table>
    <thead>
    <tr>
        <th>Codes postaux</th>
        <th>Noms des villes</th>
        
    </tr>
    </thead>
    <tbody>
	<?php foreach($arrCity as $row){ ?>
        <tr>
            <td><?php echo $row->city_postal_code;?></td>
            <td><?php echo $row->city_name;?></td>
           
        </tr>
    <?php } ?>
    </tbody>
</table>