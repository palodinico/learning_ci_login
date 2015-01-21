<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ログインページ</title>

</head>
<body>

    <div id="container">
        <h1>ログインページ</h1>

        <?php
        echo form_open("main/login_validation");
        echo validation_errors();
        
        echo "<p>Email: ";
        echo form_input("email", $this->input->post("email"));
        echo "</p>";

        echo "<p>Password: ";
        echo form_password("password");
        echo "</p>";

        echo "<p>";
        echo form_submit("login_submit", "Login");
        echo "</p>";

        echo form_close();

        ?>
    </div>

</body>
</html>