<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bons de commande</h1>
    <h2>Liste des commandes</h2>

    <table>
        <thead>
            <tr>
                <th>Commande</th>
                <th>Date de la commande</th>
                <th>Date de livraison</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $order) : ?>
                <tr>
                    <td><a href="order.php?orderNumber=<?= $order->orderNumber ?>"><?= $order->orderNumber ?></a></td>
                    <td><?= $order->orderDate ?></td>
                    <td><?= $order->shippedDate ?></td>
                    <td><?= $order->status ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>