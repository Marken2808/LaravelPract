<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <h2>PHP Form Register Member</h2>

    <form method="post" action="controller/insert.php">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        School:
        <input class="form-control" list="schools" name="school">
        <datalist id="schools">
            <option value="University 1">
            <option value="University 2">
            <option value="University 3">
            <option value="University 4">
            <option value="University 5">
        </datalist>
        <span class="error">* <?php echo $schoolErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>