<form action="#" method="POST">
    <label for="id">Id:</label><br>
    <input type="text" name="id" value=<?php echo $_POST["id"] ?>><br>

    <label for="produkt">Produkt:</label><br>
    <input type="text" name="produkt" value=<?php echo $produkt ?>><br>

    <label for="cena">Cena:</label><br>
    <input type="text" name="cena" value=<?php echo $cena ?>><br>

    <label for="data">Data:</label>
    <input type="text" name="data" value=<?php echo $data ?>
    
    ><br>

    <label for="mode">SEARCH?</label>
    <input type="checkbox" checked name="mode" value="add">
    <br>
    <input type="submit" value="ZMIEN SPRZEDAZ">
</form>