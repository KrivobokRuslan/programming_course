<form action="form.php" method="post">
    <p>
        <label>Імʼя:</label>
        <input type="text" name="name">
    </p>
    <p>
        <label>Введіть свій вік:</label>
        <input type="text" name="age">
    </p>
    <p>
        <label>Про себе:</label>
        <textarea name="description"></textarea>
    </p>
    <p>
        <label>Стать:</label>
        Чол.
        <input type="radio" name="sex" value="male">
        Жін.
        <input type="radio" name="sex" value="female">
    </p>
    <p>
        <label>Одружений (заміжня):</label>
        <input type="checkbox" name="marital_status">
    </p>
    <p>
        <label>Місто проживання:</label>
        <select name="city">
            <option value="Kyiv">Київ</option>
            <option value="Kharkiv">Харків</option>
            <option value="Rakhiv">Рахів</option>
        </select>
    </p>
    <button type="submit">Відправити форму</button>
</form>

<?php
print_r($_POST);