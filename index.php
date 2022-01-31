<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . "/classes/Utente.php";
require_once __DIR__ . "/classes/UtentePremium.php";
require_once __DIR__ . "/classes/Prodotto.php";

$utenti = [
    new Utente('marco', 'rossi', 22, [new CreditCard("1234123412341234", 666, "12 / 10 / 2022", "marco rossi"), new CreditCard("1234123412341234", 666, "21 / 1 / 2021", "samuele madrigali")]),
    new UtentePremium('adrea', 'bianchi', 25, new CreditCard("1234123412341234", 666, "22 / 7 / 2024", "marco rossi"), 10),
];
$prodotti = [
    new Prodotto('mouse', 'logitech', 'nero', 69.99),
    new Prodotto('monitor', 'asus', 'nero', 399, 90),
];





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>

<body>
    <div class="sezione utenti">
        <select name="users" id="">
            <?php foreach ($utenti as $utente) { ?>
                <option value="<?php echo $utente->getNome() ?>"><?php echo $utente->getNome() . " " . $utente->getCognome() ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="sezione prodotti">
        <?php foreach ($prodotti as $prodotto) { ?>
            <div>
                <div><?php echo $prodotto->getNome()  ?></div>
                <div><?php echo $prodotto->getMarca()  ?></div>
                <div><?php echo $prodotto->getColore()  ?></div>
                <div><?php echo $prodotto->getPrezzo() . " €"  ?></div>
            </div>
        <?php } ?>
    </div>
    <div class="sezione">
        <div>Var dump utenti</div>
        <div><?php var_dump($utenti) ?></div>
    </div>
    <div class="sezione">
        <div>Var dump prodotti</div>
        <div><?php var_dump($prodotti) ?></div>
    </div>
</body>
<style>
    .sezione{
        margin: 30px 0px;
    }
</style>
</html>