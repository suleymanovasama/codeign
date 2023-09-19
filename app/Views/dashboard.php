<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Hoş geldiniz, <?php echo $user['name']; ?></h1>
    <p>E-posta: <?php echo $user['email']; ?></p>
    
    <a href="<?= base_url("logout") ?>">Logout</a>

</body>
</html>
