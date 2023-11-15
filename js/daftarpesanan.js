<script>
document.getElementById('selectAll').addEventListener('change', function() 
{var checkboxes = document.querySelectorAll('.options input[type="checkbox"]');
  for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].checked = this.checked;}
);
</script>
