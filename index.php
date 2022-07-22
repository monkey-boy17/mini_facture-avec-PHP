<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='forme.css'>
    <script src='main.js'></script>
</head>
<body>
        <div>
                <form action="traitement.php" method="post">
                 Article : 
                <select name="march">
                    <option value="ordinateur">ordinateur</option>
                    <option value="telephone"> telephone</option>
                    <option value="tablette">tablette</option>
                    <option value="casque">casque</option>
                </select><br>
                <br>
                Quantite
                <input type="number" name="quant">
                <br>
                <input type="submit" value="tranfert">
        </form>
    </div>
</body>
</html>