<?php $slidey->chapter('Chapitre 1', 'chapitre1', 1); ?>

<div class="slide">
<?php echo $slidey->part('Première partie '); ?>
<h3>Présentation</h3>
<p>
    Lorem ipsum sin dolor en almet
</p>

<?php echo $slidey->highlight('files/example.php'); ?>
</div>

<div class="slide">
<?php echo $slidey->part('Deuxième partie'); ?>
<h3>Blha</h3>
<p>
    Lorem ipsum sin dolor en almet
</p>

<img src="<?php echo $slidey->image('img/monalisa.jpg')->negate()->rotate(20)->jpeg(); ?>" />
</div>

<div class="slide">
<?php echo $slidey->part('Deuxième partie'); ?>
<h3>Blha</h3>
<p>
    Lorem ipsum sin dolor en almet
</p>

<?php echo $slidey->tex('\begin{cases}
x_0 = y_0 = 0\\\\
x_{n+1} = x_n^2-y_n^2+a\\\\
y_{n+1} = 2x_ny_n+b
\end{cases}')->html(); ?>
</div>
