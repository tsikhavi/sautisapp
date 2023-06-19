<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>PHP Contact Form</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <header>
                <h1>Send Us a Message</h1>
            </header>
        
            <div>
                <label for="name">Name:</label>
                <input type="text" value="" name="name" id="name" placeholder="Full name">
                <small></small>
            </div>
        
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="" placeholder="Email address">
                <small></small>
            </div>
        
            <div>
                <label for="subject">Subject:</label>
                <input type="subject" name="subject" id="subject" value="" placeholder="Enter a subject">
                <small></small>
            </div>
        
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5"></textarea>
                <small></small>
            </div>
        
            <label for="nickname" aria-hidden="true" class="user-cannot-see"> Nickname
                <input type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
            </label>
        
            <button type="submit">Send Message</button>
        </form>
    </main>
</body>
</html>