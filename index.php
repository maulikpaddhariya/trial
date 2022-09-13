<?php
error_reporting(1);
include dirname(__FILE__) .'/mpdf/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('<div><p>Similarly, the National Veterinary Services Laboratories of the USDA have reported COVID-19 in tigers and lions that exhibited respiratory signs like dry cough and wheezing. The zoo animals are suspected to have been infected by an asymptomatic zookeeper (335). The total number of COVID-19- positive cases in human beings is increasing at a highrate, thereby creating ideal conditions for viral spillover to other species, such as pigs. The evidence obtained from SARS-CoV suggests that pigs can get infected with SARS-CoV-2 (336). However, experimental inoculation with SARS-CoV-2 failed to infect pigs (329).</p></div>');
$mpdf->Output('MyPDF.pdf', 'D'); die('');
?>