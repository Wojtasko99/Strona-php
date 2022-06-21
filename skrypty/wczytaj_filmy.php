<?php
function wyswietl_filmy(){
$polaczenie = @new mysqli('localhost', 'root', '', 'baza');
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
    $query = mysqli_query($polaczenie ,'select * from filmy');
    $zawartosc = " ";
    while($rekord = mysqli_fetch_array($query)){
        $zawartosc .= '<tr> <th>'.$rekord[0].'</th>';
        $zawartosc .= '<td>'.$rekord[1].'</td>';
        $zawartosc .= '<td>'.$rekord[2].'</td>';
        $zawartosc .= '<td>'.$rekord[3].'</td>';
        $zawartosc .= '<td>'.$rekord[4].'</td></tr>';
        
    }
    echo $zawartosc;
}}

function posortuj(){
$polaczenie = @new mysqli('localhost', 'root', '', 'baza');
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
    $query = mysqli_query($polaczenie ,'select * from filmy order by ocena desc');
    $zawartosc = " ";
    while($rekord = mysqli_fetch_array($query)){
        $zawartosc .= '<tr> <th>'.$rekord[0].'</th>';
        $zawartosc .= '<td>'.$rekord[1].'</td>';
        $zawartosc .= '<td>'.$rekord[2].'</td>';
        $zawartosc .= '<td>'.$rekord[3].'</td>';
        $zawartosc .= '<td>'.$rekord[4].'</td></tr>';
        
    }
    echo $zawartosc;
}}

function wyczysc(){
    $zawartosc = "";
    echo $zawartosc;
}
if(isset($_GET['sort'])){
    wyczysc();
    posortuj();
}
if(isset($_GET['pop'])){
    wyczysc();
    wyswietl_filmy();
}
?>
