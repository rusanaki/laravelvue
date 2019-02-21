<template>
	<div class="container">
		<h1 class="text-primary">Koulutus</h1>
		<div class="row">
			<timeLinePartial v-for="education in educations" v-bind:key="education.id" v-bind:education="education"></timeLinePartial>
		</div>
	</div>
</template>
<script>
	import timeLinePartial from './TimeLinePartial.vue';
	var http = { 
		get: function(endpoint, data){
			var educations = null;
		    $.ajax({
			   type: 'GET',
			   url: endpoint,
			   data: data,
			   async: false,
			   success: function(response) {
			   	educations = response;
			   }
			});
			return educations;
		}
	};
	export default {
	  components: {
	    'timeLinePartial': timeLinePartial
	  },
	  data () {
		return {
	      	greeting: 'Hello',
	      	educations: http.get('/Education', [])
	  		}
		}
	};
</script>
