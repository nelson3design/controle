<form action="add.php" method="POST">
    <select name="nome2">
        <option value="">escolha uma categoria</option>
        <option value="refrigerante">refrigerante</option>
        <option value="cerveja">cerveja</option>
        <option value="vinho">vinho</option>


    </select>
    <br> <br>

    <select name="marca">
        <option value="">escolha uma marca</option>
        <option value="coca-cola">coca-cola</option>
        <option value="skol">skol</option>
        <option value="tito">tito</option>


    </select>

    <br> <br>

    <input type="text" name="nome" placeholder="titulo">
    <br> <br>
    <input type="number" name="valor" placeholder="valor">
    <br> <br>
    <button type="submit">add</button>
</form>