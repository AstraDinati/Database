<?php 
echo '<ul>';
for($i=1;$i<=8;++$i) { ?>
<li>
<a href="/134-viewing-data-from-a-database-in-php/mysql.php/?id=<?= $i ?>">user<?= $i ?></a>
</li>
<?php } ?>
</ul>