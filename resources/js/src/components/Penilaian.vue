<template>
	<div>
		<table id="table_id" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{item}}</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
	</div>
</template>

<script>
export default {
	prop:['item'],
  name: 'Penilaian',

  data () {
    return {

    }
  },
 mounted() {
 	$('#table_id').DataTable();	

 	console.log('openned')
 }
}
</script>

<style lang="css" scoped>
</style>