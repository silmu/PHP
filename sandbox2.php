<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="conversion.php" method="get">
        <p>
        <select name="initialValue">
            <option value="dollar">$ dollar</option>
            <option value="euro">€ euro</option>
        </select>
        <select name="targetValue">
            <option value="dollar">$ dollar</option>
            <option value="euro">€ euro</option>
        </select>
        </p>
        
        <p>
        <label for="amount">Amount:</label>
        <input type="number" name="amount"/>
        <input type="submit">
        </p>
    </form>
    
</body>
</html>