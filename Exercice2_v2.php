<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            font-size: 24px;
            background-color: #f0f0f0;
            color: #333;
        }
        .message {
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <div class="message" background-color="#4CAF50">
        <?php
        echo "Bonjour tout le monde ! Voici mon message affiché avec PHP";
        ?>
    </div>
    <p>ce message est produit par <?php echo "PHP"; ?></p>

</body>
</html>