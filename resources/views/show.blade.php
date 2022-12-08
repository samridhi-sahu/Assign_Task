<!DOCTYPE html>
<html lang="en">
<head>
    <title>Download task Form</title>
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="icon.jpeg">

    <table class="table table-striped" id="taskstable">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Task</th>
        <th>Type</th>
    </thead>
    <tbody>
        @foreach ($show as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->task }}</td>
                <td>{{ $user->type }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<button onclick="downloadExcel('taskstable')">Download Excel</button>

<script>
    function downloadExcel(tableId) {
        // Download Excel sheet using vanilla javascript
        var table = document.getElementById(tableId);
        var html = table.outerHTML;
        window.open('data:application/vnd.ms-excel,' + escape(html));


    }
</script>

</body>
</html>
