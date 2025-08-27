<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>500 Server Error Page</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">
    <style type="text/css">
        body {
          padding: 0;
          margin: 0;
        }

        #notfound {
          position: relative;
          height: 100vh;
        }

        #notfound .notfound-bg {
          position: absolute;
          width: 100%;
          height: 100%;
          background-size: cover;
        }

        #notfound .notfound-bg:after {
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          background-color: #BC3E25;
        }

        #notfound .notfound {
          position: absolute;
          left: 50%;
          top: 50%;
          -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
        }

        .notfound {
          max-width: 910px;
          width: 100%;
          line-height: 1.4;
          text-align: center;
        }

        .notfound .notfound-500 {
          position: relative;
          height: 200px;
        }

        .notfound .notfound-500 h1 {
          font-family: 'Montserrat', sans-serif;
          position: absolute;
          left: 50%;
          top: 50%;
          -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
                  transform: translate(-50%, -50%);
          font-size: 220px;
          font-weight: 900;
          margin: 0px;
          color: #fff;
          text-transform: uppercase;
          letter-spacing: 10px;
        }

        .notfound h2 {
          font-family: 'Montserrat', sans-serif;
          font-size: 22px;
          font-weight: 700;
          text-transform: uppercase;
          color: #fff;
          margin-top: 20px;
          margin-bottom: 15px;
        }

        .notfound .home-btn, .notfound .contact-btn {
          font-family: 'Montserrat', sans-serif;
          display: inline-block;
          font-weight: 700;
          text-decoration: none;
          background-color: transparent;
          border: 2px solid transparent;
          text-transform: uppercase;
          padding: 13px 25px;
          font-size: 18px;
          border-radius: 40px;
          margin: 7px;
          -webkit-transition: 0.2s all;
          transition: 0.2s all;
        }

        .notfound .home-btn:hover, .notfound .contact-btn:hover {
          opacity: 0.9;
        }

        .notfound .home-btn {
          color: rgba(255, 0, 36, 0.7);
          background: #fff;
        }

        .notfound .contact-btn {
          border: 2px solid rgba(255, 255, 255, 0.9);
          color: rgba(255, 255, 255, 0.9);
        }

        @media only screen and (max-width: 767px) {
          .notfound .notfound-500 h1 {
            font-size: 182px;
          }
        }

        @media only screen and (max-width: 480px) {
          .notfound .notfound-500 {
            height: 146px;
          }
          .notfound .notfound-500 h1 {
            font-size: 146px;
          }
          .notfound h2 {
            font-size: 16px;
          }
          .notfound .home-btn, .notfound .contact-btn {
            font-size: 14px;
          }
        }

    </style>
</head>
<body>

<div id="notfound">
    <div class="notfound-bg"></div>
    <div class="notfound">
        <div class="notfound-500">
            <h1>403</h1>
        </div>
        <h2>User does not have the right permissions.</h2>
        <a href="/admin" class="home-btn">Go Home</a>
        <a href="#" class="contact-btn">Contact us</a>
    </div>
</div>

</body>
</html>