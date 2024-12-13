<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Breeds - PetHome</title>
    <style>
        /* General page settings */
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

        /* Title styles */
        h1, h2 {
            color: #333;
        }

        /* First section - Cat name, image, and description */
        .cat-section {
            margin-bottom: 3rem;
        }

        /* Cat card container */
        .cat-card {
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            width: 30%;
            margin-right: 2%;
            margin-bottom: 20px;
            float: left;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 350px; /* Ensure a fixed height for consistency */
        }

        /* Hover effect */
        .cat-card:hover {
            transform: translateY(-10px);
        }

        /* Image styles */
        .cat-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Title */
        .cat-card h3 {
            margin: 1rem 0;
            font-size: 1.2rem;
            word-wrap: break-word;
        }

        /* Description text */
        .cat-card p {
            padding: 0 1rem 1rem;
            font-size: 0.9rem;
            color: #555;
            height: 100px; /* Fix the height of description area to maintain consistent layout */
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;  /* Limit the description to 4 lines */
            -webkit-box-orient: vertical;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Second section - Cat care tips */
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

        /* Responsive design */
        @media (max-width: 768px) {
            .cat-card {
                width: 45%;
                margin-right: 5%;
            }
        }

        @media (max-width: 480px) {
            .cat-card {
                width: 100%;
                margin-right: 0;
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

    <div class="container">
        <!-- First section - Cat name, image, and description -->
        <section class="cat-section clearfix">
            <h1>Popular Cat Breeds</h1>

            <div class="cat-card">
                <img src="https://p2.itc.cn/images01/20210831/a441673fa3f04007a5ed8c39170da4bc.jpeg" alt="Image 1">
                <h3>Chinese Li Hua Cat</h3>
                <p>The Chinese Li Hua Cat is a native Chinese breed with a history of thousands of years. It is strong, independent, and a skilled hunter. It is the only Chinese purebred cat recognized worldwide.</p>
            </div>

            <div class="cat-card">
                <img src="https://p7.itc.cn/images01/20210831/54db9c9523ac4715b96f823b1318ddd3.jpeg" alt="Image 2">
                <h3>LaPerm Cat</h3>
                <p>The LaPerm is a large cat breed with a long lifespan and no known genetic defects. It is known for its curly coat and friendly nature.</p>
            </div>

            <div class="cat-card">
                <img src="https://p6.itc.cn/images01/20210831/5ed7ed9367614feb871f7b2f498e9c35.jpeg" alt="Image 3">
                <h3>Welsh Cat</h3>
                <p>The Welsh Cat, also known as the long-haired Manx cat, is a breed that originated in Canada. It is distinguished by its taillessness.</p>
            </div>

            <div class="cat-card">
                <img src="https://p4.itc.cn/images01/20210831/fc21f4a3858a4189820324ff32b12892.jpeg" alt="Image 4">
                <h3>Japanese Bobtail</h3>
                <p>The Japanese Bobtail is a breed known for its short tail, which is a genetic mutation. The famous "beckoning cat" in Japanese culture is based on this breed.</p>
            </div>

            <div class="cat-card">
                <img src="https://p0.itc.cn/images01/20210831/4920051e68a14bdca7d193bb4ae354ca.jpeg" alt="Image 5">
                <h3>Carthusian Cat</h3>
                <p>The Carthusian Cat has thick, soft fur with water-repellent properties. It is a short-haired breed with slightly longer hair.</p>
            </div>

            <div class="cat-card">
                <img src="https://p3.itc.cn/images01/20210831/1439ddde5bb9407f84365f93903ccfdc.jpeg" alt="Image 6">
                <h3>Egyptian Mau</h3>
                <p>The Egyptian Mau is a cat breed known for its naturally occurring spotted coat, and it is sometimes referred to as the "small leopard." It has a distinct scarab beetle shape between its eyes.</p>
            </div>

            <div class="cat-card">
                <img src="https://p5.itc.cn/images01/20210831/7a4dc629c1e14c3fa916af36b2699906.jpeg" alt="Image 7">
                <h3>Burmilla Cat</h3>
                <p>The Burmilla is a breed originating in the UK, a cross between the Burmese and Chinchilla Persian breeds.</p>
            </div>

            <div class="cat-card">
                <img src="https://p2.itc.cn/images01/20210831/aa67b778acf6422fb758bc3212436e15.jpeg" alt="Image 8">
                <h3>Peterbald Cat</h3>
                <p>The Peterbald is a breed from Russia. It is not completely hairless but has fine, close-fitting fur that gives the appearance of baldness.</p>
            </div>

            <div class="cat-card">
                <img src="https://p1.itc.cn/images01/20210831/9a2a79b9bdd24ddd8cdfb6cb4c0b8ec3.jpeg" alt="Image 9">
                <h3>Somali Cat</h3>
                <p>The Somali Cat has a regal appearance and resembles the Abyssinian cat, but it has semi-long fur.</p>
            </div>

            <div class="cat-card">
                <img src="https://p4.itc.cn/images01/20210831/478e3c4e0ae04baea8e4cda81f324e07.jpeg" alt="Image 10">
                <h3>Sichuan Jianzhou Cat</h3>
                <p>The Sichuan Jianzhou Cat is a Chinese native breed. It was one of the four great local specialties presented to the emperor during the Ming and Qing Dynasties.</p>
            </div>
        </section>
          


        
        <!-- Second section - Cat care tips -->
        <section class="care-section">
            <h2>Important Tips for Cat Care</h2>
            <ul>
                <li>Provide fresh water and a balanced diet.</li>
                <li>Ensure your cat has a clean litter box at all times.</li>
                <li>Keep your cat indoors to prevent accidents and diseases.</li>
                <li>Give your cat plenty of mental and physical stimulation with toys and activities.</li>
                <li>Regularly groom your cat to keep their coat healthy and prevent matting.</li>
                <li>Take your cat to the vet for regular check-ups and vaccinations.</li>
                <li>Give your cat a safe, quiet place to retreat to when they need rest.</li>
                <li>Be patient and gentle, and build trust with your cat through positive interactions.</li>
            </ul>
        </section>
    </div>
        <!-- back to homepage -->
    <a href="<?php echo e(route('home')); ?>">
        <button>Home</button>
    </a>
</body>
</html>
<?php /**PATH /home/ubuntu/Pet-Home/resources/views/pets/cats.blade.php ENDPATH**/ ?>