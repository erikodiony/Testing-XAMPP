<html>
<?php
	mysql_connect('localhost','root',''); 
	mysql_select_db('puskesmas');
	$sqlTampil="select * from pasien";  
	$qryTampil=mysql_query($sqlTampil);  
	$dataTampil=mysql_fetch_array($qryTampil);  
?>
<head>
<link rel="icon" type="image/ico" href="../favicon.ico">
  <link rel="stylesheet" href="../Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="../Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="../Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="../Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="../Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="../Scripts/FakeLoader/fakeLoader.min.js"></script>
</head>
<body>

<select id="Ultra" onchange="run()">  <!--Call run() function-->
     <option value="0">Select</option>
     <option value="8">8</option>
     <option value="5">5</option>
     <option value="4">4</option>     
</select><br><br>

TextBox1<br>



<input type="text" id="srt" placeholder="get value on option select"><br>

TextBox2<br>
<input type="text" id="rtt"  placeholder="Write Something !" onkeyup="up()">

							<div class="form-group">
								<label class="col-xs-3 control-label">Jenis Kelamin</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" name="gender" value="Laki - Laki" /> Laki - Laki
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="gender" value="Perempuan" /> Perempuan
											</label>
										</div>
									</div>
							</div>

							
<select name="category" id="category" class="cat" onChange="changeValue(this.value)">
<option class="level-0" value="86" selected="selected">Op1</option>
<option class="level-0" value="93"> Op 2</option>
<option class="level-0" value="125"> Op 3</option>
</select>

<label for="title">
  
  </label>
  <input type="text" class="text" id="title" name="">
  <br>
  <label id="contoh">as</label>
  <br>
  <label id="contoh2">asa</label>
<script>
	var cek2 = document.getElementById("contoh");
	if(cek2.innerHTML == "asas")
		document.getElementById("contoh").innerHTML = 'Fuck Yeah!';
	if(cek2.innerHTML == "as")
		document.getElementById("contoh").innerHTML = 'Fuck Yeahas!';
	var cek2 = document.getElementById("contoh2");
	if(cek2.innerHTML == "asa")
		document.getElementById("contoh2").innerHTML = 'Fuck Yeah2!';
</script>
  
  <h4>./List Pasien</h4>
		<table class="table table-striped"  > 
			  <tr>
				<td><div align="center"><strong><span class="glyphicon glyphicon-sort"></span></strong></div></td>
				<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-bullhorn"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-tags"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-time"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
			  </tr> 
		  <?php 
			  mysql_connect('localhost','root',''); 
			  mysql_select_db('puskesmas'); 
			  $tampil="select * from pasien ORDER BY id_pasien ASC "; 
			  $qryTampil=mysql_query($tampil); 
			  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
		  ?> 
			   <tr> 
				<td><?php echo $dataTampil['id_pasien'] ; ?></td> 
				<td><?php echo $dataTampil['nm_pasien']; ?></td> 
				<td><?php echo $dataTampil['pass_pasien']; ?></td> 
				<td><?php echo $dataTampil['jam_masuk']; ?></td> 
				<td><?php echo $dataTampil['tgl_masuk']; ?></td> 
				<td><?php echo $dataTampil['jam_keluar']; ?></td> 
				<td><?php echo $dataTampil['tgl_keluar']; ?></td> 
				<td><div align="center">
				<a href="" style="text-decoration:none" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $dataTampil['id_pasien'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
				</td>  
			  </tr> 
		<?php } ?> 
		</table>
  
<br>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	
	 <?php 
			  mysql_connect('localhost','root',''); 
			  mysql_select_db('puskesmas'); 
			  $tampil="select * from pasien Where id_pasien = '' "; 
			  $qryTampil=mysql_query($tampil); 
			  $dataTampil=mysql_fetch_array($qryTampil); 
		  ?> 
	
      <div class="modal-header">
         <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" value="data-whatever="<?php echo $dataTampil['nm_pasien'] ; ?>"">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"><?php echo $dataTampil['jam_masuk']; ?></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
  
  
  <form id="bookForm" method="post" action="simpan2.php" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-1 control-label">Book</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="book[0].title" placeholder="Title" />
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="book[0].isbn" placeholder="ISBN" />
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" name="book[0].price" placeholder="Price" />
        </div>
        <div class="col-xs-1">
            <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
        </div>
    </div>

    <!-- The template for adding new field -->
    <div class="form-group hide" id="bookTemplate">
        <div class="col-xs-4 col-xs-offset-1">
            <input type="text" class="form-control" name="title" placeholder="Title" />
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="isbn" placeholder="ISBN" />
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" name="price" placeholder="Price" />
        </div>
        <div class="col-xs-1">
            <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-1">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    var titleValidators = {
            row: '.col-xs-4',   // The title is placed inside a <div class="col-xs-4"> element
            validators: {
                notEmpty: {
                    message: 'The title is required'
                }
            }
        },
        isbnValidators = {
            row: '.col-xs-4',
            validators: {
                notEmpty: {
                    message: 'The ISBN is required'
                }
            }
        },
        priceValidators = {
            row: '.col-xs-2',
            validators: {
                notEmpty: {
                    message: 'The price is required'
                },
                numeric: {
                    message: 'The price must be a numeric number'
                }
            }
        },
        bookIndex = 0;

    $('#bookForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                'book[0].title': titleValidators,
                'book[0].isbn': isbnValidators,
                'book[0].price': priceValidators
            }
        })

        // Add button click handler
        .on('click', '.addButton', function() {
            bookIndex++;
            var $template = $('#bookTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', bookIndex)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('[name="title"]').attr('name', 'book[' + bookIndex + '].title').end()
                .find('[name="isbn"]').attr('name', 'book[' + bookIndex + '].isbn').end()
                .find('[name="price"]').attr('name', 'book[' + bookIndex + '].price').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            $('#bookForm')
                .formValidation('addField', 'book[' + bookIndex + '].title', titleValidators)
                .formValidation('addField', 'book[' + bookIndex + '].isbn', isbnValidators)
                .formValidation('addField', 'book[' + bookIndex + '].price', priceValidators);
        })

        // Remove button click handler
        .on('click', '.removeButton', function() {
            var $row  = $(this).parents('.form-group'),
                index = $row.attr('data-book-index');

            // Remove fields
            $('#bookForm')
                .formValidation('removeField', $row.find('[name="book[' + index + '].title"]'))
                .formValidation('removeField', $row.find('[name="book[' + index + '].isbn"]'))
                .formValidation('removeField', $row.find('[name="book[' + index + '].price"]'));

            // Remove element containing the fields
            $row.remove();
        });
});
</script>
 
 <form method="post" action="simpan.php">
Email 1:<input name="email[]" type="text"><br>
Email 2:<input name="email[]" type="text"><br>
Email 3:<input name="email[]" type="text"><br>
  <button type="submit">test</button>
  </form>


</body>
</html>

<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

<script>
function changeValue(nilai){ document.getElementById('title').value= nilai;
}
</script>

<script>
var elements = document.getElementsByName('gender');
for (i = 0; i < elements.length; i++) {
    if (elements[i].value == "Laki - Laki") {
        elements[i].checked = true;
    }
}
</script>
<script>
function run() {
    document.getElementById("srt").value = document.getElementById("Ultra").value;
	document.getElementById("rtt").value = document.getElementById("Ultra").value;
	
	var cek = document.getElementById("Ultra");
	if(cek.value == "4")
		document.getElementById("srt").value = "asem";
	if(cek.value == "4")
		document.getElementById("rtt").value = "asem";
	
	}
	
</script>

