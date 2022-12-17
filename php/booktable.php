<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
    <title>Book table</title>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <section class="booking" id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Book a table</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 book-title">
                    <input id="your-name" name="name" type="text" class="form-control" placeholder="Your Name">
                    <input id="phone-number" name="phone" type="text" class="form-control" placeholder="Phone Number">
                    <input id="email" name="email" type="text" class="form-control" placeholder="Your Email">
                    <select id="select" name="select" class="custom-select" required="required">
                        <option value="" disabled selected hidden>How many persons?</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <input id="date" name="date" class="form-control" placeholder="dd/mm/yyyy">
                    <input type="button" value="Book Now" id="button">
                </div>
                <div class="col-md-6 map" id="ggmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.920710271568!2d106.67520051458943!3d10.81737979229376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752978d9fa5f57%3A0x9e9a546a3af46cac!2zxJDhuqFpIEjhu41jIEdpYSDEkOG7i25oIC0gQ8ahIHPhu58gMg!5e0!3m2!1svi!2s!4v1666166613672!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php
    include("footer.php");
    ?>
</body>    
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="/js/scrip.js"></script>
    <script src="/js/header.js"></script>
</html>