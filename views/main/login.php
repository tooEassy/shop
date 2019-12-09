<main class='loginMain'>
    <form action="/enter/" method="post" class="loginForm">
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <span><?php echo "$wrongInfo $wrongEmail $wrongPassword" ?></span>
        <input type="submit" name="login">
    </form>

</main>

