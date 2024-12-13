<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Breeds - PetHome</title>
    <style>
        /* Page styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        /* Main container */
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Title styling */
        h1, h2 {
            color: #333;
        }

        /* Dog breeds section */
        .dog-section {
            margin-bottom: 3rem;
        }

        /* Card container styling */
        .dog-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Individual dog card styling */
        .dog-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            width: 30%;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        /* Hover effect for dog card */
        .dog-card:hover {
            transform: translateY(-10px);
        }

        /* Image styling for dog card */
        .dog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Title for dog card */
        .dog-card h3 {
            margin: 1rem 0;
            font-size: 1.2rem;
        }

        /* Description text inside dog card */
        .dog-card p {
            padding: 0 1rem 1rem;
            font-size: 0.9rem;
            color: #555;
        }

        /* Clearfix for floating elements */
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Dog care tips section */
        .care-section {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .care-section ul {
            list-style-type: none;
            padding: 0;
        }

        .care-section li {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: #444;
        }

        .care-section li:before {
            content: '✔️';
            margin-right: 10px;
            color: #4CAF50;
        }

        /* Responsive design for small screens */
        @media (max-width: 768px) {
            .dog-card {
                width: 48%;
            }
        }

        @media (max-width: 480px) {
            .dog-card {
                width: 100%;
            }
        }
                /* Home Button Styling */
        button {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #4CAF50; /* Green background */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s; /* Smooth transition for hover effect */
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049; /* Slightly darker green when hovered */
        }

        a {
            text-decoration: none; /* Remove underline from the link */
        }


    </style>
</head>
<body>

    <!-- Main container -->
    <div class="container">

        <!-- Dog breeds section -->
        <div class="dog-section">
            <h1>Popular Dog Breeds</h1>

            <!-- Dog breed cards -->
            <div class="dog-cards">
                <div class="dog-card">
                    <img src="http://5b0988e595225.cdn.sohucs.com/images/20190320/40ce2859a26445d7b723a3f4101d80c1.jpeg" alt="Poodle">
                    <h3>Poodle</h3>
                    <p>Energetic, cute, smart, easy to train, with minimal odor and shedding. Requires regular grooming to avoid mats.</p>
                </div>
                <div class="dog-card">
                    <img src="http://5b0988e595225.cdn.sohucs.com/images/20190320/375774c0a5224074ab95e73273d56e5c.jpeg" alt="Pomeranian">
                    <h3>Pomeranian</h3>
                    <p>Small, cute, loves to bark, clingy, with thick fur that sheds a lot and needs regular trimming.</p>
                </div>
                <div class="dog-card">
                    <img src="http://p2.itc.cn/images01/20201017/48978797355049c982e6006f9f2d3920.jpeg" alt="Bichon Frise">
                    <h3>Bichon Frise</h3>
                    <p>Small, sweet, and lovable. It has no body odor, white fur that gets dirty easily, and tears around the eyes. Gentle and clingy personality.</p>
                </div>
                <div class="dog-card">
                    <img src="http://5b0988e595225.cdn.sohucs.com/images/20190320/1a0a73ff81524e6c8f3979376d298af6.gif" alt="Corgi">
                    <h3>Corgi</h3>
                    <p>With a cute, sexy little bottom and short legs, known as the "Ferrari chassis." Curious, easygoing, but prone to back issues and should avoid too much stair climbing.</p>
                </div>
                <div class="dog-card">
                    <img src="https://5b0988e595225.cdn.sohucs.com/images/20180506/10fa404a54114450b6588787acc1d29d.jpeg" alt="Pug">
                    <h3>Pug</h3>
                    <p>Gentle, affectionate, and friendly with everyone. Has low energy and tends to snore.</p>
                </div>
                <div class="dog-card">
                    <img src="https://5b0988e595225.cdn.sohucs.com/images/20171127/1b83a1e8521e4bbc9419864de4c6e4a7.jpeg" alt="Schnauzer">
                    <h3>Schnauzer</h3>
                    <p>Highly intelligent, trainable, lively, with great physical health and no shedding. Known for its strong vanity, jealousy, and memory.</p>
                </div>
                <div class="dog-card">
                    <img src="http://5b0988e595225.cdn.sohucs.com/images/20200405/51a3bf2aa15246b2a726c8069e00fb47.jpeg" alt="Beagle">
                    <h3>Beagle</h3>
                    <p>Active, smart, cheerful, and friendly, perfect as a family companion. Short, dense fur requires minimal grooming. Needs regular exercise.</p>
                </div>
                <div class="dog-card">
                    <img src="https://www.bing.com/th?id=OIP.ex_xNkWxhdTwlbAmCHwsuAHaE7&w=177&h=185&c=8&rs=1&qlt=90&r=0&o=6&dpr=1.5&pid=3.1&rm=2" alt="Border Collie">
                    <h3>Border Collie</h3>
                    <p>Extremely intelligent, with the mind of an 8-year-old child. Extremely observant and playful, but requires training to be obedient. Excellent at playing frisbee and needs daily exercise.</p>
                </div>
                <div class="dog-card">
                    <img src="https://th.bing.com/th?id=OSK.HEROIBfTvK74yZX4DGKM0r0oe2NFZ24YNEFFS4T_BMHTXMM&w=312&h=200&c=7&rs=1&r=0&o=6&dpr=1.5&pid=SANGAM" alt="Samoyed">
                    <h3>Samoyed</h3>
                    <p>White fur that doesn't tolerate dirt, sweet-natured, and known for its "smile" that warms the heart. Very affectionate and has an easygoing temperament.</p>
                </div>
                <div class="dog-card">
                    <img src="https://th.bing.com/th?id=OIP.7wlJ_w0I_qj8VWG2KumLPwHaFj&w=288&h=216&c=8&rs=1&qlt=90&r=0&o=6&dpr=1.5&pid=3.1&rm=2" alt="Siberian Husky">
                    <h3>Siberian Husky</h3>
                    <p>Also known as "Siberian Husky," "mischievous troublemaker," or "home demolition expert." Loves to destroy things, has a silly, cute nature, curious, playful, and friendly. Needs plenty of exercise and stimulation.</p>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <!-- Dog care tips section -->
        <div class="care-section">
            <h2>Important Dog Care Tips</h2>
            <ul>
            
                <li>Regular exercise is essential to keep your dog healthy and happy.</li>
                <li>Proper training and socialization help ensure good behavior.</li>
                <li>Always provide fresh water and a nutritious diet for your dog.</li>
                <li>Keep your dog groomed to avoid matting and skin issues.</li>
                <li>Routine vet visits are important to keep your dog up-to-date on vaccinations and health checks.</li>
                <li>Make sure your dog has a safe and comfortable place to sleep.</li>
                <li>Ensure that your dog is properly identified with a collar and tag or microchip.</li>
                <li>Be patient and consistent in training, and use positive reinforcement.</li>
            </ul>
        </div>

    </div>
        <!-- back to homepage -->
    <a href="<?php echo e(route('home')); ?>">
        <button>Home</button>
    </a>
</body>
</html>
<?php /**PATH /home/ubuntu/Pet-Home/resources/views/pets/dogs.blade.php ENDPATH**/ ?>