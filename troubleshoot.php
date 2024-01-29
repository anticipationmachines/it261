<html>
<head>
<title>My Adder Assignment</title>
<style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
        margin-top: 20px;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post"> <!-- added method="post" to the form  and fixed the opening tag-->
        <label>Enter the first number:</label> <!-- created opening labels -->
        <input type="text" name="num1"><br> <!-- homegenized naming for 'num1' -->
        <label>Enter the second number:</label>
        <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!">
    </form>

    <?php     //adder-wrong.php FIXED 

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2; // conformed "$num2" to lowercased and removed the "-" (this one was annoying) hahaha 
echo '<h2>You added ' . $num1 . ' and ' . $num2 . '</h2>'; // added a closing h tag and changed the double quotations to single quotations
echo '<p style="color:red;">The answer is <br>' . $myTotal . '!</p>'; // in the fixed example the text and number are red so the style attribute should be in the opening p tag and since we have a break tag line 9 can be included before the “;”

echo'<p><a href="">Reset page</a>'; // added a closing a  closing p tag and a closing “;” 
}
?> <!-- moved php tag up here -->

    </body>
</html> 
<!-- removed the closing php tag here and moved it up above the opening html tag -->