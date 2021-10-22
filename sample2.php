<?php
	$leo = $_POST['leo'];
	$leo1 = $_POST['leo1'];
	$leo2 = $_POST['leo2'];
	$leo3 = $_POST['leo3'];
	
	$price = $_POST['price'];
	$price1 = $_POST['price1'];
	$price2 = $_POST['price2'];
	$price3 = $_POST['price3'];
	
	$qty = $_POST['qty'];
	$qty1 = $_POST['qty1'];
	$qty2 = $_POST['qty2'];
	$qty3 = $_POST['qty3'];

	$park = $_POST['park'];
	$park1 = $_POST['park1'];
	$park2 = $_POST['park2'];
	$park3 = $_POST['park3'];

	$sys = $_POST['sys'];
	$sys1 = $_POST['sys1'];
	$sys2 = $_POST['sys2'];
	$sys3 = $_POST['sys3'];

	$rent = $_POST['rent'];
	$rent1 = $_POST['rent1'];
	$rent2 = $_POST['rent2'];
	$rent3 = $_POST['rent3'];
   
    $mol1 = $_POST['mol1'];
    $mol2 = $_POST['mol2'];
    $mol3 = $_POST['mol3'];

    $total8 = $_POST['total8'];
    $total9 = $_POST['total9'];
    $total10 = $_POST['total10'];

    $total14 = $_POST['total14'];
    $total11 = $_POST['total11'];
    $total12 = $_POST['total12'];
    $total13 = $_POST['total13'];

   $qty4 = $_POST['qty4'];
   $qty40 = $_POST['qty40'];
   $qty41 = $_POST['qty41'];
   $qty42 = $_POST['qty42'];
	
	
	$rate = $_POST['rate'];
	$rate1 = $_POST['rate1'];
	$rate2 = $_POST['rate2'];
	$rate3 = $_POST['rate3'];

	$year = $_POST['year'];
	$year1 = $_POST['year1'];
	$year2 = $_POST['year2'];
	$year3 = $_POST['year3'];
	
	$service = $_POST['service'];
	$service1 = $_POST['service1'];
	$service2 = $_POST['service2'];
	$service3 = $_POST['service3'];

	$subtotal = $_POST['subtotal'];
	$subtotal1 = $_POST['subtotal1'];
	$subtotal2 = $_POST['subtotal2'];
	$subtotal3 = $_POST['subtotal3'];

	$totalrent = $_POST['totalrent'];
	$totalrent1 = $_POST['totalrent1'];
	$totalrent2 = $_POST['totalrent2'];
	$totalrent3 = $_POST['totalrent3'];

	$escalation = $_POST['escalation'];
	$escalationa = $_POST['escalationa'];
	$escalationb = $_POST['escalationb'];
	$escalationc = $_POST['escalationc'];

	$rentrate = $_POST['rentrate'];
	$rentratea = $_POST['rentratea'];
	$rentrateb = $_POST['rentrateb'];
	$rentratec = $_POST['rentratec'];

	$rateyear = $_POST['rateyear'];
	$rateyeara = $_POST['rateyeara'];
	$rateyearb = $_POST['rateyearb'];
	$rateyearc = $_POST['rateyearc'];

	$servicecharge = $_POST['servicecharge'];
	$servicechargea = $_POST['servicechargea'];
	$servicechargeb = $_POST['servicechargeb'];
	$servicechargec = $_POST['servicechargec'];

	$subrent = $_POST['subrent'];
	$subrenta = $_POST['subrenta'];
	$subrentb = $_POST['subrentb'];
	$subrentc = $_POST['subrentc'];

	$total29 = $_POST['total29'];
	$total87 = $_POST['total87'];
	$total88 = $_POST['total88'];
	$total89 = $_POST['total89'];
	
	$qty6 = $_POST['qty6'];
	$qty60 = $_POST['qty60'];
	$qty61 = $_POST['qty61'];
	$qty62 = $_POST['qty62'];

	$total30 = $_POST['total30'];
	$total90 = $_POST['total90'];
	$total91 = $_POST['total91'];
	$total92 = $_POST['total92'];

	$total31 = $_POST['total31'];
	$total93 = $_POST['total93'];
	$total94 = $_POST['total94'];
	$total95 = $_POST['total95'];

    $total32 = $_POST['total32'];
	$total96 = $_POST['total96'];
	$total97 = $_POST['total97'];
	$total98 = $_POST['total98'];

	$total33 = $_POST['total33'];
	$total99 = $_POST['total99'];
	$total200 = $_POST['total200'];
	$total201 = $_POST['total201'];

	$total34 = $_POST['total34'];
	$total202 = $_POST['total202'];
	$total103 = $_POST['total103'];
	$total104 = $_POST['total104'];

	$qty7 = $_POST['qty7'];
	$qty70 = $_POST['qty70'];
	$qty71 = $_POST['qty71'];
	$qty72 = $_POST['qty72'];

	$total35 = $_POST['total35'];
	$total105 = $_POST['total105'];
	$total106 = $_POST['total106'];
	$total107 = $_POST['total107'];

	$total36 = $_POST['total36'];
	$total108 = $_POST['total108'];
	$total109 = $_POST['total109'];
	$total110 = $_POST['total110'];

	$total37 = $_POST['total37'];
	$total111 = $_POST['total111'];
	$total112 = $_POST['total112'];
	$total113 = $_POST['total113'];

	$total38 = $_POST['total38'];
	$total114 = $_POST['total114'];
	$total115 = $_POST['total115'];
	$total116 = $_POST['total116'];

	$total39 = $_POST['total39'];
	$total117 = $_POST['total117'];
	$total118 = $_POST['total118'];
	$total119 = $_POST['total119'];

	$total40 = $_POST['total40'];
	$total120 = $_POST['total120'];
	$total121 = $_POST['total121'];
	$total122 = $_POST['total122'];

	
	
	
	

	// Database connection
	$conn = new mysqli('localhost:3307','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into sample2(leo,leo1,leo2,leo3,price,price1,price2,price3,qty,qty1,qty2,qty3,park,park1,park2,park3,sys,sys1,sys2,sys3,rent,rent1,rent2,rent3,mol1,mol2,mol3,total8,total9,total10,total14,total11,total12,total13,qty4,qty40,qty41,qty42,rate,rate1,rate2,rate3,year,year1,year2,year3,service,service1,service2,service3,subtotal,subtotal1,subtotal2,subtotal3,totalrent,totalrent1,totalrent2,totalrent3,escalation,escalationa,escalationb,escalationc,rentrate,rentratea,rentrateb,rentratec,rateyear,rateyeara,rateyearb,rateyearc,servicecharge,servicechargea,servicechargeb,servicechargec,subrent,subrenta,subrentb,subrentc,total29,total87,total88,total89,qty6,qty60,qty61,qty62,total30,total90,total91,total92,total31,total93,total94,total95,total32,total96,total97,total98,total33,total99,total200,total201,total34,total202,total103,total104,qty7,qty70,qty71,qty72,total35,total105,total106,total107,total36,total108,total109,total110,total37,total111,total112,total113,total38,total114,total115,total116,total39,total117,total118,total119,total40,total120,total121,total122) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",$leo,$leo1,$leo2,$leo3,$price,$price1,$price2,$price3,$qty,$qty1,$qty2,$qty3,$park,$park1,$park2,$park3,$sys,$sys1,$sys2,$sys3,$rent,$rent1,$rent2,$rent3,$mol1,$mol2,$mol3,$total8,$total9,$total10,$total14,$total11,$total12,$total13,$qty4,$qty40,$qty41,$qty42,$rate,$rate1,$rate2,$rate3,$year,$year1,$year2,$year3,$service,$service1,$service2,$service3,$subtotal,$subtotal1,$subtotal2,$subtotal3,$totalrent,$totalrent1,$totalrent2,$totalrent3,$escalation,$escalationa,$escalationb,$escalationc,$rentrate,$rentratea,$rentrateb,$rentratec,$rateyear,$rateyeara,$rateyearb,$rateyearc,$servicecharge,$servicechargea,$servicechargeb,$servicechargec,$subrent,$subrenta,$subrentb,$subrentc,$total29,$total87,$total88,$total89,$qty6,$qty60,$qty61,$qty62,$total30,$total90,$total91,$total92,$total31,$total93,$total94,$total95,$total32,$total96,$total97,$total98,$total33,$total99,$total200,$total201,$total34,$total202,$total103,$total104,$qty7,$qty70,$qty71,$qty72,$total35,$total105,$total106,$total107,$total36,$total108,$total109,$total110,$total37,$total111,$total112,$total113,$total38,$total114,$total115,$total116,$total39,$total117,$total118,$total119,$total40,$total120,$total121,$total122);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>