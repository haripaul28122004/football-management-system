<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Football Club Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .contact-info {
            margin-top: 30px;
        }
        .contact-info p {
            margin: 10px 0;
        }
        .contact-form {
            margin-top: 30px;
        }
        .contact-form input,
        .contact-form textarea,
        .contact-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .contact-form button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-info">
            <p><strong>Address:</strong> [Your Club's Address]</p>
            <p><strong>Phone:</strong> [Your Club's Phone Number]</p>
            <p><strong>Email:</strong> <a href="mailto:info@example.com">info@example.com</a></p>
            <p><strong>Social Media:</strong> Follow us on <a href="[Your Club's Facebook URL]">Facebook</a>, <a href="[Your Club's Twitter URL]">Twitter</a>, <a href="[Your Club's Instagram URL]">Instagram</a></p>
        </div>
        <div class="contact-form">
            <h2>Send us a message</h2>
            <form action="mailto:your-email@example.com" method="post" enctype="text/plain">
                <input type="text" name="name" placeholder="Your Name" required><br>
                <input type="email" name="email" placeholder="Your Email" required><br>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea><br>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>
