<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#submit").click(function(event){
			    event.preventDefault();
    			var checkedReports = $("input:checkbox:checked").map(function(){
      			return $(this).val();
    		}).get(); // <----
    		
            	$.post("sumbitverfication.php", { checkedReports:checkedReports }, function(data, status){
            		alert(data);
            	});
				
           });
			
		});
	</script>
</head>
<body>
<label class="switch" >
  <input type="checkbox" value='1' >
  <div class="slider round"></div>
</label>
<input type="button" id="submit" value="Verify">
</form>
</body>
</html>