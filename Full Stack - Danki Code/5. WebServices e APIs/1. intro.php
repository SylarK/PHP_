<form action="" method='post'>

    <input type="text" name='address'>
    <input type="submit" name='acao' value='Enviar'>

</form>

<?php
    //Google API
    if(isset($_POST['acao'])){
        $url = urlencode($_POST['address']);
        $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');

        $endreco = json_encode($str);

        echo $endereco->results[0]->address_components[0]->short_name;
    }

?>