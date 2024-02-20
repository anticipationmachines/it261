<?php
// variable [key] = value
//          $name                  $image
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';
$people['Donald_Trump'] = 'trump_Former President from NY.';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>Pictures</title>
</head>
<body>

<table>

<?php foreach ($people as $name => $image): ?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name);?>"></td>
<td><?php echo str_replace('_', ' ', $name);?></td>
<td><?php echo substr(substr($image, 6, 34), 0, -3)?><h3><?php echo substr($image, -3, 2);?></h3></td>
<td><img src="images/<?php echo substr($image, 0, 5);?>2.jpg" alt="<?php echo str_replace('_', ' ', $name);?>_2"></td>
</tr>
<?php endforeach; ?>

</table>
    
</body>
</html>