<?php
$con=mysqli_connect('localhost:3307','root','','test');
if(isset($_POST['submit'])){
    $file=$_FILES['leo1']['tmp_name'];
    
    $ext=pathinfo($_FILES['leo1']['name'],PATHINFO_EXTENSION);
    if($ext=='xlsx'){
        require('PHPExcel/PHPExcel.php');
        require('PHPExcel/PHPExcel/IOFactory.php');
        
        
        $obj=PHPExcel_IOFactory::load($file);
        foreach($obj->getWorksheetIterator() as $sheet){
            $getHighestRow=$sheet->getHighestRow();
            for($i=0;$i<=$getHighestRow;$i++){
                $villa=$sheet->getCellByColumnAndRow(0,$i)->getValue();
                $allianz=$sheet->getCellByColumnAndRow(1,$i)->getValue();
                $foltkart=$sheet->getCellByColumnAndRow(2,$i)->getValue();
                $foltkarta=$sheet->getCellByColumnAndRow(3,$i)->getValue();
                $foltkartb=$sheet->getCellByColumnAndRow(4,$i)->getValue();
                $foltkartc=$sheet->getCellByColumnAndRow(5,$i)->getValue();
                $foltkartd=$sheet->getCellByColumnAndRow(6,$i)->getValue();
                $foltkarte=$sheet->getCellByColumnAndRow(7,$i)->getValue();
                $foltkartf=$sheet->getCellByColumnAndRow(8,$i)->getValue();
                if($villa!=''){
                    mysqli_query($con,"insert into table1(villa,allianz,foltkart,foltkarta,foltkartb,foltkartc,foltkartd,foltkarte,foltkartf)values('$villa','$allianz','$foltkart','$foltkarta','$foltkartb','$foltkartc','$foltkartd','$foltkarte','$foltkartf')");
                }
            }
        }
    }else{
        echo "Invalid file format";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <link rel="icon" href="http://warehouse.gloshops.com/images/fevicon/fevicon.png" type="image/gif">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="pro.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="php.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- Custom CSS -->


</head>
<!-- Latest compiled and minified JavaScript -->
<!--<script src="jquery-3.5.0.min.js"></script>-->
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price, #qty").keyup(function () {

            var total = 0;
            var x = Number($("#price").val());
            var y = Number($("#qty").val());
            var total = (x + y);

            $('#total').val(Math.round(total));

        });
    });

</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price1, #qty1").keyup(function () {

            var total = 0;
            var z = Number($("#price1").val());
            var y = Number($("#qty1").val());
            var total = (z + y);

            $('#total6').val(Math.round(total));

        });
    });

</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price2, #qty2").keyup(function () {

            var total = 0;
            var b = Number($("#price2").val());
            var y = Number($("#qty2").val());
            var total = (b + y);

            $('#total7').val(Math.round(total));

        });
    });

</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price3, #qty3").keyup(function () {

            var total = 0;
            var n = Number($("#price3").val());
            var y = Number($("#qty3").val());
            var total = (n + y);

            $('#total8').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price4, #qty4").keyup(function () {

            var total = 0;
            var p = Number($("#price4").val());
            var y = Number($("#qty4").val());
            var total = (p + y);

            $('#total9').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price5, #qty5").keyup(function () {

            var total = 0;
            var c = Number($("#price5").val());
            var y = Number($("#qty5").val());
            var total = (c + y);

            $('#total10').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price6, #qty6").keyup(function () {

            var total = 0;
            var d = Number($("#price6").val());
            var y = Number($("#qty6").val());
            var total = (d + y);

            $('#total11').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price7, #qty7").keyup(function () {

            var total = 0;
            var e = Number($("#price7").val());
            var y = Number($("#qty7").val());
            var total = (e + y);

            $('#total12').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price8, #qty8").keyup(function () {

            var total = 0;
            var f = Number($("#price8").val());
            var y = Number($("#qty8").val());
            var total = (f + y);

            $('#total13').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price, #leo").keyup(function () {

            var total = 0;
            var x = Number($("#price").val());
            var y = Number($("#leo").val());
            var total = (x / y);

            $('#total1').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price1, #leo1").keyup(function () {

            var total = 0;
            var a = Number($("#price1").val());
            var y = Number($("#leo1").val());
            var total = (a / y);

            $('#total14').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price2, #leo2").keyup(function () {

            var total = 0;
            var b = Number($("#price2").val());
            var y = Number($("#leo2").val());
            var total = (b / y);

            $('#total15').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price3, #leo3").keyup(function () {

            var total = 0;
            var c = Number($("#price3").val());
            var y = Number($("#leo3").val());
            var total = (c / y);

            $('#total16').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price4, #leo4").keyup(function () {

            var total = 0;
            var d = Number($("#price4").val());
            var y = Number($("#leo4").val());
            var total = (d / y);

            $('#total17').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price5, #leo5").keyup(function () {

            var total = 0;
            var e = Number($("#price5").val());
            var y = Number($("#leo5").val());
            var total = (e / y);

            $('#total18').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price6, #leo6").keyup(function () {

            var total = 0;
            var f = Number($("#price6").val());
            var y = Number($("#leo6").val());
            var total = (f / y);

            $('#total19').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price7, #leo7").keyup(function () {

            var total = 0;
            var g = Number($("#price7").val());
            var y = Number($("#leo7").val());
            var total = (g / y);

            $('#total20').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price8, #leo8").keyup(function () {

            var total = 0;
            var h = Number($("#price8").val());
            var l = Number($("#leo8").val());
            var total = (h / l);

            $('#total21').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price, #qty").keyup(function () {

            var total = 0;
            var z = Number($("#price").val());
            var v = Number($("#qty").val());
            var total = (z * 12);

            $('#total2').val(Math.round(total));

        });
    });

</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price1, #qty1").keyup(function () {

            var total = 0;
            var a = Number($("#price1").val());
            var v = Number($("#qty1").val());
            var total = (a * 12);

            $('#total22').val(Math.round(total));

        });
    });

</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price2, #qty2").keyup(function () {

            var total = 0;
            var b = Number($("#price2").val());
            var v = Number($("#qty2").val());
            var total = (b * 12);

            $('#total23').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price3, #qty3").keyup(function () {

            var total = 0;
            var c = Number($("#price3").val());
            var v = Number($("#qty3").val());
            var total = (c * 12);

            $('#total24').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price4, #qty4").keyup(function () {

            var total = 0;
            var d = Number($("#price4").val());
            var v = Number($("#qty4").val());
            var total = (d * 12);

            $('#total25').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price5, #qty5").keyup(function () {

            var total = 0;
            var e = Number($("#price5").val());
            var v = Number($("#qty5").val());
            var total = (e * 12);

            $('#total26').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price6, #qty6").keyup(function () {

            var total = 0;
            var f = Number($("#price6").val());
            var v = Number($("#qty6").val());
            var total = (f * 12);

            $('#total27').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price7, #qty7").keyup(function () {

            var total = 0;
            var g = Number($("#price7").val());
            var v = Number($("#qty7").val());
            var total = (g * 12);

            $('#total28').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price8, #qty8").keyup(function () {

            var total = 0;
            var h = Number($("#price8").val());
            var v = Number($("#qty8").val());
            var total = (h * 12);

            $('#total29').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty, #qty").keyup(function () {

            var total = 0;
            var v = Number($("#qty").val());
            var z = Number($("#qty").val());
            var total = (v * 12);

            $('#total3').val(Math.round(total));

        });
    });

</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty1, #qty1").keyup(function () {

            var total = 0;
            var a = Number($("#qty1").val());
            var z = Number($("#qty1").val());
            var total = (a * 12);

            $('#total30').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty2, #qty2").keyup(function () {

            var total = 0;
            var b = Number($("#qty2").val());
            var z = Number($("#qty2").val());
            var total = (b * 12);

            $('#total31').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty3, #qty3").keyup(function () {

            var total = 0;
            var c = Number($("#qty3").val());
            var z = Number($("#qty3").val());
            var total = (c * 12);

            $('#total32').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty4, #qty4").keyup(function () {

            var total = 0;
            var d = Number($("#qty4").val());
            var z = Number($("#qty4").val());
            var total = (d * 12);

            $('#total33').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty5, #qty5").keyup(function () {

            var total = 0;
            var f = Number($("#qty5").val());
            var z = Number($("#qty5").val());
            var total = (f * 12);

            $('#total34').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty6, #qty6").keyup(function () {

            var total = 0;
            var g = Number($("#qty6").val());
            var z = Number($("#qty6").val());
            var total = (g * 12);

            $('#total35').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty7, #qty7").keyup(function () {

            var total = 0;
            var h = Number($("#qty7").val());
            var z = Number($("#qty7").val());
            var total = (h * 12);

            $('#total36').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#qty8, #qty8").keyup(function () {

            var total = 0;
            var i = Number($("#qty8").val());
            var z = Number($("#qty8").val());
            var total = (i * 12);

            $('#total37').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price, #qty,#total3").keyup(function () {

            var total = 0;
            var z = Number($("#price").val());
            var v = Number($("#qty").val());
            var y = Number($("#total3").val());
            var total = (z * 12 + y);

            $('#total4').val(Math.round(total));

        });
    });

</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price1, #qty1,#total30").keyup(function () {

            var total = 0;
            var z = Number($("#price1").val());
            var v = Number($("#qty1").val());
            var a = Number($("#total30").val());
            var total = (z * 12 + a);

            $('#total38').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price2, #qty2,#total31").keyup(function () {

            var total = 0;
            var z = Number($("#price2").val());
            var v = Number($("#qty2").val());
            var b = Number($("#total31").val());
            var total = (z * 12 + b);

            $('#total39').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price3, #qty3,#total32").keyup(function () {

            var total = 0;
            var z = Number($("#price3").val());
            var v = Number($("#qty3").val());
            var c = Number($("#total32").val());
            var total = (z * 12 + c);

            $('#total40').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price4, #qty4,#total33").keyup(function () {

            var total = 0;
            var z = Number($("#price4").val());
            var v = Number($("#qty4").val());
            var d = Number($("#total33").val());
            var total = (z * 12 + d);

            $('#total41').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price5, #qty5,#total34").keyup(function () {

            var total = 0;
            var z = Number($("#price5").val());
            var v = Number($("#qty5").val());
            var e = Number($("#total34").val());
            var total = (z * 12 + e);

            $('#total42').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price6, #qty6,#total35").keyup(function () {

            var total = 0;
            var z = Number($("#price6").val());
            var v = Number($("#qty6").val());
            var f = Number($("#total35").val());
            var total = (z * 12 + f);

            $('#total43').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price7, #qty7,#total36").keyup(function () {

            var total = 0;
            var z = Number($("#price7").val());
            var v = Number($("#qty7").val());
            var g = Number($("#total36").val());
            var total = (z * 12 + g);

            $('#total44').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price8, #qty8,#total37").keyup(function () {

            var total = 0;
            var z = Number($("#price8").val());
            var v = Number($("#qty8").val());
            var g = Number($("#total37").val());
            var total = (z * 12 + g);

            $('#total45').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price, #qty,#leo").keyup(function () {

            var total = 0;
            var z = Number($("#price").val());
            var v = Number($("#qty").val());
            var x = Number($("#leo").val());
            var total = (z * 12 / x);

            $('#total5').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price1, #qty1,#leo1").keyup(function () {

            var total = 0;
            var z = Number($("#price1").val());
            var v = Number($("#qty1").val());
            var a = Number($("#leo1").val());
            var total = (z * 12 / a);

            $('#total46').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price2, #qty2,#leo2").keyup(function () {

            var total = 0;
            var z = Number($("#price2").val());
            var v = Number($("#qty2").val());
            var b = Number($("#leo2").val());
            var total = (z * 12 / b);

            $('#total47').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price3, #qty3,#leo3").keyup(function () {

            var total = 0;
            var z = Number($("#price3").val());
            var v = Number($("#qty3").val());
            var c = Number($("#leo3").val());
            var total = (z * 12 / c);

            $('#total48').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price4, #qty4,#leo4").keyup(function () {

            var total = 0;
            var z = Number($("#price4").val());
            var v = Number($("#qty4").val());
            var d = Number($("#leo4").val());
            var total = (z * 12 / d);

            $('#total49').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price5, #qty5,#leo5").keyup(function () {

            var total = 0;
            var z = Number($("#price5").val());
            var v = Number($("#qty5").val());
            var e = Number($("#leo5").val());
            var total = (z * 12 / e);

            $('#total50').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price6, #qty6,#leo6").keyup(function () {

            var total = 0;
            var z = Number($("#price6").val());
            var v = Number($("#qty6").val());
            var f = Number($("#leo6").val());
            var total = (z * 12 / f);

            $('#total51').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price7, #qty7,#leo7").keyup(function () {

            var total = 0;
            var z = Number($("#price7").val());
            var v = Number($("#qty7").val());
            var g = Number($("#leo7").val());
            var total = (z * 12 / g);

            $('#total52').val(Math.round(total));

        });
    });
</script>
<script>
    $(document).ready(function () {
        // Get value on keyup funtion
        $("#price8, #qty8,#leo8").keyup(function () {

            var total = 0;
            var z = Number($("#price8").val());
            var v = Number($("#qty8").val());
            var h = Number($("#leo8").val());
            var total = (z * 12 / h);

            $('#total53').val(Math.round(total));

        });
    });
</script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

</head>

</head>
<body>

<main>
    
</main>
<form method="post" enctype="multipart/form-data">
<div class="container" style="position:relative;top:30px;">

        <div class="card">

            <div class="card-body">

             <input type="file" id="excel_file" name="leo1"/></div>
        </div>
        <div id="excel_data" class="mt-5"></div>

