<html>
    <table border = "1">
        <tr>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Lotação</th>
            <th>Combustível</th>
        </tr>

        <?php
        include './model/conexao_db.php';
        
        $limite = 5;
        $SQL_COUNT = mysql_query("SELECT COUNT ('id_veiculo') FROM veiculos");
        $SQL_RESULT = ceil(mysql_result($SQL_COUNT, 0) / $limite);
        $pg = (isset($_GET["pg"])) ? (int) $_GET["pg"] : 1;
        $start = ($pg - 1) * $limite;

        $SQL_ESTADOS = mysql_query("SELECT * FROM veiculos LIMIT $start, $limite");
        while ($lh = mysql_fetch_array($SQL_ESTADOS)) {
            ?>
            <tr>
                <td><?php echo $lh["id_veiculo"]; ?></td>
                <td><?php echo $lh["modelo_veiculo"]; ?> </td>
                <td><?php echo $lh["ano_veiculo"]; ?> </td>
                <td><?php echo $lh["placa_veiculo"]; ?> </td>
                <td><?php echo $lh["chassi_veiculo"]; ?> </td>
                
        <?php } ?>
        <tr>
            <td colspan="2" align="left">
                <?php
                if ($SQL_RESULT > 1 && $pg <= $SQL_RESULT) {
                    for ($i = 1; $i <= $SQL_RESULT; $i++) {
                        echo "<a heref='?pg=$i'>$i</a>";
                    }
                }
                ?>

            </td>
        </tr>
    </table>
</html>







