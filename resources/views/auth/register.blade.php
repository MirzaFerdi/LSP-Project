<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="../assets/css/style-login.css" />

    <style>
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            color: #0d1b46;
            background-color: #292929;
            font-family: Tahoma, sans-serif;
        }

        .form-login{
            font-size: 15px
        }

        input::placeholder{
            font-size: 13px;
        }

        .login{
            background-color: #B78A69;
            color: #ffffff;
        }
        .login:hover{
            background-color: #7e5a41;
            color: #ffffff;
        }

        .login-google{
            background-color: #111216;
            color: #ffffff;
        }
        .login-google:hover{
            background-color: #4b4b4b;
            color: #ffffff;
        }

        @media screen and (max-width: 400px){
            .form-check, .btn, .signup{
                font-size: small;
            }
        }
    </style>
    <title>Sign Up</title>
  </head>
  <body>
    <div class="container-lg d-flex justify-content-center align-items-center">
      <div
        class="row w-75 align-items-center shadow-sm bg-body-tertiary rounded"
      >

      <div class="foto col-md-6 p-0 d-none d-lg-block h-100">
        <img
          src="https://images.unsplash.com/photo-1633380010618-80a758702d71?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="d-block w-100 rounded-start"
          style="object-fit: cover"
          alt="login-image"
        />
      </div>
      <form class="form-login col-lg-6 px-4" action="#" method="post">
          <h3 class="mb-3 text-center fw-bold">Sign Up</h3>

          <div class="mb-3">
            <label for="formNama" class="form-label">Nama</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="formNama"
                placeholder="Enter your Name..."
                required
            />
          </div>

          <div class="mb-3">
            <label for="formEmail" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              name="email"
              id="formEmail"
              placeholder="Enter your email..."
              required
            />
          </div>

          <div class="mb-3">
            <label for="formnohp" class="form-label">No HP</label>
            <input
                type="text"
                class="form-control"
                name="phone_number"
                id="formnohp"
                placeholder="NoHP..."
                required
            />
          </div>

          <div class="mb-5">
            <label for="formPassword" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              name="password"
              id="formPassword"
              placeholder="Enter your password..."
              required
            />
          </div>

          <div class="mb-3">
            <a href="#">
              <button type="submit" class="btn login fw- mb-1 w-100">
                Sign Up
              </button>
            </a>
            <p class="text-center">- or -</p>
            <button type="submit" class="btn login-google mb-1 w-100">
              <i class="fa-brands fa-google"></i>
              Sign Up with Google
            </button>
          </div>

          <p class="signup text-center">
            Already have an account?
            <a
              style="text-decoration: none; color: black; font-weight: bold"
              href="{{ Route('login')}}"
              >Sign In</a
            >
          </p>
      </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
