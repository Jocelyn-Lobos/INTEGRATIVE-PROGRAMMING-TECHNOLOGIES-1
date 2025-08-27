 <?php
     $profiles=[
     [
        "name" => "Aprilyn D. Timkang",
        "age" => 20,
        "course" => "BSIT",
        "hobbies" => "Playing basketball and watching movies.",
        "address" => "Las Pinas City",
        "image" => "aprilyn.jpeg",
        "quote" =>"Success is not final, failure is not fatal: It is the courage to continue that counts."
		
      ],
	   [
        "name" => "Jocelyn C. Lobos",
        "age" => 21,
        "course" => "BSIT",
        "hobbies" => "Watching anime, K-drama and reading manhwa.",
        "address" => "Tunasan, Muntinlupa City",
        "image" => "jc.jpeg",
        "quote" => "Life is too short to waste a second."
      ],
	   [
        "name" => "Xyrll D. Rongavilla",
        "age" => 19,
        "course" => "BSIT",
        "hobbies" => "Playing Roblox, COD, and ML.",
        "address" => " Cupang Muntilupa City",
        "image" => "xy.jpeg",
        "quote" => "A reader lives a thousand lives before he dies."
      ],
	   [
        "name" => "Rizza May Ligad",
        "age" => 20,
        "course" => "BSIT",
        "hobbies" => "Watching movies and sleeping.",
        "address" => "Cupang Muntilupa City",
        "image" => "Riz.jpeg",
        "quote" => "Protect and prioritize your peace at all cost."
       ]
	  ];
	  $hour = date("H");
    if ($hour < 12) {
      $greeting = "Good morning!";
    } elseif ($hour < 18) {
      $greeting = "Good afternoon!";
    } else {
      $greeting = "Good evening!";
    }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phantom Troupe</title>
  <style>
    body {
      background-color:#A9A9A9;
      color: #333;
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
    }
    .logo {
      width: 80px;
	  height: 80px;
	  border-radius: 50%;
	  object-fit: cover;
      margin-top: 5px;
    }

    .group-name {
      font-size: 24px;
      margin: 2px 0;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .profile-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      padding: 10px;
    }

     /* Flip card styles */
    .profile {
      width: 200px;
      perspective: 1000px;
    }

    .card {
      width: 100%;
      height: 300px;
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.6s;
      cursor: pointer;

    }

    .card.is-flipped {
      transform: rotateY(180deg);
	   box-shadow: 0 0 20px 5px #00ffcc;
       border: 2px solid #00ffcc;
    }

    .card-front, .card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 10px;
      padding: 10px;
      box-sizing: border-box;
      background:#B6B6B4;
    }

    .card-front img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 8px;
    }

    .card-front h3 {
      font-size: 14px;
      margin: 4px 0;
	  color:black;
    }

    .card-front p {
      font-size: 12px;
      color: #222;
      margin: 2px 0;
    }

    .card-back {
      transform: rotateY(180deg);
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      font-style: italic;
      font-size: 13px;
      padding: 15px;

    }

	.dark-mode {
    background-color: #1e1e1e;
    color: #f2f2f2;
    }
	.dark-btn{
     margin:10px;
	 padding:8px 15px;
	 border:none;
	 border-radius:10px;
	 cursor:pointer;
	 background-color:#333;
	 color:#fff;
	 transition:0.3s;
	}
    /* Text color for names and card-back in dark mode */
   .dark-mode  {
    color: #f2f2f2;
    }

   .dark-mode .card-back {
    background-color: #2a2a2a; /* optional darker background */
    color: #f2f2f2;
    }

  
	@media (max-width: 768px) {
    .group-name{font-size:22px;
    }
	.profile {
      width: 160;
    }

    .card {
      height: 240px;
    }

    .card-front img {
      height: 100px;
    }
	}
	@media (max-width: 480px) {
    .group-name {
      font-size: 20px;
      letter-spacing: 1px;
    }

    .profile-container {
      flex-direction: column;
      align-items: center;
    }

    .profile {
      width: 80%;
    }

    .card {
      height: 250px;
    }

    .card-front h3 {
      font-size: 14px;
    }

    .card-front p {
      font-size: 11px;
    }

    footer {
      font-size: 12px;
    }
  }
  </style>
</head>
<body>

	 <img src="logoo.jpeg" alt="Group Logo" class="logo">
     <h1 class="group-name">PHANTOM TROUPE</h1>
     <p><?php echo $greeting; ?> Welcome to our page.</p>

 <main>
  <div class="profile-container">
      <?php foreach ($profiles as $member): ?>
        <div class="profile">
          <div class="card">
            <div class="card-front">
              <img src="<?= $member['image']; ?>" alt="Photo of <?= $member['name']; ?>">
              <h3><?= $member['name']; ?></h3>
              <p><strong>Age:</strong> <?= $member['age']; ?> Years Old</p>
              <p><strong>Course:</strong> <?= $member['course']; ?></p>
              <p><strong>Hobbies:</strong> <?= $member['hobbies']; ?></p>
              <p><strong>Address:</strong> <?= $member['address']; ?></p>
            </div>
            <div class="card-back">
              <p><?= $member['quote']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
 </main>

   <!-- JavaScript to enable flip on click -->
  <script>
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
      card.addEventListener('click', () => {
        card.classList.toggle('is-flipped');
      });
    });
  </script>
  <button class="dark-btn"
   onclick="DarkMode()">Dark Mode</button>

   <!--JavaScript that enable us to turn our page into dark-mode-->
<script>
  function DarkMode() {
    document.body.classList.toggle('dark-mode');
  }
</script>


  <footer>
  <p>&copy; <?php echo date("Y"); ?> Phantom Troupe. All rights reserved.</p>
  </footer>



  </body>
</html>
