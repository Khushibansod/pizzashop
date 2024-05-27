<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    
    <div class="container" style="margin-top :100px;">
<h2>Bill Details</h2>
<table>
    <tr>
        <th>Order ID</th>
        <th>User ID</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>City</th>
        <th>State</th>
        <th>ZIP</th>
    </tr>
    <tr>
        <td><?php echo $latestOrder->id; ?></td>
        <td><?php echo $latestOrder->user_id; ?></td>
        <td><?php echo $latestOrder->amount; ?></td>
        <td><?php echo $latestOrder->date; ?></td>
        <td><?php echo $latestOrder->user->name; ?></td>
        <td><?php echo $latestOrder->user->lastname; ?></td>
        <td><?php echo $latestOrder->user->address; ?></td>
        <td><?php echo $latestOrder->user->email; ?></td>
        <td><?php echo $latestOrder->user->phone_number; ?></td>
        <td><?php echo $latestOrder->user->city; ?></td>
        <td><?php echo $latestOrder->user->state; ?></td>
        <td><?php echo $latestOrder->user->zip; ?></td>
    </tr>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>

</html>

