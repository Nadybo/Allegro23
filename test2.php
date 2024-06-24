<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Date Search</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <input type="date" id="start-date">
    <input type="date" id="end-date">
    <button onclick="dateRangeSearch()">Search</button>

    <table id="orders-table">
        <tr>
            <th>Order ID</th>
            <th>Date</th>
            <th>Customer</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2023-01-15</td>
            <td>John Doe</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2023-02-20</td>
            <td>Jane Smith</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2023-03-10</td>
            <td>Emily Johnson</td>
        </tr>
        <!-- More rows here -->
    </table>

    <script>
        function dateRangeSearch() {
    var startDate = document.getElementById('start-date').value;
    var endDate = document.getElementById('end-date').value;
    var table = document.getElementById('orders-table');

    // Convert input dates to Date objects
    var start = new Date(startDate);
    var end = new Date(endDate);

    // Ensure start date is before end date
    if (start > end) {
        alert("Start date must be before end date");
        return;
    }

    for (var i = 1; i < table.rows.length; i++) {
        var row = table.rows[i];
        var dateCell = row.cells[1].innerHTML;
        var rowDate = new Date(dateCell);

        if (rowDate >= start && rowDate <= end) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    }
}
    </script>
</body>
</html>
