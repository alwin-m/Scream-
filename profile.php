<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scream - Home</title>
    <link rel="icon" type="image/png" href="blue.webp">  <!-- Favicon added here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scream - User Profile</title>
    <style>
        body {
            font-family: 'Noto Sans JP', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-image: url('image.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .profile-container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: 2px solid #e3e3e3;
        }
        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .profile-header {
            font-size: 1.4em;
            font-weight: bold;
            text-align: center;
            color: #555;
            margin-top: 20px;
        }
        .profile-item {
            margin-bottom: 20px;
        }
        .profile-item label {
            font-weight: bold;
            font-size: 1.1em;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        .profile-item span {
            font-size: 1.2em;
            color: #555;
        }
        .profile-footer {
            text-align: center;
            font-size: 0.9em;
            color: #888;
            margin-top: 30px;
        }
        /* Advertisement Styles */
        .ad-container {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            width: 300px;
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            z-index: 1000;
        }
        .ad-content {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 1.2em;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .skip-ad {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e60012;
            color: white;
            font-size: 0.9em;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            z-index: 1001;
        }
        .skip-ad:hover {
            background-color: #b0000e;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h1>Scream - User Profile</h1>
    <div class="profile-header">Profile Information</div>
    
    <?php if ($user_data): ?>
        <div class="profile-item">
            <label><span class="icon">👤</span> Username</label>
            <span><?php echo htmlspecialchars($user_data['username']); ?></span>
        </div>
        <div class="profile-item">
            <label><span class="icon">📝</span> Full Name</label>
            <span><?php echo htmlspecialchars($user_data['fullname']); ?></span>
        </div>
        <div class="profile-item">
            <label><span class="icon">🎂</span> Age</label>
            <span><?php echo htmlspecialchars($user_data['age']); ?></span>
        </div>
        <div class="profile-item">
            <label><span class="icon">⚧</span> Sex</label>
            <span><?php echo htmlspecialchars($user_data['sex']); ?></span>
        </div>
        <div class="profile-item">
            <label><span class="icon">📍</span> Location</label>
            <span><?php echo htmlspecialchars($user_data['location']); ?></span>
        </div>
    <?php else: ?>
        <p style="text-align: center; color: red;">User not found.</p>
    <?php endif; ?>
    
    <div class="profile-footer">
        <p>&copy; 2025 Scream. User Profile</p>
    </div>
</div>
<!-- Advertisement -->
<div class="ad-container" id="ad-container">
    <div class="ad-content" id="ad-content">
        <p>Advertisement</p>
    </div>
    <button class="skip-ad" onclick="closeAd()">Skip Ad</button>
</div>

<script>
    const adImages = ['cakeworld.jpg', 'car.png','ba.png']; // Ad image file paths
    let currentAdIndex = 0;
    const adContent = document.getElementById('ad-content');
    const adContainer = document.getElementById('ad-container');

    // Function to change the ad background
    function changeAd() {
        adContent.style.backgroundImage = `url('${adImages[currentAdIndex]}')`;
        adContent.style.backgroundSize = 'cover';
        adContent.style.backgroundPosition = 'center';
        currentAdIndex = (currentAdIndex + 1) % adImages.length;
    }

    // Initialize ad rotation every 5 seconds
    const adInterval = setInterval(changeAd, 5000);
    changeAd(); // Start with the first ad

    // Close ad when skip button is clicked
    function closeAd() {
        adContainer.style.display = 'none';
        clearInterval(adInterval);
    }
</script>

</body>
</html> 

