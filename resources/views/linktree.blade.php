<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zimaya Perfumes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #1a1a1a; /* background luar */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
        }

       .container {
    width: 100%;
    max-width: 400px;
    background: #000;
    border-radius: 20px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    color: #fff;
}

        .logo {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #fff;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-weight: bold;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        h2 {
            margin: 10px 0 5px;
        }

        p {
            font-size: 14px;
            color: #aaa;
        }

        .socials {
            margin: 15px 0;
        }

        .socials i {
            margin: 0 8px;
            font-size: 18px;
            cursor: pointer;
        }

        .section-title {
            margin: 25px 0 10px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            color: #ccc;
        }

        .link-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #444;
            border-radius: 12px;
            padding: 12px 15px;
            margin: 10px 0;
            cursor: pointer;
            transition: 0.2s;
        }

        .link-card:hover {
            background: #111;
        }

        .flag {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #fff;
            margin-right: 10px;
        }

        .left {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .left span {
            flex: 1;
            text-align: center;
        }

        .dots {
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="logo">
            <img src="images.png" alt="Zimaya Logo">
        </div>

        <h2>@zimayaperfumes</h2>
        <p>Where fragrant notes turn into stories.</p>

        <div class="socials">
            <img src="logo ig linktreee.png" alt="Instagram" style="width:24px; margin:0 8px;">
            <img src="logo tt linktreee.png" alt="TikTok" style="width:24px; margin:0 8px;">
            <img src="logo yt linktreee.png" alt="YouTube" style="width:24px; margin:0 8px;">
            <img src="loho fb linktreee.png" alt="Facebook" style="width:24px; margin:0 8px;">
        </div>

        <div class="section-title">OFFICIAL ZIMAYA WEBSITES</div>

        <div class="link-card">
            <div class="left">
                <img src="uae.jpg" alt="UAE"
                    style="width:35px; height:35px; border-radius:50%; margin-right:10px; object-fit:cover;">
                <span>UAE</span>
            </div>
            <div class="dots">⋮</div>
        </div>

        <div class="link-card">
            <div class="left">
                <img src="usa.jpg" alt="USA"
                    style="width:35px; height:35px; border-radius:50%; margin-right:10px; object-fit:cover;">
                <span>USA</span>
            </div>
            <div class="dots">⋮</div>
        </div>

        <div class="link-card">
            <div class="left">
                <img src="uk.jpg" alt="UK"
                    style="width:35px; height:35px; border-radius:50%; margin-right:10px; object-fit:cover;">
                <span>UK</span>
            </div>
            <div class="dots">⋮</div>
        </div>

        <div class="link-card">
            <div class="left">
                <img src="india.jpg" alt="India"
                    style="width:35px; height:35px; border-radius:50%; margin-right:10px; object-fit:cover;">
                <span>INDIA</span>
            </div>
            <div class="dots">⋮</div>
        </div>

        <div class="link-card">
            <div class="left">
                <img src="spain.jpg" alt="Spain"
                    style="width:35px; height:35px; border-radius:50%; margin-right:10px; object-fit:cover;">
                <span>SPAIN</span>
            </div>
            <div class="dots">⋮</div>
        </div>

        <div class="link-card">
            <div class="left">
                <img src="arab.jpg" alt="Saudi Arabia"
                    style="width:35px; height:35px; border-radius:50%; margin-right:10px; object-fit:cover;">
                <span>SAUDI ARABIA</span>
            </div>
            <div class="dots">⋮</div>
        </div>
    </div>
</body>

</html>
