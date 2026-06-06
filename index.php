<!DOCTYPE html>
<html>
<head>
    <title>Space Innovation Summit Registration</title>
</head>
<body>

<h2>Meet & Greet Registration</h2>

<form action="submit.php" method="POST">

    <label>Full Name</label><br>
    <input type="text" name="fullname" required><br><br>

    <label>Email Address</label><br>
    <input type="email" name="email" required><br><br>

    <label>Phone Number</label><br>
    <input type="text" name="phone" required><br><br>

    <label>Ticket Type</label><br>
    <select name="ticket_type" required>
        <option value="General Admission">General Admission</option>
        <option value="VIP Experience">VIP Experience</option>
        <option value="Premium Networking Pass">Premium Networking Pass</option>
    </select><br><br>

    <button type="submit">Register</button>

</form>

</body>
</html>
