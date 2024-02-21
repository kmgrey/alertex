<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <meta name="description" content="Need to get in touch? Give us a ring or send us a message and one of our team will be happy to help.">
    <link rel="icon" type="image/x-icon" href="./images/logos/alertex-favicon-1.ico">
    <link rel="stylesheet" href="./stylesheets/styles.css">
    <link rel="stylesheet" href="./stylesheets/contact-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="./scripts/script.js"></script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QE68W5NPF9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QE68W5NPF9');
</script>
<body>
    <!-- H E A D E R -->
    <?php include './header.php' ?>
    <main>
        <!-- T O P  H E R O -->
        <section class="top-hero section">
            <div class="outer-container flex-wrap">
                <div class="inner-container">
                    <div>
                    </div>
                </div>
                <div class="inner-container flex-column">
                    <h1>Contact Us</h1>
                    <p class="p-head">
                        From sales to technical support, we're happy to help
                    </p>
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            UK based customer support
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Technical help over the phone
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Assistance with site plans
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Schedule site surveys
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- M A K E  C O N T A C T  F O R M  F U N C T I O N A L -->
        <section class="section">
            <div class="outer-container">
                <!-- C O N T A C T  F O R M -->
                <div class="container flex-j-center">
                    <form id="contact-form" action="https://formsubmit.co/info@luminite.co.uk" method="POST">
                        <fieldset>
                            <input type="text" id="first-name" name="first-name" placeholder="First name*" required>
                            <input type="text" id="last-name" name="last-name"  placeholder="Last name*"required>
                            <input type="email" id="email" name="email" placeholder="Email address*" required>
                            <input type="text" id="company" name="company" placeholder="Company / School*" required>
                            <input type="hidden" name="_subject" value="Alertex Contact Form">
                            <!-- <input type="hidden" name="_captcha" value="false"> -->
                            <!-- F I X  M E -->
                            <input type="hidden" name="_next" value="https://alertex.co.uk/contact.php/">
                        </fieldset>
                        <fieldset>
                            <textarea name="message" rows="10" cols="50" placeholder="Your message...*" required></textarea>
                        </fieldset>
                        <input type="submit" class="blue-button" value="send message"> 
                    </form>
                </div>
                <!-- O P E N I N G  H O U R S -->
                <div class="container flex-column">
                    <div class="opening-hours">
                        <h2>Opening Hours</h2>
                        <table id="contact-table">
                        <tr>
                            <td>Monday</td>
                            <td>09:00 - 17: 00</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>09:00 - 17: 00</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>09:00 - 17: 00</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>09:00 - 17: 00</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>08:00 - 16: 00</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>Closed</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>Closed</td>
                        </tr>
                        <tr>
                            <td>Bank Holidays</td>
                            <td>Closed</td>
                        </tr>
                        </table>
                    </div>
                    <!-- C O N T A C T  D E T A I L S -->
                    <div class="contact-details">
                        <p class="p-head">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg> 
                            Office: 020 8368 7887
                        </p>
                        <p class="p-head">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg> 
                            Technical: 020 8368 7887
                        </p>
                        <p class="p-head">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>  
                            info@luminite.co.uk
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- G O O G L E  M A P S -->
        <section>
            <div class="container">
                <iframe id="google-maps"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.4299770673583!2d-0.15142492268791838!3d51.61533230281182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487619996c655395%3A0xacf2c687235676ec!2sLuminite%20Electronics%20Ltd!5e0!3m2!1sen!2suk!4v1703239617407!5m2!1sen!2suk" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </main>
    <!-- F O O T E R -->
    <?php include './footer.php' ?>
</body>
</html>