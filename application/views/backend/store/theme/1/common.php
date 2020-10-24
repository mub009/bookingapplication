<script>
$(document).ready(function(){
   // your on click function here
   $('.linkVa').click(function(){
       $('.loaded_content').load($(this).attr('href'));
       return false;
   });
});

</script>