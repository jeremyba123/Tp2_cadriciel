@props(["nombre" => "2"])

<div class="flex justify-center">
    <?php for ($x = 0; $x <= $nombre; $x++) { ?>
        <img class="mx-2 mb-4" src="http://placekitten.com/200/300?image=<?php echo(rand(0, 15)) ?>" alt="Random Kitten Image">
    <?php } ?>
</div>
