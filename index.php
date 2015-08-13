<? include 'assets/includes/head.php'; ?>
<body>
	<div id="page">
		<? include 'assets/includes/header.php'; ?>
		<div id="content">
			<div class="container">
				<section>
					<div class="row">
						<div class="col eight right">
							<hr>
							<h1 id="pagetitle"></h1>
							<script>
							  document.getElementById('pagetitle').innerHTML = document.title;
							</script>
							<div class="opener">
							<p>Hypersite is the base stlye built with <a href="http://sass-lang.com/" target="_blank">SASS</a> and JQuery. Included is the functionality for our fake Ajax (Fajax) page transitions and any other things we feel should be a part of any site we put out there.</p>
							<p>Most of the tweeks and color options are easily editable in the <code>_variables.scss</code> file. Don't forget to remove the <code>_hypersite.scss</code> file either!</p>
							</div>
						</div>
					</div>
				</section>
			</div>

				<div class="full-window-height">
					<div class="vertical-center">
						<div class="table">
							<div class="table-cell">
								<div class="container">
									<p class="lg">
										This area consists of 4 <code>div</code>. the first is <code>div.full-window height</code>. This will make the div the height of the window. The second is <code>div.vertical-center</code>. This wraps 2 more divs, <code>div.table</code> and <code>div.table-cell</code>. Anything in this div wil be vertically centered.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			<div class="container">

				<div id="grid">
					<section>
						<hr>
						<div class="row">
							<div class="col four">
								<h4>Floating Grid</h4>
							</div>
							<div class="col eight">
								<p class="opener">This is a grid using the <code>.row</code> class. It uses floats and is very stable. You can also do tricks like shuffle the content. Check out the <b><a href="#catExample">Cat Example</a></b>.</p>
							</div>
						</div>
					</section>
					<section>
						<ul class="row">
							<li class="col six">
								<img src="http://placehold.it/600x300"/>
								<p><code>.col.six</code></p>
							</li>
							<li class="col six">
								<img src="http://placehold.it/600x300"/>
								<p><code>.col.six</code></p>
							</li>
						</ul>
						<div class="row">
							<div class="col four">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.four</code></p>
							</div>
							<div class="col four">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.four</code></p>
							</div>
							<div class="col four">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.four</code></p>
							</div>
						</div>
						<ul class="row">
							<li class="col three">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.three</code></p>
							</li>
							<li class="col three">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.three</code></p>
							</li>
							<li class="col three">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.three</code></p>
							</li>
							<li class="col three">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.three</code></p>
							</li>
						</ul>
						<div class="row">
							<div class="col two">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.two</code></p>
							</div>
							<div class="col two">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.two</code></p>
							</div>
							<div class="col two">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.two</code></p>
							</div>
							<div class="col two">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.two</code></p>
							</div>
							<div class="col two">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.two</code></p>
							</div>
							<div class="col two">
								<img src="http://placehold.it/600x400"/>
								<p><code>.col.two</code></p>
							</div>
						</div>
					</section>
					<hr>
					<div class="row">
						<div class="col four">
							<h4>Nested Columns</h4>
							<p>Put a <code>.row</code> inside another <code>.row</code> and specify the number of columns you want. The nested columns shown below only go one level deep. If you go any deeper, you will need to figure it out on you're own.</p>
						</div>
						<div class="col eight right">
							<div class="row">
								<img src="http://placehold.it/800x400"/>
							</div>
							<div class="row">
								<div class="col four">
									<img src="http://placehold.it/800x400"/>
								</div>
								<div class="col four">
									<img src="http://placehold.it/800x400"/>
								</div>
							</div>
							<div class="row">
								<div class="col three">
									<img src="http://placehold.it/800x400"/>
								</div>
								<div class="col two">
									<img src="http://placehold.it/800x400"/>
								</div>
								<div class="col three">
									<img src="http://placehold.it/800x400"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End #grid -->

				<section id="catExample">
					<div class="row">
						<div class="col eight right">
							<h4>The Cat Example</h4>
							<p>For Shuffling Content</p>
						</div>
						<div class="col four left">
							<img src="http://placekitten.com/g/900/900"/>
						</div>
						<div class="col eight right">
							<h6>This description will tuck below the image of the cat.</h6>
							<p>This trick can be done by adding a class of <code>right</code> to the elements that you would like to be on the right. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur.</p>
						</div>
					</div>
				</section>
				<!-- End #catExample -->

				<section>
					<h4>Breaking Grid is for Badasses</h4>
					<ul class="inline-grid">
						<li class="fifth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.fifth</code> (Fifths)</p>
						</li>
						<li class="fifth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.fifth</code> (Fifths)</p>
						</li>
						<li class="fifth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.fifth</code> (Fifths)</p>
						</li>
						<li class="fifth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.fifth</code> (Fifths)</p>
						</li>
						<li class="fifth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.fifth</code> (Fifths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
						<li class="eighth">
							<img src="http://placehold.it/600x600"/>
							<p class="sm"><code>.eighth</code> (Eighths)</p>
						</li>
					</ul>
				</section>

				<section>
					<hr>
					<div class="row">
						<div class="col four">
							<h4>Inline-block Grids Are Awesome</h4>
						</div>
						<div class="col eight">
							<p>By adding a class of <code>.inline-grid</code> and <code>.three-up</code> to the container element you can make a nice grid of three. This also works with <code>.four-up</code>. While <code>vertical-align: top</code> is the default, you can also add classes <code>.middle</code> and <code>.bottom</code> to effect vertical alignement and <code>.right</code> and <code>.center</code> to effect horizontal aligment.</p>
						</div>
					</div>
					<ul class="inline-grid three-up center">
						<li><img src="http://placehold.it/600x600"/></li>
						<li><img src="http://placehold.it/600x400"/></li>
						<li><img src="http://placehold.it/600x700"/></li>
						<li><img src="http://placehold.it/600x300"/></li>
						<li><img src="http://placehold.it/600x600"/></li>
						<li><img src="http://placehold.it/600x200"/></li>
						<li><img src="http://placehold.it/600x700"/></li>
						<li><img src="http://placehold.it/600x300"/></li>
					</ul>
				</section>

				<section>
					<div class="row">
						<div class="col seven">
							<h3>Alternativley...</h3>
							<p>You may class each of the direct child <code>div</code> or <code>li</code> with the width you would like. (ie: <code>.col.eight</code>)</p>
						</div>
					</div>
					<div class="inline-grid middle">
						<div class="col twelve">
							<img src="http://placehold.it/1000x500"/>
							<code>.col.twelve</code>
						</div>
				    <div class="col nine">
				    	<img src="http://placehold.it/900x600"/>
							<code>.col.nine</code>
				    </div>
				    <div class="col three">
				    	<img src="http://placehold.it/600x600"/>
							<code>.col.three</code>
				    </div>
				    <div class="col four">
				    	<img src="http://placehold.it/600x600"/>
							<code>.col.four</code>
				    </div>
				    <div class="col eight">
				    	<img src="http://placehold.it/900x600"/>
							<code>.col.eight</code>
				    </div>
				    <div class="col three">
				    	<img src="http://placehold.it/600x600"/>
							<code>.col.three</code>
				    </div>
				    <div class="col six">
				    	<img src="http://placehold.it/600x600"/>
							<code>.col.six</code>
				    </div>
				    <div class="col two">
				    	<img src="http://placehold.it/600x600"/>
							<code>.col.two</code>
				    </div>
				    <div class="col one">
				    	<img src="http://placehold.it/600x600"/>
							<code>.col.one</code>
				    </div>
					</div>
				</section>

				<section id="typography">
					<hr>
					<div class="row">
						<div class="col four">
							<h3>Typography</h3>
						</div>
						<div class="col eight">
							<h4>Headers</h4>
							While <code>h1</code> to <code>h6</code> are styled, the style's of headers can be applied to another element. For example, adding a class of <code>h2</code> to a <code>p</code> will make the <code>p</code> act as an <code>h2</code></p>
							<div class="row">
								<div class="col four">
									<h1>Header No. 1</h1>
									<h2>Header No. 2</h2>
									<h3>Header No. 3</h3>
									<h4>Header No. 4</h4>
									<h5>Header No. 5</h5>
									<h6>Header No. 6</h6>
								</div>
								<div class="col four">
									<p class="h1">Paragraph.h1</p>
									<p class="h2">Paragraph.h2</p>
									<p class="h3">Paragraph.h3</p>
									<p class="h4">Paragraph.h4</p>
									<p class="h5">Paragraph.h5</p>
									<p class="h6">Paragraph.h6</p>
								</div>
							</div>
							<h6>Opener Paragraph <code>p.opener</code></h6>
							<p class="opener">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
							<h6>Wrap the First Letter in <code>span.dropcap</code></h6>
							<p><span class="dropcap">O</span>There are a few cool things here. Adding a class of <code>.dropcap</code> to first letter of a <code>p</code> or adding a class of <code>.dropcap</code> to a <code>p</code> creates a dropcap. <span class="light">Tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete.</span></p>
							<h6>Or the CSS3 Style...<code>p.dropcap</code></h6>
							<p id="test" class="dropcap lead-in">Torem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
							<h6>To for a fancier dropcap you have to wrap the first letter in <code>span.dropcap.box</code></h6>
							<p><span class="dropcap box">F</span>rem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete.</p>
							<h6>Large Paragraph <code>p.lg</code></h6>
							<p class="lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
							<h6>Normal Paragraph <code>p</code></h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
							<h6>Small Paragraph <code>.sm p</code> or <code>p.sm</code></h6>
							<div class="sm">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
							</div>
							
							<div class="rich-text">
								<h3>Randomly Generated Text</h3>
								<p class="opener"> This is a Dump of Randomly Generated Text with Different Types of Markup in it. Add a class of <code>.rich-text</code> to the container to insure fine typography.</p>
								<p>Lorem ipsum dolor sit amet, <b>consectetur</b> adipiscing elit. Hoc ipsum elegantius poni meliusque potuit. <code>Vestri haec verecundius, illi fortasse constantius.</code> Sedulo, inquam, faciam. Satisne ergo pudori consulat, si quis sine teste libidini pareat? Quae quidem sapientes sequuntur duce natura tamquam videntes; <a href='http://loripsum.net/' target='_blank'>Illud non continuo, ut aeque incontentae.</a> Duo Reges: constructio interrete. </p>
								<p>Quid ait Aristoteles reliquique Platonis alumni? Inde sermone vario sex illa a Dipylo stadia confecimus. Causa autem fuit huc veniendi ut quosdam hinc libros promerem. Quis, quaeso, illum negat et bonum virum et comem et humanum fuisse? Atqui pugnantibus et contrariis studiis consiliisque semper utens nihil quieti videre, nihil tranquilli potest. Sed ad bona praeterita redeamus. Quid est, quod ab ea absolvi et perfici debeat? </p>
								<ol>
									<li>Qua ex cognitione facilior facta est investigatio rerum occultissimarum.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete.</li>
									<li>Quae similitudo in genere etiam humano apparet.</li>
								</ol>
								<p>Quid enim est a Chrysippo praetermissum in Stoicis? Cur tantas regiones barbarorum pedibus obiit, tot maria transmisit? <i>Ita multa dicunt, quae vix intellegam.</i> </p>
								<blockquote cite='http://loripsum.net'>Quis est enim aut quotus quisque, cui, mora cum adpropinquet, non refugiat timido sanguen átque exalbescát metu?</blockquote>
								<p>Verum hoc idem saepe faciamus. <strong>Vitae autem degendae</strong> ratio maxime quidem illis placuit quieta. <i>Quae sequuntur igitur?</i> Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? </p>
								<h4>Lorem ipsum dolor sit</h4>
								<p>Nam ante Aristippus, et ille melius. <i>Restatis igitur vos;</i> Multoque hoc melius nos veriusque quam Stoici. Sin aliud quid voles, postea. Ego vero volo in virtute vim esse quam maximam; <code>Graece donan, Latine voluptatem vocant.</code> Immo videri fortasse. Itaque haec cum illis est dissensio, cum Peripateticis nulla sane. Beatus sibi videtur esse moriens. Solum praeterea formosum, solum liberum, solum civem, stultost; Teneo, inquit, finem illi videri nihil dolere. Hos contra singulos dici est melius. </p>
								<p>Nam ante Aristippus, et ille melius. <i>Restatis igitur vos;</i> Multoque hoc melius nos veriusque quam Stoici. Sin aliud quid voles, postea. Ego vero volo in virtute vim esse quam maximam; <code>Graece donan, Latine voluptatem vocant.</code> Immo videri fortasse. Itaque haec cum illis est dissensio, cum Peripateticis nulla sane. Beatus sibi videtur esse moriens. Solum praeterea formosum, solum liberum, solum civem, stultost; Teneo, inquit, finem illi videri nihil dolere. Hos contra singulos dici est melius. </p>
								<dl>
									<dt><dfn>Quae sequuntur igitur?</dfn></dt>
									<dd>Quid enim?</dd>
									<dt><dfn>Nulla erit controversia.</dfn></dt>
									<dd>Atque adhuc ea dixi, causa cur Zenoni non fuisset, quam ob rem a superiorum auctoritate discederet.</dd>
								</dl>
								<h5>Lorem ipsum dolor sit</h5>
								<p>Nam ante Aristippus, et ille melius. <i>Restatis igitur vos;</i> Multoque hoc melius nos veriusque quam Stoici. Sin aliud quid voles, postea. Ego vero volo in virtute vim esse quam maximam; <code>Graece donan, Latine voluptatem vocant.</code> Immo videri fortasse. Itaque haec cum illis est dissensio, cum Peripateticis nulla sane. Beatus sibi videtur esse moriens. Solum praeterea formosum, solum liberum, solum civem, stultost; Teneo, inquit, finem illi videri nihil dolere. Hos contra singulos dici est melius. </p>
								<ul>
									<li>Duo enim genera quae erant, fecit tria.</li>
									<li>Pungunt quasi aculeis interrogatiunculis angustis, quibus etiam qui assentiuntur nihil commutantur animo et idem abeunt, qui venerant.</li>
								</ul>
								<pre>
								Non modo carum sibi quemque, verum etiam vehementer carum
								esse?

								Huic mori optimum esse propter desperationem sapientiae,
								illi propter spem vivere.
								</pre>
							</div>
						</div>
					</div>
				</section>
				<!-- End #typography -->

				<section id="accordion">
					<hr>
					<div class="row">
						<div class="col four">
							<h3>Accordion</h3>
							<div>
								<p>Give the container a class of <code>accordion</code>. Within this there is <code>accordion-title</code> and <code>accordion-content</code>. The .accordion-title div is hidden until the .accordion-title is clicked. Be sure to do any spacing on a <code>div</code> within accordion content to avoide odd transitions.</p>
							</div>
						</div>
						<div class="col eight">							
							<div class="accordion">
								<ul>
									<li>
										<div class="icon plus"><span></span></div>
										<h4 class="accordion-title">Section Title</h4>
										<div class="accordion-content">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
											</div>
										</div>
									</li>
									<li>
										<h4 class="accordion-title">The Title of a Section that Gets Really, Very Long and Will Hit the Icon. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
										<div class="icon plus"><span></span></div>
										<div class="accordion-content">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
											</div>
										</div>
									</li>
									<li>
										<h4 class="accordion-title">Section Title</h4>
										<div class="icon plus"><span></span></div>
										<div class="accordion-content">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
											</div>
										</div>
									</li>
									<li>
										<h4 class="accordion-title">Section Title</h4>
										<div class="icon plus"><span></span></div>
										<div class="accordion-content">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
											</div>
										</div>
									</li>
									<li>
										<h4 class="accordion-title">Section Title</h4>
										<div class="icon plus"><span></span></div>
										<div class="accordion-content">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
											</div>
										</div>
									</li>
									<li>
										<h4 class="accordion-title">Section Title</h4>
										<div class="icon plus"><span></span></div>
										<div class="accordion-content">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est tamen ea secundum naturam multoque nos ad se expetendam magis hortatur quam superiora omnia. Sed tamen omne, quod de re bona dilucide dicitur, mihi praeclare dici videtur. Quamquam haec quidem praeposita recte et reiecta dicere licebit. At enim, qua in vita est aliquid mali, ea beata esse non potest. Quid autem habent admirationis, cum prope accesseris? Duo Reges: constructio interrete. </p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!-- End #accordion -->

				<section id="slideshow">
					<hr>
					<div class="row">
						<div class="col-4">
							<h3>Slideshow</h3>
							<p class="sm">The Hypersite slideshow uses <a href="http://jquery.malsup.com/cycle2/">Cycle 2</a></p>
						</div>
						<div class="col-8">
							<div class="slideshow">
								<div class="slides">
									<ul>
										<li><img src="http://placehold.it/1000x500"/></li>
										<li><img src="http://placehold.it/1000x500/555555/ffffff"/></li>
										<li><img src="http://placehold.it/1000x500"/></li>
										<li><img src="http://placehold.it/1000x500/555555/ffffff"/></li>
										<li><img src="http://placehold.it/1000x500"/></li>
										<li><img src="http://placehold.it/1000x500/555555/ffffff"/></li>
										<li><img src="http://placehold.it/1000x500"/></li>
										<li><img src="http://placehold.it/1000x500/555555/ffffff"/></li>
										<li><img src="http://placehold.it/1000x500"/></li>
										<li><img src="http://placehold.it/1000x500/555555/ffffff"/></li>
									</ul>
									<div class="prev">&#8592;</div>
									<div class="next">&#8594;</div>
									<div class="slidePager"></div>
								</div>
								<ul class="detailPager inline-grid four-up"></ul>
							</div>
						</div>
					</div>
				</section>
				<!-- End #slideshow -->

				<section id="forms">
					<hr>
					<div class="row">
						<div class="col four">
							<h3>Forms</h3>
						</div>
						<div class="col eight">
							<form>
								<div>
									<label>Label</label>
									<input type="text" placeholder="Text" />
								</div>
								<div class="row">
									<div class="col four">
										<label>Label</label>
										<input type="email" placeholder="Email" />
									</div>
									<div class="col four">
										<label>Label</label>
										<input type="password" placeholder="Password" />
									</div>
								</div>
								<div>
									<label>Label</label>
									<input type="search" placeholder="Search" />
								</div>
								<div>
									<label>Label</label>
									<textarea placeholder="Textarea"></textarea>
								</div>
								<div class="row">
									<div class="col four">
										<label>Label</label>
										<select>
										  <option value="op1">Option 1</option>
										  <option value="op2">Option 2</option>
										  <option value="op3">Option 3</option>
										  <option value="op4">Option 4</option>
										</select>
									</div>
									<div class="col four">
										<input type="checkbox" id="checkbox" />
										<label for="checkbox"><span></span>Checkbox</label>
										
										<input type="radio" id="radio" name="radio" />
										<label for="radio"><span></span>Radio</label>

										<input type="radio" id="radio2" name="radio" />
										<label for="radio2"><span></span>Radio 2</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
				<!-- End #forms -->

				<section id="buttons">
					<hr>
					<div class="row">
						<div class="col four">
							<h3>Buttons</h3>
						</div>
						<div class="col eight">
							<p>To ensure consistancy in the IU, buttons, links intended to be buttons, and submits should act the same.</p>
						</div>
					</div>
					<ul class="inline-grid three-up hyper">
						<li>
							<div>
								<button id="willLoad">
									Button
									<span class="message">Thank You</span>
								</button>
							</div>
							<p class="sm"><code>button</code> with an id of <code>willLoad</code> triggers a loader on click.</p>
						</li>
						<li>
							<div>
								<input type="submit" value="Submit" />
							</div>
							<p class="sm">Normal <code>sumbit</code> input.</p>
						</li>
						<li>
							<div>
								<a class="btn" href="#"><span class="icon"><? include 'assets/images/icons/facebook.php'; ?></span>a.btn</a>
							</div>
							<p class="sm"><code>a.btn.secondary</code></p>
						</li>
						<li>
							<div>
								<button class="secondary">Button</button>
							</div>
							<p class="sm"><code>button.secondary</code></p>
						</li>
						<li>
							<div>
								<input class="secondary" type="submit" value="Submit" />
							</div>
							<p class="sm"><code>input[type=submit].secondary</code></p>
						</li>
						<li>
							<div>
								<a class="btn secondary" href="#"><span class="icon"><? include 'assets/images/icons/facebook.php'; ?></span>a.btn</a>
							</div>
							<p class="sm"><code>a.btn.secondary</code></p>
						</li>
						<li>
							<div>
								<button class="medium">Button</button>
							</div>
							<p class="sm"><code>button.medium</code></p>
						</li>
						<li>
							<div>
								<input class="medium" type="submit" value="Submit" />
							</div>
							<p class="sm"><code>input[type=submit].medium</code></p>
						</li>
						<li>
							<div>
								<a class="btn medium" href="#"><span class="icon"><? include 'assets/images/icons/facebook.php'; ?></span>a.btn</a>
							</div>
							<p class="sm"><code>a.btn.medium</code></p>
						</li>
						<li>
							<div>
								<button class="secondary medium">Button</button>
							</div>
							<p class="sm"><code>button.secondary.medium</code></p>
						</li>
						<li>
							<div>
								<input class="secondary medium" type="submit" value="Submit" />
							</div>
							<p class="sm"><code>input[type=submit].secondary.medium</code></p>
						</li>
						<li>
							<div>
								<a class="btn secondary medium" href="#"><span class="icon"><? include 'assets/images/icons/facebook.php'; ?></span>a.btn</a>
							</div>
							<p class="sm"><code>a.btn.secondary.medium</code></p>
						</li>

						<li>
							<div>
								<button class="tiny">Button</button>
							</div>
							<p class="sm"><code>button.tiny</code></p>
						</li>
						<li>
							<div>
								<input class="tiny" type="submit" value="Submit" />
							</div>
							<p class="sm"><code>input[type=submit].tiny</code></p>
						</li>
						<li>
							<div>
								<a class="btn tiny" href="#"><span class="icon"><? include 'assets/images/icons/facebook.php'; ?></span>a.btn</a>
							</div>
							<p class="sm"><code>a.btn.tiny</code></p>
						</li>
						<li>
							<div>
								<button class="secondary tiny">Button</button>
							</div>
							<p class="sm"><code>button.secondary.tiny</code></p>
						</li>
						<li>
							<div>
								<input class="secondary tiny" type="submit" value="Submit" />
							</div>
							<p class="sm"><code>input[type=submit].secondary.tiny</code></p>
						</li>
						<li>
							<div>
								<a class="btn secondary tiny" href="#"><span class="icon"><? include 'assets/images/icons/facebook.php'; ?></span>a.btn</a>
							</div>
							<p class="sm"><code>a.btn.secondary.tiny</code></p>
						</li>
					</ul>
				</section>
				<!-- End #buttons -->

				<section id="details">
					<hr>
					<div class="row">
						<div class="col four">
							<h3>Details</h3>
							<p>Be sure replace the favicon and touch icon images. Always ask for and test the Google Analytics info <strong>before</strong> launch.</p>
						</div>
						<div class="col eight right">
							<ul class="row hyper">
								<div class="col four">
									<div class="favicon"><img src="./assets/images/favicon.png"></div>
									<p>Le Favicon</p>
								</div>
								<div class="col four">
									<div class="touch-icon"><img src="./assets/images/apple-touch-icon-precomposed.png"></div>
									<p>Le Homescreen Icon</p>
								</div>
							</ul>
						</div>
					</div>
				</section>
				<!-- End #details -->	
			</div>
		</div>
		<? include 'assets/includes/footer.php'; ?>
	</div>
	<div class="hyper-grid">
		<div class="container">
			<div class="row">
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
				<div class="col one"></div>
			</div>
		</div>
	</div>
</body>
<? include 'assets/includes/foot.php'; ?>