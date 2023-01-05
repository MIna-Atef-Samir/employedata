<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
      <form
        class="row g-3 employe-form"
        enctype="multipart/form-data"
        action="addemploye.php"
        method="POST"
      >
        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input
            name="name"
            type="text"
            class="form-control"
            id="name"
            placeholder="Enter Your Name"
            value="amir"
          />
        </div>
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input
            name="email"
            type="email"
            class="form-control"
            id="email"
            placeholder="Enter your Email"
          />
        </div>
        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input
            type="text"
            name="address"
            class="form-control"
            id="address"
            placeholder="Enter Your Address"
          />
        </div>
        <div class="col-12">
          <label for="phone" class="form-label">Phone</label>
          <input
            type="text"
            name="phone"
            class="form-control"
            id="phone"
            placeholder="Enter Your Phone"
          />
        </div>
        <div class="col-md-6">
          <label for="position" class="form-label">Position</label>
          <input
            type="text"
            name="position"
            class="form-control"
            id="position"
            placeholder="Enter Your Postion"
          />
        </div>
        <div class="col-md-4">
          <label for="department" class="form-label">Department</label>
          <select name="department" id="department" class="form-select">
            <option>HR</option>
            <option>IT</option>
            <option>Sales</option>
            <option>Accounting</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="salary" class="form-label">Salary</label>
          <input type="number" name="salary" class="form-control" id="salary" />
        </div>
        <div class="col-md-6">
          <label for="age" class="form-label">Age</label>
          <input type="number" name="age" class="form-control" id="age" />
        </div>
        <div class="col-md-4">
          <label for="image" class="form-label">Image</label>
          <input type="file" name="image" class="form-control" id="image" />
        </div>
        <div class="col-md-6">
          <label for="militarystatus" class="form-label">Miltatry Status</label>
          <select name="militarystatus" id="militarystatus" class="form-select">
            <option>Completed</option>
            <option>Exemption</option>
            <option>Temprory Exemption</option>
            <option>Not Complete</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="relationstatus" class="form-label">Relation Status</label>
          <select name="relationstatus" id="relationstatus" class="form-select">
            <option>Single</option>
            <option>Married</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="hiredate" class="form-label">Date Of Hire</label>
          <input
            type="date"
            name="hiredate"
            class="form-control"
            id="hiredate"
          />
        </div>
        <div class="col-md-6">
          <label for="attendencedate" class="form-label"
            >Date Of Attendence</label
          >
          <input
            type="datetime-local"
            name="attendencedate"
            class="form-control"
            id="attendencedate"
          />
        </div>
        <div class="col-md-6">
          <label for="gender" class="form-label">Gender: </label>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gender"
              id="male"
              value="male"
            />
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="gender"
              id="female"
              value="Female"
            />
            <label class="form-check-label" for="female">Female</label>
          </div>
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
