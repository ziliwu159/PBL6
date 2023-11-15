<script>
  // Hide the form initially
  document.getElementById("editalmt").style.display = "none";

  // Show the form when the button is clicked
  document.getElementById("showFormButton").addEventListener("click", function() {
    document.getElementById("editalmt")}.style.display = "block";
  );

  // Hide the form when the cancel button is clicked
  document.getElementById("noedit").addEventListener("click", function() {
    document.getElementById("editalmt")}.style.display = "none";
  );
</script>