<html>
<script type="text/javascript" src="../../Puskesmas/Scripts/jquery.js"></script>
<button id="btn">Test</button>
<script type="text/javascript">
$(function(){
   $('#btn').change(function(){
		
                    $.ajax({
        url : 'coba2.php',
        type : 'POST',
        data : data,
        dataType : 'json',
        success : function (result) {
           alert(result['ajax']); // "Hello world!" alerted
           console.log(result['advert']) // The value of your php $row['adverts'] will be displayed
        },
        error : function () {
           alert("error");
        }
    });

});

</script>


</html>