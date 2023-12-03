<?php
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
    return (int)$element1[key($element1)] - (int)$element2[key($element2)];
}

function getPracownicy(){
    $pracownicy = array();
    $pracownicy_handle = fopen("./hr.csv", "r");
    
    if(!$pracownicy_handle) return "Handle error!";
    
    $counter_comma = 0;
    $counter_line = 0;
    
    do{
        $line = fgets($pracownicy_handle);
        $counter_comma = 0;

            // avoid warning :P
        $pracownicy[$counter_line] = array(
            "pracownik_id" => "",
            "pracownik_imie" => "",
            "pracownik_nazwisko" => "",
            "pracownik_data_ur" => "",
            "pracownik_clearance" => "",
            "pracownik_department" => ""
        );        

        for($i = 0; $i < strlen($line); $i++){
            if($line[$i] == ",") $counter_comma++;
            else if($line[$i] != "\n"){
                
                switch($counter_comma){
                    case 0:
                        $pracownicy[$counter_line]["pracownik_id"] .= $line[$i];
                        break;
                    case 1:
                        $pracownicy[$counter_line]["pracownik_imie"] .= $line[$i];
                        break;
                    case 2:
                        $pracownicy[$counter_line]["pracownik_nazwisko"] .= $line[$i];
                        break;
                    case 3:
                        $pracownicy[$counter_line]["pracownik_data_ur"] .= $line[$i];
                        break;
                    case 4:
                        $pracownicy[$counter_line]["pracownik_clearance"] .= $line[$i];
                        break;
                    case 5:
                        $pracownicy[$counter_line]["pracownik_department"] .= $line[$i];
                        break;
                }
            }
        }
        $counter_line++;
    }while(!feof($pracownicy_handle));

    fclose($pracownicy_handle);

    usort($pracownicy, 'compareById');
    return $pracownicy;
}

function getPracownicyId(){
    $idArr = array();
    foreach(getPracownicy() as $element){
        array_push($idArr, $element["pracownik_id"]);
    }
    return $idArr;
}

function addPracownik($imie, $nazwisko, $data_ur, $clearance, $department){

    $idArr = getPracownicyId();

    $id = rand(1,100);
    if(in_array($id, $idArr)){
        do{
            $id++;
        }while(in_array($id, $idArr));
    }

    $pracownicy_handle = fopen("./hr.csv", "a");
    $value = "\n".$id.','.$imie.','.$nazwisko.','.$data_ur.','.$clearance.','.$department;

    fwrite($pracownicy_handle, $value);

    fclose($pracownicy_handle);
}

function writePracownicy($pracownicy){
    $pracownicy_handle = fopen("./hr.csv","w");

    $content = "";
    for($i = 0; $i < sizeof($pracownicy); $i++){
        if(!$pracownicy[$i]["pracownik_id"]) continue;
        $content .= $pracownicy[$i]["pracownik_id"].",";        
        $content .= $pracownicy[$i]["pracownik_imie"].",";        
        $content .= $pracownicy[$i]["pracownik_nazwisko"].",";        
        $content .= $pracownicy[$i]["pracownik_data_ur"].",";
        $content .= $pracownicy[$i]["pracownik_clearance"].",";
        $content .= $pracownicy[$i]["pracownik_department"]."\n";        
    }

    fwrite($pracownicy_handle, $content);
    fclose($pracownicy_handle);  
}

function findPracownik($id){
    $count = 0;
    $found = false;
    while($count < sizeof(getPracownicy())){
        if(getPracownicy()[$count]["pracownik_id"] == $id){
            $found = true;
            break;
        } 
        $count++;
    }    
    if($found){
        return $count;
    }
    return $found;
}

function deletePracownik($id){
    if(!findPracownik($id)) return;

    $pracownicy = getPracownicy();
    unset($pracownicy[findPracownik($id)]);
    $pracownicy = array_values($pracownicy);

    writePracownicy($pracownicy);
}

function updatePracownik($id, $imie, $nazwisko, $data_ur, $clearance, $department){
    if(!findPracownik($id)) return;

    $pracownicy = getPracownicy();

    $pracownicy[findPracownik($id)]["pracownik_imie"] = $imie;
    $pracownicy[findPracownik($id)]["pracownik_nazwisko"] = $nazwisko;
    $pracownicy[findPracownik($id)]["pracownik_data_ur"] = $data_ur;
    $pracownicy[findPracownik($id)]["pracownik_clearance"] = $clearance;
    $pracownicy[findPracownik($id)]["pracownik_department"] = $department;

    writePracownicy($pracownicy);
}
?>