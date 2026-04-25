<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Event - Workshops</title>

<style>
:root {
    --purple: #472480;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f3f3f3;
    overflow-x: hidden;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    padding: 20px 40px;
    align-items: center;
    background: white;
}

.logo {
    color: var(--purple);
    margin: 0;
}

.nav-links span {
    margin-left: 20px;
    color: gray;
}

.nav-links .active {
    color: black;
    font-weight: bold;
}

/* Container */
.container {
    padding: 30px 40px;
}

/* Header */
.header-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Button */
.create-btn {
    border: 1px solid var(--purple);
    color: var(--purple);
    padding: 10px 25px;
    border-radius: 30px;
    background: transparent;
    cursor: pointer;
}

/* Table */
.admin-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 20px;
    margin-top: 20px;
}

.admin-table th {
    background: #eee9f6;
    padding: 15px;
    color: var(--purple);
    text-align: left;
}

.admin-table td {
    padding: 15px;
}

/* Row style */
.admin-table tbody tr {
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

/* Image */
.workshop-img {
    width: 80px;
    height: 60px;
    border-radius: 10px;
    object-fit: cover;
}

/* Speaker */
.speaker {
    color: var(--purple);
    font-weight: bold;
}

/* Time Style - تعديل اللون والسمك */
.time-style {
    color: var(--purple);
    font-weight: normal; /* جعل الخط رفيع مثل عنوان الورشة */
}

/* Buttons */
.actions {
    display: flex;
    gap: 10px;
}

.btn-edit {
    background: #16a34a;
    color: white;
    border: none;
    padding: 8px 20px;
    border-radius: 20px;
    cursor: pointer;
}

.btn-delete {
    background: transparent;
    color: red;
    border: 1px solid red;
    padding: 8px 20px;
    border-radius: 20px;
    cursor: pointer;
}

/* Footer */
.footer {
    background: var(--purple);
    color: white;
    text-align: left;
    padding: 15px 40px;
    width: 100%;
    box-sizing: border-box;
    margin-top: 40px;
}
</style>

</head>

<body>

<div class="navbar">
    <h2 class="logo">AI EVENT.</h2>
    <div class="nav-links">
        <span class="active">Workshops</span>
        <span>Visitors</span>
    </div>
</div>

<div class="container">

    <div class="header-section">
        <h2>All Workshops</h2>
        <button class="create-btn">Create Workshop</button>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Speaker</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI for Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI For Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI For Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI For Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td><img src="assets/images/ai2.png" class="workshop-img"></td>
                <td>AI For Designers</td>
                <td class="speaker">Sarah Ahmed</td>
                <td class="time-style">5:00 PM - 7:00 PM</td>
                <td class="actions">
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

</div>

<div class="footer">
    © 2026 AI Event Platform. All rights reserved.
</div>

</body>
</html>