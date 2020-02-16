<?php
	function generateRow(){
		$contents = '';
		include('../functions.php');
		$sql = "SELECT * FROM customers";

		//use for MySQLi OOP
		$query = $db->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['fulname']."</td>
				<td>".$row['phone']."</td>
				<td>".$row['address']."</td>
				<td>".$row['email']."</td>
				<td>".$row['comment']."</td>
			</tr>
			";
		}
		////////////////

		//use for MySQLi Procedural
		// $query = mysqli_query($conn, $sql);
		// while($row = mysqli_fetch_assoc($query)){
		// 	$contents .= "
		// 	<tr>
		// 		<td>".$row['id']."</td>
		// 		<td>".$row['firstname']."</td>
		// 		<td>".$row['lastname']."</td>
		// 		<td>".$row['address']."</td>
		// 	</tr>
		// 	";
		// }
		////////////////
		
		return $contents;
	}
	//variables
	

	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("MAYMAY | CUSTOMERS");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '

    	
      	<h2 align="center">MAYMAY TAILORING CENTRE</h2>
      	<h4 align="center">CUSTOMERS RECORDS</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="18px;">ID</th>
				<th>Fulname</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Email</th> 
				<th>Comment</th>  
           </tr>  
      ';  

  

    $content .= generateRow();  
    $content .= '</table><p/>

    <p/><i>MAYMAY | <small> we give you that identity that makes you stand out of the crowd..</small></i>'; 
    $pdf->writeHTML($content);  
    $pdf->Output('customers.pdf', 'I');
	

?>