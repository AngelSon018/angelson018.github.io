<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Codes</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            width: 400px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], button {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            width: 95%;
            font-size: 16px;
        }

        .qr-code img {
            display: block;
            max-width: 300px;
            margin: 0 auto;
        }

        .error {
            color: red;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Generate Friend QR Codes</h1>

    <?php
        // Handle form submissions (if any)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $text1 = isset($_POST['text1']) ? trim($_POST['text1']) : '';
            $text2 = isset($_POST['text2']) ? trim($_POST['text2']) : '';
            $text3 = isset($_POST['text3']) ? trim($_POST['text3']) : '';

            $errors = []; // Array to store error messages

            if (empty($text1) && empty($text2) && empty($text3)) {
                $errors[] = 'Please enter text, URL, or email address for at least one QR Code.';
            } else {
                // QR Code generation logic (replace with your preferred library or API integration)
                // This example uses placeholder QR Code URLs (replace with actual generation)
                $qrCodeUrl1 = 'https://via.placeholder.com/200x200?text=QR+Code+1';
                $qrCodeUrl2 = 'https://via.placeholder.com/200x200?text=QR+Code+2';
                $qrCodeUrl3 = 'https://via.placeholder.com/200x200?text=QR+Code+3';

                if (!empty($text1)) {
                    $qrCodeUrl1 = 'https://qrickit.com/api/qr.php?d='. '4,'.$text1.'CKTPFFRDNKJ&qrsize=300'; // Replace with actual generation using $text1
                }
                if (!empty($text2)) {
                    $qrCodeUrl2 = 'https://qrickit.com/api/qr.php?d='. '4,'.$text2.'CKTPFFRDNKJ&qrsize=300'; // Replace with actual generation using $text2
                }
                if (!empty($text3)) {
                    $qrCodeUrl3 = 'https://qrickit.com/api/qr.php?d='. '4,'.$text3.'CKTPFFRDNKJ&qrsize=300'; // Replace with actual generation using $text3
                }

                echo '<div class="container">';
                echo '<p>Your QR Code:</p>';
                echo '<div class="qr-code"><img src="' . $qrCodeUrl1 . '"></div>';
                echo '<div class="qr-code"><img src="' . $qrCodeUrl2 . '"></div>';
                echo '<div class="qr-code"><img src="' . $qrCodeUrl3 . '"></div>';
                echo '</div>';
            }
        }
    ?>

    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label for="text">Text Input:</label>

            </div>
            <div class="form-group">
            <input type="text" id="text1" name="text1" placeholder="Friend Code 1">
            </div>
            <div class="form-group">
            <input type="text" id="text2" name="text2" placeholder="Friend Code 2">
            </div>
            <div class="form-group">
            <input type="text" id="text3" name="text3" placeholder="Friend Code 3">
            </div>
            <button type="submit">Generate QR Code</button>
        </form>
    </div>

    </body>
</html>
