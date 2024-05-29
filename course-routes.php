<?php
$title = "G-Bay Walkabout | Sailing | Georgian Bay";
include('shared/head.php'); ?>
<link rel="stylesheet" href="css/course-routes.css">
</head>

<body>
    <header>
        <section>
            <article>
                <h1>Georgian Bay Walkabout - Sept. 14 - 22, 2024</h1>
                <h2>300 nautical miles around Georgian Bay</h2>
            </article>
        </section>
        <section>
            <article><?php include('shared/nav.php'); ?></article>
        </section>
    </header>

    <main>
        <iframe src="https://webapp.navionics.com/maps/#boating@6&key=adcsGvyilN" frameborder="0"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d718496.7102706579!2d-80.7183392676856!3d45.295742950838566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sca!4v1716859008856!5m2!1sen!2sca" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>
    <footer>
        <?php include('shared/footer.php'); ?>
    </footer>
</body>

</html>