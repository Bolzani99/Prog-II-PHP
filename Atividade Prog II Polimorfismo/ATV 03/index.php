<?php
require_once 'Pagamento.php';
require_once 'Cartao.php';
require_once 'Pix.php';
require_once 'Boleto.php';


// Array com os pagamentos
$pagamentos = [
    new Cartao(150.50, "2024-01-15", "1234 5678 9012 3456", "Visa"),
    new Pix(89.90, "2024-01-15", "email@exemplo.com"),
    new Boleto(299.99, "2024-01-20", "00193373700000010000500940144816060680935031")
];

echo "=== PAGAMENTO 1 - CARTAO ===\n";
echo $pagamentos[0]->processar();
echo "\n\n";

echo "=== PAGAMENTO 2 - PIX ===\n";
echo $pagamentos[1]->processar();
echo "\n\n";

echo "=== PAGAMENTO 3 - BOLETO ===\n";
echo $pagamentos[2]->processar();
echo "\n\n";

