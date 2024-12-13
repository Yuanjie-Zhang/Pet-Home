<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHome - Forum</title>
    <style>
        /* Basic page styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        /* Header styling */
        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        /* Styling for posts */
        .post {
            background-color: #fff;
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Styling for images */
        .post img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Divider styling */
        .divider {
            border-top: 2px solid #ddd;
            margin: 20px 0;
        }

        /* Empty message styling */
        .empty-message {
            color: #aaa;
            font-style: italic;
        }

        /* Button styling */
        button {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
        }

       
        @media (max-width: 768px) {
            .post {
                padding: 15px;
            }

            button {
                width: 100%;
                padding: 12px;
            }
        }

    </style>
</head>
<body>
    <h1>Forum</h1>

    <!-- Display uploaded files and descriptions -->
    @foreach ($petHomes as $petHome)
        <div class="post">
            <!-- Display description if available -->
            @if ($petHome->description)
                <p><strong>Description:</strong> {{ $petHome->description }}</p>
            @else
                <p class="empty-message">No description available</p>
            @endif

            <!-- Display image directly if the uploaded file is an image -->
            @if ($petHome->mimeType && strpos($petHome->mimeType, 'image') !== false)
                <img src="{{ asset('storage/' . $petHome->path) }}" alt="Uploaded Image">
            @else
                <p class="empty-message">No image uploaded</p>
            @endif

            <!-- Divider between posts -->
            <div class="divider"></div>
        </div>
    @endforeach

    <!-- Return to upload page button -->
    <a href="{{ route('pets.create') }}">
        <button>Back to Upload</button>
    </a>
    
    <!-- Back to homepage button -->
    <a href="{{ route('home') }}">
        <button>Home</button>
    </a>
</body>
</html>
