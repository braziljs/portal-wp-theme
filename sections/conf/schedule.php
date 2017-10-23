<!--SCHEDULE -->
	<?php $hasAgenda = get_field('habilitar_agenda', 'option'); ?>

	<?php if ($hasAgenda): ?>
		<section class="section-wrapper">
			<div class="content">
				<div class="center-elements">
					<h2 class="title title--type-2">Programação</h2>
				</div>
				<div id="js-schedule-container">
					<?php $cities = get_field('cidade', 'option'); ?>

					<?php foreach ($cities as $city): ?>

					<div class="schedule-day-container row">
						<h3 class="subtitle subtitle--type-2"><?php echo $city[nome_da_cidade]; ?></h3>

						<?php $days = $city[dia]; ?>

						<?php foreach ($days as $day): ?>

							<div class="col-6-12 schedule__list-container">
								<h3 class="schedule__header"><?php echo $day[data]; ?></h3>
								<ul class="schedule__list">

								<?php $speakers = $day[palestras]; ?>

								<?php foreach ($speakers as $speaker): ?>

									<li class="schedule__item">
										<time class="schedule__time"><?php echo $speaker[horario]; ?></time>

										<?php $hasSpeaker = $speaker[palestra]; ?>

										<?php if ($hasSpeaker): ?>

											<?php
												$speakerInfo = $speaker[palestrante];
												$speakerID = $speakerInfo -> ID;
												$speakerName = $speakerInfo -> post_title;
												$speakerIsKeynote = get_field( "keynote", $speakerID );
												$speakerTalkName = get_field( "nome_da_palestra", $speakerID );
												$speakerTalkDescription = get_field( "descrição_da_palestra", $speakerID );
												$speakerThumb = wp_get_attachment_image_src(get_post_thumbnail_id($speakerID), 'speaker-thumb')[0];
											?>
											<?php if ($speakerIsKeynote): ?>
												<span class="schedule__keynote">keynote</span>
											<?php endif; ?>
											<h4 class="schedule__title"><button class="schedule__title-button"><?php echo $speakerTalkName; ?></button></h4>
											<div class="schedule__about">
												<div class="paragraph">
													<?php echo $speakerTalkDescription; ?>
												</div>
											</div>
											<div>
												<img class="schedule__author-thumb" alt="" src="<?php echo $speakerThumb; ?>">
												<strong class="schedule__author"><?php echo $speakerName; ?></strong>
											</div>

										<?php else: ?>

											<h4 class="schedule__title"><?php echo $speaker[texto_do_horario]; ?></h4>

										<?php endif; ?>

									</li>

								<?php endforeach; ?>

								</ul>

							</div>

						<?php endforeach; ?>

					</div>

					<?php endforeach; ?>

				</div>
			</div>
		</section>
	<?php endif; ?>

<!-- END SCHEDULE -->