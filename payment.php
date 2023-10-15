<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0e6d2; /* Page background color (skin color) */
            text-align: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the content stretches to at least the full viewport height */
        }

        .navbar {
            background-color: #8b4513; /* Wooden color for navbar */
            color: #fff;
            padding: 10px 20px;
            text-align: left;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            display: inline;
            margin-right: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: #fff;
            position: relative;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #ffc107; /* Change color on hover */
        }

        .content {
            flex: 1; /* Fill available space */
            padding: 60px;
            text-align: center;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        img {
            max-width: 200px;
            margin: 20px 0;
        }

        p {
            font-size: 18px;
        }

        .donate-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #8b4513; /* Wooden color for button */
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .donate-button:hover {
            background-color: #ffc107; /* Change button color on hover */
            color: #000; /* Change text color on hover */
        }

        .footer {
            background-color: #000; /* Black color for footer */
            color: #fff;
            padding: 0 0 10px ; /* Adjust the padding */

          
            height: 36px;

        }

        .footer-text {
            font-size: 14px;
        }
    </style>
    <title>Your Website</title>
</head>
<body>
    <header class="navbar">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="/about_us.html">About Us</a></li>
                <li><a href="/donate_now.html">Donate Now</a></li>
                <li><a href="Contact_us.html">Contacts</a></li>
                <li><a href="/Faqs.html">FAQs</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1>Payment Confirmation</h1>

      
    
    <div class="content">
        <h1>UPI</h1>
        <img src="upilogo.jpeg" alt="Your Logo">
        <p>Thank you for your generous donation to GiveHope! Your contribution means the world to us and the causes we support. With your help, we're one step closer to creating a brighter and more hopeful future for those in need.</p>
      
    </div>

    <footer class="footer">
        <p class="footer-text">2023 GiveHope. All Rights Reserved.</p>
    </footer>
</body>
</html>
