<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Hospital</title>
    <style>

        /* Reset some default styles */
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Style for the slideshow container */
.slideshow-container {
    position: relative;
    max-width: 100%; /* Adjusted for full-width */
    height: 85vh; /* 75% of viewport height */
    overflow: hidden; /* Hide overflow for smooth transition */
    margin-top: 20px;
}

/* Style for each slide */
.slide {
    display: none;
    width: 100%; /* Full-width for each slide */
    height: 100%; /* Full-height for each slide */
    transition: opacity 1s; /* Smooth fade-in/out transition */
    position: relative;
}

/* Style for the images in each slide */
.slide img {
    width: 100%; /* Full-width image */
    height: 100%; /* Full-height image */
    object-fit: cover; /* Maintain aspect ratio and cover the entire slide */
}

/* Style for the text container */
.text-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

        /* Style for the text */
        .subhead {
            font-size: 24px;
            color: #fff;
        }

        .display-4 {
            font-size: 48px;
            color: #fff;
        }

        .text-primary {
            color: #53eb42;
        }

        .btn-primary {
            background-color: #53eb42;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        /* Style for the slideshow controls */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 1; /* Place controls on top of images */
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }
  
        


    </style>
</head>
<body>
    
    <div class="slideshow-container">
        <div class="slide">
            <img src="assets\img\blog\blog_1.jpg" alt="">
            <div class="text-container">
                <span class="subhead">Ensure Your Good Health</span>
                <h1 class="display-4"><span class="text-primary">XYZ </span>Hospital</h1>
                <a href="resources\views\user\appointment.blade.php" class="btn btn-primary">Make an Appointment</a>
            </div>
        </div>
        <div class="slide">
            <img src="assets\img\blog\blog_8.jpg" alt="">
            <div class="text-container">
                <span class="subhead">Your Health Matters</span>
                <h1 class="display-4"><span class="text-primary">XYZ </span>Hospital</h1>
                <a href="resources\views\user\appointment.blade.php" class="btn btn-primary">Make an Appointment</a>
            </div>
        </div>

        <div class="slide">
            <img src="assets\img\blog\blog_3.jpg" alt="">
            <div class="text-container">
                <span class="subhead">You Are Good</span>
                <h1 class="display-4"><span class="text-primary">XYZ </span>Hospital</h1>
                <a href="resources\views\user\appointment.blade.php" class="btn btn-primary">Make an Appointment</a>
            </div>
        </div>

        <div class="slide">
            <img src="assets\img\blog\blog_4.jpg" alt="">
            <div class="text-container">
                <span class="subhead">Health is Welth</span>
                <h1 class="display-4"><span class="text-primary">XYZ </span>Hospital</h1>
                <a href="resources\views\user\appointment.blade.php" class="btn btn-primary">Make an Appointment</a>
            </div>
        </div>

        <div class="slide">
            <img src="assets\img\blog\blog_6.jpg" alt="">
            <div class="text-container">
                <span class="subhead">Ensure Your Money</span>
                <h1 class="display-4"><span class="text-primary">XYZ </span>Hospital</h1>
                <a href="resources\views\user\appointment.blade.php" class="btn btn-primary">Make an Appointment</a>
            </div>
        </div>
        <div class="slide">
            <img src="assets\img\blog\blog_7.jpg" alt="">
            <div class="text-container">
                <span class="subhead">Save Your Money</span>
                <h1 class="display-4"><span class="text-primary">XYZ </span>Hospital</h1>
                <a href="resources\views\user\appointment.blade.php" class="btn btn-primary">Make an Appointment</a>
            </div>
        </div>
        <!-- Add more slides as needed -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <script>
        let slideIndex = 0;

        function showSlides() {
            const slides = document.getElementsByClassName("slide");
            
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            
            slideIndex++;
            
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 3 seconds (adjust as needed)
        }

        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        showSlides();
    </script>
</body>
</html>
