<?php
// /*---------------------
// odbieranie form klienta
// ---------------------*/
// $klient_id_exists[];
// do {
//   $klient_id = rand(1,100);
// } while ($klient_id != $klient_id_exists);
// $klient_imie = htmlentities($_POST['imie']);
// $klient_email = htmlentities($_POST['email']);
// $klient_status = htmlentities($_POST['status']);
// /*----------------------
// odbieranie form sprzedaz
// ----------------------*/
// $sprzedaz_id_exists[];
// do {
//   $sprzedaz_id = rand(1,100);
// } while ($sprzedaz_id != $sprzedaz_id_exists);
// $sprzedaz_produkt = htmlentities($_POST['produkt']);
// $sprzedaz_cena = htmlentities($_POST['cena']);
// $sprzedaz_data = htmlentities($_POST['data']);
// /*-----------------------
// odbieranie form pracownik
// -----------------------*/
// $pracownik_id_exists[];
// do {
//   $pracownik_id = rand(1,100);
// } while ($pracownik_id != $pracownik_id_exists);
// $pracownik_imie = htmlentities($_POST['imie']);
// $pracownik_nazwisko = htmlentities($_POST['nazwisko']);
// $pracownik_data_ur = htmlentities($_POST['data_ur']);
// $pracownik_clearence = htmlentities($_POST['clearence']);
// $pracownik_department = htmlentities($_POST['department']);

    // Sortuje rosnąco po pierwszym kluczu w obiekcie -> id
function compareById($element1, $element2){
    return $element1[key($element1)] - $element2[key($element2)];
}
    

function getKlient(){
    $klienci = array();
    $klienci_handle = fopen("./klienci.csv", "r");
    
    if(!$klienci_handle) return "Handle error!";
    
    $counter_comma = 0;
    $counter_line = 0;
    
    do{
        $line = fgets($klienci_handle);
        $counter_comma = 0;

            // avoid warning :P
        $klienci[$counter_line] = array(
            "klient_id" => "",
            "klient_imie" => "",
            "klient_email" => "",
            "klient_status" => ""
        );        

        for($i = 0; $i < strlen($line); $i++){
            if($line[$i] == ",") $counter_comma++;
            else if($line[$i] != PHP_EOL){
                switch($counter_comma){
                    case 0:
                        $klienci[$counter_line]["klient_id"] .= $line[$i];
                        break;
                    case 1:
                        $klienci[$counter_line]["klient_imie"] .= $line[$i];
                        break;
                    case 2:
                        $klienci[$counter_line]["klient_email"] .= $line[$i];
                        break;
                    case 3:
                        $klienci[$counter_line]["klient_status"] = $line[$i];
                        break;
                }
            }
        }
        $counter_line++;
    }while(!feof($klienci_handle));

    fclose($klienci_handle);

    usort($klienci, 'compareById');
    return $klienci;
}

function addKlient($imie, $email, $status){

    $idArr = array();
    foreach(getKlient() as $element){
        array_push($idArr, $element["klient_id"]);
    }

    $id = rand(1,100);
    if(in_array($id, $idArr)){
        do{
            $id++;
        }while(in_array($id, $idArr));
    }

    $klienci_handle = fopen("./klienci.csv", "a");
    $value = "\n".$id.','.$imie.','.$email.','.$status;

    fwrite($klienci_handle, $value);

    fclose($klienci_handle);
}



?>