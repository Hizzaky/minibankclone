<?php $x="ini nama player"; ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
 </head>
 <body>
    <div id="printableArea">
        <pre>
Bankmini Eksyar

nama : <?php echo $x; ?> 
tanggal : <?php echo date("d-M-Y"); ?>
        </pre>
    </div>
    <a href="javascript:void(0);" onclick="printPageArea('printableArea')">Print</a>
 <p>luar</p>
 </body>
 </html>

 <script type="text/javascript">
    function printPageArea(areaID){
        var printContent = document.getElementById(areaID);
        var WinPrint = window.open('', '', 'width=900,height=650');
        WinPrint.document.write(printContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
 </script>