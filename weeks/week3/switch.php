<?php
// class coffee exercise
// if today is Friday, it will be pumpkin latte day // INTRODUCING the isset() function
// then we will introduce our first GLOBAL variable // our switch
// starting the switch
// if $_GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today is TODAY
// GLOBAL VARIABLES are capitalized and start with $_GET
// what is the isset function asking if something has been set?
// $variable = 'This is our variable';
// if (isset($variable)) {
//     echo 'Variable has been set';
// } else {
//     echo 'Variable has not been set!';
// }
// echo '<br>';

// if (isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!!';
// }
// echo '<br>';
date_default_timezone_set('America/Los_Angeles');
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
case 'Friday' :
$coffee = '<h2>pumpkin latte day</h2>';
$pic = 'pumpkin.jpg';
$alt = 'Pumpkin Latte';
$content = ' <p>a <b>pumpkin latte </b>is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003. The popular flavor has inspired a wide range of product variations that appear on a seasonal basis.</p>';
break;

case 'Saturday' :
    $coffee = '<h2>green tea day</h2>';
    $pic = 'green-tea.jpg';
    $alt = 'Green Tea';
    $content = ' <p>a <b>green tea latte </b>is a type of latte that is made with green tea instead of coffee. It typically consists of steamed milk and matcha powder, which is a finely ground green tea. The matcha gives the latte a vibrant green color and a unique, slightly bitter flavor. Sweeteners such as sugar or flavored syrups may be added to enhance the taste. Green tea lattes can be served hot or cold, and they are a popular beverage choice for those who enjoy the earthy and slightly sweet notes of matcha.</p>';
    break;

    case 'Sunday' :
        $coffee = '<h2>regular joe day</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Coffee';
        $content = ' <p><b>regular coffee </b>refers to a standard brewed coffee made from ground coffee beans. It is a straightforward preparation that involves brewing coffee grounds with hot water. The result is a beverage that varies in strength and flavor depending on factors such as the type of coffee bean used, the grind size, and the brewing method.</p>';
        break;

        case 'Monday' :
            $coffee = '<h2>latte day</h2>';
            $pic = 'latte.jpg';
            $alt = 'Latte';
            $content = ' <p>a <b>latte </b>is a popular espresso-based drink that originated in Italy and has become a staple in coffee culture worldwide. The term "latte" is derived from the Italian word "caffè latte," which translates to "milk coffee." A latte is known for its smooth and creamy texture, achieved by combining espresso with steamed milk and a small amount of frothed milk. </p>';
            break;

            case 'Tuesday' :
                $coffee = '<h2>americano</h2>';
                $pic = 'americano.jpg';
                $alt = 'Americano';
                $content = ' <p>an <b>americano </b>is a coffee beverage that is made by diluting a shot or more of espresso with hot water. The result is a coffee drink that resembles drip-brewed coffee but has a flavor profile more similar to espresso. The Americano is known for its simplicity and strength.</p>';
                break;

                case 'Wednesday' :
                    $coffee = '<h2>frappe day</h2>';
                    $pic = 'frap.png';
                    $alt = 'Frappe';
                    $content = ' <p>a <b>frappe </b>is a cold and blended coffee beverage that typically consists of ice, coffee (or espresso), milk, and sweeteners. This popular chilled drink is known for its refreshing and slushy consistency.</p>';
                    break;

                    case 'Thursday' :
                        $coffee = '<h2>cappuccino day</h2>';
                        $pic = 'cap.jpg';
                        $alt = 'Cappuccino';
                        $content = ' <p>a <b>cappuccino </b>is a classic Italian espresso-based drink that consists of equal parts of espresso, steamed milk, and frothed milk. It is known for its rich and velvety texture, as well as the distinct layers created by the combination of espresso and frothed milk.</p>';
                        break;

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<style>

* {
    padding:0;
    margin:0;
    box-sizing:border-box;
    font-family:monospace;
    color:white;
    background-color:black;
}

#wrapper {
    width:940px;
    margin:20px auto;
}

h1, b, li a {
    color:lime;
}

ul{
    margin-top:5px;
}

li {
    list-style:none;
}

p {
    margin-bottom:5px;
}

img{
    margin-bottom:5px;
    margin-top:5px;
}
</style>

<body>
    <div id="wrapper">
<h1> switch excercise </h1>

<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<?php echo $content; ?>
<h2>daily specials</h2>
<ul>
    <li><a href="switch.php?today=Sunday">sunday</a></li>
    <li><a href="switch.php?today=Monday">monday</a></li>
    <li><a href="switch.php?today=Tuesday">tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">wednesday</a></li>
    <li><a href="switch.php?today=Thursday">thursday</a></li>
    <li><a href="switch.php?today=Friday">friday</a></li>
    <li><a href="switch.php?today=Saturday">saturday</a></li>
</div>
<!-- end wrapper -->
</body>
</html>
