<?php

include('./db/db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insert form data into database
    $sql = "INSERT INTO form_submissions (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<div class="text-center">
    <h2 class="section-heading text-uppercase">Contact Us</h2>
    <h3 class="section-subheading text-muted">Please complete the fields below so that we can respond to you.</h3>
</div>

<form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="row align-items-stretch mb-5">
        <div class="col-md-6">
            <div class="form-group">
                <!-- Name input-->
                <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
            </div>
            <div class="form-group">
                <!-- Email address input-->
                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required />
            </div>
            <div class="form-group mb-md-0">
                <!-- Phone number input-->
                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone Number *" required />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-group-textarea mb-md-0">
                <!-- Message input-->
                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
    </div>
</form>