<tr>


    <table class="content-table" id="table11"  style="position:relative;top: -40px;left: -100px;">
        
            <thead>
            <tr>
                <td style="color: white;background-color: #21A0D2;">Building / Floorplate
                </td>
            </tr>
            <tr id="example">
                <th>Name of the building/development</th>
                <th>Villa</th>
                <th>Allianz</th>
                <th>"Folkart Time
                    (103,104,105, 106)"
                </th>
                <th>"Folkart Time
                    (103,104,105, 106,107,108, 109)"
                </th>
                <th>"Folkart Time
                    (509,510,511, 512,513)"
                </th>
                <th>"Folkart Time
                    (509,510,511, 512)"
                </th>
                <th>"Folkart Time
                    (502,501,514, 513,512,511, 510,509)"
                </th>
                <th>"Folkart Time / Smart Office
                    (509,510,511, 512)"
                </th>
                <th>"Folkart Time / Smart Office
                    (509,510,511, 512,513)"
                </th>
            </tr>
            </thead>
            <tbody>

            <tr style="width:100px">
                <td>Building Type</td>
                <td><select name="buildingType">
                    <option name="buildingType" id="buildingType" value="Commercial">Commercial</option>
                    <option name="buildingType" id="buildingType" value="Residental">Residental</option>
                </select></td></td>
                <td><select name="buildingTypeo">
                    <option name="buildingTypeo" id="buildingTypeo" value="Commercial">Commercial</option>
                    <option name="buildingTypeo" id="buildingTypeo" value="Residental">Residental</option>
                </select></td>
             <td>
          <select name="buildingTypea">
            <option name="buildingTypea" id="buildingTypea" value="Commercial">Commercial</option>
             <option name="buildingTypea" id="buildingTypea" value="Residental">Residental</option>
          </select>
        </td>
                <td>
          <select name="buildingTypeb">
            <option name="buildingTypeb" id="buildingTypeb" value="Commercial">Commercial</option>
             <option name="buildingTypeb" id="buildingTypeb" value="Residental">Residental</option>
          </select>
        </td>
        <td>
          <select name="buildingTypec">
            <option name="buildingTypec" id="buildingTypec" value="Commercial">Commercial</option>
             <option name="buildingTypec" id="buildingTypec" value="Residental">Residental</option>
          </select>
        </td>
        <td>
          <select name="buildingTyped">
            <option name="buildingTyped" id="buildingTyped" value="Commercial">Commercial</option>
             <option name="buildingTyped" id="buildingTyped" value="Residental">Residental</option>
          </select>
        </td>
        <td>
          <select name="buildingTypee">
            <option name="buildingTypee" id="buildingTypee" value="Commercial">Commercial</option>
             <option name="buildingTypee" id="buildingTypee" value="Residental">Residental</option>
          </select>
        </td>
        <td>
          <select name="buildingTypef">
            <option name="buildingTypef" id="buildingTypef" value="Commercial">Commercial</option>
             <option name="buildingTypef" id="buildingTypef" value="Residental">Residental</option>
          </select>
        </td>
        <td>
          <select name="buildingTypeg">
            <option name="buildingTypeg" id="buildingTypeg" value="Commercial">Commercial</option>
             <option name="buildingTypeg" id="buildingTypeg" value="Residental">Residental</option>
          </select>
        </td>
            </tr>

            <tr>
                <td>Office Type</td>
                <td>
          <select name="officeType">
            <option name="OfficeType" value="Partioned">Partioned</option>
            <option name="officeType" id="officeType" value="fitOut">Fit Out</option>
             <option name="officeType" id="Residental" value="openSpace">Open Space</option>
          </select>
        </td>

        <td>
          <select name="officeTypea">
    <option name="OfficeTypea" value="Partioned">Partioned</option>
    <option name="officeTypea" id="officeTypea" value="fitOut">Fit Out</option>
    <option name="officeTypea" id="officeTypea" value="openSpace">Open Space</option>
          </select>
        </td>

        <td>
          <select name="officeTypeb">
    <option name="OfficeTypeb" value="Partioned">Partioned</option>
            <option name="officeTypeb" id="officeTypeb" value="fitOut">Fit Out</option>
             <option name="officeTypeb" id="officeTypeb" value="openSpace">Open Space</option>
          </select>
        </td>

        <td>
          <select name="officeTypec">
    <option name="OfficeTypec" value="Partioned">Partioned</option>
            <option name="officeTypec" id="officeTypec" value="fitOut">Fit Out</option>
             <option name="officeTypec" id="officeTypec" value="openSpace">Open Space</option>
          </select>
        </td>
        <td>
          <select name="officeTyped">
    <option name="OfficeTyped" value="Partioned">Partioned</option>
            <option name="officeTyped" id="officeTypec" value="fitOut">Fit Out</option>
             <option name="officeTyped" id="officeTypec" value="openSpace">Open Space</option>
          </select>
        </td>
        <td>
          <select name="officeTypee">
    <option name="OfficeTypee" value="Partioned">Partioned</option>
            <option name="officeTypee" id="officeTypec" value="fitOut">Fit Out</option>
             <option name="officeTypee" id="officeTypec" value="openSpace">Open Space</option>
          </select>
        </td>
        <td>
          <select name="officeTypef">
    <option name="OfficeTypef" value="Partioned">Partioned</option>
            <option name="officeTypef" id="officeTypec" value="fitOut">Fit Out</option>
             <option name="officeTypef" id="officeTypec" value="openSpace">Open Space</option>
          </select>
        </td>
        <td>
          <select name="officeTypeg">
    <option name="OfficeTypeg" value="Partioned">Partioned</option>
            <option name="officeTypeg" id="officeTypec" value="fitOut">Fit Out</option>
             <option name="officeTypeg" id="officeTypec" value="openSpace">Open Space</option>
          </select>
        </td>
        <td>
          <select name="officeTypeh">
    <option name="OfficeTypeh" value="Partioned">Partioned</option>
            <option name="officeTypeh" id="officeTypec" value="fitOut">Fit Out</option>
             <option name="officeTypeh" id="officeTypec" value="openSpace">Open Space</option>
          </select>
        </td>

            </tr>
            <tr>
                <td>Construction Completed</td>
                <td>
            <select name="constructionCompleted" style="width:100px">
              <option name="constructionCompleted" id="constructionCompleted" value="2001">2001</option>
             <option name="constructionCompleted" id="constructionCompleted" value="2002">2002</option>
             <option name="constructionCompleted" id="constructionCompleted" value="2003">2003</option>
            <option name="constructionCompleted" id="constructionCompleted" value="2004">2004</option>
              <option name="constructionCompleted" id="constructionCompleted" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompleteda" style="width:100px">
              <option name="constructionCompleteda" id="constructionCompleteda" value="2001">2001</option>
             <option name="constructionCompleteda" id="constructionCompleteda" value="2002">2002</option>
             <option name="constructionCompleteda" id="constructionCompleteda" value="2003">2003</option>
            <option name="constructionCompleteda" id="constructionCompleteda" value="2004">2004</option>
              <option name="constructionCompleteda" id="constructionCompleteda" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompletedb" style="width:100px">
              <option name="constructionCompletedb" id="constructionCompletedb" value="2001">2001</option>
             <option name="constructionCompletedb" id="constructionCompletedb" value="2002">2002</option>
             <option name="constructionCompletedb" id="constructionCompletedb" value="2003">2003</option>
            <option name="constructionCompletedb" id="constructionCompletedb" value="2004">2004</option>
              <option name="constructionCompletedb" id="constructionCompletedb" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompletedc" style="width:100px">
              <option name="constructionCompletedc" id="constructionCompletedc" value="2001">2001</option>
             <option name="constructionCompletedc" id="constructionCompletedc" value="2002">2002</option>
             <option name="constructionCompletedc" id="constructionCompletedc" value="2003">2003</option>
            <option name="constructionCompletedc" id="constructionCompletedc" value="2004">2004</option>
              <option name="constructionCompletedc" id="constructionCompletedc" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompletedd" style="width:100px">
              <option name="constructionCompletedd" id="constructionCompletedd" value="2001">2001</option>
             <option name="constructionCompletedd" id="constructionCompletedd" value="2002">2002</option>
             <option name="constructionCompletedd" id="constructionCompletedd" value="2003">2003</option>
            <option name="constructionCompletedd" id="constructionCompletedd" value="2004">2004</option>
              <option name="constructionCompletedd" id="constructionCompletedd" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompletede" style="width:100px">
              <option name="constructionCompletede" id="constructionCompletede" value="2001">2001</option>
             <option name="constructionCompletede" id="constructionCompletede" value="2002">2002</option>
             <option name="constructionCompletede" id="constructionCompletede" value="2003">2003</option>
            <option name="constructionCompletede" id="constructionCompletede" value="2004">2004</option>
              <option name="constructionCompletede" id="constructionCompletede" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompletedf" style="width:100px">
              <option name="constructionCompletedf" id="constructionCompletedf" value="2001">2001</option>
             <option name="constructionCompletedf" id="constructionCompletedf" value="2002">2002</option>
             <option name="constructionCompletedf" id="constructionCompletedf" value="2003">2003</option>
            <option name="constructionCompletedf" id="constructionCompletedf" value="2004">2004</option>
              <option name="constructionCompletedf" id="constructionCompletedf" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompletedg" style="width:100px">
              <option name="constructionCompletedg" id="constructionCompletedg" value="2001">2001</option>
             <option name="constructionCompletedg" id="constructionCompletedg" value="2002">2002</option>
             <option name="constructionCompletedg" id="constructionCompletedg" value="2003">2003</option>
            <option name="constructionCompletedg" id="constructionCompletedg" value="2004">2004</option>
              <option name="constructionCompletedg" id="constructionCompletedg" value="2005">2005</option>
            </select>
          </td>
          <td>
            <select name="constructionCompletedh" style="width:100px">
              <option name="constructionCompletedh" id="constructionCompletedh" value="2001">2001</option>
             <option name="constructionCompletedh" id="constructionCompletedh" value="2002">2002</option>
             <option name="constructionCompletedh" id="constructionCompletedh" value="2003">2003</option>
            <option name="constructionCompletedh" id="constructionCompletedh" value="2004">2004</option>
              <option name="constructionCompletedh" id="constructionCompletedh" value="2005">2005</option>
            </select>
          </td>
               
               

            </tr>
            <tr>
                <td>Quality Grade</td>
                <td>
            <select name="qualityGrade" style="width:100px">
            <option name="qualityGrade" id="qualityGrade"value="A">A</option>
             <option name="qualityGrade" id="qualityGrade"value="A+">A+</option>
             <option name="qualityGrade" id="qualityGrade"value="A-">A-</option>
            <option name="qualityGrade" id="qualityGrade" value="B">B</option>
            <option name="qualityGrade" id="qualityGrade" value="B+">B+</option>
            <option name="qualityGrade" id="qualityGrade" value="B-">B-</option>
            <option name="qualityGrade" id="qualityGrade" value="C">C</option>
            <option name="qualityGrade" id="qualityGrade" value="C+">C+</option>
            <option name="qualityGrade" id="qualityGrade" value="C-">C-</option></select>
          </td>
                <td>
            <select name="qualityGradea" style="width:100px">
            <option name="qualityGradea" id="qualityGradea"value="A">A</option>
          <option name="qualityGradea" id="qualityGradea"value="A+">A+</option>
          <option name="qualityGradea" id="qualityGradea"value="A-">A-</option>
          <option name="qualityGradea" id="qualityGradea" value="B">B</option>
          <option name="qualityGradea" id="qualityGradea" value="B+">B+</option>
          <option name="qualityGradea" id="qualityGradea" value="B-">B-</option>
          <option name="qualityGradea" id="qualityGradea" value="C">C</option>
          <option name="qualityGradea" id="qualityGrade" value="C+">C+</option>
          <option name="qualityGradea" id="qualityGradea" value="C-">C-</option></select>
          </td>
          <td>
            <select name="qualityGradeb" style="width:100px">
            <option name="qualityGradeb" id="qualityGradeb"value="A">A</option>
            <option name="qualityGradeb" id="qualityGrade"value="A+">A+</option>
            <option name="qualityGradeb"id="qualityGradeb"value="A-">A-</option>
            <option name="qualityGradeb" id="qualityGradeb" value="B">B</option>
            <option name="qualityGradeb"id="qualityGradeb"value="B+">B+</option>
          <option name="qualityGradeb" id="qualityGradeb" value="B-">B-</option>
          <option name="qualityGradeb" id="qualityGradeb" value="C">C</option>
          <option name="qualityGradeb" id="qualityGradeb" value="C+">C+</option>
          <option name="qualityGradeb" id="qualityGradeb" value="C-">C-</option></select>
          </td>
          <td>
            <select name="qualityGradec" style="width:100px">
            <option name="qualityGradec" id="qualityGradec"value="A">A</option>
          <option name="qualityGradec" id="qualityGradec"value="A+">A+</option>
          <option name="qualityGradec" id="qualityGradec"value="A-">A-</option>
            <option name="qualityGradec" id="qualityGradec" value="B">B</option>
         <option name="qualityGradec" id="qualityGradec" value="B+">B+</option>
        <option name="qualityGradec" id="qualityGradec" value="B-">B-</option>
          <option name="qualityGradec" id="qualityGradec" value="C">C</option>
          <option name="qualityGradec" id="qualityGradec" value="C+">C+</option>
          <option name="qualityGradec" id="qualityGradec" value="C-">C-</option></select>
          </td>
          <td>
            <select name="qualityGradeh" style="width:100px">
            <option name="qualityGradeh" id="qualityGradeh"value="A">A</option>
          <option name="qualityGradeh" id="qualityGradeh"value="A+">A+</option>
          <option name="qualityGradeh" id="qualityGradeh"value="A-">A-</option>
            <option name="qualityGradeh" id="qualityGradeh" value="B">B</option>
         <option name="qualityGradeh" id="qualityGradeh" value="B+">B+</option>
        <option name="qualityGradeh" id="qualityGradeh" value="B-">B-</option>
          <option name="qualityGradeh" id="qualityGradeh" value="C">C</option>
          <option name="qualityGradeh" id="qualityGradeh" value="C+">C+</option>
          <option name="qualityGradeh" id="qualityGradeh" value="C-">C-</option></select>
          </td>
          <td>
            <select name="qualityGraded" style="width:100px">
            <option name="qualityGraded" id="qualityGraded"value="A">A</option>
          <option name="qualityGraded" id="qualityGraded"value="A+">A+</option>
          <option name="qualityGraded" id="qualityGraded"value="A-">A-</option>
            <option name="qualityGraded" id="qualityGraded" value="B">B</option>
         <option name="qualityGraded" id="qualityGraded" value="B+">B+</option>
        <option name="qualityGraded" id="qualityGraded" value="B-">B-</option>
          <option name="qualityGraded" id="qualityGraded" value="C">C</option>
          <option name="qualityGraded" id="qualityGraded" value="C+">C+</option>
          <option name="qualityGraded" id="qualityGraded" value="C-">C-</option></select>
          </td>
          <td>
            <select name="qualityGradee" style="width:100px">
            <option name="qualityGradee" id="qualityGradee"value="A">A</option>
          <option name="qualityGradee" id="qualityGradee"value="A+">A+</option>
          <option name="qualityGradee" id="qualityGradee"value="A-">A-</option>
            <option name="qualityGradee" id="qualityGradee" value="B">B</option>
         <option name="qualityGradee" id="qualityGradee" value="B+">B+</option>
        <option name="qualityGradee" id="qualityGradee" value="B-">B-</option>
          <option name="qualityGradee" id="qualityGradee" value="C">C</option>
          <option name="qualityGradee" id="qualityGradee" value="C+">C+</option>
          <option name="qualityGradee" id="qualityGradee" value="C-">C-</option></select>
          </td>
          <td>
            <select name="qualityGradef" style="width:100px">
            <option name="qualityGradef" id="qualityGradef"value="A">A</option>
          <option name="qualityGradef" id="qualityGradef"value="A+">A+</option>
          <option name="qualityGradef" id="qualityGradef"value="A-">A-</option>
            <option name="qualityGradef" id="qualityGradef" value="B">B</option>
         <option name="qualityGradef" id="qualityGradef" value="B+">B+</option>
        <option name="qualityGradef" id="qualityGradef" value="B-">B-</option>
          <option name="qualityGradef" id="qualityGradef" value="C">C</option>
          <option name="qualityGradef" id="qualityGradef" value="C+">C+</option>
          <option name="qualityGradef" id="qualityGradef" value="C-">C-</option></select>
          </td>
          <td>
            <select name="qualityGradeg" style="width:100px">
            <option name="qualityGradeg" id="qualityGradeg"value="A">A</option>
          <option name="qualityGradeg" id="qualityGradeg"value="A+">A+</option>
          <option name="qualityGradeg" id="qualityGradeg"value="A-">A-</option>
            <option name="qualityGradeg" id="qualityGradeg" value="B">B</option>
         <option name="qualityGradeg" id="qualityGradeg" value="B+">B+</option>
        <option name="qualityGradeg" id="qualityGradeg" value="B-">B-</option>
          <option name="qualityGradeg" id="qualityGradeg" value="C">C</option>
          <option name="qualityGradeg" id="qualityGradeg" value="C+">C+</option>
          <option name="qualityGradeg" id="qualityGradeg" value="C-">C-</option></select>
          </td>
      </tr>
<tr>
                <td>Floor</td>
    <td><input type="text" style="width:100px;height: 20px;" name="floor"></td>
          <td><input type="text" style="width:100px;height: 20px;" name="floora" id="floora"></td>
          <td><input type="text" style="width:100px;height: 20px;" name="floorb" id="floorb"></td>
          <td><input type="text" style="width:100px;height: 20px;" name="floorc" id="floorc"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="Flrd" id="Flrd"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="Floore" id="Floore"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="Floorf" id="Floorf"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="Floorg" id="Floorg"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="Floorh" id="Floorh"></td>
            </tr>

            <tr>
                <td>Handover Condition</td>
             <td>
          <select name="handoverCondition">
            <option name="handoverCondition" id="handoverCondition" value="fittedOut">Fitted Out</option>
             <option name="handoverCondition" id="handoverCondition" value="shell & Core">Shell & Core</option>
          </select>
        </td>
        <td>
          <select name="handoverConditiona">
            <option name="handoverConditiona" id="handoverConditiona" value="fittedOut">Fitted Out</option>
             <option name="handoverConditiona" id="handoverConditiona" value="shell & Core">Shell & Core</option>
          </select>
        </td>
        <td>
          <select name="handoverConditionb">
            <option name="handoverConditionb" id="handoverConditionb" value="fittedOut">Fitted Out</option>
             <option name="handoverConditionb" id="handoverConditionb" value="shell & Core">Shell & Core</option>
          </select>
        </td>
        <td>
          <select name="handoverConditionc">
            <option name="handoverConditionc" id="handoverConditionc" value="fittedOut">Fitted Out</option>
             <option name="handoverConditionc" id="handoverConditionc" value="shell & Core">Shell & Core</option>
          </select>
        </td>
         <td>
          <select name="handoverConditiond">
            <option name="handoverConditiond" id="handoverConditiond" value="fittedOut">Fitted Out</option>
             <option name="handoverConditiond" id="handoverConditiond" value="shell & Core">Shell & Core</option>
          </select>
        </td>
         <td>
          <select name="handoverConditione">
            <option name="handoverConditione" id="handoverConditione" value="fittedOut">Fitted Out</option>
             <option name="handoverConditione" id="handoverConditione" value="shell & Core">Shell & Core</option>
          </select>
        </td>
         <td>
          <select name="handoverConditionf">
            <option name="handoverConditionf" id="handoverConditionf" value="fittedOut">Fitted Out</option>
             <option name="handoverConditionf" id="handoverConditionf" value="shell & Core">Shell & Core</option>
          </select>
        </td>
         <td>
          <select name="handoverConditiong">
            <option name="handoverConditiong" id="handoverConditiong" value="fittedOut">Fitted Out</option>
             <option name="handoverConditiong" id="handoverConditiong" value="shell & Core">Shell & Core</option>
          </select>
        </td>
         <td>
          <select name="handoverConditionh">
            <option name="handoverConditionh" id="handoverConditionh" value="fittedOut">Fitted Out</option>
             <option name="handoverConditionh" id="handoverConditionh" value="shell & Core">Shell & Core</option>
          </select>
        </td>
                
        
            </tr>
            <tr>
                <td>Area Offered - Gross (in m²)</td>
<td><input type="text" style="width:100px;height: 20px;" name="areaOfferedgross" id="leo"></td>
<td><input type="text" style="width:100px;height: 20px;" name="areaOfferedgrossa" id="leo1"></td>
<td><input type="text"style="width:100px;height: 20px;" name="areaOfferedgrossb" id="leo2"></td>
<td><input type="text"style="width:100px;height: 20px;" name="areaOfferedgrossc" id="leo3"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="leo4" name="arOfferedgrossd"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="leo5" name="areaOfferedgrosse"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="leo6" name="areaOfferedgrossf"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="leo7" name="areaOfferedgrossg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="leo8" name="areaOfferedgrossh"></td>
            </tr>

            <tr>
                <td>Area Offered - Net (in m²)</td>
               <td><input type="text" style="width:100px;height: 20px;" name="areaOfferednet"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="areaOfferedneta"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="areaOfferednetb"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="areaOfferednetc"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="areaOfferednetd"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="areaOfferednete"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="areaOfferednetf"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="areaOfferednetg"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="areaOfferedneth"></td>
            </tr>

            <tr>
                <td>Space Structure</td>
                 <td><input type="text" style="width:100px;height: 20px;" name="spaceStructure"></td>
       <td><input type="text" style="width:100px;height: 20px;"  name="spaceStructurea"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="spaceStructureb"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="spaceStructurec"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="spaceStructured"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="spaceStructuree"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="spaceStructuref"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="spaceStructureg"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="spaceStructureh"></td>
            </tr>

            <tr>
                <td>Security level</td>
               <td><textarea cols="11" rows="3" id="text" name="securityLevel"></textarea></td>
               <td><textarea cols="11" rows="3" id="text" name="securityLevela"></textarea></td>
               <td><textarea cols="11" rows="3" id="text" name="securityLevelb"></textarea></td>
               <td><textarea cols="11" rows="3" id="text" name="securityLevelc"></textarea></td>
                <td><textarea cols="11" rows="3" id="text" name="securityLeveld"></textarea></td>
                <td><textarea cols="11" rows="3" id="text" name="securityLevele"></textarea></td>
                <td><textarea cols="11" rows="3" id="text" name="securityLevelf"></textarea></td>
                <td><textarea cols="11" rows="3" id="text" name="securityLevelg"></textarea></td>
                <td><textarea cols="11" rows="3" id="text" name="securityLevelh"></textarea></td>

            </tr>

            <tr>
                <td>Name of the Developer/Building owner</td>
        <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwner"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnera"></td>
         <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnerb"></td>
          <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnerc"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnerd"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnere"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnerf"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnerg"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="NameOfTheDeveloperBuildingOwnerh"></td>
            </tr>

            <tr>
                <td>Name of the agency/broker</td>
                <td>
          <select name="NameOfTheAgencyBroker" style="width:100px">
          <option name="NameOfTheAgencyBroker" id="NameOfTheAgencyBroker" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBroker" id="NameOfTheAgencyBroker" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokera" style="width:100px">
          <option name="NameOfTheAgencyBrokera" id="NameOfTheAgencyBrokera" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokera" id="NameOfTheAgencyBrokera" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokerb" style="width:100px">
          <option name="NameOfTheAgencyBrokerb" id="NameOfTheAgencyBrokerb" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokerb" id="NameOfTheAgencyBrokerb" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokerc" style="width:100px">
          <option name="NameOfTheAgencyBrokerc" id="NameOfTheAgencyBrokerc" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokerc" id="NameOfTheAgencyBrokerc" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokerd" style="width:100px">
          <option name="NameOfTheAgencyBrokerd" id="NameOfTheAgencyBrokerd" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokerd" id="NameOfTheAgencyBrokerd" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokere" style="width:100px">
          <option name="NameOfTheAgencyBrokere" id="NameOfTheAgencyBrokere" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokere" id="NameOfTheAgencyBrokere" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokerf" style="width:100px">
          <option name="NameOfTheAgencyBrokerf" id="NameOfTheAgencyBrokerf" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokerf" id="NameOfTheAgencyBrokerf" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokerg" style="width:100px">
          <option name="NameOfTheAgencyBrokerg" id="NameOfTheAgencyBrokerg" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokerg" id="NameOfTheAgencyBrokerg" value="etc">etc</option>
          </select>
        </td>
        <td>
          <select name="NameOfTheAgencyBrokerh" style="width:100px">
          <option name="NameOfTheAgencyBrokerh" id="NameOfTheAgencyBrokerh" value="JLL">JLL</option>
  <option name="NameOfTheAgencyBrokerh" id="NameOfTheAgencyBrokerh" value="etc">etc</option>
          </select>
        </td>
