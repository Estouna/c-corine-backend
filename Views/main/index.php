<main class="main">
	<!-- 
			XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX ACCUEIL XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
		-->
	<section id="home" class="section flex f-just-center f-alig-end">
		<div class="section__div--parallaxe pos-fixed"></div>
		<div class="section__div--container column">
			<div class="section__div--item flex"></div>
			<div class="section__div--item flex"></div>
			<div class="section__div--item flex f-center">
				<p class="section__p">Peindre et dépeindre le présent</p>
			</div>
		</div>
	</section>


	<!-- 
			XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX A PROPOS XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
		-->
	<section id="a-propos" class="section flex">
		<div class="section__div--container column">
			<div class="section__div--item flex"></div>
			<div class="section__div--item pos-relative">

				<div class="container-card flex">
					<div class="card pos-relative">
						<div class="card__div--titre column f-center pos-absolute">
							<h1 class="card__h1">Corine Avanzini</h1>
							<h2 class="card__h2">PEINTURE VIBRATOIRE & POESIE MACHINALE</h2>
						</div>

						<div class="card__div--photo-text">
							<div class="card__div--photo">
								<img class="card__img" src="images/Corine portrait nb width 300px.jpg" alt="Corine Avanzini-Forneron">
							</div>
							<p class="card__p">
								J’ai toujours rêvé de faire des toiles magiques<br>
								et des mots bizarres.<br>
								Ecrire, décrire l’instant, peindre et dépeindre<br>
								le présent, voilà mon postulat.<br>
								J’aime jouer avec les mots et les couleurs pour baliser mon<br>
								univers et votre imaginaire, vous inviter à chercher sans découvrir<br>
								et nous découvrir entre les silences en décourageant le mental.<br>
								Belle bal(l)ade en galerie.
							</p>
						</div>
					</div>
				</div>

			</div>
			<div class="section__div--item flex f-center"></div>
		</div>
	</section>


	<!-- 
			XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX GALERIE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
		-->
	<section id="galery" class="section">
		<div class="galery__div--main-content">
			<div class="galery__div--slideshow-container">
				<div class="galery__div--slideshow">

					<!-- SLIDE 1 -->
					<div id="#slide1" class="slide s1 fade f-center">
						<div class="slide__div--window-gal flex f-center f-wrap">
							<div class="slide__div--square-gap flex f-center f-wrap">
								<div class="flex slide__div--square-gap">
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-1">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(2)">Les trois</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-2">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(3)">Volition</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-3">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(4)">Morphose</span>
									</div>
								</div>
								<div class="flex slide__div--square-gap">
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-4">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(5)">Néphélée</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-5">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(6)">Passage</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-6">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(7)">Gecko</span>
									</div>
								</div>
							</div>
							<div class="slide__div--square-gap flex f-center f-wrap">
								<div class="flex slide__div--square-gap">
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-7">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(8)">Evolution</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-8">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(9)">Période</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-9">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(10)">Réunion</span>
									</div>
								</div>
								<div class="flex slide__div--square-gap">
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-10">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(11)">Ensemble</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-11">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(12)">Elfe</span>
									</div>
									<div class="slide__div--square-gal flex f-center slide__div--s-gal-12">
										<span class="slide__span--square-txt-gal flex f-center" onclick="currentSlide(13)">Division</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SLIDE 2 -->
					<div class="slide s2 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-2 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
											<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
											<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
											<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
										<div class="slide__div--square flex f-center slide__div--s-lesTrois"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/LesTroisModal.jpg" target="_blank">
										<img class="slide__img--modal-verti" loading="lazy" src="images/LesTroisModal.jpg" alt="Peinture Les trois">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Les trois</span><br>
										Acrylique sur toile<br>
										50x60 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 3 -->
					<div class="slide s3 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-3 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-volition"></div>
											<div class="slide__div--square flex f-center slide__div--s-volition"></div>
											<div class="slide__div--square flex f-center slide__div--s-volition"></div>
											<div class="slide__div--square flex f-center slide__div--s-volition"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
										<div class="slide__div--square flex f-center slide__div--s-volition"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/VolitionModal.jpg" target="_blank">
										<img class="slide__img--modal-hori" loading="lazy" src="images/VolitionModal.jpg" alt="Peinture Volition">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Volition</span><br>
										Acrylique sur toile<br>
										100x64 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 4 -->
					<div class="slide s4 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-4 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
											<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
											<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
											<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
										<div class="slide__div--square flex f-center slide__div--s-morphose"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/MorphoseModal.jpg" target="_blank">
										<img class="slide__img--modal-verti" loading="lazy" src="images/MorphoseModal.jpg" alt="Peinture Morphose">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Morphose</span><br>
										Acrylique sur toile<br>
										55x63 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 5 -->
					<div class="slide s5 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-5 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
											<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
											<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
											<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
										<div class="slide__div--square flex f-center slide__div--s-nephelee"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/NéphéléeModal.jpg" target="_blank">
										<img class="slide__img--modal-spec" loading="lazy" src="images/NéphéléeModal.jpg" alt="Peinture Néphélée">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Néphélée</span><br>
										Acrylique sur toile<br>
										40x80 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 6 -->
					<div class="slide s6 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-6 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-passage"></div>
											<div class="slide__div--square flex f-center slide__div--s-passage"></div>
											<div class="slide__div--square flex f-center slide__div--s-passage"></div>
											<div class="slide__div--square flex f-center slide__div--s-passage"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
										<div class="slide__div--square flex f-center slide__div--s-passage"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/PassageModal.jpg" target="_blank">
										<img class="slide__img--modal-verti" loading="lazy" src="images/PassageModal.jpg" alt="Peinture Passage">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Passage</span><br>
										Acrylique sur toile<br>
										50x60 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 7 -->
					<div class="slide s7 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-7 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
											<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
											<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
											<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
										<div class="slide__div--square flex f-center slide__div--s-gecko"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/GeckoModal.jpg" target="_blank">
										<img class="slide__img--modal-hori" loading="lazy" src="images/GeckoModal.jpg" alt="Peinture Gecko">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Gecko</span><br>
										Acrylique sur toile<br>
										46x38 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 8 -->
					<div class="slide s8 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-8 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
											<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
											<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
											<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
										<div class="slide__div--square flex f-center slide__div--s-evolution"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/EvolutionModal.jpg" target="_blank">
										<img class="slide__img--modal-verti" loading="lazy" src="images/EvolutionModal.jpg" alt="Peinture Evolution">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Evolution</span><br>
										Acrylique sur toile<br>
										73x100 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 9 -->
					<div class="slide s9 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-9 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-periode"></div>
											<div class="slide__div--square flex f-center slide__div--s-periode"></div>
											<div class="slide__div--square flex f-center slide__div--s-periode"></div>
											<div class="slide__div--square flex f-center slide__div--s-periode"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
										<div class="slide__div--square flex f-center slide__div--s-periode"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/PeriodeModal.jpg" target="_blank">
										<img class="slide__img--modal-hori" loading="lazy" src="images/PeriodeModal.jpg" alt="Peinture Période">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Période</span><br>
										Acrylique sur toile<br>
										100x73 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 10 -->
					<div class="slide s10 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-10 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
											<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
											<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
											<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
										<div class="slide__div--square flex f-center slide__div--s-reunion"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/RéunionModal.jpg" target="_blank">
										<img class="slide__img--modal-verti" loading="lazy" src="images/RéunionModal.jpg" alt="Peinture Réunion">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Réunion</span><br>
										Acrylique sur toile<br>
										60x73 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 11 -->
					<div class="slide s11 fade f-center">
						<div class="slide__div--btnGalerie unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-11 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
											<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
											<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
											<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
										<div class="slide__div--square flex f-center slide__div--s-ensemble"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/EnsembleModal.jpg" target="_blank">
										<img class="slide__img--modal-spec" loading="lazy" src="images/EnsembleModal.jpg" alt="Peinture Ensemble">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Ensemble</span><br>
										Acrylique sur toile<br>
										40x80 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 12 -->
					<div class="slide s12 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-12 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
											<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
											<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
											<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
										<div class="slide__div--square flex f-center slide__div--s-elfe"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/ElfeModal.jpg" target="_blank">
										<img class="slide__img--modal-verti" loading="lazy" src="images/ElfeModal.jpg" alt="Peinture Elfe">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Elfe</span><br>
										Acrylique sur toile<br>
										73x100 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="slide__a--next" onclick="plusSlides(1)">&#10095;</a>
					</div>

					<!-- SLIDE 13 -->
					<div class="slide s13 fade f-center">
						<div class="slide__div--btnGalerie  unselectable">
							<span class="slide__span--btnGalerie" onclick="currentSlide(1)">Galerie</span>
						</div>
						<div class="slide__div--window-1">
							<div class="slide__div--btn-img">
								<div class="slide__div--container-square flex f-center f-wrap">
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
									</div>
									<div class="flex slide__div--square-gap">
										<div class="slide__div--square-gap gap-effect flex f-center">
											<div class="slide__div--opac slide__div--bg-13 flex f-center">
												<p class="slide__p--square-txt">
													Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
													praesentium aliquam quia, qui tenetur doloribus<br>
													cum odit fuga<br>
													explicabo ipsam corrupti eveniet rem vel laborum<br>
													exercitationem, quidem, vitae porro enim.<br>
												</p>
											</div>
											<div class="slide__div--square flex f-center slide__div--s-division"></div>
											<div class="slide__div--square flex f-center slide__div--s-division"></div>
											<div class="slide__div--square flex f-center slide__div--s-division"></div>
											<div class="slide__div--square flex f-center slide__div--s-division"></div>
										</div>
									</div>
									<div class="slide__div--square-gap flex f-center">
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
										<div class="slide__div--square flex f-center slide__div--s-division"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="slide__div--modal">
							<div class="slide__div--window-2">
								<div class="slide__div--img">
									<a href="images/DivisionModal.jpg" target="_blank">
										<img class="slide__img--modal-hori" loading="lazy" src="images/DivisionModal.jpg" alt="Peinture Elfe">
									</a>
								</div>
								<div class="slide__div--text-modal">
									<p class="slide__p--text-modal">
										<span class="slide__span--text-modal">Division</span><br>
										Acrylique sur toile<br>
										65x50 cm
									</p>
								</div>
								<button class="slide__button--close">X</button>
							</div>
						</div>
						<a class="slide__a--prev" onclick="plusSlides(-1)">&#10094;</a>
					</div>

				</div>

			</div>
		</div>

	</section>

	<!-- 
			XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX CONTACT XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX 
		-->
	<section id="contact" class="section column f-center">
		<div class="section__div--container column">

			<div class="section__div--item flex">
				<div class="avis flex f-just-end f-alig-end">
					<p class="avis__p text-center">VOUS AVEZ UN AVIS, UNE QUESTION ?</p>
				</div>
			</div>

			<div class="section__div--item pos-relative">
				<div class="block-form">
					<form class="form pos-relative" action="#contact">
						<div class="form__div--champ-wrap">
							<div class="column">
								<label class="form__label form__label--nom" for="nom">Nom :</label>
								<input class="form__input" type="text" id="nom" name="nom" required>
							</div>
							<div class="column">
								<label class="form__label" for="email">Email :</label>
								<input class="form__input" type="email" id="email" name="email" autocomplete="on" required>
							</div>
						</div>
						<div class="form__div--champ-wrap">
							<div class="column">
								<label class="form__label form__label--textarea" for="message">Message :</label>
								<textarea class="form__input" id="message" name="message" required></textarea>
							</div>
							<div class="form__div--submit text-center pos-absolute">
								<input class="form__input--submit" type="submit" value="Envoyer">
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="section__div--item flex f-center pos-relative">
				<footer class="footer pos-absolute">
					<ul class="footer__ul">
						<li><a class="footer__a" href="#">Droits d'auteur</a></li>
						<li><a class="footer__a" href="#">Mentions légales</a></li>
						<li><a class="footer__a" href="#">Politique de confidentialité</a></li>
						<li><a class="footer__a" href="#">Politique de cookies</a></li>
						<?php if (isset($_SESSION['user']['roles']) && in_array('ROLE_ADMIN', $_SESSION['user']['roles'])) : ?>
							<li><a class="footer__a" href="/admin">Corine</a></li>
						<?php else : ?>
							<li><a class="footer__a" href="/user/login">Connexion</a></li>
						<?php endif; ?>
					</ul>
				</footer>
			</div>

		</div>
	</section>