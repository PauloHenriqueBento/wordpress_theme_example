<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="container">
			<h2 class="subtitulo"><?php the_title() ?></h2>

			<div class="menu-prato grid-8">
				<h2>Peixes</h2>
				<ul>
					<?php 
						$pratosPeixe = get_field('pratosPeixe');
						if(isset($pratosPeixe)) { 
							foreach($pratosPeixe as $prato) {
					?>
					<li>
						<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
						<div>
							<h3><?php echo $prato['nome']; ?></h3>
							<p><?php echo $prato['descricao']; ?></p>
						</div>
					</li>
					<?php } } ?>
				</ul>
			</div>

			<div class="menu-prato grid-8">
				<h2>Carnes</h2>
				<ul>
				<?php 
					$pratosCarnes = get_field('pratosCarne');
					if(isset($pratosCarnes)) { 
						foreach($pratosCarnes as $prato) {
				?>
				<li>
					<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
					<div>
						<h3><?php echo $prato['nome']; ?></h3>
						<p><?php echo $prato['descricao']; ?></p>
					</div>
				</li>
				<?php } } ?>
				</ul>
			</div>

		</section>

	<?php endwhile; else: endif; ?>

<?php get_footer(); ?>
