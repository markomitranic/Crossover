<section id="newsletter">
	<div class="wrapper">
		<div class="open-day">
			<h3><?=get_field('open_day_heading', 'option')?></h3>
			<?=get_field('open_day_body', 'option')?>
		</div>
		<div class="newsletter">
			<form action="">
				<input type="text" placeholder="Ime i Prezime*">
				<input type="text" placeholder="Adresa e-pošte*">
				<input type="text" placeholder="Broj telefona*">
				<input type="text" placeholder="Dodatne informacije*">
				<button>Submit</button>
			</form>
		</div>
	</div>
</section>