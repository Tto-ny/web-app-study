<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add plant</h1>
    <form action="/plants/create" method="post">
        Plant Name: <input type="text" name="plantName" id="plantName" required><p></p>
        Scientific Name: <input type="text" name="scientificName" id="scientificName" required><p></p>
        Garden:
    <select name="gardenId" id="gardenId" required>
        <option value="" > Select a garden </option>
        <option value="1" > QSBG </option>
        <option value="2"> SR9P </option>
        <option value="3"> NNTBG </option>
        <option value="4"> PKBG </option>
    </select><p></p>
        <button type="submit">บันทึกข้อมูล</button>
        @csrf
    </form>    

</body>
</html>