<?php
$zawartosc ='<table class="table">
                                  <div style="margin: auto;">
                                  </div>
                                  <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Login</th>
                                    <th scope="col">E-mail</th>
                                  </tr>
                                </thead>
                                <tbody>';
echo $zawartosc;
$polaczenie = @new mysqli('localhost', 'root', '', 'baza');
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
    $query = mysqli_query($polaczenie ,'select * from uzytkownicy');
    $zawartosc = " ";
    while($rekord = mysqli_fetch_array($query)){
        $zawartosc .= '<tr> <th>'.$rekord[0].'</th>';
        $zawartosc .= '<td>'.$rekord[1].'</td>';
        $zawartosc .= '<td>'.$rekord[3].'</td></tr>';
        
    }
    $zawartosc .= "</table>";
    echo $zawartosc;
}

?>

