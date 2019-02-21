<template>
<div class="timeline-part">
	<div class="timeline">
		<div class="timeline-end"></div>
	</div>
	<div class="timeline-year">
		<div class="timeline-year-text-holder"><h5>{{ education.end }}</h5></div>
	</div>
	<div class="timeline-text"><b>{{ education.title }}</b></div>
</div>
</template>
<script>
	export default {
		props: ['education']
	}
</script>