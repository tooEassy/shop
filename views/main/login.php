<main class='loginMain'>
    <form action="/enter/" method="post" class="loginForm">
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <input type="submit" name="login">
    </form>
    <?php
    echo "$wrongInfo $wrongEmail $wrongPassword"
    ?>
</main>

