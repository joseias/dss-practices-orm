<html>

<head>
    <title>Mi Web</title>
</head>

<body>
    <h3>
        <?php echo "Name: $user->name"; ?>
    </h3>
    <p>
        <?php echo "email: $user->email"; ?>
    </p>
    <p>
        <?php
        $number = $user->phone->number;
        echo "Phone: $number";
        ?>
    </p>
</body>

</html>