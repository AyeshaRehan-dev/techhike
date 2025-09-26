<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Hunk Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- Toast Container for Success Message -->
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true"
            data-bs-delay="3000">
            <div class="toast-header">
                <strong class="me-auto">Tech Hunk</strong>
                <small>Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Form submitted successfully!
            </div>
        </div>
    </div>

    <!-- Main Form Container -->
    <div class="container mt-5 col-lg-4 mx-auto shadow p-4">
        <div class="card border-0 py-4">
            <h2 class="text-center text-dark mb-2">Tech Hunk</h2>
            <h6 class="text-center text-muted mb-4">Empowering people</h6>

            <form class="px-3" action="./signup.php" method="POST" id="registrationForm">
                <div class="mb-3">
                    <label for="student_name" class="form-label text-dark">Username</label>
                    <input type="text" placeholder="Enter your name..." name="username" id="student_name"
                        class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="father_name" class="form-label text-dark">Email</label>
                    <input type="email" placeholder="Enter your email address..." name="email" id="father_name"
                        class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="student_class" class="form-label text-dark">Password</label>
                    <input type="password" placeholder="Enter your password..." name="password" id="student_class"
                        class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 my-3">Continue</button>
            </form>

            <!-- Login Link and Policy Links -->
            <div class="text-center mt-3">
                <p class="mb-2">Already have an account? <a href="./login.html"
                        class="text-primary text-decoration-none">Log in</a></p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="./privacy-policy.html" class="text-primary text-decoration-none small">Privacy Policy</a>
                    <a href="./terms-of-service.html" class="text-primary text-decoration-none small">Terms of
                        Service</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Toast Trigger -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    // Simulate form submission and show toast
    </script>
</body>

</html>