<!-- <table width=100%>
    <th colspan=2 style="font-size: 23px"><center></center></th> -->
<table width=100%>
    <tr>
        <td><b>mrscholae.com</b></td>
        <td style="text-align: right"><h3><?= $title?></h3></td>
    </tr>
</table>
<br><br>
<?php foreach ($mufrodat as $mufrodat) :?>
    <table width=100%>        
        <tr>
            <td style="text-align: center; font-size: 38px"><?= $mufrodat['kalimat_arab']?></td>
        </tr>
        <tr>
            <td style="text-align: center; font-size: 25px"><?= $mufrodat['arti']?></td>
        </tr>
    </table>
    <br><br>
<?php endforeach;?>
<!-- </table> -->