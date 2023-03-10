<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <style>
    @import "https://fonts.googleapis.com/css?family=Quicksand";

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html {
      background-color: #FAFAFA;
    }

    body {
      font-family: "Quicksand", sans-serif;
      font-weight: 500;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-rendering: optimizeLegibility;
    }

    h1 {
      font-weight: 700;
      color: #384047;
      text-align: center;
      line-height: 1.5em;
      margin-bottom: 1.2em;
      margin-top: 0.2em;
    }

    a {
      font-size: 0.98em;
      color: #8a97a0;
      text-decoration: none;
    }

    a:hover {
      color: green;
    }

    .container {
      display: flex;
      -webkit-display: box;
      -moz-display: box;
      -ms-display: flexbox;
      -webkit-display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-content: center;
      padding: 6%;
      margin: 0;
    }

    form {
      background-color: #FFF;
      padding: 2em;
      padding-bottom: 3em;
      border-radius: 8px;
      max-width: 400px;
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      justify-content: center;
      box-shadow: 0 10px 40px -14px rgba(0, 0, 0, 0.25);
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
    }

    form input {
      color: #384047;
      background-color: #e8eeef;
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
      border: none;
      border-radius: 4px;
      padding: 1em;
      margin-bottom: 1.2em;
      width: 100%;
    }

    form input:focus {
      outline: none;
    }

    .button {
      font-weight: 600;
      text-align: center;
      font-size: 19px;
      color: #FFF;
      background-color: #4bc970;
      width: 100%;
      border: none;
      border-radius: 4px;
      padding: 0.8em;
      margin-top: 1em;
      margin-bottom: 1em;
      cursor: pointer;
      overflow: hidden;
      transition: all 200ms ease-in-out;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
    }

    .button:hover {
      box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.3);
      transform: translateY(-4px);
    }

    .button span {
      position: relative;
      z-index: 1;
    }

    .button .circle {
      position: absolute;
      z-index: 0;
      background-color: #35A556;
      border-radius: 50%;
      transform: scale(0);
      opacity: 5;
      height: 50px;
      width: 50px;
    }

    .button .circle.animate {
      animation: grow 0.5s linear;
    }

    @keyframes grow {
      to {
        transform: scale(2.5);
        opacity: 0;
      }
    }

    .button .signup-message {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      justify-content: space-between;
    }
  </style>
</head>

<body>

  <div class="container">
    <form action="{{ route('login.post') }}" method="post">
      @csrf

      <h1>
        Sign in
      </h1>
      <div class="form-content">
        <input id="phone-number" name="phoneNumber" placeholder="phone number" type="number" />
        <input id="password" name="password" placeholder="password" type="password" /><br />
        <input class="button" type="submit" value="Log in">
        <br />
        <div class="signup-message">
          <span>Don't Have Account ? <a href="#">Register</a></span>
        </div>
      </div>
    </form>
  </div>


  <script>
    (function () {
      var material;

      $(document).ready(function () {
        return material.init();
      });

      material = {
        init: function () {
          return this.bind_events();
        },
        bind_events: function () {
          return $(document).on("click", ".button", function (e) {
            var circle, size, x, y;
            e.preventDefault();
            circle = $("<div class='circle'></div>");
            $(this).append(circle);
            x = e.pageX - $(this).offset().left - circle.width() / 2;
            y = e.pageY - $(this).offset().top - circle.height() / 2;
            size = $(this).width();
            circle.css({
              top: y + 'px',
              left: x + 'px',
              width: size + 'px',
              height: size + 'px'
            }).addClass("animate");
            return setTimeout(function () {
              return circle.remove();
            }, 500);
          });
        }
      };

    }).call(this);
  </script>

</body>

</html>