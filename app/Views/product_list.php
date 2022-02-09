<table>
    <thead>
    <tr>
        <th>Produits</th>
        <th>Descriptions</th>
        
    </tr>
    </thead>
    <tbody>
	<?php foreach($arrProduct as $row){ ?>
        <tr>
            <td><?php echo $row->product_name;?></td>
            <td><?php echo $row->product_desc;?></td>
           
        </tr>
    <?php } ?>
    </tbody>
</table>