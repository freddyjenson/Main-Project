<?php

   session_start();
   if(isset($_SESSION['username1']))
   { 
    include('db.php');      
    //$con=mysqli_connect("localhost", "root", "", "bidtemp");

    $q=mysqli_query($con,"SELECT DISTINCT *,u.firstname as uf,p.id as pid,p.name as pname FROM `user` u,`products` p,catagories c WHERE p.catagory_id=c.id AND p.userbid_id=u.id and p.status='3'");
//    $row=mysqli_fetch_assoc($q);

        include('pdf_mc_table.php');
        $pdf = new PDF_MC_TABLE();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',15);  
        $pdf->Cell(176, 5, 'Bidded Products', 0, 0, 'C');
        //$pdf->Cell(176, 5, 'Bidded Products', 'L', 0, 'C');


        $pdf->Ln();
        $pdf->Ln();
        $pdf->Ln();
        $pdf->SetFont('Arial','',9);

        if(mysqli_num_rows($q) > 0)
        {
            
            while($row=mysqli_fetch_assoc($q))
            {
               
                $ownername = $row['firstname'];
                $pname = $row['pname'];
                $rprice = $row['regular_price'];
                $purchasername = $row['uf'];            
                $startbid = $row['start_bid'];
                $pdf->Multicell(0,12,'Owner Name : '. $ownername.'      Product Name : '. $pname.'      Regular Price : '. $rprice.'        Purchaser Name : '. $purchasername.'        Bid Price : '. $startbid ,1,'C');


        }
    }
}
$pdf->Output();

   ?>