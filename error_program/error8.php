<?php
$siswa = ['siswa1','siswa2','siswa3','siswa4'];
?>
<html>
    <head>
    </head>
    
    <body>
        <h1>Siswa RPL</h1>
        
        <ul>
            <?php
                if(coun($siswa) > 0){
                    foreach($siswa as $siswa) { ?>
                    
                    <li><?php echo $data ?></li>
                
                <?php
                    }
                 ?>
        </ul>
        <!--
        
        Expteasi Output :
        Siswa RPL
            siswa1
            siswa2
            siswa3
            siswa4
        
        
        -->
    </body>
</html>