</tr>
            <tr>
                <td style="color: white;background-color: #21A0D2;">Commercial Terms</td>
            </tr>
            <tr>
                <td>Lease commencement</td>
               <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencement"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencementa"></td>
        <td><input type="text" style="width:100px;height: 20px;"  name="leaseCommencementb"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencementc"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencementd"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencemente"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencementf"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencementg"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="leaseCommencementh"></td>
            </tr>

            <tr>
                <td>Lease Term Renewable</td>
               <td>
          <select name="leaseTerm" style="width:100px">
            <option name="leaseTerm" value="3years">3 years</option>
            <option name="leaseTerm" value="5years">5 years</option>
            <option name="leaseTerm" value="7years">7 years</option>
          </select>
        </td>
         <td>
          <select name="leaseTerma" style="width:100px">
            <option name="leaseTerma" value="3years">3 years</option>
            <option name="leaseTerma" value="5years">5 years</option>
            <option name="leaseTerma" value="7years">7 years</option>
          </select>
        </td>
         <td>
          <select name="leaseTermb" style="width:100px">
            <option name="leaseTermb" value="3years">3 years</option>
            <option name="leaseTermb" value="5years">5 years</option>
            <option name="leaseTermb" value="7years">7 years</option>
          </select>
        </td>
        <td>
          <select name="leaseTermc" style="width:100px">
            <option name="leaseTermc" value="3years">3 years</option>
            <option name="leaseTermc" value="5years">5 years</option>
            <option name="leaseTermc" value="7years">7 years</option>
          </select>
        </td><td>
          <select name="leaseTermd" style="width:100px">
            <option name="leaseTermd" value="3years">3 years</option>
            <option name="leaseTermd" value="5years">5 years</option>
            <option name="leaseTermd" value="7years">7 years</option>
          </select>
        </td><td>
          <select name="leaseTerme" style="width:100px">
            <option name="leaseTerme" value="3years">3 years</option>
            <option name="leaseTerme" value="5years">5 years</option>
            <option name="leaseTerme" value="7years">7 years</option>
          </select>
        </td><td>
          <select name="leaseTermf" style="width:100px">
            <option name="leaseTermf" value="3years">3 years</option>
            <option name="leaseTermf" value="5years">5 years</option>
            <option name="leaseTermf" value="7years">7 years</option>
          </select>
        </td><td>
          <select name="leaseTermg" style="width:100px">
            <option name="leaseTermg" value="3years">3 years</option>
            <option name="leaseTermg" value="5years">5 years</option>
            <option name="leaseTermg" value="7years">7 years</option>
          </select>
        </td>
        <td>
          <select name="leaseTermh" style="width:100px">
            <option name="leaseTermh" value="3years">3 years</option>
            <option name="leaseTermh" value="5years">5 years</option>
            <option name="leaseTermh" value="7years">7 years</option>
          </select>
        </td>
                
            </tr>
            <tr>
                <td>Base Rent Rate, <span class="currency" data-currencyName="sar">0</span>/month</td>
                 <td><input type="text" style="width:100px;height: 20px;" id="price" name="baseRent"></td>
         <td><input type="text" style="width:100px;height: 20px;" name="baseRenta"></td>
            <td><input type="text" style="width:100px;height: 20px;" name="baseRentb"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="price3" name="baseRentc"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="price4" name="baseRentd"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="price5" name="baseRente"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="price6" name="baseRentf"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="price7" name="baseRentg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="price8" name="baseRenth"></td>
            </tr>
            <tr>
                <td>services / opex <span class="currency" data-currencyName="sar">0</span>/month</td>
                 <td><input type="text" style="width:100px;height: 20px;" id="qty" name="services"></td>
         <td><input type="text" style="width:100px;height: 20px;" name="servicesa"></td>
          <td><input type="text" style="width:100px;height: 20px;" name="servicesb"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="qty3" name="servicesc"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="qty4" name="servicesd"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="qty5" name="servicese"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="qty6" name="servicesf"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="qty7" name="servicesg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="qty8" name="servicesh"></td>
            </tr>
            <tr>
                <td>Total Rent Rate,<span class="currency" data-currencyName="sar">0</span>/month</td>
                <td><input type="text" style="width:100px;height: 20px;" id="total" name="rate"></td>
         <td><input type="text" style="width:100px;height: 20px;" name="ratea"></td>
          <td><input type="text" style="width:100px;height: 20px;" name="rateb"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total8"  name="ratec"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total9" name="rated"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total10" name="ratee"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total11" name="ratef"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total12" name="rateg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total13"  name="rateh"></td>
            </tr>
            <tr>
                <td>Base Rent Rate,<span class="currency" data-currencyName="sar">0</span>/sqm/month</td>
                  <td><input type="text" style="width:100px;height: 20px;" id="total1" name="mon"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="mona"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="monb"></td>
