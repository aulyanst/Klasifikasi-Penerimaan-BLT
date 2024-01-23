<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel Import</title>
</head>
<body>
    <form action="/import-excel" method="post" enctype="multipart/form-data">
        <input type="file" name="excel_file" accept=".xls, .xlsx">
        <button type="submit">Import Excel</button>
    </form>
</body>
</html>
