<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'userHead.php'?>    
</head>
<body>
    <?php require 'userNav.php'?>
</body>
<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });
</script>
<script src="./public/lib/js/script.js"></script>
</html>