<div style="display: flex; gap: 12px; align-items: center;">
    <button class="btn btn-primary fw-semibold" id="backBTN">Back</button>
    <?php include "dark-mode.php" ?>
</div>


<script>
    document.getElementById("backBTN").addEventListener("click", () => {
        history.back()
    })
</script>