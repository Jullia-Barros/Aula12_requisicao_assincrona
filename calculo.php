<?php
header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode(file_get_contents("php://input"));

    if (isset($data->numero1) && isset($data->numero2)) {
        $soma = $data->numero1 + $data->numero2;

        echo json_encode(['soma' => $soma]);

} else {
    echo json_encode(["erro' => 'Valores numero1 e numero2 são necessários."]);
}
}else{
    echo json_encode(['erro' => 'Método não suportado. Use o POST']);
}
?>