<?php
include('shared/head.php');
?>
</head>

<body>
    <header>
        <?php include('shared/nav.php') ?>
    </header>
    <main>
        <section>
            <form action="validate.php" method="post">
                <fieldset>
                    <legend>Personal Information</legend>
                    <label for="firstName">First Name:</label>
                    <input name="firstName" id="firstName" type="text" required>
                    <label for="lastName">Last Name:</label>
                    <input name="lastName" id="lastName" type="text" required>
                    <label for="street">Street:</label>
                    <input name="street" id="street" type="text" required>
                    <label for="city">City:</label>
                    <input name="city" id="city" type="text" required>
                    <label for="prov/state">Prov/State:</label>
                    <input name="prov/state" id="prov/state" type="text" required>
                    <label for="country">Country:</label>
                    <input name="country" id="country" type="text" required>
                    <label for="postalCode">Postal/Zip Code:</label>
                    <input name="postalCode" id="postalCode" type="text" required>
                    <label for="primaryEmail">Primary Email:</label>
                    <input name="primaryEmail" id="primaryEmail" type="email" required>
                    <label for="primaryPhone">Primary Phone:</label>
                    <input name="primaryPhone" id="primaryPhone" type="text" required>
                    <label for=emergName">Emergency Contact Name:</label>
                    <input name="emergName" id="emergName" type="text">
                    <label for="emergPhone">Emergency Contact Phone:</label>
                    <input name="emergPhone" id="emergPhone" type="text">
                </fieldset>
            </form>
        </section>
    </main>
    <footer>
        <?php include('shared/footer.php') ?>
    </footer>
</body>

</html>