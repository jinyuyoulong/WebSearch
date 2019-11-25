<?php
$arr = ['Garamond, serif',
'Bitstream Charter, serif',
'Arial, sans-serif',
'Verdana, sans-serif',
'Arial Black, sans-serif',
'Avant Garde, sans-serif',
'Helvetica Neue, sans',
'Courier New, mono',
'Impact, sans-serif',
'Trebuchet, sans-serif',
'Century Gothic, sans-serif',
'Tahoma, sans-serif',
'Lucida Grande, sans-serif',
'Univers, sans-serif',
'Times New Roman, serif',
'Georgia, serif',
'Palatino, serif',
'Bookman, serif',
'Tahoma,Arial,Helvetica,sans-serif',
'Andale Mono, mono',
'Comic Sans MS, sans-serif'];

foreach ($arr as $key => $value) {
	echo('<li class='.$value." style='font-family: ".$value."'>".$value.'</li>');
}