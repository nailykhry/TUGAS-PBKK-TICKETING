<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flight</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/addflight.css">
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
    <h1>CREATE FLIGHT</h1>
    <form action="/flights" method="POST">
        <label for="name">Flight Name:</label>
        <input type="text" name="name" id="name">

        <label for="rute_from">Route From:</label>
        <input type="text" name="rute_from" id="rute_from">

        <label for="rute_to">Route To:</label>
        <input type="text" name="rute_to" id="rute_to">

        <label for="depart_at">Departure Time:</label>
        <input type="time" name="depart_at" id="depart_at">

        <label for="arrive_at">Arrival Time:</label>
        <input type="time" name="arrive_at" id="arrive_at">

        <label for="date">Date:</label>
        <input type="date" name="date" id="date">

        <label for="seat_qty">Seat Quantity:</label>
        <input type="number" name="seat_qty" id="seat_qty">

        <label for="type">Type:</label>
        <select name="type" id="type">
            <option value="non stop">Non Stop</option>
            <option value="transit">Transit</option>
        </select>

        <label for="status">Status:</label>
        <input type="text" name="status" id="status">

        <label for="price">Price:</label>
        <input type="number" name="price" id="price">

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>