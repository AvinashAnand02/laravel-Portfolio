@extends('avinash.head')
@extends('avinash.footer')
@section('page-title', 'Contact | Avinash Anand')


@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNo = $_POST['contact_no'];
    $message = $_POST['message'];

    // Database configuration
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = ''; // You should set your MySQL password here
    $dbName = 'contact_form_db';

    // Create a database connection
    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query using a prepared statement
    $sql = "INSERT INTO contact_form (name, email, contact_no, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssss", $name, $email, $contactNo, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
    function clearForm() {
        document.getElementById('name').value = '';
        document.getElementById('email').value = '';
        document.getElementById('contact_no').value = '';
        document.getElementById('message').value = '';
    }

    function submitForm() {
        document.getElementById('contact-form').submit();
    }

  </script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    *,
    *:before,
    *:after {
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    body {
      font-size: 12px;
    }

    body,
    button,
    input {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      letter-spacing: 1.4px;
    }

    .background {
      display: flex;
      min-height: 100vh;
    }

    .container {
      flex: 0 1 700px;
      margin: auto;
      padding: 10px;
    }

    .screen {
      position: relative;
      background: #3e3e3e;
      border-radius: 15px;
    }

    .screen:after {
      content: '';
      display: block;
      position: absolute;
      top: 0;
      left: 20px;
      right: 20px;
      bottom: 0;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
      z-index: -1;
    }

    .screen-header {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      background: #4d4d4f;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .screen-header-left {
      margin-right: auto;
    }

    .screen-header-button {
      display: inline-block;
      width: 8px;
      height: 8px;
      margin-right: 3px;
      border-radius: 8px;
      background: white;
    }

    .screen-header-button.close {
      background: #ed1c6f;
    }

    .screen-header-button.maximize {
      background: #e8e925;
    }

    .screen-header-button.minimize {
      background: #74c54f;
    }

    .screen-header-right {
      display: flex;
    }

    .screen-header-ellipsis {
      width: 3px;
      height: 3px;
      margin-left: 2px;
      border-radius: 8px;
      background: #999;
    }

    .screen-body {
      display: flex;
    }

    .screen-body-item {
      flex: 1;
      padding: 50px;
    }

    .screen-body-item.left {
      display: flex;
      flex-direction: column;
    }

    .app-title {
      display: flex;
      flex-direction: column;
      position: relative;
      color: #ea1d6f;
      font-size: 26px;
    }

    .app-title:after {
      content: '';
      display: block;
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 25px;
      height: 4px;
      background: #ea1d6f;
    }

    .app-contact {
      margin-top: auto;
      font-size: 8px;
      color: #888;
    }

    .app-form-group {
      margin-bottom: 15px;
    }

    .app-form-group.message {
      margin-top: 40px;
    }

    .app-form-group.buttons {
      margin-bottom: 0;
      text-align: right;
    }

    .app-form-control {
      width: 100%;
      padding: 10px 0;
      background: none;
      border: none;
      border-bottom: 1px solid #666;
      color: #ddd;
      font-size: 14px;
      text-transform: uppercase;
      outline: none;
      transition: border-color .2s;
    }

    .app-form-control::placeholder {
      color: #666;
    }

    .app-form-control:focus {
      border-bottom-color: #ddd;
    }

    .app-form-button {
      background: none;
      border: none;
      color: #ea1d6f;
      font-size: 14px;
      cursor: pointer;
      outline: none;
    }

    .app-form-button:hover {
      color: #b9134f;
    }

    @media screen and (max-width: 520px) {
      .screen-body {
        flex-direction: column;
      }

      .screen-body-item.left {
        margin-bottom: 30px;
      }

      .app-title {
        flex-direction: row;
      }

      .app-title span {
        margin-right: 12px;
      }

      .app-title:after {
        display: none;
      }
    }

    @media screen and (max-width: 600px) {
      .screen-body {
        padding: 40px;
      }

      .screen-body-item {
        padding: 0;
      }
    }
  </style>
</head>

<body>
  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-left">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>CONTACT</span>
              <span>US</span>
            </div>
            <div class="app-contact">CONTACT INFO : 7739465519</div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <form id="contact-form" method="post" action="{{ route('contact.submit') }}">
                @csrf
                <div class="app-form-group">
                  <input class="app-form-control" id="name" name="name" placeholder="NAME">
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" id="email" name="email" placeholder="EMAIL">
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" id="contact_no" name="contact_no" placeholder="CONTACT NO">
                </div>
                <div class="app-form-group message">
                  <input class="app-form-control" id="message" name="message" placeholder="MESSAGE">
                </div>
                <div class="app-form-group buttons">
                  <button type="reset" class="app-form-button" onclick="clearForm()">CANCEL</button>
                  <button type="submit" class="app-form-button" onclick="submitForm()">SEND</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>