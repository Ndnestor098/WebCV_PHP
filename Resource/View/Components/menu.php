<nav>
    <ul>
        <li><a href=" <?= routes("home") ?>">Home</a></li>
        <li><a href=" <?= routes("about") ?>">About</a></li>
        <li><a href=" <?= routes("service", ["slug" => "hola_mundo", "id" => 1]) ?>">Service</a></li>
        <li><a href=" <?= routes("contact") ?>">Contact</a></li>
    </ul>
</nav>