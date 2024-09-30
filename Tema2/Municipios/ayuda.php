<h1> Elige una Provincia</h1>
    <form action="MainForm.php" method="get">
        <select name="province" id="">
            <?php foreach($provinces as $province => $value){
                printf("<option value='$province'>%s</option>",$value);
            }?>
            <option value="<?php $province?>"></option>
        </select>
        <p> 
        <input type="submit" value=" Buscar ciudades ">
        </p>
        <button type="submit"> boton del panico</button>
    </form>