
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Lab 1</title>
</head>
<body>
    <h1>My First PHP Project</h1>

    <?php
        echo "name of server".'<BR>'.$_SERVER['SERVER_SOFTWARE'].'<br>';
        echo 'مسار الرابط الحالي '.'<BR>'.$_SERVER['PHP_SELF'].'<br>';
        echo "رابط أو اسم النطاق الحالي: ".'<BR>' . $_SERVER['HTTP_HOST'] . "<br>";
        echo "Hello World!";
        echo "<br>";
        echo "Welcome to PHP Programming";
        echo '<P>يعتبر هذا مشروعي الاول في للغة PHP</P>'

    ?>
    <?php 
        ECHO "السلام عليكم ورمة الله وبركاته";
    
    
    ?>

</body>
</html>
