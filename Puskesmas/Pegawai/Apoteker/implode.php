<!DOCTYPE html>
<html>
<body>
<script type='text/javascript'>
<?php
$php_array = array('abc','def','ghi');
$js_array = json_encode($php_array);
echo "var javascript_array = ". $js_array . ";\n";
?>
</script>

</body>
</html>