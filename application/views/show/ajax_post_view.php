<html>

<head>
    <title>CodeIgniter ajax post</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
        // Ajax post
        $(document).ready(function() {
            $(".submit").click(function(event) {
                event.preventDefault();
                var email = $("input#name").val();
                var password = $("input#pwd").val();
                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "autocomplete/user_data_submit",
                    dataType: 'json',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(res) {
                        if (res) {
                            // Show Entered Value
							 if( res.status === true )
								document.location.href = res.redirect;
							else{
								jQuery("div#result").show();
								jQuery("div#value").html(res.errors);
								//jQuery("div#value_pwd").html(res.pwd);
							}
                        }
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="main">
        <div id="content">
            <h2 id="form_head">Codelgniter Ajax Post</h2><br/>
            <hr>
            <div id="form_input">
                <?php

					// Form Open
					echo form_open();

					// Name Field
					echo form_label('User Name');
					$data_name = array(
					'name' => 'email',
					'class' => 'input_box',
					'placeholder' => 'Please Enter Name',
					'id' => 'name'
					);
					echo form_input($data_name);
					echo "<br>";
					echo "<br>";

					// Password Field
					echo form_label('Password');
					$data_name = array(
					'type' => 'password',
					'name' => 'password',
					'class' => 'input_box',
					'placeholder' => '',
					'id' => 'pwd'
					);
					echo form_input($data_name);
				?>
            </div>
            <div id="form_button">
                <?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
            </div>
            <?php
				// Form Close
				echo form_close(); ?>
                <?php

				// Display Result Using Ajax
					echo "<div id='result' style='display: none'>";
					//echo "<div id='content_result'>";
					//echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
					//echo "<div id='result_show'>";
					echo "<label class='label_output'><div id='value'> </div></label>";
					echo "<br>";
					echo "<br>";
					//echo "<label class='label_output'>Entered Password :<div id='value_pwd'> </div></label>";
					echo "<div>";
					echo "</div>";
					echo "</div>";
				?>
        </div>
    </div>
</body>

</html>