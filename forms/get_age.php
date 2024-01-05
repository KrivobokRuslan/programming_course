<form action="" method="post">
    <p>
        <label>Вік людини:</label>
        <input type="text" name="age">
    </p>
    <button type="submit">Відправити</button>
</form>
<?php
if (!empty($_POST)) {
    if ($_POST['age'] >= 0 && $_POST['age'] <= 3) {
        echo '<p>Немовля</p>';
    } elseif ($_POST['age'] >= 4 && $_POST['age'] <= 6) {
        echo '<p>В садочку</p>';
    } elseif ($_POST['age'] >= 7 && $_POST['age'] <= 18) {
        echo '<p>В школі</p>';
    } elseif ($_POST['age'] >= 19 && $_POST['age'] <= 25) {
        echo '<p>В університеті</p>';
    } elseif ($_POST['age'] >= 26 && $_POST['age'] <= 65) {
        echo '<p>Працює</p>';
    } else {
        echo '<p>На пенсії</p>';
    }
}


