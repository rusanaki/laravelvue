<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" v-on:click="content = 'ContactComponent'" href="#YHTEYSTIEDOT"> YHTEYSTIEDOT</a>
			</li>
		 	<li class="nav-item">
		 		<a class="nav-link" v-on:click="content = 'EducationComponent'" href="#KOULUTUS"> KOULUTUS</a>
		 	</li>
 			<li class="nav-item">
 				<a class="nav-link" v-on:click="content = 'ExperienceComponent'" href="#TYÖKOKEMUS"> TYÖKOKEMUS</a>	
 			</li>
			<li class="nav-item">
				<a class="nav-link" v-on:click="content = 'KnowledgeComponent'" href="#OSAAMINEN"> OSAAMINEN</a>
			</li>
			<li class="nav-item">
	 			<a class="nav-link"  v-on:click="content = 'ProjectComponent'" href="#PROJEKTIT"> PROJEKTIT</a>      
	 		</li>
		</ul>
	</div>
</nav>