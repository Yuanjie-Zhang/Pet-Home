<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHome - Homepage</title>
    <style>
        /* General page settings */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navigation Bar */
        nav {
            background-color: #ef711c;
            color: white;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Brand Section */
        nav .brand {
            font-size: 1.8rem;
            color: white;
            margin-left: 20px;
        }

        /* Navigation Links */
        nav .nav-links {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            flex-grow: 1;
        }

        nav .nav-links li {
            margin: 0 15px;
        }

        nav .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
        }

        nav .nav-links a:hover {
            color: #f3d74b;
        }

        /* Logout Button */
        nav .logout {
            margin-right: 20px;
        }

        nav .logout button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 5px;
        }

        nav .logout button:hover {
            background-color: #d32f2f;
        }

        /* Carousel */
        .carousel {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .carousel .slides {
            display: flex;
            transition: transform 1s ease;
        }

        .carousel .slide {
            min-width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .carousel .slide:nth-child(1) {
            background-image: url('https://img2.pconline.com.cn/pconline/0706/07/1031072_070611dog29.jpg');
        }

        .carousel .slide:nth-child(2) {
            background-image: url('https://img2.pconline.com.cn/pconline/0707/13/1057264_070717dog18.jpg');
        }

        .carousel .slide:nth-child(3) {
            background-image: url('https://img1.pconline.com.cn/piclib/200902/09/batch/1/21870/1234188604019ydqb55uisk.jpg');
        }

        .carousel .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            z-index: 2;
        }

        .carousel .controls button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .carousel .controls button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
                padding: 0.5rem;
            }

            nav .nav-links {
                display: block;
                text-align: left;
                width: 100%;
                margin-top: 10px;
            }

            nav .nav-links li {
                margin: 10px 0;
            }

            nav .logout {
                align-self: flex-end;
                margin-top: 10px;
            }
        }

    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <!-- Brand Name -->
        <div class="brand">Pet-Home</div>

        <!-- Navigation Links -->
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('cats') }}">Cats</a></li>
            <li><a href="{{ route('dogs') }}">Dogs</a></li>
            <li><a href="{{ route('forum') }}">Forum</a></li>
            <li><a href="{{ route('pets.create') }}">Post</a></li>
        </ul>

        <!-- Logout Button -->
        <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Carousel -->
    <div class="carousel">
        <div class="slides">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>
        <div class="controls">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
    </div>

    <script>
        // JavaScript for Carousel
        let currentIndex = 0;
        const slides = document.querySelector('.carousel .slides');
        const totalSlides = document.querySelectorAll('.carousel .slide').length;

        // Next button click
        document.getElementById('next').addEventListener('click', () => {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateCarousel();
        });

        // Previous button click
        document.getElementById('prev').addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalSlides - 1;
            }
            updateCarousel();
        });

        // Update carousel
        function updateCarousel() {
            const offset = -currentIndex * 100;
            slides.style.transform = `translateX(${offset}%)`;
        }

        // Auto-play carousel
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        }, 5000);
    </script>

    <!-- Footer -->
    <footer style="text-align: center; padding: 1rem; background-color: #333; color: white;">
        <p>Page created by b01734505</p>
    </footer>

</body>
</html>
