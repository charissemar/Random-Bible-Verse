<?php
$json_data = file_get_contents('https://bible-api.com/?random=verse');

$data = json_decode($json_data, true);

$verse_text = $data['verses'][0]['text'];
$verse_reference = $data['reference'];
$verse_translation_name = $data['translation_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Bible Verse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f4f4;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content-wrapper {
            max-width: 800px;
            width: 100%;
            text-align: center;
        }

        .verse-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .intro-message {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        .verse-text {
            font-size: 1.5em;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .verse-info {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .api-source {
            font-size: 12px;
            color: #999;
            margin-bottom: 20px;
        }

        .api-source a {
            color: #999;
            text-decoration: none;
        }

        .api-source a:hover {
            text-decoration: underline;
        }

        .refresh-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dddbdb;
            color: #121212;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .refresh-button:hover {
            background-color: #d0d0d0;
        }

        .quote {
            font-style: italic;
            margin-top: 20px;
        }

        @media (max-width: 480px) {
            .verse-text {
                font-size: 18px;
            }
            .verse-info {
                font-size: 12px;
            }
            .api-source {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="verse-container">
            <p class="verse-text"><?php echo $verse_text; ?></p>
            <p class="verse-info"><strong>Reference:</strong> <?php echo $verse_reference; ?></p>
            <p class="verse-info"><strong>Translation:</strong> <?php echo $verse_translation_name; ?></p>
            <p class="api-source">API Source: <a href="https://bible-api.com/" target="_blank">bible-api.com</a></p>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="refresh-button">Generate a New Verse</a>
        </div>
        <div class="intro-message">
            <h2>About this Project</h2>
            <p><strong>Hi! My name is Charisse Marie Almagro.</strong><br><br> I decided to create a random verse generator based on the free API provided by bible-api.com. <br>Credits to Tim Morgan for creating this free API. The version of this Bible is World English Bible (WEB). I hope you will enjoy this API project.</p>
            <p class="quote">"What comes into our minds when we think about God is the most important thing about us."<br>― A.W. Tozer</p>
        </div>
    </div>
</body>
</html>