<?php
//cosio
function showStatusIcon($status){
    if($status == 0){
        return '<i class="fa fa-minus-square" aria-hidden="true"></i>';
    }
    else{
        return '<i class="fa fa-plus-square" aria-hidden="true"></i>';
    }
}

function showMessage($messageType){
    switch($messageType){
        case 'succes':
            echo "<div class='alert alert-success'><strong>Success!</strong> Dane poprawnie dodane.</div>";
            break;
        case 'succes':
            echo "<div class='alert alert-danger'><strong>Error!</strong> Nie udało się dodać danych.</div>";
            break;
    }
    
}