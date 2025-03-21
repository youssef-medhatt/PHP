<?php


$errors = [];
$old_data = [];

if (isset($_GET["errors"])) {
    $errors = $_GET["errors"];
    echo "<br>";

    $errors = json_decode($errors, true);
}

if (isset($_GET["old"])) {

    $old_data = $_GET["old"];
    $old_data = json_decode($old_data, true);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h2>Registration</h2>
    <form action="done.php" method="post">
        <label>First Name: <input type="text" name="first_name"
                value='<?php echo isset($old_data["first_name"]) ? $old_data["first_name"] : "" ?>'></label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["first_name"]) ? $errors["first_name"] : ""; ?>
        </div>
        <br><br>
        <label>Last Name: <input type="text" name="last_name"
                value='<?php echo isset($old_data["last_name"]) ? $old_data["last_name"] : "" ?>'></label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["last_name"]) ? $errors["last_name"] : ""; ?>
        </div>
        <br><br>
        <label>Address: <textarea
                name="address"><?php echo isset($old_data["address"]) ? $old_data["address"] : "" ?>'</textarea></label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["address"]) ? "{$errors['address']}" : ""; ?>
        </div>
        <br><br>
        <label>Country:
            <select name="country">
                <option value="USA" <?php echo (isset($old_data["country"]) && $old_data["country"] == "USA") ? 'selected' : ''; ?>>USA</option>
                <option value="UK" <?php echo (isset($old_data["country"]) && $old_data["country"] == "UK") ? 'selected' : ''; ?>>UK</option>
                <option value="India" <?php echo (isset($old_data["country"]) && $old_data["country"] == "India") ? 'selected' : ''; ?>>India</option>
                <option value="Egypt" <?php echo (isset($old_data["country"]) && $old_data["country"] == "Egypt") ? 'selected' : ''; ?>>Egypt</option>
                <option value="Mexico" <?php echo (isset($old_data["country"]) && $old_data["country"] == "Mexico") ? 'selected' : ''; ?>>Mexico</option>
                <option value="Sudan" <?php echo (isset($old_data["country"]) && $old_data["country"] == "Sudan") ? 'selected' : ''; ?>>Sudan</option>
            </select>

        </label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["country"]) ? "{$errors['country']}" : ""; ?>
        </div>
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" <?php echo (isset($old_data["gender"]) && $old_data["gender"] == "Male") ? 'checked' : ''; ?>> Male
        <input type="radio" name="gender" value="Female" <?php echo (isset($old_data["gender"]) && $old_data["gender"] == "Female") ? 'checked' : ''; ?>> Female

        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["gender"]) ? "{$errors['gender']}" : ""; ?>
        </div>
        <br><br>
        <label>Skills:
            <input type="checkbox" name="skills[]" value="PHP" <?php echo (isset($old_data["skills"]) && in_array("PHP", $old_data["skills"])) ? 'checked' : ''; ?>> PHP
            <input type="checkbox" name="skills[]" value="MySQL" <?php echo (isset($old_data["skills"]) && in_array("MySQL", $old_data["skills"])) ? 'checked' : ''; ?>> MySQL
            <input type="checkbox" name="skills[]" value="J2SE" <?php echo (isset($old_data["skills"]) && in_array("J2SE", $old_data["skills"])) ? 'checked' : ''; ?>> J2SE
            <input type="checkbox" name="skills[]" value="PostgreSQL" <?php echo (isset($old_data["skills"]) && in_array("PostgreSQL", $old_data["skills"])) ? 'checked' : ''; ?>> PostgreSQL

        </label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["skills"]) ? "{$errors['skills']}" : ""; ?>
        </div>
        <br><br>
        <label>Username: <input type="text" name="username" value='<?php echo isset($old_data["username"]) ? $old_data["username"] : "" ?>'></label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["username"]) ? "{$errors['username']}" : ""; ?>
        </div>
        <br><br>
        <label>Password: <input type="password" name="password" value='<?php echo isset($old_data["password"]) ? $old_data["password"] : "" ?>'></label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["password"]) ? "{$errors['password']}" : ""; ?>
        </div>
        <br><br>
        <label>Department: <input type="text" name="department" value="OpenSource" readonly></label>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["department"]) ? "{$errors['department']}" : ""; ?>
        </div>
        <br><br>
        <label>Captcha: <input type="text" name="captcha" value='<?php echo isset($old_data["captcha"]) ? $old_data["captcha"] : "" ?>'></label> <span>6h68Gc</span>
        <div class="text-danger  font-weight-bold">
            <?php echo isset($errors["captcha"]) ? "{$errors['captcha']}" : ""; ?>
        </div>
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>

</html>