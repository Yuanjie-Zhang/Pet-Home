<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience Sharing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            margin-bottom: 30px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="file"], textarea {
            margin: 10px 0;
            padding: 8px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

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
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Come Share Your Pet Care Experience!</h1>

    <!-- Image Upload Form -->
    <form action="<?php echo e(route('pets.storeImage')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>
        <button type="submit">Submit Image</button>
    </form>

    <!-- File Upload Form -->
    <form action="<?php echo e(route('pets.storeFile')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="file">Choose File:</label>
        <input type="file" name="file" id="file" required><br><br>
        <button type="submit">Submit File</button>
    </form>

    <!-- Description Upload Form -->
    <form action="<?php echo e(route('pets.storeDescription')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" placeholder="Enter a description for your pet..." required></textarea><br><br>
        <button type="submit">Submit Description</button>
    </form>
    
    <!-- Back to Forum Button -->
    <a href="<?php echo e(route('forum')); ?>">
        <button>Back to Forum</button>
    </a>

    <!-- Back to Home Button -->
    <a href="<?php echo e(route('home')); ?>">
        <button>Home</button>
    </a>
</body>
</html>
<?php /**PATH /home/ubuntu/Pet-Home/resources/views/pets/create.blade.php ENDPATH**/ ?>