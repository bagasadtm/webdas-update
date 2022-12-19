<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        background-color: black;
        color: white;
      }
      main {
        width: 70%;
        margin: 2em auto;
      }
      .navbar {
        background-color: black;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .navbar-title {
        font-size: 36px;
        font-weight: bold;
        margin: 30px 0;
      }

      .navbar-menu {
        display: flex;
        align-items: center;
        gap: 20px;
      }

      .navbar-menu a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
      }

      .navbar-menu a:hover {
        color: red;
      }
      .product-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 16px;
      }

      .product {
        display: flex;
        flex-direction: column;
      }

      .product-image {
        width: 100%;
        height: 0;
        padding-bottom: 100%;
        background-position: center;
        background-size: cover;
      }

      .product-name {
        margin: 8px 0;
        font-size: 18px;
        font-weight: bold;
      }

      .product-price {
        color: #b1b1b1;
      }
      footer {
        background-color: #333;
        color: #fff;
        padding: 40px 0;
      }

      .social-icons li {
        display: inline-block;
        margin-right: 10px;
      }

      .social-icons li a {
        color: #fff;
        font-size: 24px;
      }

      .social-icons li a:hover {
        color: #ddd;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .row {
        display: flex;
        flex-wrap: wrap;
      }

      .col-4 {
        width: calc(100% / 3);
      }

      .col-12 {
        width: 100%;
      }

      .text-center {
        text-align: center;
      }

      .list-unstyled {
        list-style: none;
        padding: 0;
      }

      .list-unstyled li {
        margin-bottom: 10px;
      }

      footer a {
        color: white;
      }
      .product-page {
    width: 80%;
    margin: 0 auto;
    padding: 16px;
  }

  .product-page .product-section {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .product-page .product-section img {
    width: 100%;
    height: auto;
  }

  .product-page .product-section .product-name {
    font-size: 18px;
    font-weight: bold;
    margin-top: 8px;
  }

  .product-page .product-section .product-description {
    font-size: 14px;
    color: white;
    margin-top: 8px;
  }

  .product-page .product-section .product-price {
    font-size: 16px;
    color: white;
    margin-top: 8px;
  }

  .product-page .product-section .buy-button {
    display: inline-block;
    padding: 8px 16px;
    border: 1px solid white;
    border-radius: 4px;
    font-size: 14px;
    text-decoration: none;
    color: white;
    margin-top: 8px;
  }

  .product-page .product-section .buy-button:hover {
    background-color: #333;
    color: #fff;
  }
    </style>
  </head>
  <body>
    <nav>
      <div class="navbar">
        <div class="navbar-title">BStore</div>
        <div class="navbar-menu">
          <a href="./index.php">Home</a>
          <a href="./about.php">About</a>
          <a href="./contact.php">Contact</a>
        </div>
      </div>
    </nav>