<td><input type="text" style="width:100px;height: 20px;" id="total16" name="monc"></td>
<td><input type="text" style="width:100px;height: 20px;" id="total17" name="mond"></td>
<td><input type="text" style="width:100px;height: 20px;" id="total18" name="mone"></td>
<td><input type="text" style="width:100px;height: 20px;" id="total19" name="monf"></td> 
<td><input type="text" style="width:100px;height: 20px;" id="total20" name="mong"></td>
<td><input type="text" style="width:100px;height: 20px;" id="total21" name="monh"></td>
            </tr>
            <tr>
                <td>Base Rent Rate,<span class="currency" data-currencyName="sar">0</span>/year</td>
                <td><input type="text" style="width:100px;height: 20px;" id="total2" name="year"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="yeara"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="yearb"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total24" name="yearc"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total25" name="yeard"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total26" name="yeare"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total27" name="yearf"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total28" name="yearg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total29" name="yearh"></td>
            </tr>
            <tr>
                <td>Services/Opex,<span class="currency" data-currencyName="sar">0</span>/year</td>
               <td><input type="text" style="width:100px;height: 20px;" id="total3" name="opex"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="opexa"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="opexb"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total32" name="opexc"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total33" name="opexd"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total34" name="opexe"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total35" name="opexf"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total36" name="opexg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total37" name="opexh"></td>
            </tr>
            <tr>
                <td>Total rent rate,<span class="currency" data-currencyName="sar">0</span>/year</td>
                 <td><input type="text" style="width:100px;height: 20px;" id="total4" name="rent"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="renta"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="rentb"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total40"  name="rentc"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total41"  name="rentd"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total42"  name="rente"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total43"  name="rentf"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total44"  name="rentg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total45"  name="renth"></td>
            </tr>

            <tr>

                <td>Base rent rate,<span class="currency" data-currencyName="sar">0</span>/sqm/year</td>
               <td><input type="text"style="width:100px;height: 20px;" id="total5" name="sqm"></td>
         <td><input type="text" style="width:100px;height: 20px;" name="sqma"></td>
          <td><input type="text" style="width:100px;height: 20px;" name="sqmb"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total48" name="sqmc"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total49" name="sqmd"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total50" name="sqme"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total51" name="sqmf"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total52" name="sqmg"></td>
                <td><input type="text" style="width:100px;height: 20px;" id="total53" name="sqmh"></td>
            </tr>

            <tr>

                <td>Rent Review (escalation)</td>
               <td><textarea cols="11" rows="3" name="esa"></textarea></td>
        <td><textarea cols="11" rows="3" name="esaa"></textarea></td>
        <td><textarea cols="11" rows="3" name="esab"></textarea></td>
                <td><textarea cols="11" rows="3" name="esac"></textarea></td>
                <td><textarea cols="11" rows="3" name="esad"></textarea></td>
                <td><textarea cols="11" rows="3" name="esae"></textarea></td>
                <td><textarea cols="11" rows="3" name="esaf"></textarea></td>
                <td><textarea cols="11" rows="3" name="esag"></textarea></td>
                <td><textarea cols="11" rows="3" name="esah"></textarea></td>
            </tr>

            <tr>
                <td>Rent Free Time, month</td>
                <td><input type="text" style="width:100px;height: 20px;" name="time"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="timea"></td>
        <td><input type="text" style="width:100px;height: 20px;" name="timeb"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="timec"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="timed"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="timee"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="timef"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="timeg"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="timeh"></td>
            </tr>

            <tr>

                <td>Service Charge and Landlord's maintenance responsibility</td>
                <td><textarea cols="11" rows="3" name="land"></textarea></td>
       <td><textarea cols="11" rows="3" name="landa"></textarea></td>
        <td><textarea cols="11" rows="3" name="landb"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
            </tr>


            <tr>
                <td>Utilities</td>
                 <td><textarea cols="11" rows="3" name="uti"></textarea></td>
              <td><textarea cols="11" rows="3" name="utia"></textarea></td>
           <td><textarea cols="11" rows="3" name="utib"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
            </tr>

            <tr>
                <td>Parking</td>
                <td><input type="text"  style="width:100px;height: 20px;" name="par"></td>
         <td><input type="text"  style="width:100px;height: 20px;" name="para"></td>
          <td><input type="text"  style="width:100px;height: 20px;" name="parb"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>

            <tr>
                <td>Security Deposit</td>
                  <td><input type="text"  style="width:100px;height: 20px;" name="dep"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="depa"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="depb"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>

            <tr>
                <td>Payment Terms for Rent</td>
              <td><input type="text"  style="width:100px;height: 20px;" name="pay"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="paya"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="payb"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>

            <tr>
                <td>Early Termination Rights</td>
                <td><input type="text"  style="width:100px;height: 20px;" name="ear"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="eara"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="earb"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>

            <tr>
                <td>Expansion / rights of first refusal</td>
               <td><input type="text"  style="width:100px;height: 20px;" name="exp"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="expa"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="expb"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>

            <tr>
                <td>Assignment / Subletting</td>
                <td><input type="text"  style="width:100px;height: 20px;" name="ass"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="assa"></td>
        <td><input type="text"  style="width:100px;height: 20px;" name="assb"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>

            <tr>
                <td>Reinstatement</td>
                <td><select name="ren" style="width:100px">
          <option name="ren" value="yes">yes</option>
          <option name="ren" value="no">no</option>
        </select></td>
        <td><select name="rena" style="width:100px">
          <option name="rena" value="yes">yes</option>
          <option name="rena" value="no">no</option>
        </select></td>
        <td><select name="renb" style="width:100px">
          <option name="renb" value="yes">yes</option>
          <option name="renb" value="no">no</option>
        </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
            </tr>

            <tr>
                <td>Ownership Certificate provided</td>
                <td><select name="own" style="width:100px">
          <option name="own" value="yes">yes</option>
          <option name="own" value="no">no</option>
        </select></td>
        <td><select name="owna" style="width:100px">
          <option name="owna" value="yes">yes</option>
          <option name="owna" value="no">no</option>
        </select></td>
        <td><select name="ownb" style="width:100px">
          <option name="ownb" value="yes">yes</option>
          <option name="ownb" value="no">no</option>
        </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
            </tr>

            <tr>
                <td>Floorplan provided</td>
                <td><select name="flor" style="width:100px">
          <option name="flor" value="yes">yes</option>
          <option name="flor" value="no">no</option>
        </select></td>
        <td><select name="flora" style="width:100px">
          <option name="flora" value="yes">yes</option>
          <option name="flora" value="no">no</option>
        </select></td>
        <td><select name="florb" style="width:100px">
          <option name="florb" value="yes">yes</option>
          <option name="florb" value="no">no</option>
        </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
                <td><select style="width:100px">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select></td>
            </tr>

            <tr>
                <td>Agency fees</td>
               <td><div class="flex"><span class="currency">₺</span>
      <input id="amount" name="age" type="text" maxlength="10"/ style="width:100px"name="age">
        </div></td>
        <td><div class="flex"><span class="currency">₺</span>
      <input id="amount" name="agea" type="text" maxlength="10"/ style="width:100px"name="agea">
        </div></td>
       <td><div class="flex"><span class="currency">₺</span>
      <input id="amount" name="ageb" type="text" maxlength="10"/ style="width:100px"name="ageb">
        </div></td>
                <td>
                   
                        <div class="flex">
                            <span class="currency">₺</span>
                            <input id="amount" name="amount" type="text" maxlength="10"/ style="width:100px"
                            name="amount">
                        </div>

                   
                </td>
                <td>
                   
                        <div class="flex">
                            <span class="currency">₺</span>
                            <input id="amount" name="amount" type="text" maxlength="10"/ style="width:100px"
                            name="amount">
                        </div>

                    
                </td>
                <td>
                   
                        <div class="flex">
                            <span class="currency">₺</span>
                            <input id="amount" name="amount" type="text" maxlength="10"/ style="width:100px"
                            name="amount">
                        </div>

                    
                </td>
                <td>
                    
                        <div class="flex">
                            <span class="currency">₺</span>
                            <input id="amount" name="amount" type="text" maxlength="10"/ style="width:100px"
                            name="amount">
                        </div>

                    
                </td>
                <td>
                    
                        <div class="flex">
                            <span class="currency">₺</span>
                            <input id="amount" name="amount" type="text" maxlength="10"/ style="width:100px"
                            name="amount">
                        </div>

                    
                </td>
                <td>
                    
                        <div class="flex">
                            <span class="currency">₺</span>
                            <input id="amount" name="amount" type="text" maxlength="10"/ style="width:100px"
                            name="amount">
                        </div>

                    
                </td>
            </tr>
            <tr>
                <td style="color: white;background-color:#21A0D2;">Other Aspects
                </td>
            </tr>

            <tr>
                <td>Other main tenants</td>
              <td><input type="text" style="width:100px;height: 20px;" name="otherMainTenants"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="otherMainTenantsa"></td>
       <td><input type="text" style="width:100px;height: 20px;" style="width:100px;height: 20px;" name="otherMainTenantsb"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="otherMainTenantsc"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>

            <tr>
                <td>Others</td>
                <td><input type="text" style="width:100px;height: 20px;" name="others"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="othersa"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="othersb"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="othersc"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="text"></td>
            </tr>
            <tr>
                <td>Pro's</td>
        <td><textarea cols="11" rows="3" name="pros"></textarea></td>
        <td><textarea cols="11" rows="3" name="prosa"></textarea></td>
        <td><textarea cols="11" rows="3" name="prosb"></textarea></td>
        <td><textarea cols="11" rows="3" name="prosc"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
            </tr>
            <tr>
                <td>Con'S</td>
            <td><textarea cols="11" rows="3" name="cons"></textarea></td>
            <td><textarea cols="11" rows="3" name="consa"></textarea></td>
            <td><textarea cols="11" rows="3" name="consb"></textarea></td>
            <td><textarea cols="11" rows="3" name="consc"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
                <td><textarea cols="11" rows="3" name="text"></textarea></td>
            </tr>
            <tr>
                <td>Shortlisted</td>
                 <td>
          <select name="shortlisted" style="width:100px">
          <option name="shortlisted" id="shortlisted" value="yes">Yes</option>
  <option name="shortlisted" id="shortlisted" value="no">No</option>
          </select>
        </td>
        <td>
          <select name="shortlisteda" style="width:100px">
          <option name="shortlisteda" id="shortlisteda" value="yes">Yes</option>
  <option name="shortlisteda" id="shortlisteda" value="no">No</option>
          </select>
        </td>
        <td>
          <select name="shortlistedb" style="width:100px">
          <option name="shortlistedb" id="shortlistedb" value="yes">Yes</option>
  <option name="shortlistedb" id="shortlistedb" value="no">No</option>
          </select>
        </td>
        <td>
          <select name="shortlistedc" style="width:100px">
          <option name="shortlistedc" id="shortlistedc" value="yes">Yes</option>
  <option name="shortlistedc" id="shortlistedc" value="no">No</option>
          </select>
        </td>
                <td><select name="shortlistedd" id="shortlistedd" style="width:100px">
                    <option name="shortlistedd" id="shortlistedd" value="yes">Yes</option>
                    <option name="shortlistedd" id="shortlistedd" value="no">No</option>
                </select></td>
                <td><select name="shortlistede" id="shortlistede" style="width:100px">
                    <option name="shortlistede"  id="shortlistede"  value="yes">Yes</option>
                    <option name="shortlistede"  id="shortlistede" value="no">No</option>
                </select></td>
                <td><select name="shortlistedf" id="shortlistedf" style="width:100px">
                    <option name="shortlistedf" id="shortlistedf" value="yes">Yes</option>
                    <option name="shortlistedf" id="shortlistedf" value="no">No</option>
                </select></td>
                <td><select name="shortlistedg" id="shortlistedg" style="width:100px">
                    <option name="shortlistedg" id="shortlistedg" value="yes">Yes</option>
                    <option name="shortlistedg" id="shortlistedg" value="no">No</option>
                </select></td> 
                <td><select name="shortlistedh" id="shortlistedh" style="width:100px">
                    <option name="shortlistedh" id="shortlistedh" value="yes">Yes</option>
                    <option name="shortlistedh"  id="shortlistedh"value="no">No</option>
                </select></td>
            </tr>

            <tr>
                <td>Capex estimation</td>
                <td><input type="text" name="capexEstimation" style="width:100px;height: 20px;"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="capexEstimationa"></td>
       <td><input type="text" style="width:100px;height: 20px;" style="width:100px;height: 20px;" name="capexEstimationb"></td>
       <td><input type="text" style="width:100px;height: 20px;" name="capexEstimationc"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="capexEstimationd"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="capexEstimatione"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="capexEstimationf"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="capexEstimationg"></td>
                <td><input type="text" style="width:100px;height: 20px;" name="capexEstimationh"></td>
            </tr>
            <td>
        <input type="submit" name="submit"/ style="position:relative;color:white;padding: 12px;width: 200px;cursor: pointer;font-size: 15px;background-color:#21A0D2;position: relative;">
    </td>
            </tbody>
        </form>
    </table>


    <footer>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
    </footer>
    <script type="text/javascript">
        var
            currencyElements = document.getElementsByClassName("currency");
        var
            usdChangeRate = {
                AED: 1.0490, // 1AUD = 1.0490 USD
                EGP: 1.4407, // 1EUR = 1.4407 USD
                GBP: 1.6424,
                SAR: 1.0,
                TL: 1.00,
                INR: 1.00,
                USD: 1.00,
                Pounds: 1.00,
                PKR: 1.22,
                AFN: 1.00,
                ANN: 1.00,
                XCD:1.00,
                AMD:1.00,
                EURO:1.00,
                BSD:1.00,
                BHD:1.00,
                BDT:1.00,
                BTN:1.00,
                BOB:1.00,
                BAM:1.00,
                BWP:1.00,
                BRL:1.00,
                BTN:1.00,
                BOB:2.00,
                BAM:1.00,
                BWP:1.00,
                BRL:2.00,
                BND:1.00,
                BGN:1.00,
                CFA:1.00,
                XOF:1.00,
                CVE:1.00,
                KHR:1.00,
                XAF:1.00,
                CAD:1.00,
                XAF:1.00,
                XAF:1.00,
                CLP:1.00,
                CNY:1.00,
                COP:1.00,
                KMF:1.00,
                XAF:1.00,
                CRC:1.00,
                HRK:1.00,
                CUP:1.00,
                EUR:1.00,
                CZK:1.00,
                CDF:1.00,
                Kr:1.00,
                DJF:1.00,
                XCD:1.00,
                FX:1.00,
                ECS:1.00,
                EGP:1.00,
                SVC:1.00,
                XAF:1.00,
                ERN:1.00,
                EUR:1.00,
                SZL:1.00,
                ETB:1.00,
                 FJD:1.00,
                 EUR:1.00,
                 EUR:1.00,
                 XAF:1.00,
                 GMD:1.00,
                 GEL:1.00,


};

    </script>
    <script>
        var stateObject = {
            "Afganistan": {
                "Kabul": ["Dubai1", "Dubai2"],
                "Kabul": ["Abu Dabi1", "Abu Dabi2"],
                "Sheberghan": ["Sharjah1", "Sharjah2"],
                "Kandahar": ["Dubai1", "Dubai2"],
                "Herat": ["Dubai1", "Dubai2"],
                "Ghazni": ["Dubai1", "Dubai2"],
                "Jalalabad": ["Dubai1", "Dubai2"],
                "Sheberghan": ["Dubai1", "Dubai2"],
            },
            "Albania": {
                "Tirana": ["Dubai1", "Dubai2"],
                "Tirana": ["Abu Dabi1", "Abu Dabi2"],
                "Berat": ["Sharjah1", "Sharjah2"],
                "Gjirokaster": ["Dubai1", "Dubai2"],
                "Durrës": ["Dubai1", "Dubai2"],
                "Krujë District": ["Dubai1", "Dubai2"],
                "Sarandë": ["Dubai1", "Dubai2"],
                "Pogradec": ["Dubai1", "Dubai2"],
            },
            "Algeria": {
                "Algiers [El Djazaïr]": ["Dubai1", "Dubai2"],
                "Oran": ["Abu Dabi1", "Abu Dabi2"],
                "Annaba": ["Sharjah1", "Sharjah2"],
                "Setif": ["Dubai1", "Dubai2"],
                "Blida": ["Dubai1", "Dubai2"],
                "Béjaïa": ["Dubai1", "Dubai2"],
                "Constantine": ["Dubai1", "Dubai2"],
                "Skikda": ["Dubai1", "Dubai2"],
            },
            "Andoraa": {
                "Andorra la Vella": ["Dubai1", "Dubai2"],
                "La Massana": ["Abu Dabi1", "Abu Dabi2"],
                "Sant Julià de Lòria": ["Sharjah1", "Sharjah2"],
                "Canillo": ["Dubai1", "Dubai2"],
                "Encamp": ["Dubai1", "Dubai2"],
                "Les Escaldes": ["Dubai1", "Dubai2"],
                "Arinsal": ["Dubai1", "Dubai2"],
                "Soldeu": ["Dubai1", "Dubai2"],
            },
            "Angola": {
                "Luanda": ["Dubai1", "Dubai2"],
                "Huambo": ["Abu Dabi1", "Abu Dabi2"],
                "Benguela": ["Sharjah1", "Sharjah2"],
                "Lobito": ["Dubai1", "Dubai2"],
                "Malanje": ["Dubai1", "Dubai2"],
                "Namibe": ["Dubai1", "Dubai2"],
                "Soyo": ["Dubai1", "Dubai2"],
                "M'banza-Kongo": ["Dubai1", "Dubai2"],
            },
            "Andora": {
                "Andorra la Vella": ["Dubai1", "Dubai2"],
                "La Ma": ["Abu Dabi1", "Abu Dabi2"],
                "Sant Julià de Lòria": ["Sharjah1", "Sharjah2"],
                "Canillo": ["Dubai1", "Dubai2"],
                "Encamp": ["Dubai1", "Dubai2"],
                "Les Escaldes": ["Dubai1", "Dubai2"],
                "Arinsal": ["Dubai1", "Dubai2"],
                "Soldeu": ["Dubai1", "Dubai2"],
            },
            "Antigua and Barbuda": {
                "All Saints": ["Dubai1", "Dubai2"],
                "Bolans": ["Abu Dabi1", "Abu Dabi2"],
                "English Harbour": ["Sharjah1", "Sharjah2"],
                "Potter's Village": ["Dubai1", "Dubai2"],
                "Seaview Farm": ["Dubai1", "Dubai2"],
                "St. John's": ["Dubai1", "Dubai2"],
                "Freetown": ["Dubai1", "Dubai2"],
                "Willikies": ["Dubai1", "Dubai2"],
            },
            "Argentina": {
                "Buenos Aires": ["Istanbul1", "Istanbul2"],
                "Buenos Aires": ["Ismir1", "Ismir2"],
                "Mar del Plata": ["Ankara1", "Anakara2"],
                "Rosario": ["Ismir1", "Ismir2"],
                "Córdoba": ["Ismir1", "Ismir2"],
                "Mendoza": ["Ismir1", "Ismir2"],
                "Ushuaia": ["Ismir1", "Ismir2"],
            },
            "Armenia": {
                "Yerevan": ["Istanbul1", "Istanbul2"],
                "Gyumri": ["Ismir1", "Ismir2"],
                "Vanadzor": ["Ankara1", "Anakara2"],
                "Kapan": ["Ismir1", "Ismir2"],
                "Vagharshapat": ["Ismir1", "Ismir2"],
                "Goris": ["Ismir1", "Ismir2"],
                "Dilijan": ["Ismir1", "Ismir2"],
            },
            "Australia": {
                "Brisbane": ["Istanbul1", "Istanbul2"],
                "Sdyney": ["Ismir1", "Ismir2"],
                "Melbourne": ["Ankara1", "Anakara2"],
                "Canberra": ["Ismir1", "Ismir2"],
                "Hobert": ["Ismir1", "Ismir2"],
                "Brisbane": ["Ismir1", "Ismir2"],
                "Adelaide": ["Ismir1", "Ismir2"],
            },
            "Austria": {
                "Vienna": ["Dubai1", "Dubai2"],
                "Salzburg": ["Abu Dabi1", "Abu Dabi2"],
                "Innsbruck": ["Sharjah1", "Sharjah2"],
                "Graz": ["Dubai1", "Dubai2"],
                "Linz": ["Dubai1", "Dubai2"],
                "Klagenfurt": ["Dubai1", "Dubai2"],
                "Saint Pölten": ["Dubai1", "Dubai2"],
                "Bregenz": ["Dubai1", "Dubai2"],
            },
            "Azerbaijan": {
                "Baku": ["Dubai1", "Dubai2"],
                "Ganja": ["Abu Dabi1", "Abu Dabi2"],
                "Sumqayit": ["Sharjah1", "Sharjah2"],
                "Shirvan": ["Dubai1", "Dubai2"],
                "Sheki": ["Dubai1", "Dubai2"],
                "Shamakhi": ["Dubai1", "Dubai2"],
                "Baku": ["Dubai1", "Dubai2"],
                "Naftalan": ["Dubai1", "Dubai2"],
            },
            "Bahamas": {
                "Nassau": ["Dubai1", "Dubai2"],
                "Freeport": ["Abu Dabi1", "Abu Dabi2"],
                "Marsh Harbour": ["Sharjah1", "Sharjah2"],
                "Clarence Town": ["Dubai1", "Dubai2"],
                "Coopers Town": ["Dubai1", "Dubai2"],
                "Alice Town": ["Dubai1", "Dubai2"],
                "Colonel Hill Settlement": ["Dubai1", "Dubai2"],
                "Duncan Town": ["Dubai1", "Dubai2"],
            },
            "Bahrain": {
                "Manama": ["Dubai1", "Dubai2"],
                "Muharraq": ["Abu Dabi1", "Abu Dabi2"],
                "Riffa": ["Sharjah1", "Sharjah2"],
                "Zallaq": ["Dubai1", "Dubai2"],
                "Barbar": ["Dubai1", "Dubai2"],
                "Al Qadam": ["Dubai1", "Dubai2"],
                "Karzakkan": ["Dubai1", "Dubai2"],
                "Diplomatic Area": ["Dubai1", "Dubai2"],
            },
            "Bangladesh": {
                "Dhaka": ["Dubai1", "Dubai2"],
                "Chattogram": ["Abu Dabi1", "Abu Dabi2"],
                "Sylhet": ["Sharjah1", "Sharjah2"],
                "Khulna": ["Dubai1", "Dubai2"],
                "Rajshahi": ["Dubai1", "Dubai2"],
                "Barishal": ["Dubai1", "Dubai2"],
                "Mymensingh": ["Dubai1", "Dubai2"],
                "Cumilla": ["Dubai1", "Dubai2"],
            },
            "Barbados": {
                "Bridgetown": ["Dubai1", "Dubai2"],
                "Holetown": ["Abu Dabi1", "Abu Dabi2"],
                "Bathsheba": ["Sharjah1", "Sharjah2"],
                "Saint James": ["Dubai1", "Dubai2"],
                "Six Cross Roads": ["Dubai1", "Dubai2"],
                "The Crane Resort, Barbados": ["Dubai1", "Dubai2"],
                "Blades Hill": ["Dubai1", "Dubai2"],
                "Breedy": ["Dubai1", "Dubai2"],
            },
            "Belarus": {
                "Minsk": ["Dubai1", "Dubai2"],
                "Grodno": ["Abu Dabi1", "Abu Dabi2"],
                "Mogilev": ["Sharjah1", "Sharjah2"],
                "Brest": ["Dubai1", "Dubai2"],
                "Gomel": ["Dubai1", "Dubai2"],
                "Viciebsk": ["Dubai1", "Dubai2"],
                "Babruysk": ["Dubai1", "Dubai2"],
                "Pinsk": ["Dubai1", "Dubai2"],
            },
            "Belgium": {
                "Bruges": ["Dubai1", "Dubai2"],
                "Ghent": ["Abu Dabi1", "Abu Dabi2"],
                "Brussels": ["Sharjah1", "Sharjah2"],
                "Antwerp": ["Dubai1", "Dubai2"],
                "Leuven": ["Dubai1", "Dubai2"],
                "Liège": ["Dubai1", "Dubai2"],
                "Mechelen": ["Dubai1", "Dubai2"],
                "Charleroi": ["Dubai1", "Dubai2"],
            },
            "Belize": {
                "Belize City": ["Dubai1", "Dubai2"],
                "Belmopan": ["Abu Dabi1", "Abu Dabi2"],
                "San Ignacio": ["Sharjah1", "Sharjah2"],
                "Dangriga": ["Dubai1", "Dubai2"],
                "San Pedro": ["Dubai1", "Dubai2"],
                "Corozal": ["Dubai1", "Dubai2"],
                "Punta Gorda": ["Dubai1", "Dubai2"],
                "Benque Viejo Del Carmen": ["Dubai1", "Dubai2"],
            },
            "Benin": {
                "Cotonou": ["Dubai1", "Dubai2"],
                "Porto-Novo": ["Abu Dabi1", "Abu Dabi2"],
                "Abomey": ["Sharjah1", "Sharjah2"],
                "Parakou": ["Dubai1", "Dubai2"],
                "Ouidah": ["Dubai1", "Dubai2"],
                "Djougou": ["Dubai1", "Dubai2"],
                "Natitingou": ["Dubai1", "Dubai2"],
                "Bohicon": ["Dubai1", "Dubai2"],
            },
           "Bhutan": {
                "Thimphu": ["Dubai1", "Dubai2"],
                "Phuentsholing": ["Abu Dabi1", "Abu Dabi2"],
                "Wangdue Phodrang": ["Sharjah1", "Sharjah2"],
                "Paro": ["Dubai1", "Dubai2"],
                "Jakar": ["Dubai1", "Dubai2"],
                "Punakha": ["Dubai1", "Dubai2"],
                "Trashigang": ["Dubai1", "Dubai2"],
                "Gelephu": ["Dubai1", "Dubai2"],
            },
            "Bolivia": {
                "La Paz": ["Dubai1", "Dubai2"],
                "Cochabamba": ["Abu Dabi1", "Abu Dabi2"],
                "Sucre": ["Sharjah1", "Sharjah2"],
                "Santa Cruz de la Sierra": ["Dubai1", "Dubai2"],
                "Potosi": ["Dubai1", "Dubai2"],
                "Tarija": ["Dubai1", "Dubai2"],
                "Oruro": ["Dubai1", "Dubai2"],
                "El Alto": ["Dubai1", "Dubai2"],
            },
            "Bosnia and Herzegovina": {
                "Sarajevo": ["Dubai1", "Dubai2"],
                "Mostar": ["Abu Dabi1", "Abu Dabi2"],
                "Banja Luka": ["Sharjah1", "Sharjah2"],
                "Tuzla": ["Dubai1", "Dubai2"],
                "Brčko": ["Dubai1", "Dubai2"],
                "Bijeljina": ["Dubai1", "Dubai2"],
                "Bihać": ["Dubai1", "Dubai2"],
                "Travnik": ["Dubai1", "Dubai2"],
            },
            "Botswana": {
                "Gaborone": ["Dubai1", "Dubai2"],
                "Francistown": ["Abu Dabi1", "Abu Dabi2"],
                "Maun": ["Sharjah1", "Sharjah2"],
                "Molepolole": ["Dubai1", "Dubai2"],
                "Serowe": ["Dubai1", "Dubai2"],
                "Palapye": ["Dubai1", "Dubai2"],
                "Kanye": ["Dubai1", "Dubai2"],
                "Mahalapye": ["Dubai1", "Dubai2"],
            },
            "Brazil": {
                "Rio de Janeiro": ["Dubai1", "Dubai2"],
                "São Paulo": ["Abu Dabi1", "Abu Dabi2"],
                "Curitiba": ["Sharjah1", "Sharjah2"],
                "Belo Horizonte": ["Dubai1", "Dubai2"],
                "Salvador": ["Dubai1", "Dubai2"],
                "Porto Alegre": ["Dubai1", "Dubai2"],
                "Brasilia": ["Dubai1", "Dubai2"],
                "Fortaleza": ["Dubai1", "Dubai2"],
            },
            "Brunei": {
                "Bandar Seri Begawan": ["Dubai1", "Dubai2"],
                "Kuala Belait": ["Abu Dabi1", "Abu Dabi2"],
                "Seria": ["Sharjah1", "Sharjah2"],
                "Bangar": ["Dubai1", "Dubai2"],
                "Muara": ["Dubai1", "Dubai2"],
                "Tutong": ["Dubai1", "Dubai2"],
                "Kampong Ayer": ["Dubai1", "Dubai2"],
                "Mukim Berakas A": ["Dubai1", "Dubai2"],
            },
            "Bulgaria": {
                "Sofia": ["Dubai1", "Dubai2"],
                "Varna": ["Abu Dabi1", "Abu Dabi2"],
                "Plovdiv": ["Sharjah1", "Sharjah2"],
                "Burgas": ["Dubai1", "Dubai2"],
                "Veliko Tarnovo": ["Dubai1", "Dubai2"],
                "Ruse": ["Dubai1", "Dubai2"],
                "Pleven": ["Dubai1", "Dubai2"],
                "Stara Zagora": ["Dubai1", "Dubai2"],
            },
            "Burkina Faso": {
                "Ouagadougou": ["Dubai1", "Dubai2"],
                "Bobo-Dioulasso": ["Abu Dabi1", "Abu Dabi2"],
                "Koudougou": ["Sharjah1", "Sharjah2"],
                "Banfora": ["Dubai1", "Dubai2"],
                "Ouahigouya": ["Dubai1", "Dubai2"],
                "Fada-Ngourma": ["Dubai1", "Dubai2"],
                "Hounde": ["Dubai1", "Dubai2"],
                "Dedougou": ["Dubai1", "Dubai2"],
            },
            "Burundi": {
                "Bujumbura": ["Dubai1", "Dubai2"],
                "Gitega": ["Abu Dabi1", "Abu Dabi2"],
                "Bururi": ["Sharjah1", "Sharjah2"],
                "Ruyigi": ["Dubai1", "Dubai2"],
                "Muyinga": ["Dubai1", "Dubai2"],
                "Kayanza": ["Dubai1", "Dubai2"],
                "Rutana": ["Dubai1", "Dubai2"],
                "Makamba": ["Dubai1", "Dubai2"],
            },
            "Côte d'Ivoire": {
                "Abidjan": ["Dubai1", "Dubai2"],
                "Yamoussoukro": ["Abu Dabi1", "Abu Dabi2"],
                "San-Pedro": ["Sharjah1", "Sharjah2"],
                "Bouake": ["Dubai1", "Dubai2"],
                "Korhogo": ["Dubai1", "Dubai2"],
                "Man": ["Dubai1", "Dubai2"],
                "Daloa": ["Dubai1", "Dubai2"],
                "Gagnoa": ["Dubai1", "Dubai2"],
            },
            "Cabo Verde": {
                "Praia": ["Dubai1", "Dubai2"],
                "Mindelo": ["Abu Dabi1", "Abu Dabi2"],
                "Assomada": ["Sharjah1", "Sharjah2"],
                "Tarrafal": ["Dubai1", "Dubai2"],
                "Sao Filipe": ["Dubai1", "Dubai2"],
                "Santa Maria": ["Dubai1", "Dubai2"],
                "Cidade Velha": ["Dubai1", "Dubai2"],
                "Porto Novo": ["Dubai1", "Dubai2"],
            },
            "Cambodia": {
                "Phnom Penh": ["Dubai1", "Dubai2"],
                "Krong Siem Reap": ["Abu Dabi1", "Abu Dabi2"],
                "Preah Sihanouk": ["Sharjah1", "Sharjah2"],
                "Krong Battambang": ["Dubai1", "Dubai2"],
                "Angkor": ["Dubai1", "Dubai2"],
                "Krong Kampot": ["Dubai1", "Dubai2"],
                "Krong Ta Khmau": ["Dubai1", "Dubai2"],
                "Krong Poi Pet": ["Dubai1", "Dubai2"],
            },
            "Cameroon": {
                "Yaoundé": ["Dubai1", "Dubai2"],
                "Douala": ["Abu Dabi1", "Abu Dabi2"],
                "Bamenda": ["Sharjah1", "Sharjah2"],
                "Bafoussam": ["Dubai1", "Dubai2"],
                "Maroua": ["Dubai1", "Dubai2"],
                "Buea": ["Dubai1", "Dubai2"],
                "Ngaoundere": ["Dubai1", "Dubai2"],
                "Nkongsamba": ["Dubai1", "Dubai2"],
            },
            "Canada": {
                "Toronto": ["Dubai1", "Dubai2"],
                "Montreal": ["Abu Dabi1", "Abu Dabi2"],
                "Vancouver": ["Sharjah1", "Sharjah2"],
                "Ottawa":["Dubai1", "Dubai2"],
                "Calgary": ["Dubai1", "Dubai2"],
                "Quebec City": ["Dubai1", "Dubai2"],
                "Edmonton": ["Dubai1", "Dubai2"],
                "Winnipeg": ["Dubai1", "Dubai2"],
            },
            "Central African Republic": {
                "Bangui": ["Dubai1", "Dubai2"],
                "Bambari": ["Abu Dabi1", "Abu Dabi2"],
                "Bouar": ["Sharjah1", "Sharjah2"],
                "Bossangoa": ["Dubai1", "Dubai2"],
                "Berbérati": ["Dubai1", "Dubai2"],
                "Bangassou": ["Dubai1", "Dubai2"],
                "Mbaïki": ["Dubai1", "Dubai2"],
                "Sibut": ["Dubai1", "Dubai2"],
            },
            "Chad": {
                "N'Djamena": ["Dubai1", "Dubai2"],
                "Moundou": ["Abu Dabi1", "Abu Dabi2"],
                "Sarh": ["Sharjah1", "Sharjah2"],
                "Am Timan": ["Dubai1", "Dubai2"],
                "Kelo": ["Dubai1", "Dubai2"],
                "Bongor": ["Dubai1", "Dubai2"],
                "Koumra": ["Dubai1", "Dubai2"],
                "Oum Hadjer": ["Dubai1", "Dubai2"],
            },
            "Chile": {
                "Santiago": ["Dubai1", "Dubai2"],
                "Viña del Mar": ["Abu Dabi1", "Abu Dabi2"],
                "Valparaíso": ["Sharjah1", "Sharjah2"],
                "Concepción": ["Dubai1", "Dubai2"],
                "Arica": ["Dubai1", "Dubai2"],
                "La Serena": ["Dubai1", "Dubai2"],
                "Iquique": ["Dubai1", "Dubai2"],
                "Temuco": ["Dubai1", "Dubai2"],
            },
            "China": {
                "Shanghai": ["Dubai1", "Dubai2"],
                "Beijing": ["Abu Dabi1", "Abu Dabi2"],
                "Shenzhen": ["Sharjah1", "Sharjah2"],
                "Hangzhou": ["Dubai1", "Dubai2"],
                "Chengdu": ["Dubai1", "Dubai2"],
                "Nanjing": ["Dubai1", "Dubai2"],
                "Suzhou": ["Dubai1", "Dubai2"],
                "Tianjin": ["Dubai1", "Dubai2"],
            },
            "Colombia": {
                "Medellín": ["Dubai1", "Dubai2"],
                "Bogotá": ["Abu Dabi1", "Abu Dabi2"],
                "Cartagena": ["Sharjah1", "Sharjah2"],
                "Cali": ["Dubai1", "Dubai2"],
                "Barranquilla": ["Dubai1", "Dubai2"],
                "Santa Marta": ["Dubai1", "Dubai2"],
                "Manizales": ["Dubai1", "Dubai2"],
                "Bucaramanga": ["Dubai1", "Dubai2"],
            },
            "Comoros": {
                "Moroni": ["Dubai1", "Dubai2"],
                "Adda-Douéni": ["Abu Dabi1", "Abu Dabi2"],
                "Mitsamiouli": ["Sharjah1", "Sharjah2"],
                "Domoney": ["Dubai1", "Dubai2"],
                "Mbéni": ["Dubai1", "Dubai2"],
                "Tsembehou": ["Dubai1", "Dubai2"],
                "M'Ramani": ["Dubai1", "Dubai2"],
                "Koni-Djodjo": ["Dubai1", "Dubai2"],
            },
            "Congo (Congo-Brazzaville)": {
                "Brazzaville": ["Dubai1", "Dubai2"],
                "Pointe-Noire": ["Abu Dabi1", "Abu Dabi2"],
                "Dolisie": ["Sharjah1", "Sharjah2"],
                "Nkayi": ["Dubai1", "Dubai2"],
                "Kindamba": ["Dubai1", "Dubai2"],
                "Impfondo": ["Dubai1", "Dubai2"],
                "Ouesso": ["Dubai1", "Dubai2"],
                "Madingou": ["Dubai1", "Dubai2"],
            },
           "Costa Rica": {
                "San José": ["Dubai1", "Dubai2"],
                "Liberia": ["Abu Dabi1", "Abu Dabi2"],
                "Cartago": ["Sharjah1", "Sharjah2"],
                "Limon": ["Dubai1", "Dubai2"],
                "Alajuela": ["Dubai1", "Dubai2"],
                "Heredia": ["Dubai1", "Dubai2"],
                "Punta Arenas": ["Dubai1", "Dubai2"],
                "Quepos": ["Dubai1", "Dubai2"],
            },
            "Croatia": {
                "Dubrovnik": ["Dubai1", "Dubai2"],
                "Split": ["Abu Dabi1", "Abu Dabi2"],
                "Zagreb": ["Sharjah1", "Sharjah2"],
                "Zadar": ["Dubai1", "Dubai2"],
                "Pula": ["Dubai1", "Dubai2"],
                "Šibenik": ["Dubai1", "Dubai2"],
                "Rijeka": ["Dubai1", "Dubai2"],
                "Trogir": ["Dubai1", "Dubai2"],
            },
            "Cuba": {
                "Havana": ["Dubai1", "Dubai2"],
                "Santiago de Cuba": ["Abu Dabi1", "Abu Dabi2"],
                "Camaguey": ["Sharjah1", "Sharjah2"],
                "Santa Clara": ["Dubai1", "Dubai2"],
                "Holguin": ["Dubai1", "Dubai2"],
                "Baracoa": ["Dubai1", "Dubai2"],
                "Trinidad": ["Dubai1", "Dubai2"],
                "Bayamo": ["Dubai1", "Dubai2"],
            },
            "Cyprus": {
                "Nicosia": ["Dubai1", "Dubai2"],
                "Larnaca": ["Abu Dabi1", "Abu Dabi2"],
                "Paphos": ["Sharjah1", "Sharjah2"],
                "Limassol": ["Dubai1", "Dubai2"],
                "Ajman": ["Dubai1", "Dubai2"],
                "Famagusta": ["Dubai1", "Dubai2"],
                "Paralimni": ["Dubai1", "Dubai2"],
                "Kyrenia": ["Dubai1", "Dubai2"],
            },
            "Czechia (Czech Republic)": {
                "Prague": ["Dubai1", "Dubai2"],
                "Brno": ["Abu Dabi1", "Abu Dabi2"],
                "Olomouc": ["Sharjah1", "Sharjah2"],
                "Ostrava": ["Dubai1", "Dubai2"],
                "Pilsen": ["Dubai1", "Dubai2"],
                "Ceske Budejovice": ["Dubai1", "Dubai2"],
                "Liberec": ["Dubai1", "Dubai2"],
                "Most": ["Dubai1", "Dubai2"],
            },
            "Democratic Republic of the Congo": {
                "Kinshasa": ["Istanbul1", "Istanbul2"],
                "Kisangani": ["Ismir1", "Ismir2"],
                "Goma": ["Ankara1", "Anakara2"],
                "Bukavu": ["Ismir1", "Ismir2"],
                "Kananga": ["Ismir1", "Ismir2"],
                "Mbuji-Mayi": ["Ismir1", "Ismir2"],
                "Matadi": ["Ismir1", "Ismir2"],
            },
             "Denmark": {
                "Copenhagen": ["Istanbul1", "Istanbul2"],
                "Aarhus": ["Ismir1", "Ismir2"],
                "Aalborg": ["Ankara1", "Anakara2"],
                "Odense": ["Ismir1", "Ismir2"],
                "Esbjerg": ["Ismir1", "Ismir2"],
                "Roskilde": ["Ismir1", "Ismir2"],
                "Vejle": ["Ismir1", "Ismir2"],
            },
            "Djibouti": {
                "Djibouti": ["Istanbul1", "Istanbul2"],
                "Tadjoura": ["Ismir1", "Ismir2"],
                "Dikhil": ["Ankara1", "Anakara2"],
                "Ali Sabieh": ["Ismir1", "Ismir2"],
                "Arta": ["Ismir1", "Ismir2"],
                "Holhol": ["Ismir1", "Ismir2"],
                "Dorra": ["Ismir1", "Ismir2"],
            },
            "Dominica": {
                "Berekua": ["Istanbul1", "Istanbul2"],
                "Marigot": ["Ismir1", "Ismir2"],
                "Pont Cassé": ["Ankara1", "Anakara2"],
                "La Plaine": ["Ismir1", "Ismir2"],
                "Calibishie": ["Ismir1", "Ismir2"],
                "Laudat": ["Ismir1", "Ismir2"],
                "Morne Prosper": ["Ismir1", "Ismir2"],
            },
            "Dominican Republic": {
                "Santo Domingo": ["Istanbul1", "Istanbul2"],
                "Puerto Plata": ["Ismir1", "Ismir2"],
                "La Romana": ["Ankara1", "Anakara2"],
                "Santiago De Los Caballeros": ["Ismir1", "Ismir2"],
                "Higuey": ["Ismir1", "Ismir2"],
                "La Vega": ["Ismir1", "Ismir2"],
                "San Pedro De Macoris": ["Ismir1", "Ismir2"],
            },
            "Ecuador": {
                "Quito": ["Dubai1", "Dubai2"],
                "Guayaquil": ["Abu Dabi1", "Abu Dabi2"],
                "Cuenca": ["Sharjah1", "Sharjah2"],
                "Loja": ["Dubai1", "Dubai2"],
                "Ambato": ["Dubai1", "Dubai2"],
                "Manta": ["Dubai1", "Dubai2"],
                "Machala": ["Dubai1", "Dubai2"],
                "Santo Domingo": ["Dubai1", "Dubai2"],
            },
            "Egypt": {
                "Cairo": ["Dubai1", "Dubai2"],
                "Aswan": ["Abu Dabi1", "Abu Dabi2"],
                "Luxor": ["Sharjah1", "Sharjah2"],
                "Alexandria": ["Dubai1", "Dubai2"],
                "Sharm El Sheikh": ["Dubai1", "Dubai2"],
                "Hurghada": ["Dubai1", "Dubai2"],
                "Giza": ["Dubai1", "Dubai2"],
                "Alexandria": ["Dubai1", "Dubai2"],
            },
            "El Salvador": {
                "San Salvador": ["Dubai1", "Dubai2"],
                "Santa Tecla": ["Abu Dabi1", "Abu Dabi2"],
                "Soyapango": ["Sharjah1", "Sharjah2"],
                "San Miguel": ["Dubai1", "Dubai2"],
                "Santa Ana": ["Dubai1", "Dubai2"],
                "Sonsonate": ["Dubai1", "Dubai2"],
                "Ahuachapan": ["Dubai1", "Dubai2"],
                "Apopa": ["Dubai1", "Dubai2"],
            },
            "Equatorial Guinea": {
                "Malabo": ["Dubai1", "Dubai2"],
                "Aconibe": ["Abu Dabi1", "Abu Dabi2"],
                "Mongomo": ["Sharjah1", "Sharjah2"],
                "Evinayong": ["Dubai1", "Dubai2"],
                "Micomeseng": ["Dubai1", "Dubai2"],
                "Aconibe": ["Dubai1", "Dubai2"],
                "Acurenam": ["Dubai1", "Dubai2"],
                "Machinda": ["Dubai1", "Dubai2"],
            },
            "Eritrea": {
                "Asmara": ["Dubai1", "Dubai2"],
                "Mitsiwa": ["Abu Dabi1", "Abu Dabi2"],
                "Keren": ["Sharjah1", "Sharjah2"],
                "Āssab": ["Dubai1", "Dubai2"],
                "Barentu": ["Dubai1", "Dubai2"],
                "Adi Ugri": ["Dubai1", "Dubai2"],
                "Akordat": ["Dubai1", "Dubai2"],
                "Dekemhare": ["Dubai1", "Dubai2"],
            },
            "Estonia": {
                "Tallinn": ["Dubai1", "Dubai2"],
                "Tartu": ["Abu Dabi1", "Abu Dabi2"],
                "Pärnu": ["Sharjah1", "Sharjah2"],
                "Narva": ["Dubai1", "Dubai2"],
                "Viljandi": ["Dubai1", "Dubai2"],
                "Kohtla-Järve": ["Dubai1", "Dubai2"],
                "Valga": ["Dubai1", "Dubai2"],
                "Kuressaare": ["Dubai1", "Dubai2"],
            },
            "Eswatini (fmr. Swaziland)": {
                "Manzini": ["Dubai1", "Dubai2"],
                "Mbabane": ["Abu Dabi1", "Abu Dabi2"],
                "Big Bend": ["Sharjah1", "Sharjah2"],
                "Malkerns": ["Dubai1", "Dubai2"],
                "Nhlangano": ["Dubai1", "Dubai2"],
                "Mhlume": ["Dubai1", "Dubai2"],
                "Hluti": ["Dubai1", "Dubai2"],
                "Simunye": ["Dubai1", "Dubai2"],
            },
            "Ethiopia": {
                "Addis Ababa": ["Dubai1", "Dubai2"],
                "Dire Dawa": ["Abu Dabi1", "Abu Dabi2"],
                "Bahir Dar": ["Sharjah1", "Sharjah2"],
                "Mek'ele": ["Dubai1", "Dubai2"],
                "Gondar": ["Dubai1", "Dubai2"],
                "Awassa": ["Dubai1", "Dubai2"],
                "Harar": ["Dubai1", "Dubai2"],
                "Adama": ["Dubai1", "Dubai2"],
            },
            "Fiji": {
                "Suva": ["Dubai1", "Dubai2"],
                "Lautoka": ["Abu Dabi1", "Abu Dabi2"],
                "Nadi": ["Sharjah1", "Sharjah2"],
                "Labasa": ["Dubai1", "Dubai2"],
                "Levuka": ["Dubai1", "Dubai2"],
                "Nausori": ["Dubai1", "Dubai2"],
                "Sigatoka": ["Dubai1", "Dubai2"],
                "Tavua": ["Dubai1", "Dubai2"],
            },
            "Finland": {
                "Helsinki": ["Dubai1", "Dubai2"],
                "Tampere": ["Abu Dabi1", "Abu Dabi2"],
                "Turku": ["Sharjah1", "Sharjah2"],
                "Oulu": ["Dubai1", "Dubai2"],
                "Espoo": ["Dubai1", "Dubai2"],
                "Vantaa": ["Dubai1", "Dubai2"],
                "Jyväskylä": ["Dubai1", "Dubai2"],
                "Porvoo": ["Dubai1", "Dubai2"],
            },
            "France": {
                "Paris": ["Dubai1", "Dubai2"],
                "Marseille": ["Abu Dabi1", "Abu Dabi2"],
                "Lyon": ["Sharjah1", "Sharjah2"],
                "Strasbourg": ["Dubai1", "Dubai2"],
                "Toulouse": ["Dubai1", "Dubai2"],
                "Nantes": ["Dubai1", "Dubai2"],
                "Lille": ["Dubai1", "Dubai2"],
                "Nice": ["Dubai1", "Dubai2"],
            },
            "Gabon": {
                "Libreville": ["Dubai1", "Dubai2"],
                "Oyem": ["Abu Dabi1", "Abu Dabi2"],
                "Port-Gentil": ["Sharjah1", "Sharjah2"],
                "Lambarene": ["Dubai1", "Dubai2"],
                "Mouila": ["Dubai1", "Dubai2"],
                "Moanda": ["Dubai1", "Dubai2"],
                "Koulamoutou": ["Dubai1", "Dubai2"],
                "Makokou": ["Dubai1", "Dubai2"],
            },
            "Gambia": {
                "Serrekunda": ["Dubai1", "Dubai2"],
                "Banjul": ["Abu Dabi1", "Abu Dabi2"],
                "Brikama": ["Sharjah1", "Sharjah2"],
                "Mansa Konko": ["Dubai1", "Dubai2"],
                "Basse Santa Su": ["Dubai1", "Dubai2"],
                "Farafenni": ["Dubai1", "Dubai2"],
                "Sukuta": ["Dubai1", "Dubai2"],
                "Janjanbureh": ["Dubai1", "Dubai2"],
            },
            "Georgia": {
                "Atlanta": ["Dubai1", "Dubai2"],
                "Savannah": ["Abu Dabi1", "Abu Dabi2"],
                "Augusta": ["Sharjah1", "Sharjah2"],
                "Athens": ["Dubai1", "Dubai2"],
                "Norcross": ["Dubai1", "Dubai2"],
                "Macon": ["Dubai1", "Dubai2"],
                "Tybee Island": ["Dubai1", "Dubai2"],
                "Marietta": ["Dubai1", "Dubai2"],
            },
            "Germany": {
                "Berlin": ["Dubai1", "Dubai2"],
                "Munich": ["Abu Dabi1", "Abu Dabi2"],
                "Frankfurt": ["Sharjah1", "Sharjah2"],
                "Cologne": ["Dubai1", "Dubai2"],
                "Hamburg": ["Dubai1", "Dubai2"],
                "Dresden": ["Dubai1", "Dubai2"],
                "Bremen": ["Dubai1", "Dubai2"],
                "Hanover": ["Dubai1", "Dubai2"],
            },
            "Haiti": {
                "Cap-Haïtien": ["Dubai1", "Dubai2"],
                "Jacmel ": ["Abu Dabi1", "Abu Dabi2"],
                "Limonade": ["Sharjah1", "Sharjah2"],
                "Port-de-Paix": ["Dubai1", "Dubai2"],
                "Carrefour": ["Dubai1", "Dubai2"],
                "Gonaïves": ["Dubai1", "Dubai2"],
                "Les Cayes": ["Dubai1", "Dubai2"],
                "Saint-Marc": ["Dubai1", "Dubai2"],
            },
            "Honduras": {
                "Tegucigalpa": ["Dubai1", "Dubai2"],
                "San Pedro Sula": ["Abu Dabi1", "Abu Dabi2"],
                "La Ceiba": ["Sharjah1", "Sharjah2"],
                "Comayagua": ["Dubai1", "Dubai2"],
                "Choloma": ["Dubai1", "Dubai2"],
                "El Progreso": ["Dubai1", "Dubai2"],
                "Choluteca": ["Dubai1", "Dubai2"],
                "Santa Bárbara": ["Dubai1", "Dubai2"],
            },
            "Hungary": {
                "Budapest ": ["Dubai1", "Dubai2"],
                "Debrecen": ["Abu Dabi1", "Abu Dabi2"],
                "Szeged": ["Sharjah1", "Sharjah2"],
                "Pécs": ["Dubai1", "Dubai2"],
                "Székesfehérvár": ["Dubai1", "Dubai2"],
                "Miskolc": ["Dubai1", "Dubai2"],
                "Eger": ["Dubai1", "Dubai2"],
                "Pest": ["Dubai1", "Dubai2"],
            },
            "Iceland": {
                "Reykjavík": ["Dubai1", "Dubai2"],
                "Akureyri": ["Abu Dabi1", "Abu Dabi2"],
                "Hafnarfjordur": ["Sharjah1", "Sharjah2"],
                "Kópavogur": ["Dubai1", "Dubai2"],
                "Vik": ["Dubai1", "Dubai2"],
                "Selfoss": ["Dubai1", "Dubai2"],
                "Ísafjörður": ["Dubai1", "Dubai2"],
                "Egilsstaðir": ["Dubai1", "Dubai2"],
            },
            "India": {
                "Delhi": ["Dubai1", "Dubai2"],
                "Mumbai": ["Abu Dabi1", "Abu Dabi2"],
                "Chennai": ["Sharjah1", "Sharjah2"],
                "Hyderabad": ["Dubai1", "Dubai2"],
                "Pune": ["Dubai1", "Dubai2"],
                "Cochin": ["Dubai1", "Dubai2"],
                "Trivandram": ["Dubai1", "Dubai2"],
                "Kolkata": ["Dubai1", "Dubai2"],
            },
            "Indonesia": {
                "Jakarta": ["Dubai1", "Dubai2"],
                "Bandung": ["Abu Dabi1", "Abu Dabi2"],
                "Surabaya": ["Sharjah1", "Sharjah2"],
                "Medan": ["Dubai1", "Dubai2"],
                "Makassar": ["Dubai1", "Dubai2"],
                "Semarang": ["Dubai1", "Dubai2"],
                "Denpasar": ["Dubai1", "Dubai2"],
                "Yogyakarta": ["Dubai1", "Dubai2"],
            },
            "Iran": {
                "Tehran": ["Dubai1", "Dubai2"],
                "Isfahan": ["Abu Dabi1", "Abu Dabi2"],
                "Tabriz": ["Sharjah1", "Sharjah2"],
                "Mashhad": ["Dubai1", "Dubai2"],
                "Shiraz": ["Dubai1", "Dubai2"],
                "Ahvaz": ["Dubai1", "Dubai2"],
                "Qom": ["Dubai1", "Dubai2"],
                "Rasht": ["Dubai1", "Dubai2"],
            },
            "Iraq": {
                "Baghdad": ["Dubai1", "Dubai2"],
                "Mosul": ["Abu Dabi1", "Abu Dabi2"],
                "Najaf": ["Sharjah1", "Sharjah2"],
                "Karbala": ["Dubai1", "Dubai2"],
                "Erbil": ["Dubai1", "Dubai2"],
                "Samarra": ["Dubai1", "Dubai2"],
                "Hillah": ["Dubai1", "Dubai2"],
                "Sulaymaniyah": ["Dubai1", "Dubai2"],
            },
            "Ireland": {
                "Dublin": ["Dubai1", "Dubai2"],
                "Galway": ["Abu Dabi1", "Abu Dabi2"],
                "Limerick": ["Sharjah1", "Sharjah2"],
                "Waterford": ["Dubai1", "Dubai2"],
                "Kilkenny": ["Dubai1", "Dubai2"],
                "Belfast": ["Dubai1", "Dubai2"],
                "Drogheda": ["Dubai1", "Dubai2"],
                "Killarney": ["Dubai1", "Dubai2"],
            },
            "Israel": {
                "Jerusalem": ["Dubai1", "Dubai2"],
                "Tel Aviv-Yafo": ["Abu Dabi1", "Abu Dabi2"],
                "Haifa": ["Sharjah1", "Sharjah2"],
                "Be'er Sheva": ["Dubai1", "Dubai2"],
                "Acre": ["Dubai1", "Dubai2"],
                "Netanya": ["Dubai1", "Dubai2"],
                "Lod": ["Dubai1", "Dubai2"],
                "Nazareth": ["Dubai1", "Dubai2"],
            },
            "Italy": {
                "Rome": ["Dubai1", "Dubai2"],
                "Florence": ["Abu Dabi1", "Abu Dabi2"],
                "Venice": ["Sharjah1", "Sharjah2"],
                "Naples": ["Dubai1", "Dubai2"],
                "Bologna": ["Dubai1", "Dubai2"],
                "Turin": ["Dubai1", "Dubai2"],
                "Genoa": ["Dubai1", "Dubai2"],
                "Verona": ["Dubai1", "Dubai2"],
            },
            "Jamaica": {
                "Kingston": ["Dubai1", "Dubai2"],
                "Montego Bay": ["Abu Dabi1", "Abu Dabi2"],
                "Port Antonio": ["Sharjah1", "Sharjah2"],
                "Spanish Town": ["Dubai1", "Dubai2"],
                "Portmore": ["Dubai1", "Dubai2"],
                "Savanna la Mar": ["Dubai1", "Dubai2"],
                "Linstead": ["Dubai1", "Dubai2"],
                "Mandeville": ["Dubai1", "Dubai2"],
            },
            "Japan": {
                "Tokyo": ["Dubai1", "Dubai2"],
                "Kyoto": ["Abu Dabi1", "Abu Dabi2"],
                "Osaka": ["Sharjah1", "Sharjah2"],
                "Yokohama": ["Dubai1", "Dubai2"],
                "Sapporo": ["Dubai1", "Dubai2"],
                "Hiroshima": ["Dubai1", "Dubai2"],
                "Fukuoka": ["Dubai1", "Dubai2"],
                "Nagoya": ["Dubai1", "Dubai2"],
            },
           "Jordan": {
                "Amman": ["Dubai1", "Dubai2"],
                "Madaba": ["Abu Dabi1", "Abu Dabi2"],
                "Aqaba": ["Sharjah1", "Sharjah2"],
                "Zarqa": ["Dubai1", "Dubai2"],
                "Ajman": ["Dubai1", "Dubai2"],
                "Jerash": ["Dubai1", "Dubai2"],
                "Irbid": ["Dubai1", "Dubai2"],
                "Kerak": ["Dubai1", "Dubai2"],
            },
            "Kyrgyzstan": {
                "Bishkek": ["Dubai1", "Dubai2"],
                "Osh": ["Abu Dabi1", "Abu Dabi2"],
                "Karakol": ["Sharjah1", "Sharjah2"],
                "Tokmok": ["Dubai1", "Dubai2"],
                "Kara Balta": ["Dubai1", "Dubai2"],
                "Jalal-Abad": ["Dubai1", "Dubai2"],
                "Balykchy": ["Dubai1", "Dubai2"],
                "Naryn": ["Dubai1", "Dubai2"],
            },
            "Kenya": {
                "Nairobi": ["Dubai1", "Dubai2"],
                "Mombasa": ["Abu Dabi1", "Abu Dabi2"],
                "Kisumu": ["Sharjah1", "Sharjah2"],
                "Nakuru": ["Dubai1", "Dubai2"],
                "Eldoret": ["Dubai1", "Dubai2"],
                "Thika": ["Dubai1", "Dubai2"],
                "Kakamega": ["Dubai1", "Dubai2"],
                "Malindi": ["Dubai1", "Dubai2"],
            },
            "Kiribati": {
                "Bairiki": ["Dubai1", "Dubai2"],
                "Betio Village": ["Abu Dabi1", "Abu Dabi2"],
                "Bikenibeu Village": ["Sharjah1", "Sharjah2"],
                "Bonriki Village": ["Dubai1", "Dubai2"],
                "Eita Village": ["Dubai1", "Dubai2"],
                "Tarawa": ["Dubai1", "Dubai2"],
                "Makin Village": ["Dubai1", "Dubai2"],
                "Tabwakea Village": ["Dubai1", "Dubai2"],
            },

            "Kuwait": {
                "Al Jahra": ["Dubai1", "Dubai2"],
                "Mangaf": ["Abu Dabi1", "Abu Dabi2"],
                "Hawally": ["Sharjah1", "Sharjah2"],
                "Mahboula": ["Dubai1", "Dubai2"],
                "Fahaheel": ["Dubai1", "Dubai2"],
                "Fintas": ["Dubai1", "Dubai2"],
                "Salmiya": ["Dubai1", "Dubai2"],
                "Sabah Al Salem": ["Dubai1", "Dubai2"],
            },
            "Kazakhstan": {
                "Nur-Sultan": ["Dubai1", "Dubai2"],
                "Almaty": ["Abu Dabi1", "Abu Dabi2"],
                "Shymkent": ["Sharjah1", "Sharjah2"],
                "Karagandy": ["Dubai1", "Dubai2"],
                "Taraz": ["Dubai1", "Dubai2"],
                "Semey": ["Dubai1", "Dubai2"],
                "Pavlodar": ["Dubai1", "Dubai2"],
                "Turkistan": ["Dubai1", "Dubai2"],
            },
            "Laos":{
            "Luang Prabang": ["Riyadh1", "Riyadh2"],
                "Vientiane": ["Medina1", "Medina2"],
                "Savannakhet": ["Mecca1", "Mecca2"],
            },
            "Latvia ":{
                "Riga": ["Riyadh1", "Riyadh2"],
                "Liepāja": ["Medina1", "Medina2"],
                "Daugavpils": ["Mecca1", "Mecca2"],
            },
            "Lebanon": {
                "Beirut": ["Riyadh1", "Riyadh2"],
                "Tripoli": ["Medina1", "Medina2"],
                "Sidon": ["Mecca1", "Mecca2"],
            },
            "Lesotho": {
                "Maseru": ["Riyadh1", "Riyadh2"],
                "Teyateyaneng": ["Medina1", "Medina2"],
                "Mafeteng": ["Mecca1", "Mecca2"],
            },
            "Liberia": {
                "Monrovia": ["Riyadh1", "Riyadh2"],
                "Gbarnga": ["Medina1", "Medina2"],
                "Buchanan": ["Mecca1", "Mecca2"],
            },
            "Libya": {
                "Tripoli": ["Riyadh1", "Riyadh2"],
                "Misrata": ["Medina1", "Medina2"],
                "Sirte": ["Mecca1", "Mecca2"],
            },
            "Liechtenstein": {
                "Vaduz": ["Riyadh1", "Riyadh2"],
                "Triesenberg": ["Medina1", "Medina2"],
                "Triesen": ["Mecca1", "Mecca2"],
            },
            "Lithuania": {
                "Vilnius": ["Riyadh1", "Riyadh2"],
                "Kaunas": ["Medina1", "Medina2"],
                "Klaipėda": ["Mecca1", "Mecca2"],
            },
            "Luxembourg": {
                "Luxembourg": ["Riyadh1", "Riyadh2"],
                "Dudelange": ["Medina1", "Medina2"],
                "Differdange": ["Mecca1", "Mecca2"],
            },
            "Macao": {
                "Aomen": ["Riyadh1", "Riyadh2"],
                "Aumwnz": ["Medina1", "Medina2"],
                "Bán đảo Ma Cao": ["Mecca1", "Mecca2"],
            },
            "Madagascar": {
                "Antananarivo": ["Riyadh1", "Riyadh2"],
                "Antsirabe": ["Medina1", "Medina2"],
                "Fianarantsoa": ["Mecca1", "Mecca2"],
            },
            "Malawi": {
                "Lilongwe": ["Riyadh1", "Riyadh2"],
                "Blantyre": ["Medina1", "Medina2"],
                "Zomba": ["Mecca1", "Mecca2"],
            },
            "Malaysia": {
                "Kuala Lumpur": ["Riyadh1", "Riyadh2"],
                "Malacca": ["Medina1", "Medina2"],
                "Johor Bahru": ["Mecca1", "Mecca2"],
            },
            "Maldives": {
                "Male": ["Riyadh1", "Riyadh2"],
                "Fuvahmulah": ["Medina1", "Medina2"],
                "Hulhumale": ["Mecca1", "Mecca2"],
            },
            "Mali": {
                "Bamako": ["Riyadh1", "Riyadh2"],
                "Mopti": ["Medina1", "Medina2"],
                "Timbuktu": ["Mecca1", "Mecca2"],
            },
            "Malta": {
                "Birgu": ["Riyadh1", "Riyadh2"],
                "Mdina": ["Medina1", "Medina2"],
                "Cospicua": ["Mecca1", "Mecca2"],
            },
            "Marshall Islands": {
                "Ajeltake": ["Riyadh1", "Riyadh2"],
                "Delap-Uliga-Djarrit": ["Medina1", "Medina2"],
                "Ebeye": ["Mecca1", "Mecca2"],
            },
            "Martinique (French)": {
                "Fort-de-France": ["Riyadh1", "Riyadh2"],
                "Les Trois-Îlets": ["Medina1", "Medina2"],
                "Sainte-Marie": ["Mecca1", "Mecca2"],
            },
            "Mauritania": {
                "Nouakchott": ["Riyadh1", "Riyadh2"],
                "Nouadhibou": ["Medina1", "Medina2"],
                "Kiffa": ["Mecca1", "Mecca2"],
            },
            "Mauritius": {
                "Port Louis": ["Riyadh1", "Riyadh2"],
                "Four Terminals": ["Medina1", "Medina2"],
                "Curepipe": ["Mecca1", "Mecca2"],
            },
            "Mexico": {
                "Mexico City": ["Riyadh1", "Riyadh2"],
                "Guadalajara": ["Medina1", "Medina2"],
                "Mérida": ["Mecca1", "Mecca2"],
            },
            "Micronesia": {
                "Palikir": ["Riyadh1", "Riyadh2"],
                "Tofol": ["Medina1", "Medina2"],
                "Colonia": ["Mecca1", "Mecca2"],
            },
            "Moldova": {
                "Chișinău": ["Riyadh1", "Riyadh2"],
                "Tiraspol": ["Medina1", "Medina2"],
                "Soroca": ["Mecca1", "Mecca2"],
            },
            "Monaco": {
                "Monaco City": ["Riyadh1", "Riyadh2"],
                "La Condamine": ["Medina1", "Medina2"],
                "Roquebrune-Cap-Martin": ["Mecca1", "Mecca2"],
            },
            "Mongolia": {
                "Ulaanbaatar": ["Riyadh1", "Riyadh2"],
                "Murun": ["Medina1", "Medina2"],
                "Ulaangom": ["Mecca1", "Mecca2"],
            },
            "Montenegro": {
                "Podgorica": ["Riyadh1", "Riyadh2"],
                "Nikšić": ["Medina1", "Medina2"],
                "Herceg Novi": ["Mecca1", "Mecca2"],
            },
            "Montserrat": {
                "Amersham": ["Riyadh1", "Riyadh2"],
                "Baker Hill": ["Medina1", "Medina2"],
                "Bank Level": ["Mecca1", "Mecca2"],
            },
            "Morocco": {
                "Marrakesh": ["Riyadh1", "Riyadh2"],
                "Casablanca": ["Medina1", "Medina2"],
                "Tangier": ["Mecca1", "Mecca2"],
            },
            "Mozambique": {
                "Maputo": ["Riyadh1", "Riyadh2"],
                "Matola": ["Medina1", "Medina2"],
                "Lichinga": ["Mecca1", "Mecca2"],
            },
            "Myanmar": {
                "Yangon": ["Riyadh1", "Riyadh2"],
                "Mandalay": ["Medina1", "Medina2"],
                "Mawlamyine": ["Mecca1", "Mecca2"],
            },
             "Namibia": {
                "Windhoek": ["Istanbul1", "Istanbul2"],
                "Swakopmund": ["Ismir1", "Ismir2"],
                "Walvis Bay": ["Ankara1", "Anakara2"],
                
            },
            "Nauru": {
                "Yangor": ["Istanbul1", "Istanbul2"],
                "Mueoen": ["Ismir1", "Ismir2"],
                "Ronave": ["Ankara1", "Anakara2"],
                
            },
            "Nepal": {
                "Kathmandu": ["Istanbul1", "Istanbul2"],
                "Pokhara": ["Ismir1", "Ismir2"],
                "Lalitpur": ["Ankara1", "Anakara2"],
        
            },
            "Netherlands": {
                "Rotterdam": ["Istanbul1", "Istanbul2"],
                "The Hague": ["Ismir1", "Ismir2"],
                "Amsterdam": ["Ankara1", "Anakara2"],
               
            },
            "New Zealand": {
                "Auckland": ["Istanbul1", "Istanbul2"],
                "Wellington": ["Ismir1", "Ismir2"],
                "Christchurch": ["Ankara1", "Anakara2"],
                
            },
            "Nicaragua": {
                "Managua": ["Istanbul1", "Istanbul2"],
                "Masaya": ["Ismir1", "Ismir2"],
                "Matagalpa": ["Ankara1", "Anakara2"],
               
            },
            "Niger": {
                "Niamey": ["Istanbul1", "Istanbul2"],
                "Zinder": ["Ismir1", "Ismir2"],
                "Agadez": ["Ankara1", "Anakara2"],
                
            },
            "Nigeria": {
                "Lagos": ["Istanbul1", "Istanbul2"],
                "Abuja": ["Ismir1", "Ismir2"],
                "Port Harcourt": ["Ankara1", "Anakara2"],
               
            },
            "North Macedonia": {
                "Skopje": ["Istanbul1", "Istanbul2"],
                "Bitola": ["Ismir1", "Ismir2"],
                "Ohrid": ["Ankara1", "Anakara2"],
               
            },
            "Norway": {
                "Oslo": ["Istanbul1", "Istanbul2"],
                "Trondheim": ["Ismir1", "Ismir2"],
                "Stavanger": ["Ankara1", "Anakara2"],
              
            },
            "Oman": {
                "Muscat": ["Istanbul1", "Istanbul2"],
                "Salalah": ["Ismir1", "Ismir2"],
                "Sohar": ["Ankara1", "Anakara2"],
               
            },
            "Pakistan": {
                "Lahore": ["Istanbul1", "Istanbul2"],
                "Kabul": ["Ismir1", "Ismir2"],
                "Kandahar": ["Ankara1", "Anakara2"],
              
            },
            "Palau": {
                "Koror": ["Istanbul1", "Istanbul2"],
                "Ngerulmud": ["Ismir1", "Ismir2"],
                "Koror": ["Ankara1", "Anakara2"],
           
            },
            "Panama": {
                "Panama City": ["Istanbul1", "Istanbul2"],
                "Tocumen": ["Ismir1", "Ismir2"],
                "Santiago": ["Ankara1", "Anakara2"],
              
            },
            "Papua New Guinea": {
                "Port Moresby": ["Istanbul1", "Istanbul2"],
                "Kokopo": ["Ismir1", "Ismir2"],
                "Popondetta": ["Ankara1", "Anakara2"],
               
            },
            "Paraguay": {
                "Asunción": ["Istanbul1", "Istanbul2"],
                "Ciudad del Este": ["Ismir1", "Ismir2"],
                "Lambaré": ["Ankara1", "Anakara2"],
              
            },
            "Peru": {
                "Arequipa": ["Istanbul1", "Istanbul2"],
                "Chimbote": ["Ismir1", "Ismir2"],
                "Cajamarca": ["Ankara1", "Anakara2"],
               },
            "Philippines": {
                "Manila": ["Istanbul1", "Istanbul2"],
                "Quezon City": ["Ismir1", "Ismir2"],
                "Davao City": ["Ankara1", "Anakara2"],
                
            },
            "Poland": {
                "Warsaw": ["Istanbul1", "Istanbul2"],
                "Kraków": ["Ismir1", "Ismir2"],
                "Poznań": ["Ankara1", "Anakara2"],
             
            },
            "Portugal": {
                "Lisbon": ["Istanbul1", "Istanbul2"],
                "Guimaraes": ["Ismir1", "Ismir2"],
                "Evora": ["Ankara1", "Anakara2"],},

                "Qatar": {
                "Doha": ["Istanbul1", "Istanbul2"],
                "Al Wakrah": ["Ismir1", "Ismir2"],
                "Al Khor": ["Ankara1", "Anakara2"],},

                "Romania": {
                "Bucharest": ["Istanbul1", "Istanbul2"],
                "Cluj-Napoca": ["Ismir1", "Ismir2"],
                "Timișoara": ["Ankara1", "Anakara2"],},

                "Russia": {
                "Moscow": ["Istanbul1", "Istanbul2"],
                "Saint Petersburg": ["Ismir1", "Ismir2"],
                "Yekaterinburg": ["Ankara1", "Anakara2"],},

                "Rwanda": {
                "Kigali": ["Istanbul1", "Istanbul2"],
                "Gisenyi": ["Ismir1", "Ismir2"],
                "Kamembe": ["Ankara1", "Anakara2"],},

                "Saint Kitts & Nevis Anguilla": {
                "Saint Thomas Lowland": ["Istanbul1", "Istanbul2"],
                "Saint John Figtree": ["Ismir1", "Ismir2"],
                "Saint Paul Charlestown": ["Ankara1", "Anakara2"],},

                "Saint Lucia": {
                "Castries": ["Istanbul1", "Istanbul2"],
                "Vieux Fort": ["Ismir1", "Ismir2"],
                "Soufriere": ["Ankara1", "Anakara2"],},

                "Saint Vincent & Grenadines": {
                "Kingstown": ["Istanbul1", "Istanbul2"],
                "Port Elizabeth": ["Ismir1", "Ismir2"],
                "Georgetown": ["Ankara1", "Anakara2"],},

                "Samoa": {
                "Apia": ["Istanbul1", "Istanbul2"],
                "Leulumoega": ["Ismir1", "Ismir2"],
                "Vailoa": ["Ankara1", "Anakara2"],},

                "San Marino": {
                "San Marino": ["Istanbul1", "Istanbul2"],
                "Serravalle": ["Ismir1", "Ismir2"],
                "Chiesanuova": ["Ankara1", "Anakara2"],},

                "Sao Tome and Principe": {
                "São Tomé": ["Istanbul1", "Istanbul2"],
                "Santo Antonio": ["Ismir1", "Ismir2"],
                "Santana": ["Ankara1", "Anakara2"],},

                "Saudi Arabia": {
                "Riyadh": ["Istanbul1", "Istanbul2"],
                "Jeddah": ["Ismir1", "Ismir2"],
                "Medina": ["Ankara1", "Anakara2"],},

                "Senegal": {
                "Dakar": ["Istanbul1", "Istanbul2"],
                "Saint Louis": ["Ismir1", "Ismir2"],
                "Ziguinchor": ["Ankara1", "Anakara2"],},

                "Serbia": {
                "Belgrade": ["Istanbul1", "Istanbul2"],
                "Subotica": ["Ismir1", "Ismir2"],
                "Kragujevac": ["Ankara1", "Anakara2"],},

                "Seychelles": {
                "Anse Boileau": ["Istanbul1", "Istanbul2"],
                "Takamaka": ["Ismir1", "Ismir2"],
                "Grand Anse Mahe": ["Ankara1", "Anakara2"],},

                "Sierra Leone": {
                "Freetown": ["Istanbul1", "Istanbul2"],
                "Kabala": ["Ismir1", "Ismir2"],
                "Kenema": ["Ankara1", "Anakara2"],},

                "Singapore": {
                "Jurong": ["Istanbul1", "Istanbul2"],
                "Punggol": ["Ismir1", "Ismir2"],
                "Tampines": ["Ankara1", "Anakara2"],},

                "Slovakia": {
                "Bratislava": ["Istanbul1", "Istanbul2"],
                "Košice": ["Ismir1", "Ismir2"],
                "Prešov": ["Ankara1", "Anakara2"],},

                "Slovenia": {
                "Ljubljana": ["Istanbul1", "Istanbul2"],
                "Maribor": ["Ismir1", "Ismir2"],
                "Novo mesto": ["Ankara1", "Anakara2"],},

                "Solomon Islands": {
                "Honiara": ["Istanbul1", "Istanbul2"],
                "Gizo": ["Ismir1", "Ismir2"],
                "Buala": ["Ankara1", "Anakara2"],},

                "Somalia": {
                "Mogadishu": ["Istanbul1", "Istanbul2"],
                "Garowe": ["Ismir1", "Ismir2"],
                "Kismayo": ["Ankara1", "Anakara2"],},

                "South Africa": {
                "Cape Town": ["Istanbul1", "Istanbul2"],
                "Johannesburg": ["Ismir1", "Ismir2"],
                "Pretoria": ["Ankara1", "Anakara2"],},

                "South Sudan": {
                "Yambio": ["Istanbul1", "Istanbul2"],
                "Malakal": ["Ismir1", "Ismir2"],
                "Kapoeta": ["Ankara1", "Anakara2"],},

                "Spain": {
                "Madrid": ["Istanbul1", "Istanbul2"],
                "Barcelona": ["Ismir1", "Ismir2"],
                "Valencia": ["Ankara1", "Anakara2"],},

                "Sri Lanka": {
                "Colombo": ["Istanbul1", "Istanbul2"],
                "Kandy": ["Ismir1", "Ismir2"],
                "Galle": ["Ankara1", "Anakara2"],},

               "Sudan": {
                "Khartoum": ["Istanbul1", "Istanbul2"],
                "Omdurman": ["Ismir1", "Ismir2"],
                "Wad Madani": ["Ankara1", "Anakara2"],},

                "Suriname": {
                "Paramaribo": ["Istanbul1", "Istanbul2"],
                "Nieuw Nickerie": ["Ismir1", "Ismir2"],
                "Nieuw Amsterdam": ["Ankara1", "Anakara2"],},

                "Sweden": {
                "Stockholm": ["Istanbul1", "Istanbul2"],
                "Gothenburg": ["Ismir1", "Ismir2"],
                "Helsingborg": ["Ankara1", "Anakara2"],},

                "Switzerland": {
                "Zürich": ["Istanbul1", "Istanbul2"],
                "Geneva": ["Ismir1", "Ismir2"],
                "Lausanne": ["Ankara1", "Anakara2"],},

                "Syria": {
                "Aleppo": ["Ankara1", "Anakara2"],
                "Damascus": ["Istanbul1", "Istanbul2"],
                "Homs‎": ["Ismir1", "Ismir2"],
                },

                "Taiwan": {
                "Taipei City": ["Ankara1", "Anakara2"],
                "Kaohsiung City": ["Istanbul1", "Istanbul2"],
                "Taichung City": ["Ismir1", "Ismir2"],
                },

                "Tajikistan": {
                "Dushanbe": ["Ankara1", "Anakara2"],
                "Khujand": ["Istanbul1", "Istanbul2"],
                "Qurgonteppa": ["Ismir1", "Ismir2"],
                },

                "Tanzania": {
                "Dar es Salaam": ["Ankara1", "Anakara2"],
                "Mwanza": ["Istanbul1", "Istanbul2"],
                "Moshi Urban": ["Ismir1", "Ismir2"],
                },

                "Thailand": {
                "Bangkok": ["Ankara1", "Anakara2"],
                "Mueang Chiang Rai": ["Istanbul1", "Istanbul2"],
                "Phuket": ["Ismir1", "Ismir2"],
                },

                "Togo": {
                "Lomé": ["Ankara1", "Anakara2"],
                "Sokode": ["Istanbul1", "Istanbul2"],
                "Kpalime": ["Ismir1", "Ismir2"],
                },

                "Tonga": {
                "Nuku'alofa": ["Ankara1", "Anakara2"],
                "Mua": ["Istanbul1", "Istanbul2"],
                "Pangai": ["Ismir1", "Ismir2"],
                },

                "Trinidad and Tobago": {
                "Port of Spain": ["Ankara1", "Anakara2"],
                "Arima": ["Istanbul1", "Istanbul2"],
                "Point Fortin": ["Ismir1", "Ismir2"],
                },

                "Tunisia": {
                "Tunis": ["Ankara1", "Anakara2"],
                "Sousse": ["Istanbul1", "Istanbul2"],
                "Kairouan": ["Ismir1", "Ismir2"],
                },

            "Turkey": {
                "Istanbul": ["Istanbul1", "Istanbul2"],
                "Ismir": ["Ismir1", "Ismir2"],
                "Ankara": ["Ankara1", "Anakara2"],
                "Antalya": ["Ismir1", "Ismir2"],
                "Burza": ["Ismir1", "Ismir2"],
                "Sanliurfa": ["Ismir1", "Ismir2"],
                "Konya": ["Ismir1", "Ismir2"],
            },
            "Turkmenistan": {
                "Ashgabat": ["Riyadh1", "Riyadh2"],
                "Turkmenabat": ["Medina1", "Medina2"],
                "Dashoguz": ["Mecca1", "Mecca2"],
            },
            "Turks and Caicos Islands": {
                "Blue Mountain": ["Cairo1", "Ciaro2"],
                "Breezy Brae": ["Luxor1", "Luxor2"],
                "Cheshire Hall": ["Giza1", "Giza2"],
            },
            "Tuvalu": {
                "Tonga": ["Cairo1", "Ciaro2"],
                "Alapi": ["Luxor1", "Luxor2"],
                "Lolua": ["Giza1", "Giza2"],
            },
            "India": {
                "Pune": ["Istanbul1", "Istanbul2"],
                "Delhi": ["Ismir1", "Ismir2"],
                "Bangalore": ["Ankara1", "Anakara2"],
                "Chennai": ["Ismir1", "Ismir2"],
                "Hyderabad": ["Ismir1", "Ismir2"],
                "Mumbai": ["Ismir1", "Ismir2"],
                "Delhi": ["Ismir1", "Ismir2"],
            },
            "USA": {
                "California" : ["Istanbul1", "Istanbul2"],
                "California": ["Istanbul1", "Istanbul2"],
                "New York": ["Ankara1", "Anakara2"],
                "Los Angeles": ["Ismir1", "Ismir2"],
                "Washington D.C": ["Ismir1", "Ismir2"],
                "San Francisco": ["Ismir1", "Ismir2"],
                "Chicago": ["Ismir1", "Ismir2"],
            },
            "Uganda": {
                "Kampala": ["Cairo1", "Ciaro2"],
                "Fort Portal": ["Luxor1", "Luxor2"],
                "Gulu": ["Giza1", "Giza2"],
            },
            "Ukraine": {
                "Kyiv": ["Cairo1", "Ciaro2"],
                "Lviv": ["Luxor1", "Luxor2"],
                "Kharkiv": ["Giza1", "Giza2"],
            },
            "United Arab Emirates": {
                "Dubai": ["Cairo1", "Ciaro2"],
                "Abu Dhabi": ["Luxor1", "Luxor2"],
                "Sharjah": ["Giza1", "Giza2"],
            },
            "UK": {
                "London": ["Istanbul1", "Istanbul2"],
                "London": ["Ismir1", "Ismir2"],
                "Bristol": ["Ankara1", "Anakara2"],
                "Birmingham": ["Ismir1", "Ismir2"],
                "Manchester": ["Ismir1", "Ismir2"],
                "Cardiff": ["Ismir1", "Ismir2"],
                "Nottingham": ["Ismir1", "Ismir2"],
            },
             "Uruguay": {
                "Montevideo": ["Cairo1", "Ciaro2"],
                "Colonia del Sacramento": ["Luxor1", "Luxor2"],
                "Punta del Este": ["Giza1", "Giza2"],
            },
             "Uzbekistan": {
                "Tashkent": ["Cairo1", "Ciaro2"],
                "Samarkand": ["Luxor1", "Luxor2"],
                "Andijan": ["Giza1", "Giza2"],
            },
            "Vanuatu": {
                "Port Vila": ["Istanbul1", "Istanbul2"],
                "Luganville": ["Ismir1", "Ismir2"],
                "Lakatoro": ["Ankara1", "Anakara2"],
            },
            "Venezuela": {
                "Caracas": ["Istanbul1", "Istanbul2"],
                "Maracaibo": ["Ismir1", "Ismir2"],
                "Barquisimeto": ["Ankara1", "Anakara2"],
            },
           "Vietnam": {
                "Ho Chi Minh City": ["Istanbul1", "Istanbul2"],
                "Hanoi": ["Ismir1", "Ismir2"],
                "Nha Trang": ["Ankara1", "Anakara2"],
            },
            "Yemen": {
                "Sana'a": ["Istanbul1", "Istanbul2"],
                "Taizz": ["Ismir1", "Ismir2"],
                "Al Hudaydah": ["Ankara1", "Anakara2"],
            },
            "Zambia ": {
                "Lusaka": ["Istanbul1", "Istanbul2"],
                "Livingstone": ["Ismir1", "Ismir2"],
                "Ndola": ["Ankara1", "Anakara2"],
            },
            "Zimbabwe ": {
                "Harare": ["Istanbul1", "Istanbul2"],
                "Bulawayo": ["Ismir1", "Ismir2"],
                "Mutare": ["Ankara1", "Anakara2"],
            },
        }
        var currencyMapping =
            {
                "UAE": "AED",
                "Turkey": "SAR",
                "Saudi Arabia": "TL",
                "Egypt": "BGP",
                "India": "INR",
                "USA": "USD",
                "UK": "Pounds",
                "Germany": "EURO",
                "Pakistan": "PKR,",
                "Afganistan": "AFN",
                "Albania": "ANN",
                "Australia": "AUD",
                "Argentina": "ARP",
                "Algeria": "DZD",
                "Andoraa": "EURO",
                "Angola": "AOA",
                "Antigua and Barbuda" : "XCD",
                "Armenia":"AMD",
                "Austria" :"EURO",
                "Azerbaijan" :"AZN",
                "Bahamas" :"BSD",
                "Bahrain":"BHD",
                "Bangladesh":"BDT",
                "Barbados": "BBD",
                "Belarus": "BYR",
                "Belgium" :"EURO",
                "Belize" : "BZD", 
                "Benin"  :"XOF",
                "Bhutan": "BTN",
                "Bolivia" :"BOB",
                "Bosnia and Herzegovina": "BAM",
               "Botswana" :"BWP",
               "Brazil" : "BRL",
                "Brunei" : "BND",
                "Bulgaria" :"BGN",
                "Burkina Faso" : "CFA",
                "Cote d'Ivoire": "XOF",
                "Cabo Verde" :"CVE",
                "Cambodia" : "KHR",
                "Cameroon" : "XAF",
                "Canada" :"CAD",
                "Central African Republic": "XAF",
                  "Chad": "XAF",
                  "Chile": "CLP", 
                "China": "CNY",
               "Colombia": "COP",
                "Comoros": "KMF",
                "Congo (Congo-Brazzaville)": "XAF",
                "Costa Rica" : "CRC",
                 "Croatia": "HRK",
                "Cuba": "CUP", 
                "Cyprus" :"EUR",
               "Czechia (Czech Republic)": "CZK",
               "Democratic Republic of the Congo": "CDF",
              "Denmark": "Kr",
           "Djibouti" :"DJF",
           "Dominica" :"XCD",
           "Dominican Republic": "FX",
           "Ecuador"  :"ECS",
          "Egypt" :    "EGP",
         "El Salvador":"SVC",
       "Equatorial Guinea" :"XAF",
        "Eritrea": "ERN",
         "Estonia":"EUR",
        "Eswatini (fmr Swaziland)":"SZL",
         "Ethiopia" :"ETB",
        "Fiji" :"FJD",
       "Finland": "EUR",
        "France": "EUR",
      "Gabon": "XAF",
      "Gambia": "GMD",
      "Georgia": "GEL",
      "Haiti":"HTG",
      "Honduras":"HNL",
      "Hungary":"HUF",
      "Iceland": "ISK",
"India" :"INR",
"Indonesia" :"IDR",
"Iran":" IDR",
"Iraq" :"IQD",
"Ireland" :"EURO",
"Israel": "ILS",
"Italy" :"EUR",
"Jamaica" :"JMD",
"Japan" :"JPY",
"Jordan" :"JOD",
"Kyrgyzstan" : "KGS",
"Kenya"  : "KES",
"Kiribati" : "AUD",
"Kuwait" : "KWD",
"Kazakhstan" : "KZT",
"Laos"    :"LAK",
"Latvia " :"LVL",
"Lebanon" :"LBP",
"Lesotho" :"LSL",
"Liberia" :"LRD",
"Libya":   "LYD",
"Liechtenstein":   "CHF",
"Lithuania":   "LTL",
"Luxembourg":  "EUR",
"Macao" :  "MOP",
"Madagascar" : "MGF",
"Malawi" : "MWK",
"Malaysia" :   "MYR",
"Maldives" :   "MVR",
"Mali" :   "XOF",
"Malta"  : "EUR",
"Marshall Islands":    "USD",
"Martinique (French)": "EUR",
"Mauritania":  "MRO",
"Mauritius": "MUR",
"Mayotte": "EUR",
"Mexico" : "MXN",
"Micronesia" : "USD",
"Moldova": "MDL",
"Monaco" : "EUR",
"Mongolia"  :  "MNT",
"Montenegro" : "EUR",
"Montserrat" : "XCD",
"Morocco":"MAD",
"Mozambique" : "MZN",
"Myanmar": "MMK",
"Namibia" :"NAD",
"Nauru ":  "AUD",
"Nepal ":  "NPR",
"Netherlands": "EUR",
"New Zealand": "NZD",
"Nicaragua ":  "NIO",
"Niger" :  "XOF",
"Nigeria": "NGN",
"North Macedonia": "MKD",
"Norway"  :"NOK",
"Oman "   :"OMR",
"Pakistan" :   "PKR",
"Palau" :  "USD",
"Panama" : "PAB",
"Papua New Guinea" :   "PGK",
"Paraguay"  :  "PYG",
"Peru" :   "PEN",
"Philippines" :"PHP",
"Poland" : "PLN",
"Portugal" :  "EUR",
"Qatar"  : "QAR",
"Romania": "RON",
"Russia" : "RUB",
"Rwanda":  "RWF",
"Saint Kitts & Nevis Anguilla":  "  XCD",
"Saint Lucia" :"XCD",
"Saint Vincent & Grenadines":"XCD",
"Samoa": "WST",
"San Marino" : "EUR",
"Sao Tome and Principe":"STD",
"Saudi Arabia":"SAR",
"Senegal":"XOF",
"Serbia":"RSD",
"Seychelles" : "SCR",
"Sierra Leone":"SLL",
"Singapore": "SGD",
"Slovakia":"EUR",
"Slovenia":"EUR",
"Solomon Islands":"SBD",
"Somalia" :"SOS",
"South Africa": "ZAR",
"South Sudan" :"SSP",
"Spain" :"EUR",
"Sri Lanka" :  "LKR",
"Sudan":"SDG",
"Suriname":"SRD",
"Sweden" : "SEK",
"Switzerland": "CHF",
"Syria" :  "SYP",
"Taiwan":"TWD",
"Tajikistan":"TJS",
"Tanzania":"TZS",
"Thailand":"THB",
"Togo":"XOF",
"Tonga":"TOP",
"Trinidad and Tobago":"TTD",
"Tunisia":"TND",
"Turkey":"TRY",
"Turkmenistan":"TMT",
"Turks and Caicos Islands":"USD",
"Tuvalu":"AUD",
"USA":"USD",
"Uganda":"UGX",
"Ukraine":"UAH",
"United Arab Emirates":"AED",
"United Kingdom (Great Britain and N. Ireland)":"GBP",
"Uruguay" :"UYU",
"Uzbekistan": "UZS",
"Vanuatu":"VUV",
"Venezuela":"VEF",
"Vietnam":"VND",
"Yemen" : "YER",
"Zambia": "ZMW",
"Zimbabwe": "ZWD",
                
                
            }
        var headerMapping =
            {
                "UAE": "UAE Property Information",
                "Turkey": "Turkey Property Information",
                "Saudi Arabia": "Saudi Arabia Property Information",
                "Egypt": "Egypt Property Information",
                "India": "India Property Information",
                "USA": "USA Property Information",
                "UK": "UK Property Information",
                "Germany": "Germany Property Information",
                "Pakistan": "Pakistan Property Information",
                "Afganistan": "Afganistan Property Information",
                "Albania": "Albania Property Information",
                "Australia": "Australia Property Information",
                "Argentina": "Argentina Property Information",
                "Algeria": "Algeria Property Information",
                "Andoraa": "Andoraa Property Information",
                "Angola": "Angola Property Information",
                "Antigua and Barbuda" :"Antigua and Barbuda Property Information",
                "Armenia" : "Armenia Property  Information",
                "Austria":"Austria Property Information",
                "Azerbaijan" : "Azerbaijan Property Information",
                "Bahamas" : "Bahamas Property Information",
                "Bahrain" :"Bahrain Property Information",
                "Bangladesh" : "Bangladesh Property Information",
                "Barbados" : "Barbados Property Information",
                "Belarus" : "Belarus Property Information",
                "Belgium" : "Belgium Property Information",
                "Belize" : "Belize Property Information",
                "Benin" : "Benin Property Information",
                "Bhutan" : "Bhutan Property Information",
                "Bolivia": "Bolivia Property Information",
                "Bosnia and Herzegovina": "Bosnia and Herzegovina Property Information",
                "Botswana" : "Botswana Property Information",
                "Brazil" : "Brazil Property Information",
                "Brunei" :"Brunei Property Information",
                "Bulgaria":"Bulgaria Property Information",
                "Burkina Faso" : "Burkina Faso Property Information",
                "Burundi": "Burundi Property Information",
                "Côte d'Ivoire":"Côte d'Ivoire Property Information",
                "Cabo Verde":"Cabo Verde Property Information",
                 "Cambodia":"Cambodia Property Information",
                 "Cameroon":"Cameroon Property Information",
                 "Canada":"Canada Property Information",
                 "Central African Republic":"Central African Republic Property Information",
                 "Chad":"Chad Property Information",
                 "Chile":"Chile Property Information",
                 "China":"China Property Information",
                 "Colombia":"Colombia Property Information",
                 "Comoros":"Comoros Property Information",
                 "Congo (Congo-Brazzaville)":"Congo (Congo-Brazzaville) Property Information",
                "Costa Rica":"Costa Rica Property Information",
                "Croatia":"Croatia Property Information",
                "Cuba":"Cuba Property Information",
                "Cyprus":"Cyprus Property Information",
                "Czechia (Czech Republic)":"Czechia (Czech Republic) Property Information",
                "Costa Rica":"Costa Rica Property Information",
                 "Croatia":"Croatia Property Information",
                 "Cuba":"Cuba Property Information",
                 "Cyprus":"Cyprus Property Information",
                 "Czechia (Czech Republic)":"Czechia (Czech Republic) Property Information",
                 "Democratic Republic of the Congo":"Democratic Republic of the Congo Property Information",
                 "Denmark":"Denmark Property Information",
                 "Djibouti":"Djibouti Property Information",
                 "Dominica":"Dominica Property Information",
                 "Dominican Republic":"Dominican Republic Property Information",
                 "Ecuador":"Ecuador Property Information",    
                 "Egypt":"Egypt Property Information",           
"El Salvador":"El Salvador Property Information",    
"Equatorial Guinea":"Equatorial Guinea Property Information", 
"Eritrea":"Eritrea Property Information", 
"Estonia":"Estonia Property Information", 
"Eswatini (fmr Swaziland)":"Eswatini (fmr Swaziland) Property Information", 
"Ethiopia" :"Ethiopia Property Information", 
"Fiji":"Fiji Property Information", 
"Finland":"Finland Property Information", 
"France":"France Property Information", 
"Gabon":"Gabon Property Information",  
"Gambia":"Gambia Property Information", 
"Georgia":"Georgia Property Information", 
"Haiti":"Haiti Property Information",
"Honduras":"Honduras Property Information",
"Hungary":"Hungary Property Information",
"Iceland":"Iceland Property Information",
"India":"India Property Information",
"Indonesia":"Indonesia Property Information",
"Iran":"Iran Property Information",
"Iraq":"Iraq Property Information",
"Ireland":"Ireland Property Information",
"Israel ":"Israel Property Information",
"Italy":"Italy Property Information",
"Jamaica":"Jamaica Property Information",
"Japan":"Japan Property Information",
"Jordan":"Jordan Property Information",
"Kazakhstan" : "Kazakhstan Property Information",
"Kyrgyzstan":"Kyrgyzstan Property Information",  
"Kenya" :"Kenya Property Information", 
"Kiribati" :"Kiribati Property Information",
"Kuwait":"Kuwait Property Information",
"Kazakhstan":"Kazakhstan Property Information",
"Laos" :"Laos Property Information", 
"Latvia":"Latvia Property Information",  
"Lebanon":"Lebanon Property Information",
"Lesotho":"Lesotho Property Information",
"Liberia":"Liberia Property Information",
"Libya":"Libya Property Information",
"Liechtenstein":"Liechtenstein Property Information",
"Lithuania":"Lithuania Property Information",
"Luxembourg":"Luxembourg Property Information",
"Macao":"Macao Property Information",
"Madagascar":"Madagascar Property Information",
"Malawi":"Malawi Property Information",
"Malaysia":"Malaysia Property Information",
"Maldives":"Maldives Property Information",
"Mali":"Mali Property Information",
"Malta":"Malta Property Information",
"Marshall Islands"  :"Marshall Islands Property Information",    
"Martinique (French)":"Martinique (French) Property Information",
"Mauritania":"Mauritania Property Information",
"Mauritius":"Mauritius Property Information",
"Mayotte":"Mayotte Property Information",
"Mexico":"Mexico Property Information",
"Micronesia":"Micronesia Property Information",
"Moldova":"Moldova Property Information",
"Monaco":"Monaco Property Information",
"Mongolia":"Mongolia Property Information",
"Montenegro":"Montenegro Property Information",
"Montserrat":"Montserrat Property Information",
"Morocco":"Morocco Property Information",
"Mozambique":"Mozambique Property Information",
"Myanmar":"Myanmar Property Information",
"Namibia":"Namibia Property Information",
"Nauru":"Nauru Property Information",   
"Nepal": "Nepal Property Information",  
"Netherlands": "Netherlands Property Information",
"New Zealand": "New Zealand Property Information",
"Nicaragua":"Nicaragua Property Information",   
"Niger" :  "Niger Property Information",
"Nigeria" : "Nigeria Property Information", 
"North Macedonia":"North Macedonia Property Information", 
"Norway": "Norway Property Information",
"Oman": "Oman Property Information",    
"Pakistan": "Pakistan Property Information",   
"Palau"  :"Palau Property Information", 
"Panama" : "Panama Property Information",
"Papua New Guinea": "Papua New Guinea Property Information",   
"Paraguay"   : "Paraguay Property Information",  
"Peru" :  "Peru Property Information",
"Philippines":"Philippines Property Information",
"Poland":  "Poland Property Information",
"Portugal": "Portugal Property Information",   
"Qatar":"Qatar Property Information",
"Romania":"Romania Property Information",
"Russia":"Russia Property Information",
"Rwanda":"Rwanda Property Information",
"Saint Kitts & Nevis Anguilla":"Saint Kitts & Nevis Anguilla Property Information",
"Saint Lucia":"Saint Lucia Property Information",
"Saint Vincent & Grenadines":"Saint Vincent & Grenadines Property Information",
"Samoa":"Samoa Property Information",
"San Marino":"San Marino Property Information",
"Sao Tome and Principe":"Sao Tome and Principe Property Information",
"Saudi Arabia":"Saudi Arabia Property Information",
"Senegal":"Senegal Property Information",
"Serbia":"Serbia Property Information",
"Seychelles":"Seychelles Property Information",
"Sierra Leone":"Sierra Leone Propertyo Information",
"Singapore":"Singapore Property Information",
"Slovakia" : "Slovakia Property Information",   
"Slovenia" : "Slovenia Property Information", 
"Solomon Islands" :"Solomon Islands Property Information",
"Somalia":"Somalia Property Information",
"South Africa":"South Africa Property Information",
"South Sudan" :"South Sudan Property Information",
"Spain" : "Spain Property Information",
"Sri Lanka":"Sri Lanka Property Information",
"Sudan":"Sudan Property Information",
"Suriname":"Suriname Property Information",
"Sweden":"Sweden Property Information",
"Switzerland":"Switzerland Property Information",
"Syria":"Syria Property Information",
"Taiwan": "Taiwan Property Information", 
"Tajikistan":"Tajikistan Property Information",  
"Tanzania":"Tanzania Property Information",    
"Thailand":   "Thailand Property Information", 
"Togo":  "Togo Property Information",   
"Tonga":   "Tonga Property Information", 
"Trinidad and Tobago":"Trinidad and Tobago Property Information", 
"Tunisia": "Tunisia Property Information",
"Turkey": "Turkey Property Information",
"Turkmenistan":"Turkmenistan Property Information",   
"Turks and Caicos Islands": "Turks and Caicos Islands Property Information",   
"Tuvalu":"Tuvalu Property Information",
"USA":"USA Property Information", 
"Uganda":"Uganda Property Information",  
"Ukraine": "Ukraine Property Information",
"United Arab Emirates":"United Arab Emirates Property Information",    
"United Kingdom(Great Britain and N. Ireland)": "United Kingdom(Great Britain and N. Ireland) Property Information", 
"Uruguay":"Uruguay Property Information",
"Uzbekistan": "Uzbekistan Property Information",
"Vanuatu": "Vanuatu Property Information",
"Venezuela":"Venezuela Property Information",
"Vietnam":"Vietnam Property Information",
"Yemen": "Yemen Property Information", 
"Zambia":"Zambia Property Information",
"Zimbabwe": "Zimbabwe Property Information",
                 
                 
            };

        function updateHeader(country) {
            document.getElementById("page").innerHTML = headerMapping[country];
        }

        window.onload = function () {
            var countySel = document.getElementById("countySel");
            stateSel = document.getElementById("stateSel");
// districtSel = document.getElementById("districtSel");
            for (var country in stateObject) {
                countySel.options[countySel.options.length] = new Option(country, country);
            }
            countySel.onchange = function () {
                onchangeCountry(this.selectedIndex, this.value);
                onchangeCurrency(currencyMapping[this.value]);
                updateHeader(this.value)
            }
            countySel.onchange(); // reset in case page is reloaded

        }

        function onchangeCountry(index, value) {
            stateSel.length = 1; // remove all options bar first

            if (index < 1) return; // done
            for (var state in stateObject[value]) {
                stateSel.options[stateSel.options.length] = new Option(state, state);
            }
        }

        function onchangeCurrency(toCurrency) {

            for (var i = 0, l = currencyElements.length; i < l; ++i) {
                var
                    el = currencyElements[i];

                el.innerHTML = "<span>" + toCurrency.toUpperCase() + "</span>";
                el.setAttribute("data-currencyName", toCurrency);


            }
        }

    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
            integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
            crossorigin="anonymous"></script>

    <footer>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
    </footer>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
            integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
            crossorigin="anonymous"></script>
