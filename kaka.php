
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<form action="ro'yxat.php" method="post">
    <h2>So`rovnoma</h2>
    <div class="content">
        <div class="input-box">
            <label for="givename">Ismingiz</label>
            <input type="text" placeholder="Ismingizni kiriting" id="givename" name="givename" required>
        </div>

        <div class="input-box">
            <label for="lastname">Familiyangiz</label>
            <input type="text" placeholder="Familiyangizni kiriting " id="lastname" name="lastname" required>
        </div>

        <div class="input-box">
            <label for="email">Email</label>
            <input type="email" placeholder="pochtangizni kiriting" id="email" name="email" required>
        </div>

        <div class="input-box">
            <label for="country">Mamlakat</label>
            <input type="text" placeholder="Mamlakatingiz?" id="country" name="country" required>
        </div>

        <div class="input-box">
            <label for="birthday">Tug'ulgan kun</label>
            <input type="birthday" placeholder="Tug`ulgan kuningizni kiriting" id="birthday" name="birthday" required>
        </div>
        
        <div class="input-box">
            <label for="dream">Orzu</label>
            <input type="text" placeholder="Orzularingiz?" id="dream" name="dream" required>
        </div>

        <div class="input-box">
            <label for="workplace">Ish joyi</label>
            <input type="workplace" placeholder="Ish joyingiz?" id="workplace" name="workplace" required>
        </div>

        <div class="input-box">
            <label for="achiavements">Yutuqlar</label>
            <input type="achiavements" placeholder="Yutuqlaringiz?" id="achiavements" name="achiavements" required>
        </div>

        <div class="input-box">
            <label for="experience">Tajriba</label>
            <input type="experience" placeholder="Tajribangiz?" id="experience" name="experience" required>
        </div>

        <div class="input-box">
            <label for="smoking">Chekish</label>
            <input type="smoking" placeholder="Chekasizmi?" id="smoking" name="smoking" required>
        </div>

        <div class="input-box">
            <label for="family">Oilaviy holat</label>
            <input type="family" placeholder="Oilaviy holatingiz?" id="family" name="family" required>
        </div>

        <div class="input-box">
            <label for="skills">Ko'nikmalar</label>
            <input type="skills" placeholder="Ko'nikmalaringiz?" id="skills" name="skills" required>
        </div>
        <span class="gender-title">Jins</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="erkak">
                    <label for="erkak">Erkak</label>
                    <input type="radio" name="gender" id="ayol">
                    <label for="ayol">Ayol</label>
                    <input type="radio" name="gender" id="boshqa">
                    <label for="boshqa">Boshqa</label>
                </div>
    </div>
    <div class="alert">
                <p>
                “Ro`yxatdan o`tish” tugmasini bosish orqali siz bizning fikrimizga rozilik bildirasiz <a href="#">Termlar,</a> <a href="#">Maxfiy siyosati</a> va
                    <a href="#">Cookie-fayllar </a> siyosatimizga rozilik bildirasiz. Siz bizdan SMS-xabarnoma olishingiz mumkin va istalgan vaqtda undan voz kechishingiz mumkin.
                </p>
            </div>
    <div class="button-container">
        <button name="submit">Ro`yxatdan o`tish</button>
    </div>
</form>
</div>
</body>
</html>
