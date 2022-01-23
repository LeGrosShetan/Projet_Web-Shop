<?php
require('../fpdf184/fpdf.php');

class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('../ressource/Web4ShopHeader.png',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(60);
    // Titre
    $this->Cell(90,10,'Facturation de votre commande',1,0,'C');
    // Saut de ligne
    $this->Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'Nous vous remercions pour votre commande, voici son contenu :',0,1);
$total=0;
foreach($_SESSION['panier'] as $key=>$products){
    $prix   = $_SESSION['panierQuantity'][$key]*$products->price;
    $total += $prix;
    $pdf->SetFont('Times','B',15);
    $pdf->Cell(0,10,"$products->name :",0,1);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(0,10,"       Quantité :".$_SESSION['panierQuantity'][$key]."     Prix unitaire :".$products->price."€",0,1);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(0,10,"Sous-total :".$prix."€",0,1);
}
$pdf->SetFont('Times','',15);
$pdf->Cell(0,10,"Adresse de livraison: ".$_SESSION['adress'],0,1);
$pdf->SetFont('Times','B',20);
$pdf->Cell(0,10,"Total de la commande :".$total."€",0,1);
$pdf->Output();
?>