</body>
<script>
    var table = document.getElementById('example');
    var cells = table.getElementsByTagName('th');

    for (var i = 0; i < cells.length; i++) {
        cells[i].onclick = function () {
            if (this.hasAttribute('data-clicked')) {
                return;
            }
            this.setAttribute('data-clicked', 'yes');
            this.setAttribute('data-text', this.innerHTML);

            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.value = this.innerHTML;
            input.style.width = this.offsetwidth - (this.clientLeft * 2) + "px";
            input.style.height = this.offsetHeight - (this.clientTop * 2) + "px";
            input.style.border = "0px";
            input.style.fontFamily = "inherit";
            input.style.fontSize = "inherit";
            input.style.textAlign = "inherit";
            input.style.backgroundcolor = "LightGoldenRodYellow";

            this.onblur = function () {
                var td = input.parentElement;
                var orig_text = input.parentElement.getAttribute('date-text');
                var current_text = this.value;
                if (orig_text != current_text) {
                    th.removeAttribute('data-clicked');
                    th.removeAttribute('data-text');
                    th.innerHTML = current_text;
                    th.style.cssText = 'padding:5px';
                    console.log(orig_text + 'is changed to ' + current_text);
                } else {
                    th.removeAttribute('data-clicked');
                    th.removeAttribute('data-text');
                    th.innerHTML = orig_text;
                    th.style.cssText = 'padding:5px';
                    console.log('No changes made');
                }
            }
            this.innerHTML = '';
            this.style.cssText = 'padding:0px 0px';
            this.append(input);
            this.firstElementChild.select();
        }
    }
