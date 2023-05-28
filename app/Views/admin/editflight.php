<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flight</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/addflight.css">

    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Style untuk select dropdown */
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Style untuk option dalam dropdown */
        select option {
            padding: 5px;
        }

        input[type="time"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }
    </style>

</head>
<body>

    <?php if (session()->has('errors')) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <h1>EDIT FLIGHT</h1>
    <form action="/flights" method="POST">
        <label for="name">Flight Name:</label>
        <input type="text" name="name" id="name" value="<?= isset($flight['name']) ? $flight['name'] : '' ?>">

        <label for="rute_from">Route From:</label>
        <input type="text" name="rute_from" id="rute_from" value="<?= isset($flight['rute_from']) ? $flight['rute_from'] : '' ?>">

        <label for="rute_to">Route To:</label>
        <input type="text" name="rute_to" id="rute_to" value="<?= isset($flight['rute_to']) ? $flight['rute_to'] : '' ?>">

        <label for="depart_at">Departure Time:</label>
        <input type="time" name="depart_at" id="depart_at" value="<?= isset($flight['depart_at']) ? $flight['depart_at'] : '' ?>">

        <label for="arrive_at">Arrival Time:</label>
        <input type="time" name="arrive_at" id="arrive_at" value="<?= isset($flight['arrive_at']) ? $flight['arrive_at'] : '' ?>">

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" value="<?= isset($flight['date']) ? $flight['date'] : '' ?>">

        <label for="seat_qty">Seat Quantity:</label>
        <input type="number" name="seat_qty" id="seat_qty" value="<?= isset($flight['seat_qty']) ? $flight['seat_qty'] : '' ?>">

        <label for="type">Type:</label>
        <select name="type" id="type" value="<?= isset($flight['type']) ? $flight['type'] : '' ?>">
            <option value="non stop">Non Stop</option>
            <option value="transit">Transit</option>
        </select>

        <label for="status">Status:</label>
        <input type="text" name="status" id="status" value="<?= isset($flight['status']) ? $flight['status'] : '' ?>">

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="<?= isset($flight['price']) ? $flight['price'] : '' ?>">

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>