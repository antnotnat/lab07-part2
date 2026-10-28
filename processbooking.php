<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        // Lấy dữ liệu bằng isset()
        $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
        $lastname  = isset($_POST["lastname"])  ? $_POST["lastname"]  : "";
        $age       = isset($_POST["age"])       ? $_POST["age"]       : "";
        $species   = isset($_POST["species"])   ? $_POST["species"]   : "";
        $food      = isset($_POST["food"])      ? $_POST["food"]      : "";
        $partysize = isset($_POST["partysize"]) ? $_POST["partysize"] : "";

        // Kiểm tra các gói tour đã tích chọn
        $accom   = isset($_POST["accom"]) ? "One-day tour" : "";
        $fourday = isset($_POST["4day"])  ? "Four-day tour" : "";

        // In ra đúng thứ tự và định dạng như trong hình
        echo "<p>Welcome $firstname $lastname !</p>";
        echo "<p>You are now booked on the $accom and $fourday</p>";
        echo "<p>Species: $species</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Meal Preference: $food</p>";
        echo "<p>Number of travellers: $partysize</p>";
    ?>
</body>
</html>