</script>


<script>

    const excel_file = document.getElementById('excel_file');

    excel_file.addEventListener('change', (event) => {


        if (!['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'].includes(event.target.files[0].type)) {
            document.getElementById('excel_data').innerHTML = '<div class="alert alert-danger">Only .xlsx or .xls file format are allowed</div>';

            excel_file.value = '';

            return false;
        }

        var reader = new FileReader();

        reader.readAsArrayBuffer(event.target.files[0]);

        reader.onload = function (event) {

            var data = new Uint8Array(reader.result);

            var work_book = XLSX.read(data, {type: 'array'});

            var sheet_name = work_book.SheetNames;
            var sheet_data = XLSX.utils.sheet_to_json(work_book.Sheets[sheet_name[0]], {header: 1});

            var excelHeaderRow = sheet_data[0];
            var excelBodyRow = array_shift(sheet_data);
            // console.log(excelHeaderRow);
              console.log(sheet_data);
             console.log(count(sheet_data));

            var headers = document.getElementsByTagName("th");
            var bodys = document.getElementsByTagName("td");
            //  console.log(bodys);

           // console.log(count(excelHeaderRow));
            for(var i=0;i<count(excelHeaderRow);i++){
               // console.log(excelHeaderRow[i])
                var th=i+1;
                $("#table11").find('thead').find("tr:eq(1)").find("th:eq("+th+")").text(excelHeaderRow[i]);
            }

            for(var k=0;k<count(sheet_data);k++){

                for(l=0;l<count(sheet_data[k]);l++){
                    console.log(count(sheet_data[k]))
                    var tr=l+1;
                    $("#table11").find('tbody').find("tr:eq("+k+")").find("td:eq("+tr+")").text(sheet_data[k][l]);
                }
              //  var th=i+1;
             //
            }


           // $("table11").find('thead').
//for (var j = 2; j < bodys.length; j++) {
//  bodys[j].innerHTML = excelBodyRow[j];
//}
//
//             var field = 0;
//             for (var k = 1; k < sheet_data.length; k++) {
//                 var excelBody = sheet_data[k];
//                 for (var j = 1; j < excelBody.length; j++) {
//                     bodys[field].innerHTML = excelBody[j];
//                     field++;
//                 }
//             }

        }
    });

</script>


</html>

