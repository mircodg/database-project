<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <center>Per favore, scegli un giorno per la consegna e il metodo di pagamento</center>
    <form action="./scripts/action.php" method="GET">
        Qual e il tuo nome? <input type="text" name="nome">
        <br>
            Quale giorno desideri per la consegna?
            <select name="giorno della settimana">
                <option>Lunedi</option>
                <option>Martedi</option>
            </select>
        </br>
        <input type="submit" name="invia" value="Invia i dati">
    </form>
</body>
</html> 