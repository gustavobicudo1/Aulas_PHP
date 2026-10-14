<?php
$tamanho = $_POST['tamanho'];
$refri = $_POST['refri'];
$sabores = $_POST['sabores'];
$qnt= count($sabores);
$borda = $_POST['borda'];
$cupom = $_POST['cupom'];
if($tamanho == 'Broto'){
    $total=45;
}else{
    $total = 65;
}
if($refri =='Coca' || $refri =='Fanta'){
    $total =$total+12;
}elseif($refri =='Guarana'|| $refri =='Pepsi'){
    $total = $total + 10;
}
if($borda == 'Cheddar' || $borda = 'Catupiry'){
    $total = $total +5;
}
if($cupom == 'PROMO10'){
    $total = $total - 10;
}
$text_sabores = implode(',',$sabores);
$msg = 'Pedido: Pizza $tamanho ($text_sabores) + Refri $refri. Total: $total';
$num = '55149999999';
$link ="".$num."&text=". urlencode($msg);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <img src="" alt="Logo da Pizzaria">
        <h1>🍕 Seu pedido</h1>
        <p>Pizza: <?php echo $tamanho ?></p>
        <p>Sabores: <?php echo $text_sabores  ?></p>
        <p>Borda: <?php echo $borda; ?></p>
        <p>Refrigerante: <?php echo $refri ?></p>
        <p>Total: <?php echo $total ?></p>
        <a href="<?php echo $link;?>"class="btn wsp">Pedir Whatsapp</a><br><br>
        <a class='btn' href='index.html'> Voltar</a>
    </div>
</body>
</html>